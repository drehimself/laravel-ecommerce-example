<?php

namespace Drehimself\SomeTool\Http\Middleware;

use Drehimself\SomeTool\SomeTool;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(SomeTool::class)->authorize($request) ? $next($request) : abort(403);
    }
}
