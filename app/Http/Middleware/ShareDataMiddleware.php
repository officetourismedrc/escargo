<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\MenuPrincipal;
use App\Models\Admin\SubMenu;

class ShareDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menudata = DB::table('menu_principals')->get();

                foreach ($menudata as $key => $value) {
                   $value->sub = DB::table('sub_menus as sm')
                                              ->where('sm.menu_principal_id','=',$menudata[$key]->id)
                                              ->get();
                }

        View::share(['menudata'=>$menudata]);
        return $next($request);
    }
}
