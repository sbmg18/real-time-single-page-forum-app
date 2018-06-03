<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply) {
        $reply->likes()->create([
            // 'user_id' => auth()->id()
            'user_id' => 1
        ]);

        return response('Created', Response::HTTP_CREATED);
    }

    public function unlikeIt(Reply $reply) {
        // $reply->likes()->where('user_id', auth()->id())->delete();
        $reply->likes()->where('user_id', 1)->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
