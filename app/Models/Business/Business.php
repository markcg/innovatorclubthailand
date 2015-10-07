<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class Business extends Model {

    protected $table = 'business';

    public function profile() {
        return $this->hasOne('App\Models\Business\BusinessProfile', 'BusinessId');
    }

    public function contacts() {
        return $this->hasMany('App\Models\Business\BusinessContact', "BusinessId");
    }

    public function member() {
        return $this->belongsTo('App\Models\Member\Member', 'MemberId');
    }

}
