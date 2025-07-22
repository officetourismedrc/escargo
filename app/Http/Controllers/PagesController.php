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


        preg_match('/^(\d+)-/', $request->id, $matches);

        $extractedId = $matches[1] ?? null;

        if ($extractedId) {
            // Now you can use $extractedId for database queries, etc.

             try {
            $article = SubMenu::findOrFail($extractedId); 
            return view($article->address);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // return response()->view('errors.article_not_found', [], 404);
            abort(404);
        }
           
        } else {
            abort(404); // Handle gracefully if format is unexpected
        }

        

     }

}
