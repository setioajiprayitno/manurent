<?php

namespace App\View\Components;

use App\Models\Mobil;
use Illuminate\View\Component;

class itemCarRent extends Component
{
    public function __construct(public Mobil $car)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-car-rent');
    }
}
