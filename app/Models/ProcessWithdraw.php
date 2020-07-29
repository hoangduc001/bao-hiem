<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessWithdraw extends Model
{
    protected $table = 'process_withdraws';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = true;
}
