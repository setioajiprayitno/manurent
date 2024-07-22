<?php

namespace App\View\Components;

use Illuminate\View\Component;


class PrimaryButton extends Component
{
    public function __construct(
        public string $title,
        public string $href = '',
    ) {
    }
    public function render()
    {
        return view('components.primary-button');
    }
}
