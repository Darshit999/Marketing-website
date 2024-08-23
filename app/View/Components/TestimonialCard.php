<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TestimonialCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imgURL,
        public string $review,
        public string $customerName,
        public string $customerRole,
        public string $title,
        public string $description
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial-card');
    }
}
