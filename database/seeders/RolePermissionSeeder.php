<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                ], $default_user_value));

            $inbound = User::create(array_merge([
                'name' => 'Staff Inbound',
                'email' => 'inbound@mail.com',
                ], $default_user_value));

            $outbound = User::create(array_merge([
                'name' => 'Staff Outbound',
                'email' => 'outbound@mail.com',
                ], $default_user_value));

            $adminRole = Role::create(['name' => 'admin']);
            $inboundRole = Role::create(['name' => 'inbound']);
            $outboundRole = Role::create(['name' => 'outbound']);

            $permissions = Permission::create(['name' => 'read']);
            $permissions = Permission::create(['name' => 'create']);
            $permissions = Permission::create(['name' => 'update']);
            $permissions = Permission::create(['name' => 'delete']);

            Permission::create(['name' => 'stock']);
            Permission::create(['name' => 'inbound']);
            Permission::create(['name' => 'outbound']);


            $adminRole->givePermissionTo(['read', 'create', 'update', 'delete','stock', 'inbound', 'outbound']);
            $inboundRole->givePermissionTo(['read', 'create', 'update', 'delete', 'inbound']);
            $outboundRole->givePermissionTo(['read', 'create', 'update', 'delete', 'outbound']);


            $admin->assignRole($adminRole);
            $inbound->assignRole($inboundRole);
            $outbound->assignRole($outboundRole);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }


    }
}
