<h1>{{ $slot }}</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('superadmin.index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">{{ $slot }}</li>
    </ol>
</nav>
