<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use App\Models\Admin\MenuPrincipal;
use App\Models\Admin\SubMenu;
use App\Models\Admin\Articles;

class TestController extends Controller
{
    //
    public function add(){

            //User::factory()->count(2)->create();
       
           // Permission::create(['name' => 'delete articles']);
            //Permission::create(['name' => 'publish articles']);
            //Permission::create(['name' => 'view articles']);

            //$admin = Role::create(['name' => 'admin']);
           // $editor = Role::create(['name' => 'editor']);
            //$viewer = Role::create(['name' => 'viewer']);

            //$admin->givePermissionTo(Permission::all());
          //  $editor->givePermissionTo(['edit articles', 'publish articles', 'view articles']);
           // $viewer->givePermissionTo('view articles');


          $menudata = DB::table('menu_principals')->get();

                foreach ($menudata as $key => $value) {
                   $value->sub = DB::table('sub_menus as sm')
                                    ->where('sm.menu_principal_id', '=', $value->id)
                                    ->orderBy('sm.order', 'desc')     // ← sort ascending by your `order` column
                                    ->get();
                }

        // $articles = Articles::take()->get();
 

        return $menudata;
    }
    
}
