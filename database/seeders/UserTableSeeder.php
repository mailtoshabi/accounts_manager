<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Shabeer CM',
        //     'location' => 'Kondotty',
        //     'mobile' => '9809373738',
        //     'dob' => '1984-11-03',
        //     'email' => 'mailtoshabi@gmail.com', 
        //  ]);
        User::factory()->count(100)->create();
    }
}
