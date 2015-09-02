<?php

/**
 * 
 *
 * @author Xu Qihua <qihuax@jumei.com>
 * @version 15/9/1
 */
namespace App\Http\Controllers;

class ApiController extends Controller {

    public function postAsk() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    public function postAppend() {

        return response()->json(['errno' => 0xFA, 'errmsg' => 'success']);
    }

    public function postComment() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    public function postDelete() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    public function postQuality() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }

    public function postReply() {

        return response()->json(['errno' => 0, 'errmsg' => 'success']);
    }
}