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
    	\App\System::create(['name' => 'leaping','lname' => 'Leaping FX','colorcode' => '#fff']);
    	echo 'system input' . PHP_EOL;
    }
}
