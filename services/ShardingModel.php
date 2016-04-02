<?php

use Illuminate\Database\Eloquent\Model as Model;

/**
 *  \ShardingModel
 */
class ShardingModel extends Model {

    private $sid;
    public $tableNumber = 1;

    public function __construct(array $attributes = [], $sid = 0) {
        $this->sid = $sid;
        parent::__construct($attributes);
    }
    public function getTable() {
        $tableName = str_replace('\\', '', snake_case(str_plural(class_basename($this))));
        $tableName .= '_'. ($this->sid % $this->tableNumber);
        return $tableName;
    }

}
