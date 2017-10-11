<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    //
    protected $fillable = ['op_system', 'details', 'comments'];
}
