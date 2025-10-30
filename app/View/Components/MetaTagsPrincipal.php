<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaTagsPrincipal extends Component
{
    /**
     * Create a new component instance.
     */

    
    public function __construct(

        public ?string $title = null,
        public ?string $metaTitle = null,
        public ?string $description = null,
        public ?string $robot = null,
        public ?string $canonical = null,
        public ?string $language = null,
        public ?string $author = null,
    )
    {
        //

        $this->title = $title ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $this->metaTitle = $metaTitle ?? 'Office National du Tourisme RDC - Explorez les merveilles du Congo';
        $this->description = $description ?? 'Découvrez les destinations touristiques, la culture et les événements en République Démocratique du Congo avec l\'Office National du Tourisme RDC.';  
        $this->robot = $robot ?? 'index, follow';
        $this->canonical = $canonical ?? url()->current();
        $this->language = $language ?? 'fr';
        $this->author = $author ?? 'Office National du Tourisme RDC';


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.meta-tags-principal');
    }
}
