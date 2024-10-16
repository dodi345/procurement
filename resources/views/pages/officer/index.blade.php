@if (auth()->user()->hasRole('officer'))
    <x-dashboard-layout>
        <x-slot:title>{{ $title }}</x-slot:title>
        <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>
        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Today</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">This Month</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">This Year</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">
                        Sales <span>| Today</span>
                    </h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span>
                            <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sales Card -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>N</b>ame
                                        </th>
                                        <th>Ext.</th>
                                        <th>City</th>
                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                        <th>Completion</th>
                                    </tr>
                                </thead>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </x-dashboard-layout>
@endif
