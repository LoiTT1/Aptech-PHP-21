<?php
use App\user;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            DB::table('Users')->insert([
                'name' => $faker->name($gender = null),
                'email' => $faker->safeemail,
                'password' => bcrypt ('secret'),
            ]);
        }
            
            
    }
  }


