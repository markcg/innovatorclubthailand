<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Social extends Model {

    protected $table = 'member_social';
    public $timestamps = false;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member','MemberId');
    }

}
