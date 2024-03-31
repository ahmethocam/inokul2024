<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Okul extends Model
{
    use HasFactory;

    protected $fillable = ["adi","kampus_id","kurum_id"];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class);
    }

}
