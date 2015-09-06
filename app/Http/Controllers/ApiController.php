<?php

/**
 * 
 *
 * @author Xu Qihua <qihuax@jumei.com>
 * @version 15/9/1
 */
namespace App\Http\Controllers;

class ApiController extends Controller {

    /**
     * API接口-订阅接口-提问通知.
     *
     * @description 本接口用来做待解决问题的推送，当百度知道产生符合应用规则的问题时，将通知到应用方，应用方接收到该问题后，可以推送到各个回答入口去引导用户回答。
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001210
     * @return \Illuminate\Http\JsonResponse
     */
    public function postAsk() {

        $data = \Input::all();
        $ask = \App\Ask::withTrashed()
            ->where('question_id', $data['question_id'])
            ->get();
        if(empty($ask)) {
            $row = \App\Ask::creat($data);
        }
        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    /**
     * API接口-订阅接口-追问通知.
     *
     * @description 本接口，当某个回答下产生新追问后，将通知到产生该回答的应用。
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001213
     * @return \Illuminate\Http\JsonResponse
     */
    public function postAppend() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    /**
     * API接口-订阅接口-评价通知
     *
     * @description 本接口，当某个回答被评价（包含被采纳为最佳，被推荐为最佳）后，将通知到订阅了该消息的应用。
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001212
     * @return \Illuminate\Http\JsonResponse
     */
    public function postComment() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    /**
     * API接口-订阅接口-剔除通知
     *
     * @description 本接口，用来做问题的剔除通知。当一个问题因某种原因被百度知道删除了，此时将不再需要各应用去获取新的回答，则会产生该通知。
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001211
     * @return \Illuminate\Http\JsonResponse
     */
    public function postDelete() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    /**
     * API接口-订阅接口-高质反馈
     *
     * @description 本接口，当某个高质回答被认证后，其认证结果（待认证/认证不通过/认证通过）将通知到订阅了该消息的应用。
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001644
     * @return \Illuminate\Http\JsonResponse
     */
    public function postQuality() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    public function postReply() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }
}