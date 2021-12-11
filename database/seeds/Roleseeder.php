<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=['admin','customer'];
        foreach ($roles as $role){
            Role::create(['name'=>$role]);
        }
    }
}
