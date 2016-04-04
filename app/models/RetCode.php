<?php

namespace App\Models;

/**
 * @SWG\Definition(
 *   @SWG\Xml(name="##default")
 * )
 */
class RetCode
{

    /**
     * @SWG\Property(format="int32")
     * @var int
     */
    public $ret_code;

    /**
     * @SWG\Property
     * @var string
     */
    public $ret_msg;
}
