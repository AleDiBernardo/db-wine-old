<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    public function wine() {
        return $this->belongsToMany(Wine::class, 'wine_winery', 'winery_id', 'wine_id');
    }
}
