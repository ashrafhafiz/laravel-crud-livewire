<?php

namespace Database\Seeders;

use App\Models\Student;
use Database\Seeders\Traits\SeederSupportTrait;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    use SeederSupportTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeyChecks();
        $this->truncate('students');

        Student::factory(10)->create();

        $this->enableForeignKeyChecks();
    }
}
