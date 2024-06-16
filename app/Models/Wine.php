<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function winery() {
        return $this->belongsToMany(Winery::class, 'wine_winery', 'wine_id', 'winery_id');
    }
}
