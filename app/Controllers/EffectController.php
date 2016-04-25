<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use App\Models\Effect;
use App\Models\EffectCategory;

/**
 * \EffectController
 */
class EffectController extends BaseAuthController {

    public function init() {
        parent::init();

        $this->effectCategoryModel = new EffectCategory();
        $this->effectModel = new Effect();
    }

    /**
     * @SWG\Get(path="/effect/list",
     *   tags={"effect"},
     *   summary="返回特效列表",
     *   description="返回特效商店的特效列表",
     *   operationId="getList",
     *   produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="成功返回",
     *         @SWG\Schema(
     *              ref="#/definitions/EffectGetList"
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="401",
     *         description="Invalid token",
     *     ),
     *     security={
     *       {"io84-api": {"public"}}
     *     }
     * )
     */
    public function getList(){
        $this->checkAuth();

        $jsonArray = array();
        $effectCategoryList = $this->effectCategoryModel->select()->get();

        $list = array();
        foreach($effectCategoryList as $effectCategory) {
            $cid = $effectCategory->cid;
            $effectList = $this->effectModel
                ->select(array(
                            'eid',
                            'name',
                            'category_id',
                            'created_at',
                            'updated_at',
                            ))
                ->where('category_id',$cid)
                ->take(12)
                ->get()
                ->toArray();
            $list = array_merge($list,$effectList);
        }

        $jsonArray['list'] = $list;
        $jsonArray['categories'] = $effectCategoryList;
        $this->json($jsonArray);
    }

}
