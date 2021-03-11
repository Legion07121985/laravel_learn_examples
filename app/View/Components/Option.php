<?php
namespace App\View\Components;
use Illuminate\View\Component;
class Option extends Component
{
    public $label;
    public $value;
    public function __construct($label, $value)
    {
        $this->label = $label;
        $this->value = $value;
    }
    public function isSelected($option)
    {   
        return $option;
    }
    public function render()
    {
        return view('components.option');
    }
}
