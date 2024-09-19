<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    public $location_regions = ['lorem', 'ipsum', 'dolor', 'sans', 'blood', 'anthem'];

    public function run(): void
    {
        Announcement::factory()->count(50)->create()->each(
            function (Announcement $announcement) {
                $limit_pivot = rand(1, 3);
                while ($limit_pivot >= 1) {
                    DB::table('announcement_location')->insert([
                        'announcement_id' => $announcement->id,
                        'location_id' => rand(1, 9),
                        'region' => $this->location_regions[rand(0, 5)]
                    ]);
                    $limit_pivot -= 1;
                }
            }
        );
    }
}
