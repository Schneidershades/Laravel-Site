<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
    public static function incomplete() {
        return static::where('completed', 0)->get();
    }
    */
    public static function completed() {
        return static::where('completed', 1)->get();
    }

    public static function getStockTasks() {
        return static::where('name', 'stock')->get();
    }

    //Scope task - prefixed with scope  
    public function scopeIncomplete($query) {
        return $query->where('completed', 0);
    }
}
