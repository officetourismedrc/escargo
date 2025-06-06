<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Admin\Articles;


class ArticleSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $articles;
    public function __construct()
    {
        //
        $this->articles = Articles::take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-section');
    }
}
