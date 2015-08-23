<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Joining extends Model {

    protected $table = 'member_joining';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
