<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Formmodel;
use App\Models\formdata;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // multiple data 
        $users = collect([

            [
                'username' => 'Rohit',
                'email' => 'rohit@gmail.com',
                'message' => 'first message'
            ],
            [
                'username' => 'manav',
                'email' => 'manav@gmail.com',
                'message' => 'second message'
            ],
            [
                'username' => 'mayak',
                'email' => 'mayank@gmail.com',
                'message' => 'third message'
            ]
        ]
    );
    $users->each(function($user){
        formdata::insert($user);
    });

// single data

        // formdata::create([
        //     'username' => 'mohit',
        //     'email' => 'mohitsharma755k@gmail.com',
        //     'message' => 'first message'
        // ]);
    }
}
