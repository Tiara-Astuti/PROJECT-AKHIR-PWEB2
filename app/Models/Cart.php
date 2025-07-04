<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'menu_id', 'qty'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}