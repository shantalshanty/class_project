<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Shantal',
            'email'=>'charletshantal@gmail.com',
            'password'=>Hash::make('santa@2023'),

        ]);
        User::create([
            'name'=>'Charlet',
            'email'=>'sshanty81@gmail.com',
            'password'=>Hash::make('papa@2023'),

        ]);
    }
}
