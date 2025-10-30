<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TwitterMetaPrincipal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $twitterTitle = null,
        public ?string $twitterDescription = null,
        public ?string $twitterImage = null,
        public ?string $twitterCard = null,
        public ?string $twitterSite = null,
        public ?string $twitterCreator = null,
    )
    {
        //
        $this->twitterTitle = $twitterTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $this->twitterDescription = $twitterDescription ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';  
        $this->twitterImage = $twitterImage ?? asset('/images/logo_color_ont_paysage.png');
        $this->twitterCard = $twitterCard ?? 'summary_large_image';
        $this->twitterSite = $twitterSite ?? '@ONT_RDC';
        $this->twitterCreator = $twitterCreator ?? '@ONT_RDC';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.twitter-meta-principal');
    }
}
