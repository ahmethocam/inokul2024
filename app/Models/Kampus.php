<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;


    protected $fillable = ["adi","kurum_id"];


    public function kurum()
    {
        return $this->belongsTo(Kurum::class);
    }
    public function okullar()
    {
        return $this->hasMany(Okul::class);
    }
}
