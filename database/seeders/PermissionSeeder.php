<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            'id' => 1,
            'name' => 'add-file',
            'desc' => 'add files'
        ]);

        DB::table('permissions')->insert([
            'id' => 2,
            'name' => 'edit-file',
            'desc' => 'edit files'
        ]);

        DB::table('permissions')->insert([
            'id' => 3,
            'name' => 'delete-file',
            'desc' => 'delete files'
        ]);

        DB::table('permissions')->insert([
            'id' => 4,
            'name' => 'add-user',
            'desc' => 'add users'
        ]);

        DB::table('permissions')->insert([
            'id' => 5,
            'name' => 'edit-user',
            'desc' => 'edit users information  '
        ]);

        DB::table('permissions')->insert([
            'id' => 6,
            'name' => 'delete-user',
            'desc' => 'delete user'
        ]);
    }
}
