<?php
namespace Database\Seeds;
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
        DB::table('users')->insert([
            'name' => 'Harish',
            'email' => 'harish@gmail.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('12345')
        ]);  
    }
}
