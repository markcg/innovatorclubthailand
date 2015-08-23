<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $table = 'member_contact';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
