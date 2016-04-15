<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use App\Models\Effect;

/**
 * \EffectController
 */
class EffectController extends BaseAuthController {
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
     *             type="array",
     *             @SWG\Items(
     *              ref="#/definitions/Effect"
     *             )
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
        $effctModel = new Effect();
        $effectList = $effctModel->select(array(
            'eid',
            'name',
            'category_id',
            'created_at',
            'updated_at',
        ))->get();
        $this->json($effectList);
    }

}
