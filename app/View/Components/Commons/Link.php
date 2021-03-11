<?php

namespace App\View\Components\Commons;

use Illuminate\View\Component;
use Illuminate\Support\HtmlString;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $path = "";

    public function __construct()
    {
        $this->path = request()->path();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return function (array $data) {
            // $data['componentName'];      # read/write
            // $data['attributes'];         # read/write
            // $data['slot'];               # read only(?)
            if(isset($data['attributes']['href'])) {
                $data['attributes']["link"] = $data['attributes']['href'];

                if ($data['attributes']['href'] == "/") {
                    $data['attributes']['active'] = $data['attributes']['class']." link-active-class";
                } else {
                    $data['attributes']['active'] = $data['attributes']['class'];
                }
            }
         
            return 'components.commons.link';
        };
        //return view('components.commons.link');
    }
}
