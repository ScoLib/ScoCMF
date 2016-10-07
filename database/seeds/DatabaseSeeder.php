<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ConfigsTableSeeder::class);
        $this->call(RbacTableSeeder::class);

        factory(Sco\Models\User::class, 1000)->create()->each(function ($u) {
            $u->roles()->attach(2);
        });

        Model::reguard();
    }
}
