<?php

namespace Database\Seeders;

use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class WinesTableSeeder extends Seeder
{
    public function run(): void
    {
        $variabile = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds')->json();

        foreach ($variabile as $wineData) {
            // Trova o crea la winery
            if(!empty($wineData['winery'])){
                $newWinery = Winery::firstOrCreate(
                    ['winery' => $wineData['winery']],
                    ['location' => $wineData['location']]
                );

                // Crea il Wine e salvalo
                $newWine = new Wine([
                    'wine' => $wineData['wine'],
                    'review' => $wineData['rating']['reviews'],
                    'average' => (int)$wineData['rating']['average'],
                    'genre' => 'red',
                    'image' => $wineData['image'],
                ]);
                $newWine->save();

                // Correzione: Usa attach sul lato 'molti' della relazione
                $newWine->winery()->attach($newWinery->id);
            }
        }
    }
}
