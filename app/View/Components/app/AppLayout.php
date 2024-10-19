<?php

namespace App\View\Components\app;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $active_tab;
    /**
     * Create a new component instance.
     */
    public function __construct($active_tab=null)
    {
        $this->active_tab = $active_tab;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app.app-layout');
    }
}
