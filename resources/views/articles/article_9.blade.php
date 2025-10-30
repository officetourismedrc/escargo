<x-layouts.app 
  
     :title="$title ?? null"
        :metaTitle="$metaTitle ?? null" 
        :description="$description ?? null" 
        :robot="$robot ?? null" 
        :canonical="$canonical ?? null" 
        :language="$language ?? null" 
        :author="$author ?? null" 
        :ogTitle="$ogTitle ?? null" 
        :ogDescription="$ogDescription ?? null"  
        :ogImage="$ogImage ?? null" 
        :ogUrl="$ogUrl ?? null" 
        :ogType="$ogType ?? null" 
        :ogSiteName="$ogSiteName ?? null" 
        :ogLocale="$ogLocale ?? null" 
        :twitterTitle="$twitterTitle ?? null"  
        :twitterDescription="$twitterDescription ?? null" 
        :twitterImage="$twitterImage ?? null" 
        :twitterCard="$twitterCard ?? null" 
        :twitterSite="$twitterSite ?? null" 
        :twitterCreator="$twitterCreator ?? null" 

>
    <x-hero-section title="RDC : La province du Haut-Katanga vibre au rythme de la 5e édition de la semaine congolaise du tourisme"  imageUrl="/images/articles-images/IMG-20251021-WA0689.jpg" />

    <section class="section">
        <div class="container actualite-container">
            <div class="content actualite-content">
                <div class="actualite-title-img">
                    <img class="actualite-title-image" src="{{ asset('/images/articles-images/IMG-20251021-WA0689.jpg')}}" alt="escursion kinsuka beach">
                </div>
                <div class="actualite-text">
                    <div class="actualite-text-meta">
                        <div>
                        <span><i class="fa-solid fa-circle-user"></i></span>
                        <span>Blaise Basomboli</span>
                        </div>
                        <span>06/05/2025</span>
                    </div>

                    <div class="actualite-text-cap">
                       <p>La cinquième édition de la semaine congolaise du tourisme a débuté ce lundi 13 octobre 2025, à Lubumbashi, chef-lieu de la province du Haut-Katanga au sud-est de la République Démocratique du Congo sous le thème : « Tourisme durable, moteur de diversification de l’économie ».  La cérémonie d'ouverture de cette fête du tourisme s'est déroulé à l'hôtel Pulman Karavia en présence du ministre du tourisme, Didier Mazenga.
Madame le Directeur Général de l’Office National du Tourisme, Jolie Yombo Mukendi a également pris part à cette cérémonie inaugurale. </p>
                    </div>
                    <div class="actualite-text-text">
                       
                        

                    <p>Plusieurs discours ont ponctué cette matinée d’ouverture au Chapiteau de Pullman Karavia. Dans son mot de bienvenue, le ministre provincial des finances a salué le choix porté sur la ville de Lubumbashi pour la tenue de la cinquième édition de la Semaine Congolaise du Tourisme.</p>
                    <p>« La tenue de la Semaine Congolaise du Tourisme ici à Lubumbashi, au cœur du Haut-Katanga, est une décision stratégique et symbolique. Elle est avant tout une opportunité de décentrer le regard national et international, de prouver que le potentiel touristique de nos provinces est à la hauteur de nos ambitions », a dit John Muloba Kitonge, ministre provincial des finances du Haut-Katanga. </p>
                    <p>A son tour, le ministre national du tourisme Didier Mazenga s’est félicité de la volonté du gouvernement congolais de diversifier l’économie nationale en optant pour le tourisme comme l’un des moteurs de cette diversification. </p>
                    <p>Pour le ministre Didier Mazenga, le thème de cette cinquième édition de la SCT a un double objectif : « susciter au niveau national une énergie pour la valorisation du potentiel touristique exceptionnel dont dispose la République démocratique du Congo et faire du tourisme un secteur clé pour la diversification économique et le développement durable » </p>
                    <p>Pour que cette diversification de l’économie congolaise à travers le tourisme ne soit pas un vain mot, Didier Mazenga en a appelé à une mobilisation générale dans ce secteur.</p>
                    <p>« Ainsi, dans le souci de contribuer à l’émergence de notre pays, je lance un appel pathétique à tous les acteurs public et privé à œuvrer pour le rayonnement du secteur du tourisme. », a-t-il dit. </p>
                    <p>Après le cocktail d’ouverture, les officiels et leurs accompagnateurs ont pris le chemin de deux sites touristiques prévus dans le programme de la SCT à savoir la prison de Simon Kimbangu et le Site de Patrice Emery Lumumba.</p>
                    <p></p>
                   


                    </div>
                </div>
                <div class="actualite-meta">
                    <div class="actualite-meta-tags">
                        <span class="actualite-meta-tags-item" >tourisme</span>
                        <span class="actualite-meta-tags-item" >ont</span>
                        <span class="actualite-meta-tags-item" >congo</span>
                        <span class="actualite-meta-tags-item" >RDC</span>
                        <span class="actualite-meta-tags-item" >anapi</span>
                        <span class="actualite-meta-tags-item" >Jolie</span>
                        <span class="actualite-meta-tags-item" >RD Congo</span>
                    </div>
                    <div class="actualite-share">
                        <span>Partagerer</span>
                        <div>
                        <span><i class="fa-brands fa-facebook-f"></i></span>
                        <span><i class="fa-brands fa-x-twitter"></i></span>
                        <span><i class="fa-brands fa-linkedin-in"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('articles.article_recommander')
</x-layouts.app>

