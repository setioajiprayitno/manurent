<?php

namespace App\View\Components;

use Illuminate\View\Component;

class itemRekomendasiMobil extends Component
{
    public string $src;
    public string $title;
    public string $brand;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $title, $brand)
    {
        $this->src = $src;
        $this->title = $title;
        $this->brand = $brand;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-rekomendasi-mobil');
    }
}
