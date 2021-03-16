<?php

namespace App\View\Components\Examples\BladeTemplates;

use Illuminate\View\Component;

class ComponentAttributes extends Component
{
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type) # set massage & type from welcome.blade.php
    {
	    $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.examples.blade-templates.component-attributes');
    }
}
