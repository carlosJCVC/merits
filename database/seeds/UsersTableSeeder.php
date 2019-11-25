<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Permission;

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
                'name' => 'Administrator',
                'lastname' => 'Admin',
                'phone' => '1254646',
                'gender' => 'M',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'remember_token' => '',
            ],
            [
                'name' => 'calificador',
                'lastname' => 'calificador',
                'phone' => '54564646',
                'gender' => 'M',
                'email' => 'calificador@gmail.com',
                'password' => bcrypt('calificador'),
                'remember_token' => '',
            ],
            [
                'name' => 'postulante',
                'lastname' => 'postulante',
                'phone' => '54564646',
                'gender' => 'M',
                'email' => 'postulante@gmail.com',
                'password' => bcrypt('postulante'),
                'remember_token' => '',
            ],
        ];

        foreach ($users as $item) {
            $user = User::create($item);

            if ($user->name == 'Administrator') {
                $user->assignRole(['Admin']);
            } elseif ($user->name == 'calificador') {
                $user->assignRole(['Calificador']);
            } else {
                $user->assignRole(['Postulante']);
            }
        }
    }
}
