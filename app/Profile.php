<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // $guardedでProfoleControllerで新たに発番されたidに上書きされないように防ぐ役割
    protected $guarded = array('id');
        // 課題5(php-14)
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
}
