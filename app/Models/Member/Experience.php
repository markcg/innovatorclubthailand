<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {

    protected $table = 'member_experience';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
