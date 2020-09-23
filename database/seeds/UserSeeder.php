<?php

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $facker)
    {
        User::insert($this->staticUsers($facker));
    }

    /**
     * Generate Static User
     *
     * @param $faker
     * @return array
     */
    public function staticUsers($faker): array
    {
        // User common attributes
        $commonAttributes = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'created_at' => now(),
            'updated_at' => now(),
        ];


        // array merge and return user set
        return [
            array_merge($commonAttributes, [
                'name' => 'Super Admin',
                'email' => 'admin@example.com',
                'remember_token' => Str::random(10),
            ]),
            array_merge($commonAttributes, [
                'name' => 'Jon',
                'email' => 'jon@example.com',
                'remember_token' => Str::random(10),
            ]),
            array_merge($commonAttributes, [
                'name' => 'Joly',
                'email' => 'joly@example.com',
                'remember_token' => Str::random(10),
            ]),
        ];
    }
}
