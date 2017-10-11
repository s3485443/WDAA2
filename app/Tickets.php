<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    //
    protected $fillable = [ 'email', 'software_issue', 'progress'];

    public function user_email() {
        return $this->belongsTo('App\CustInfo');
    }
}
