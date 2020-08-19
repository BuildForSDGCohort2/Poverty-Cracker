<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    protected $fillable = ['telephone','license_number','license_date','address','owner_name'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
