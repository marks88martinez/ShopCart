<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'tipoUser' => 'admin',
            'password' => bcrypt('$ecret#'),
        ]);
       
        $nombres = [
            'Banner Principal 1',
            'Banner de Session 1.1',
            'Banner de Session 1.2',
            'Banner de Session 1.3',
            'Banner de Session 2.1',
            'Banner de Session 2.2',
            'Banner de Productos 1.1',
            'Banner de Productos 2.2',
        ];
        
        foreach ($nombres as $nombre) {
            DB::table('categoria_banners')->insert([
                'name' => $nombre,
            ]);
        }
    }
}
