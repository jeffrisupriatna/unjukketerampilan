<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class UserMakmurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
        [
            'name' => 'mas admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' =>bcrypt('12345')
        ],
        [
            'name' => 'mas editor',
            'email' => 'editor@gmail.com',
            'role' => 'editor',
            'password' =>bcrypt('12345')
        ],
    ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
