<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        DB::table('users')->delete();

        DB::table('users')->insert([
    		'name' => $faker->name,
            'email' => 'triastonotaufiq35@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
       	]);
        
        User::factory()->count(10)->create();
    }
}
