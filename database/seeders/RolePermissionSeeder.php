<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleSuperAdmin = Role::create(['name' => 'super-admin']);
        $roleOfficer = Role::create(['name' => 'officer']);
        $roleVendor = Role::create(['name' => 'vendor']);

        Permission::create(['name' => 'kelola-vendor']);
        Permission::create(['name' => 'kelola-officer']);
        Permission::create(['name' => 'kelola-permintaan']);
        Permission::create(['name' => 'kelola-kriteria']);
        Permission::create(['name' => 'kelola-konfirmasi']);
        Permission::create(['name' => 'kelola-pembayaran']);

        $roleSuperAdmin = Role::findByName('super-admin');
        $roleSuperAdmin->givePermissionTo(Permission::all());

        $roleOfficer = Role::findByName('officer');
        $roleOfficer->givePermissionTo(['kelola-permintaan', 'kelola-kriteria']);

        $roleVendor = Role::findByName('vendor');
        $roleVendor->givePermissionTo(['kelola-konfirmasi', 'kelola-pembayaran']);
    }
}
