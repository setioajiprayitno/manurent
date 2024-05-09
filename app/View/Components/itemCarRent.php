<?php

namespace App\View\Components;

use Illuminate\View\Component;

class itemCarRent extends Component
{
    public string $brand;
    public string $name;
    public string $price;
    public string $src;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($brand, $name, $price, $src)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->src = $src;
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
