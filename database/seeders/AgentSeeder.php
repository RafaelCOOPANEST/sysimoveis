<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AgentSeeder extends Seeder
{
    public function run()
    {
        DB::table('agents')->insert([
            ['name'=>'João Silva','email'=>'joao@example.com','phone'=>'(11)99999-0001','portal_id'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'Maria Souza','email'=>'maria@example.com','phone'=>'(11)99999-0002','portal_id'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ]);
    }
}
