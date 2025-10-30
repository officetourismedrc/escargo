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
  <x-hero-section title="Célébration du 8 Mars : L’Office National du Tourisme célèbre la femme et le patrimoine congolais au Village de la Femme" 
                    imageUrl="/images/articles-images/imagesLeXPepSAyZRnWJrtMFASZh4ubWnpppK4ccoKEgn4.webp"/>
  

    
  <section class="section">
    <div class="container actualite-container">
        <div class="content actualite-content">
            <div class="actualite-title-img">
                <img class="actualite-title-image" src="{{asset('/images/articles-images/imagesLeXPepSAyZRnWJrtMFASZh4ubWnpppK4ccoKEgn4.webp')}}" alt="">
            </div>
            <div class="actualite-text">
                <div class="actualite-text-meta">
                    <div>
                    <span><i class="fa-solid fa-circle-user"></i></span>
                    <span>Blaise Basomboli</span>
                    </div>
                    <span>23/03/2025</span>
                </div>

                <div class="actualite-text-cap">
                    <p>Sous le chapiteau du Pullman, l'un des grands hôtels de la ville de Kinshasa, capitale de la République Démocratique du Congo s'est érigé un espace vibrant de créativité et d’engagement, le Village de la Femme. La onzième édition de ce rendez-vous qui sort de l'ordinaire, a ouvert ses portes le 8 mars 2025, jour même de la célébration de la femme, dont il porte fièrement le nom.Entre stands colorés et démonstrations de talents, les femmes congolaises ont exposé leur savoir-faire, affirmant leur rôle clé dans l’entrepreneuriat et le leadership en RDC. </p>
                </div>
                <div class="actualite-text-text">
                    <p>Parmi les exposants, il y en a un qui est sponsor officiel de cet événement annuel, c'est l’Office National du Tourisme. Sa présence au cœur de ce village est remarquable. Pour cette année, l'ONT a marqué sa présence en mettant en lumière un outil incontournable pour la promotion du tourisme en République Démocratique du Congo. Il s'agit de "Yeba Congo" qui est une application innovante et sert de guide aux amoureux du voyage, regroupant les sites touristiques à découvrir à travers le pays.  </p>
                    <p>L'Office National du Tourisme a été créé par l'Etat congolais pour promouvoir et développer le tourisme. À chaque événement, cet établissement public met en avant cette raison d'être de son existence. Pour l'édition 2025 du Village de la Femme, l'ONT n'a pas dérogé à ses bonnes habitudes. Au milieu de ce village, une femme a porté haut la voix de l'Office. Passionnée par son métier, inspirée et portée par l'énergie du 8 mars, elle a présenté au public la mission de l’ONT : valoriser et promouvoir les merveilles de la RDC. Cet exposé magistral a convaincu cet auditoire conquis, qui se fera à son tour ambassadeur touristique de la République Démocratique du Congo. </p>
                    <p>A noter que l'édition 2025 de la Journée internationale des droits des femmes est célébrée sous le thème international : "Pour toutes les femmes et les filles : droits, égalité, autonomisation". Par contre: "la congolaise au centre de toutes les ambitions", est le thème national. Les activités vont s'étendre durant tout le mois de mars. </p>
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
