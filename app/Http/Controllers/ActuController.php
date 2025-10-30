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


            //meta tags variables

            $title = $article->title . ' - Office National du Tourisme RDC';
            $metaTitle = $article->title . ' - Office National du Tourisme RDC';
            $description = substr(strip_tags($article->summary), 0, 155);
            $robot = 'index, follow';
            $canonical = url()->current();
            $language = 'fr';
            $author = 'Blaise Basomboli';
            

            //Og-meta tags variables

            $ogTitle = $article->title . ' - Office National du Tourisme RDC';
            $ogDescription = substr(strip_tags($article->summary), 0, 155);
            $ogImage = asset($article->featured_image);
            $ogUrl = url()->current();
            $ogType = 'article';
            $ogSiteName = 'Office National du Tourisme RDC';
            $ogLocale = 'fr_FR';


            //Twitter-meta tags variables

            $twitterTitle = $article->title . ' - Office National du Tourisme RDC';
            $twitterDescription = substr(strip_tags($article->summary), 0, 155);
            $twitterImage = asset($article->featured_image);
            $twitterCard = 'summary_large_image';
            $twitterSite = '@ONT_RDC';
            $twitterCreator = '@Blaise_Basomboli';  


            return  view($article->source_adress,  compact('article', 
                                                         'recommandedArticle',
                                                         'title',
                                                         'metaTitle',
                                                         'description',
                                                         'robot',
                                                         'canonical',
                                                         'language',
                                                         'author',
                                                         'ogTitle',
                                                         'ogDescription',
                                                         'ogImage',
                                                         'ogUrl',
                                                         'ogType',
                                                         'ogSiteName',
                                                         'ogLocale',
                                                         'twitterTitle',
                                                         'twitterDescription',
                                                         'twitterImage',
                                                         'twitterCard',
                                                         'twitterSite',
                                                         'twitterCreator'));


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
