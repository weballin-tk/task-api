<?php

namespace Database\Seeders;

//use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Str;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach(range(1, 120) as $index){
            
            DB::table('tasks')->insert([
                'subject'   => $faker->sentence(10),
                'task_date' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
                'user_id'   => User::all()->random()->id
            ]);
        }
    }
}



