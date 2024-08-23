<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RelatedBlogCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imgURL,
        public string $tags,
        public string $title,
        public string $description,
        public string $date,
        public string $author,
        public string $readtime
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.related-blog-card');
    }
}
