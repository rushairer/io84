<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @SWG\Definition(id="EffectCategory", required={"cid","name"}, @SWG\Xml(name="EffectCategory"))
 */

class EffectCategory extends Model {

    protected $table = 'ff_effect_category';

    /**
     * @SWG\Property(format="int64",example=1)
     * @var int
     */
    protected  $cid;

    /**
     * @SWG\Property(example="Skin")
     * @var string
     */
    protected $name;

    /**
     * @SWG\Property(format="int32",example=100)
     * @var int
     */
    protected $count;

}
