<?php

namespace TheAdeyemiOlayinka\PayTheDev\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;

class PTTAPIMiddleware
{
    public function handle($request, Closure $next)
    {
        $flag = config('pay-the-dev.switch');

        $res = [
            'status' => '</> Pay The Developer </>',
            'message' => 'Howdy? This site has been locked till the owners of the website deem it fit to pay the developer who had sleepless nights developing the website.
            You can check back soon after the owners have paid the developer.'
        ];

        return $flag ? response()->json($res, JsonResponse::HTTP_PAYMENT_REQUIRED) : $next($request);
    }
}

?>