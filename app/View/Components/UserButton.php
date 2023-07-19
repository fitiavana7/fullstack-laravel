<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserButton extends Component
{
    public $user ;
    /**
     * Create a new component instance.
     */
    public function __construct($user)
    {
        $this->user = $user ;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-button');
    }
}
