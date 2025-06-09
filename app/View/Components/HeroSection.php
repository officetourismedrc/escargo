<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $imageUrl;
    
    public function __construct($title, $imageUrl)
    {
        //
        $this->title = $title;
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-section');
    }
}
