<?php

namespace App\View\Components;

use Illuminate\View\Component;

class formDropdown extends Component
{
    public string $title;
    public string $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-dropdown');
    }
}
