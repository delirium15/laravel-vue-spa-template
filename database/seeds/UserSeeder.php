<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Евгений Матвейчук',
            'email' => 'delirium15@yandex.ru',
            'password' => '$2y$10$vgpOBgIg5vgsIP6ghgI7se6KDQCCuE3AxDHtNPIYJUJ1/62Vn5zUm'
        ]);
    }
}
