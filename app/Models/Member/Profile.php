<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model {

    protected $table = 'member_profile';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member', 'MemberId');
    }
}
