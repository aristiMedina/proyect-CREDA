<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Module extends Component
{
    /**
     * Create a new component instance.
     */
    public $module;
    public function __construct($module = '0')
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.module');
    }
}
