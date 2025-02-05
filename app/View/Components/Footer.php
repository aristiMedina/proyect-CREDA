<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public $isAuth;
    public $class;
    public function __construct($auth = false)
    {
        // Lógica para ver si está autenticado
        $this->isAuth = $auth;

        if ($this->isAuth) {
            $this->class = 'bg-auth-ft';

        }else{
            $this->class = 'bg-noauth-ft';
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
