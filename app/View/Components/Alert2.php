<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert2 extends Component
{

    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $type) # set massage & type from welcome.blade.php
    {
	    $this->message = $message;
	    $this->type = $type;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert2');
    }
}
