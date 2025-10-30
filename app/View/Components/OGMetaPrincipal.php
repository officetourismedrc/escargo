<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OGMetaPrincipal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $ogTitle = null,
        public ?string $ogDescription = null,
        public ?string $ogImage = null,
        public ?string $ogUrl = null,
        public ?string $ogType = null,
        public ?string $ogSiteName = null,
        public ?string $ogLocale = null,
    )
    {
        //

        $this->ogTitle = $ogTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $this->ogDescription = $ogDescription ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';  
        $this->ogImage = $ogImage ?? asset('/images/logo_color_ont_paysage.png');
        $this->ogUrl = $ogUrl ?? url()->current();
        $this->ogType = $ogType ?? 'website';
        $this->ogSiteName = $ogSiteName ?? 'Office National du Tourisme RDC';
        $this->ogLocale = $ogLocale ?? 'fr_FR';

        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.o-g-meta-principal');
    }
}
