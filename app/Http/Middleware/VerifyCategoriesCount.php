<?php

namespace App\Http\Middleware;

use Closure;
use App\Category;

class VerifyCategoriesCount
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
        if(Category::all()->count() == 0){
            session()->flash('error','you need to add categories to be able to create a post');
            //return redirect()->back();
            return redirect(route('categories.create'));
        }
        return $next($request);
    }
}
