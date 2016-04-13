<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @SWG\Definition(id="Effect", required={"id","name","category_id"}, @SWG\Xml(name="Effect"))
 */

class Effect extends Model {
    const EffectStatusNormal = 1;
    const EffectStatusHidden = 0;

    protected $table = 'ff_effect';

    /**
     * @SWG\Property(format="int64",example=1)
     * @var int
     */
    public $id;

    /**
     * @SWG\Property(example="S1")
     * @var string
     */
    public $name;

    /**
     * @SWG\Property(format="int32",example=1)
     * @var int
     */
    public $category_id;

    /**
     * @var \DateTime
     * @SWG\Property()
     */
    public $created_at;

    /**
     * @var \DateTime
     * @SWG\Property()
     */
    public $updated_at;

}
