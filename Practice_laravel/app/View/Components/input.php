<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $name;
    public $label;     
    public $message;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $name, $label, $message ='empty')
    {
        $this->type = $type; // akhan theke argument gulo autometically amader class component ar blade file a chole jabe resources/views/components/input.blade.php
        $this->name = $name;
        $this->label = $label;
        $this->value = $value; 
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
