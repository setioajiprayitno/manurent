<?php

namespace App\View\Components;

use App\Models\Mobil;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class itemRekomendasiMobil extends Component
{
    public function __construct(public Mobil $car)
    {
    }

    public function render(): View
    {
        return view('components.item-rekomendasi-mobil');
    }
}
