<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $href;
    public $type;

    public function __construct($href = '#', $type = 'primary')
    {
        $this->href = $href;
        $this->type = $type;
    }

    public function render(): View|Closure|string
    {
        return view('components.ui.button');
    }
}
