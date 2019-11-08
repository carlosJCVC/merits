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
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'remember_token' => '',
            ],
            [
                'name' => 'Carlos',
                'email' => 'carlos@carlos.com',
                'password' => bcrypt('admin'),
                'remember_token' => '',
            ],
        ];

        foreach ($users as $item) {
            $user = User::create($item);

            if ($user->name == 'Administrator') {
                $user->assignRole(['Admin']);
            } elseif ($user->name == 'Carlos') {
                $user->assignRole(['Validador']);
            } else {
                $user->assignRole(['Calificador']);
            }
        }
    }
}
