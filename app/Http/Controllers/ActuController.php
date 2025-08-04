<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Articles;

class ActuController extends Controller
{
    //

    public function show(Request $request){

        try {

            $recommandedArticle = Articles::latest()->take(3)->get();
            $article = Articles::findOrFail($request->id);
            return view($article->source_adress, compact('article', 'recommandedArticle'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // return response()->view('errors.article_not_found', [], 404);
            abort(404);
        }

    }


     public function showAll(Request $request){

        $article = Articles::latest()->get();

        
        return view('pages.articles',compact('article'));

     }
}
