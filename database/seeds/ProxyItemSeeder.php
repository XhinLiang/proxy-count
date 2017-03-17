<?php

use Illuminate\Database\Seeder;

class ProxyItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('proxy_items')->delete();

        for ($i = 0; $i < 10; ++$i) {
            \App\ProxyItem::create([
                'name' => 'Title '.$i,
                'target_url' => 'https://home.xhinliang.com'
            ]);
        }
    }
}
