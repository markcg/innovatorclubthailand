<?php

namespace App\Models\WordPress;

use Illuminate\Database\Eloquent\Model;

class WordPressPost extends Model {

    protected $connection = 'wordpress';
    protected $table = 'wp_posts';
    protected $primaryKey = 'ID';

}
