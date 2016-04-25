<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @SWG\Definition(id="Filter", required={"eid","name","category_id"}, @SWG\Xml(name="Filter"))
 */

class Filter extends Model {
    const FilterStatusNormal = 1;
    const FilterStatusHidden = 0;

    protected $table = 'ff_effect';

    /**
     * @SWG\Property(format="int64",example=1)
     * @var int
     */
    protected $eid;

    /**
     * @SWG\Property(example="S1")
     * @var string
     */
    protected $name;

    /**
     * @SWG\Property(format="int32",example=1)
     * @var int
     */
    protected $category_id;

    /**
     * @var \DateTime
     * @SWG\Property()
     */
    protected $created_at;

    /**
     * @var \DateTime
     * @SWG\Property()
     */
    protected $updated_at;

}
