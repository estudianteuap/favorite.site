<?php

use Illuminate\Database\Seeder;
use App\album;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album=new album(['resenia'=>'Primer Album',
        'valorizacion'=>9,'user_id'=>1]);
        $album->save();
    }
}
