<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\MenuPrincipal;
use App\Models\Admin\SubMenu;

class PagesController extends Controller
{
    //
     public function show(Request $request){

        try {
            $article = MenuPrincipal::findOrFail($request->id);
            return view($article->address, compact('article'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // return response()->view('errors.article_not_found', [], 404);
            abort(404);
        }

     }

      public function showSub(Request $request){

        try {
            $article = SubMenu::findOrFail($request->id);
            return view($article->address);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // return response()->view('errors.article_not_found', [], 404);
            abort(404);
        }

     }

}
