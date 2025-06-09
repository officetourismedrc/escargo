
         <section class="section section-actu">
            <div class="container container-actu">
                   <div class="title-section">
                    <a href="">  <h2 class="title_1"> Actualités et Infos <i class="fa-solid fa-arrow-up-right-from-square"></i></h2></a>
                   </div>
                <div class="content content-actu">
                   <div class="actu-item actu-left">
                      <div class="actu-left_title">
                          <div class="actu-left_main-title">

                            <a  href="{{ route('article.route', ['id' => $articles->sortByDesc('created_at')->first()->id, 'slug' => Illuminate\Support\Str::slug($articles->sortByDesc('created_at')->first()->title)])}}" class="title_1">
                               {{ Illuminate\Support\Str::limit($articles->sortByDesc('created_at')->first()->title, 65)  }}
                            </a>
                          </div>
                          <div class="actu-left_meta">
                            <span class="actu-meta_author">
                                <span><i class="fi fi-rr-user-pen"></i></span>
                                <span>Blaise Basomboli</span>
                            </span>
                            <span class="actu-meta_publish-date">
                               {{ $articles->sortByDesc('created_at')->first()->publication_date }}
                            </span>
                          </div>
                      </div>
                      <div class="actu-left_img">
                         <img src="{{ asset($articles->sortByDesc('created_at')->first()->featured_image) }}" alt="" class="actu-left_image">
                      </div>
                   </div>
                   <div class="actu-item actu-right">
                       <div class="actu-right_content">


                        @foreach ($articles as $article)

                          <a class="actu-right_items" href="{{ route('article.route', ['id' => $article->id, 'slug' => Illuminate\Support\Str::slug($article->title)])}}">
                             <div class="actu-right_numero">{{ sprintf('%02d', $loop->iteration) }}</div>
                             <div class="actu-right_title">
                                <div class="actu-right_main-title">{{ Illuminate\Support\Str::limit($article->title, 45)  }}</div>
                                <div class="actu-right_desc">{{ Illuminate\Support\Str::limit($article->summary, 60)  }}</div>
                             </div>
                          </a>

                        @endforeach

                    {{--      <a class="actu-right_items" href="{{ route('article.route', ['id' => 4])}}">
                            <div class="actu-right_numero">02</div>
                            <div class="actu-right_title">
                               <div class="actu-right_main-title">Bientôt l’opérationnalisation des « Maisons du Tourisme » à Kinshasa</div>
                               <div class="actu-right_desc">le Gouvernement provincial et l’ONT harmonisent</div>
                            </div>
                          </a>

                         <a class="actu-right_items" href="{{ route('article.route', ['id' => 5])}}">
                            <div class="actu-right_numero">03</div>
                            <div class="actu-right_title">
                               <div class="actu-right_main-title">Célébration du 8 Mars</div>
                               <div class="actu-right_desc">L’Office National du Tourisme célèbre la femme et le patrimoine congolais au Village de la Femme</div>
                            </div>
                        </a>

                         <a class="actu-right_items" href="{{ route('article.route', ['id' => 6])}}">
                            <div class="actu-right_numero">04</div>
                            <div class="actu-right_title">
                               <div class="actu-right_main-title">Guide touristique, un métier à l'honneur le 21 février</div>
                               <div class="actu-right_desc">Le monde entier a célébré le 21 février la journée internationale de guide touristique. </div>
                            </div>
                        </a>

                          

                         <a class="actu-right_items" href="{{ route('article.route', ['id' => 8])}}">
                            <div class="actu-right_numero">05</div>
                            <div class="actu-right_title">
                               <div class="actu-right_main-title">Kinshasa : L'Office National du Tourisme a célébré la journée internationale des monuments et sites touristiques</div>
                               <div class="actu-right_desc">C'est cette date que l’ONT a choisi pour célébrer la  « journée internationale des monuments et sites touristiques »</div>
                            </div>
                        </a>
--}}

                       </div>
                   </div>
                </div>
            </div>
          </section>
