<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(postSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleuserSeeder::class);
        $this->call(ImageSeeder::class);

    }
}
