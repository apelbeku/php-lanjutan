<?php

use Illuminate\Database\Seeder;
use App\Model\Student;
use Faker\Factory;
use App\Model\Guardian;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $faker = Factory::create('id_ID');
        $this->command->getOutput()->progressStart(500);

        for ($i=0; $i < 500; $i++) {
        	$is_male = rand(0,1);
        	$guardians_count = Guardian::count();

        	Student::create([
        		'guardian_id' => ($i % $guardians_count) + 1,
        		'name' => $faker->firstName($is_male ? 'male' : 'female'). ''. $faker->lastName,
        		'nis' => $faker->nik,
        		'gender' => $is_male ? 'l' : 'p',
        		'birth_date' => $faker->date('Y-m-d', '2013-01-01'),
        		'address' => $faker->address,
        		'class' => $faker->randomElement(['10', '11','12']),
        		'majors' => $faker->randomElement(['IPA', 'IPS', 'BAHASA', 'AGAMA']),
        		'height' => rand(100, 200),
        		'weight' => rand(30, 70),
        	]);
        	$this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
