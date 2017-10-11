<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustInfo extends Model
{
    //
    protected $fillable = [ 'email', 'fname', 'lname'];

    public function tickets(){
        return $this->hasMany('App\Tickets');
    }
}
