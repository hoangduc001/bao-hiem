<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $table = 'desposits';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = true;
}
