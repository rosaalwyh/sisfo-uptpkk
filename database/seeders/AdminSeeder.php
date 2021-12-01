<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'user_nip' => '1111',
                'user_nama' => 'Super Admin',
                'password' => bcrypt('123123'),
                'user_kontak' => '08128828829',
                'user_level' => 'superadmin'
            ],
            [
                'user_nip' => '2222',
                'user_nama' => 'Admin',
                'password' => bcrypt('123123'),
                'user_kontak' => '08128829992',
                'user_level' => 'admin'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
