<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function searchFilter($query){
     if(request('search')){
        $query->where('titre','like','%'.request('search').'%');
     }
    }
}