<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Nav extends Component
{
    /**
     * Create a new component instance.
     */
    public $menuData;

    public function __construct()
    {
        //
        $this->menuData = DB::table('menu_principals')->get();

                foreach ($this->menuData as $key => $value) {
                   $value->sub = DB::table('sub_menus as sm')
                                              ->where('sm.menu_principal_id','=',$value->id)
                                              ->get();
                }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav');
    }
}
