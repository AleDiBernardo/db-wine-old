<?php

namespace Database\Seeders;
use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reds_wines = Http::get('https://api.sampleapis.com/wines/reds')->json();
        // $data = $reds_wines->json();

        foreach ($reds_wines as $wine) {
            $newWine = new Wine();
            $newWine->winery = $wine['winery'];
            $newWine->wine= $wine['wine'];
            $newWine->winery = $wine['winery'];
            $newWine->average = $wine['rating']['average'];
            $newWine->review = (int)$wine['rating']['reviews'];
            $newWine->location = $wine['location'];
            $newWine->image = $wine['image'];
            $newWine->type = "red";
            $newWine->save();
        }
        // dd($data);
    }
}
