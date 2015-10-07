<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class BusinessContact extends Model {

    protected $table = 'business_contact';
    public $timestamps = false;

    public function business() {
        return $this->belongsTo('App\Models\Business\Business', 'BusinessId');
    }

}
