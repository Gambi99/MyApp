<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Edit extends Component
{
    public $mission;

    public function __construct($mission)
    {
        $this->mission = $mission;
    }


    public function render(): View|Closure|string
    {
        return view('components.edit');
    }
}
