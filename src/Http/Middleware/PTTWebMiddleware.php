<?php

namespace TheAdeyemiOlayinka\PayTheDev\Http\Middleware;

use Closure;

class PTTWebMiddleware
{
    public function handle($request, Closure $next)
    {
        $flag = config('pay-the-dev.switch');

        $ptt_route = is_null(config('pay-the-dev.ptt_view'));

        if($ptt_route){
            return $flag ? response()->view('PayTheDev::default') : $next($request);
        }else{
            return $flag ? response()->view(config('pay-the-dev.ptt_view')) : $next($request);
        }
    }
}

?>