<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request = $next($request);
        $content = $response->content();
  
        $pettern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1</a>';
        $content = preg_replace($pattern,$replace,$content);
        $response->setContent($content);
        return $response;
    }
}
