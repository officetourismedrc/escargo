<x-layouts.app :title="__('ok')">

<section class="section article-section">
       <div class="container article-container-section">

        <div class="content article-container-content">
            <div class="article-content-top">
                <div class="article-content-top-left">
                   <span class="article-content-top-left-header"> <span>NEWS</span><span>A la une {{$article[0]->id}}</span> </span>
                </div>
            </div>
             <div class="article-content-bttm">
                    <div class="article-content-bttm-left">
                     <a href='{{route("article.route", ["id" => $article[0]->id, "slug" => Illuminate\Support\Str::slug($article[0]->title)])}}' class="article-content-bttm-left-contnet">
                            <div class="article-content-bttm-left-img">
                                <img src='{{ asset($article[0]->featured_image) }}' alt="">
                            </div>

                            <div class="article-content-bttm-left-desc">
                                <div>
                                    <h1 class="title_1">{{$article[0]->title}}</h1>
                                    <div class="data-desc-art">
                                        <span class="data-author"><span><i class="fi fi-rr-user-pen"></i></span> <span>Blaise</span></span>
                                        <span class="date-data"><span>Kinshasa</span> <span>{{$article[0]->publication_date}}</span></span>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="article-content-bttm-right">

                        <div class="article-content-bttm-right-top">

                            <div class="article-content-bttm-right-top-1">

                                 <a href='{{route("article.route", ["id" => $article[1]->id, "slug" => Illuminate\Support\Str::slug($article[1]->title)])}}' class="article-content-bttm-left-contnet">
                                    <div class="article-content-bttm-left-img">
                                        <img src='{{ asset($article[1]->featured_image)}}' alt="">
                                    </div>

                                    <div class="article-content-bttm-left-desc">
                                        <div>
                                            <h1 class="title_1">{{\Illuminate\Support\Str::limit($article[1]->title, 60, '...')}}</h1>
                                            <div class="data-desc-art">
                                                <span class="data-author"><span><i class="fi fi-rr-user-pen"></i></span> <span>Blaise</span></span>
                                                <span class="date-data"><span>Kinshasa</span> <span>{{$article[1]->publication_date}}</span></span>
                                            </div>
                                            
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-content-bttm-right-top-2">

                                 <a href='{{route("article.route", ["id" => $article[2]->id, "slug" => Illuminate\Support\Str::slug($article[2]->title)])}}' class="article-content-bttm-left-contnet">
                            <div class="article-content-bttm-left-img">
                                <img src='{{ asset($article[2]->featured_image)}}' alt="">
                            </div>

                            <div class="article-content-bttm-left-desc">
                                <div>
                                    <h1 class="title_1">{{\Illuminate\Support\Str::limit($article[2]->title, 60, '...')}}</h1>
                                    <div class="data-desc-art">
                                        <span class="data-author"><span><i class="fi fi-rr-user-pen"></i></span> <span>Blaise</span></span>
                                        <span class="date-data"><span>Kinshasa</span> <span>{{$article[2]->publication_date}}</span></span>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </a>
                            </div>

                        </div>
                         <div class="article-content-bttm-right-bottom article-content-bttm-right-top">


                            <div class="article-content-bttm-right-top-1">
                                <a href='{{route("article.route", ["id" => $article[3]->id, "slug" => Illuminate\Support\Str::slug($article[3]->title)])}}' class="article-content-bttm-left-contnet">
                                    <div class="article-content-bttm-left-img">
                                        <img src='{{ asset($article[3]->featured_image)}}' alt="">
                                    </div>

                                    <div class="article-content-bttm-left-desc">
                                        <div>
                                            <h1 class="title_1">{{\Illuminate\Support\Str::limit($article[3]->title, 60, '...')}}</h1>
                                            <div class="data-desc-art">
                                                <span class="data-author"><span><i class="fi fi-rr-user-pen"></i></span> <span>Blaise</span></span>
                                                <span class="date-data"><span>Kinshasa</span> <span>{{$article[3]->publication_date}}</span></span>
                                            </div>
                                            
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="article-content-bttm-right-top-2">
                                 <a href='{{route("article.route", ["id" => $article[4]->id, "slug" => Illuminate\Support\Str::slug($article[4]->title)])}}' class="article-content-bttm-left-contnet">
                                    <div class="article-content-bttm-left-img">
                                        <img src='{{ asset($article[4]->featured_image)}}' alt="">
                                    </div>

                                    <div class="article-content-bttm-left-desc">
                                        <div>
                                            <h1 class="title_1">{{\Illuminate\Support\Str::limit($article[4]->title, 60, '...')}}</h1>
                                            <div class="data-desc-art">
                                                <span class="data-author"><span><i class="fi fi-rr-user-pen"></i></span> <span>Blaise</span></span>
                                                <span class="date-data"><span>Kinshasa</span> <span>{{$article[4]->publication_date}}</span></span>
                                            </div>
                                            
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                         </div>

                     </div>
             </div>
            
        </div>
       </div>
       <div class="container article-container-section-2">

        <div class="ad-article-page">
            <img src='{{ asset("images/Mask group1.png")}}' alt="">
        </div>
         <div class="content article-container-content">
            <div class="article-content-top">
                <div class="article-content-top-left">
                   <span class="article-content-top-left-header"> <span class="diff-article-content-top-left-header">Découvrer Nos récents Articles </span> </span>
                </div>
            </div>
            <div class="article-content-bottom">
                <div class="article-content-right">


                    @foreach ($article as $item)

                    @if($loop->index >= 4)
                     @break
                    @endif
                        <a href='{{route("article.route", ["id" => $item->id, "slug" => Illuminate\Support\Str::slug($item->title)])}}' class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset($item->featured_image)}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, {{$item->publication_date}}</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">{{ \Illuminate\Support\Str::limit($item->title, 60, ' plus')}}</h1>
                            </div>

                        </div>
                    </a>
                    @endforeach

                </div>
                <div class="article-content-right">
                    

                    @foreach ($article as $item)

                    @if($loop->index <= 4)
                     @continue
                    @endif

                    @if($loop->index >= 8)
                     @break
                    @endif

                    <a href='{{route("article.route", ["id" => $item->id, "slug" => Illuminate\Support\Str::slug($item->title)] )}}' class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset($item->featured_image)}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, {{$item->publication_date}}</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">{{ \Illuminate\Support\Str::limit($item->title, 60, ' plus')}}</h1>
                            </div>

                        </div>
                    </a>
                        
                    @endforeach

                </div>
            </div>

         </div>

       </div>
       <div class="container article-container-section-3">

        <div class="ad-article-container-3-out">
            <img src='{{ asset("images/Mask group3.png")}}' alt="">

            <div class="content article-container-content">
            <div class="article-content-top">
                <div class="article-content-top-left">
                   <span class="article-content-top-left-header"> <span class="diff-article-content-top-left-header">Découvrer Nos récents Articles </span> </span>
                </div>
            </div>

            <div class="article-content-bottom">

                 <div class="article-content-right">

                    <div class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset("images/Nature.png")}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, 12-fevrier-2025</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam.</h1>
                            </div>

                        </div>
                    </div>

                    <div class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset("images/Nature.png")}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, 12-fevrier-2025</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam.</h1>
                            </div>

                        </div>
                    </div>

                    <div class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset("images/Nature.png")}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, 12-fevrier-2025</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam.</h1>
                            </div>

                        </div>
                    </div>


                    <!--  -->
<!-- 
                     <div class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset("images/Nature.png")}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, 12-fevrier-2025</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam.</h1>
                            </div>

                        </div>
                    </div> -->

                    <!--  -->
                 </div>

                 <div class="article-content-left">
                    <div class="article-content-right-item">

                        <div class="article-content-right-item-img">

                            <img src='{{ asset("images/Nature.png")}}' alt="">

                        </div>
                        <div class="article-content-right-item-data">

                            <div class="article-content-right-item-data-meta">
                                <span class="article-content-right-item-data-meta-author"><span><i class="fi fi-rr-user-pen"></i></span><span>Blaise</span></span>
                                <span class="article-content-right-item-data-meta-date">Kinshasa, 12-fevrier-2025</span>
                            </div>
                            <div class="article-content-right-item-data-title">
                                <h1 class="title_1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam.</h1>
                            </div>

                        </div>
                    </div>
                 </div>

            </div>

        </div>
        </div>
        <div class="article-container-section-outer">

            <div class="ad-article-container-3-in">
                <img src='{{ asset("images/Mask group1.png")}}' alt="">
            </div>
        

       </div>


       </div>
       </section>

       </x-layouts.app>