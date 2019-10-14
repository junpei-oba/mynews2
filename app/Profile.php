<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
        // 課題5(php-14)
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
}
