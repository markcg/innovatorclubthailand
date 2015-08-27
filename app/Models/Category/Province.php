<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Province extends Model {

    protected $table = 'province';
    protected $primaryKey = 'PROVINCE_ID';
    public $timestamps = false;

}
