<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Need extends Model {

    protected $table = 'member_need';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
