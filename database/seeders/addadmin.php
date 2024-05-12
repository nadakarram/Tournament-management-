<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addadmin extends Seeder
{
    
    public function run(): void
    {
    DB::table("admins")->insert([
        "admin_name"=>"superadmin",
        "admin_phone"=>01234556575,
        "admin_email"=>"superadmin@gmail.com",
        "admin_password"=>1234,
        "postaion"=>1,
        "created_at"=>now()
    ]);
    }
}
