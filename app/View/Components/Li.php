<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Li extends Component
{
    public string $icon;
    public string $name;
    public string $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $icon, string $name, string $route)
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.li');
    }
}
