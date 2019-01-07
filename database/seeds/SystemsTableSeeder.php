<?php

use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\System::create(['name' => 'zeus','lname' => 'Zeus','colorcode' => '#ffff00']);
    	\App\System::create(['name' => 'poseidon','lname' => 'Poseidon','colorcode' => '#4286f4']);
    	\App\System::create(['name' => 'athena','lname' => 'Athena','colorcode' => '#6bea7a']);
    	\App\System::create(['name' => 'apollon','lname' => 'Apollon','colorcode' => '#91448a']);
    	\App\System::create(['name' => 'ares','lname' => 'Ares','colorcode' => '#914444']);
    	\App\System::create(['name' => 'hermes','lname' => 'Hermes','colorcode' => '#ff723a']);
    	echo 'system input' . PHP_EOL;
    }
}
