<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\roleuser;
use Illuminate\Database\Seeder;

class RoleuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        roleuser::factory()->count(100)->create();
    }
}
