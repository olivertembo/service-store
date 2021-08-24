<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\HelperController;
use Illuminate\Support\Facades\DB;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i < 3; $i++) {
            DB::table('advertisements')->insert([
                'uuid' => HelperController::generateUniquePublicId('advertisements', 'uuid'),
                'title' => "Title $i",
                'description' => "Description $i",
                'photo_1'  => "https://picsum.photos/seed/picsum/200",
                'photo_2'=> "https://picsum.photos/seed/picsum/200",
                'photo_3'=> "https://picsum.photos/seed/picsum/200",
                'user_id' => $i,
            ]);
        }
    }
}
