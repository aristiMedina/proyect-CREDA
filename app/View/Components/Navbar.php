<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $isAdmin;
    public $isAuth;
    public $class;
    public $display;
    public function __construct($auth = false, $admin = false)
    {
        // Lógica para ver si está autenticado
        $this->isAuth = $auth;
        // Despues para ver si es aministrador
        $this->isAdmin = $admin;

        if ($this->isAuth) {
            $this->class = 'bg-auth';

        }else{
            $this->class = 'bg-noauth';
            $this->display = 'noinit';
        };

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
