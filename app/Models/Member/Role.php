<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'member_role';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
