<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $table = 'member_skill';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');;
    }

}
