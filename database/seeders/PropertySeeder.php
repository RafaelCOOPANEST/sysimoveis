<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertySeeder extends Seeder
{
    public function run()
    {
        DB::table('properties')->insert([
            [
                'portal_id'=>1,
                'agent_id'=>1,
                'title'=>'Apartamento 2 quartos - Centro',
                'description'=>'Ótimo apartamento 2 quartos no centro, perto de tudo.',
                'price'=>350000,
                'city'=>'São Paulo',
                'state'=>'SP',
                'type'=>'Apartamento',
                'rooms'=>2,
                'area'=>78,
                'images'=>json_encode(['images/apt1-1.jpg','images/apt1-2.jpg']),
                'url_original'=>'https://www.olx.com.br/imovel/1',
                'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
            ],
            [
                'portal_id'=>2,
                'agent_id'=>2,
                'title'=>'Casa 3 quartos com quintal',
                'description'=>'Casa espaçosa, quintal grande e garagem para 2 carros.',
                'price'=>520000,
                'city'=>'Campinas',
                'state'=>'SP',
                'type'=>'Casa',
                'rooms'=>3,
                'area'=>150,
                'images'=>json_encode(['images/casa1-1.jpg']),
                'url_original'=>'https://www.vivareal.com.br/imovel/2',
                'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
