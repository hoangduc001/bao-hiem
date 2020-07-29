<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $table = 'withdraws';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = true;
}
