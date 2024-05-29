<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $missions;

    public function __construct($missions)
    {
        $this->missions = $missions;
    }


    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
