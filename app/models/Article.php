<?php
namespace App\Models;

use ShardingModel;
//use Illuminate\Database\Eloquent\Model as Model;

/**
* Article Model
*/
class Article extends ShardingModel {

    public $tableNumber = 2;
    public $timestamps = false;

}
