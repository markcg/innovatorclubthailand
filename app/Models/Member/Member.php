<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {

    protected $table = 'member';
    protected $hidden = ['Password'];

    public function profile() {
        return $this->hasOne('App\Models\Member\Profile', 'MemberId');
    }

    public function contact() {
        return $this->hasOne('App\Models\Member\Contact', 'MemberId');
    }

//    public function experience() {
//        return $this->hasOne('App\Models\Member\Experience', 'MemberId');
//    }
//
//    public function joining() {
//        return $this->hasOne('App\Models\Member\Joining', 'MemberId');
//    }
//
//    public function need() {
//        return $this->hasOne('App\Models\Member\Need', 'MemberId');
//    }
//
//    public function role() {
//        return $this->hasOne('App\Models\Member\Role', 'MemberId');
//    }
//
//    public function skill() {
//        return $this->hasOne('App\Models\Member\Skill', 'MemberId');
//    }

    public function social() {
        return $this->hasOne('App\Models\Member\Social', 'MemberId');
    }

    public function businesses() {
        return $this->hasMany('App\Models\Business\Business', "MemberId");
    }

}
