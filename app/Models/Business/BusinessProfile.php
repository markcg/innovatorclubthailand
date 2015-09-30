<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model {

    protected $table = 'business_profile';
    public $timestamps = false;

    public function business() {
        return $this->belongsTo('App\Models\Business\Business', 'BusinessId');
    }

}
