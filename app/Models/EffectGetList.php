<?php
namespace App\Models;

/**
 * @SWG\Definition(id="EffectGetList", required={"list","categories"}, @SWG\Xml(name="EffectGetList"))
 */

class EffectGetList {

    /**
     * @var Effect[]
     * @SWG\Property()
     */
    protected $list;

    /**
     * @var EffectCategory[]
     * @SWG\Property()
     */
    protected $categories;

}
