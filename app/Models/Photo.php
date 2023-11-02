<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::enforceMorphMap([
    'employee'=>'App\Models\Employee',
    'client'=>'App\Models\Client'
]);

class Photo extends Model
{
    use HasFactory;

    public function photoable()
    {
        return $this->morphTo();
    }
}
