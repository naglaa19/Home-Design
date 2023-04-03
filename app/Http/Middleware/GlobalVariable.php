<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\FAQ;
use Closure;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class GlobalVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request = Category::select()->get();
        // $faq=FAQ::select()->get();
        //  view()->share(compact('category'));
        return $next($request);
    }
}
