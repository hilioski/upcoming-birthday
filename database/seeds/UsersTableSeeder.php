<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'John Doe',
                'birth_date' => '1994-01-21'
            ],
            [
                'name' => 'Theresa A. Carstensen',
                'birth_date' => '1986-07-29'
            ],
            [
                'name' => 'Ashley I. Anderson',
                'birth_date' => '1988-12-01'
            ],
            [
                'name' => 'Katherine J. Jacobs',
                'birth_date' => '1995-12-12'
            ],
            [
                'name' => 'Sherie T. Wilson',
                'birth_date' => '1991-01-15'
            ]
        ];

        foreach ($users as $user) {
            if(! User::where($user)->count()){
                User::create($user);
            }
        }
    }
}
