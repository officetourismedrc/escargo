<section class="section recommanded-article">
    <div class="container actualite-container recommanded-actualite-container">
        <div class="content actualite-content">
            <div class="actulite-rec-top">
                <div class="actulite-rec-top-title">
                    <span class="title_1">
                        Découvrez nos derniéres nouvelles
                    </span>
                </div>
                <div class="actulite-rec-top-desc">
                    <p>Restez informé, restez en avance Bienvenue dans notre section des dernières nouvelles, où nous vous apportons des mises à jour essentielles, des analyses approfondies et des récits marquants.</p>
                </div>
            </div>
            <div class="actulite-rec-bottom">
               <div class="actulite-rec-bottom-content">

                @foreach($recommandedArticle as $article)


                  <div class="actulite-rec-card">
                     <a class="actulite-rec-card-link" href="{{ route('article.route', ['id' => $article->id, 'slug' => Illuminate\Support\Str::slug($article->title)])}}">
                       <div class="actulite-rec-card-img">
                         <img class="actulite-rec-card-image" src="{{asset($article->featured_image)}}" alt="">
                       </div>
                       <div class="actulite-rec-card-content">
                         <div class="actulite-rec-card-content-meta">
                            <span>
                                <span><i class="fa-solid fa-circle-user"></i></span><span>Blaise Basombolie</span>
                            </span>
                            <span>{{$article->publication_date}}</span>
                         </div>
                         <div class="actulite-rec-card-content-title">
                            <span class="title_1">
                                {{$article->title}}
                            </span>
                         </div>
                         <div class="actulite-rec-card-content-desc">
                            {{Illuminate\Support\Str::limit($article->summary, 200)}}
                         </div>
                        
                       </div>
                     </a>
                  </div>
               @endforeach

               </div>
            </div>
        </div>
    </div>
</section>


{{-- 
@foreach($articles as $article)


                  <div class="actulite-rec-card">
                     <a class="actulite-rec-card-link" href="{{ route('article.route', ['id' => $recommendedArticle->id, 'slug' => Illuminate\Support\Str::slug($recommendedArticle->title)])}}">
                       <div class="actulite-rec-card-img">
                         <img class="actulite-rec-card-image" src="{{asset($recommendedArticle->featured_image)}}" alt="">
                       </div>
                       <div class="actulite-rec-card-content">
                         <div class="actulite-rec-card-content-meta">
                            <span>
                                <span><i class="fa-solid fa-circle-user"></i></span><span>Blaise Basombolie</span>
                            </span>
                            <span>{{$recommendedArticle->publication_date}}</span>
                         </div>
                         <div class="actulite-rec-card-content-title">
                            <span class="title_1">
                                {{$recommendedArticle->title}}
                            </span>
                         </div>
                         <div class="actulite-rec-card-content-desc">
                            {{$recommendedArticle->summary}}
                         </div>
                        
                       </div>
                     </a>
                  </div>
@endforeach --}}