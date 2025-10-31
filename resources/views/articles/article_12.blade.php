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
    <x-hero-section title="RDC : l’Office National du Tourisme a poursuivi les travaux d’élaboration des prévisions budgétaires 2026"  imageUrl="/images/articles-images/article_12_4.jpeg" />

    <section class="section">
        <div class="container actualite-container">
            <div class="content actualite-content">
                <div class="actualite-title-img">
                    <img class="actualite-title-image" src="{{ asset('/images/articles-images/article_12_5.jpeg')}}" alt="ont prévisions budgétaires pour l'année 2026">
                </div>
                <div class="actualite-text">
                    <div class="actualite-text-meta">
                        <div>
                        <span><i class="fa-solid fa-circle-user"></i></span>
                        <span>Blaise Basomboli</span>
                        </div>
                        <span>28/10/2025</span>
                    </div>

                    <div class="actualite-text-cap">
                        <p>Poursuite ce mardi 28 octobre 2025, à Kinshasa, des travaux d'élaboration des prévisions budgétaires 2026 de l'Office National du Tourisme. Cette deuxième journée a été marquée par la présentation des prévisions budgétaires de plusieurs directions, notamment celles du Marketing et Communication, de l’Audit interne, de la Direction Régionale Ouest ainsi que de la Direction de la Formation et de la Professionnalisation.</p>
                    </div>
                    <div class="actualite-text-text">
                       
                      
                      
                      <p>Les travaux se sont déroulés sous la coordination de l’équipe technique du Secrétariat permanent du Comité budgétaire. Dans une atmosphère studieuse mais parfois animée, chaque direction a défendu son budget avec détermination, détaillant ses priorités, ses actions programmées et les moyens nécessaires à leur mise en œuvre pour l’exercice 2026.</p>
                     
                      <p>Les échanges ont permis aux participants d’approfondir les discussions sur la répartition des ressources, en veillant à la cohérence entre les objectifs stratégiques et les moyens alloués.
Malgré la complexité des arbitrages budgétaires, l’esprit de collaboration et le sens du devoir sont restés au cœur de ces travaux, traduisant la volonté de l’ONT de poursuivre la dynamique de performance et de bonne gouvernance initiée ces dernières années.</p>
                      <p>Les travaux vont se poursuivre ce mercredi 29 octobre 2025 avec la suite des présentations d’autres directions techniques et d’appui.</p>
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

