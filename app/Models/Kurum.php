<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurum extends Model
{
    use HasFactory;

    protected $fillable = ["adi", "kamu"];


    public function kampusler()
    {
        return $this->hasMany(Kampus::class);
    }

    public function okullar()
    {
        return $this->hasMany(Okul::class);
    }
}
