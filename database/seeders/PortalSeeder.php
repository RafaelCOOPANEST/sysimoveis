<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PortalSeeder extends Seeder
{
    public function run()
    {
        DB::table('portals')->insert([
            ['name'=>'OLX','base_url'=>'https://www.olx.com.br','type'=>'scraper','service_class'=>'App\\Services\\PortalAPI\\OLXScraperService','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
            ['name'=>'VivaReal','base_url'=>'https://www.vivareal.com.br','type'=>'api','service_class'=>'App\\Services\\PortalAPI\\VivaRealService','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
        ]);
    }
}
