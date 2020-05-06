<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonesModel extends Model
{
    protected $table = 'zones';
    protected $fillable = ['district', 'zone', 'state'];
}
