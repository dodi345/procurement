<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function superadmin()
    {
        $data = [
            'title' => 'Dashboard | Superadmin',
            'pageTitle' => 'Dashboard',
        ];
        return view('pages.superadmin.index', $data);
    }

    public function officer()
    {
        $data = [
            'title' => 'Dashboard | Officer',
            'pageTitle' => 'Dashboard',
        ];
        return view('pages.officer.index', $data);
    }

    public function supplier()
    {
        $data = [
            'title' => 'Dashboard | Supplier',
            'pageTitle' => 'Dashboard',
        ];
        return view('pages.supplier.index', $data);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
