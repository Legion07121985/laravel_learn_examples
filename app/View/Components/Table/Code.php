<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Code extends Component
{
    public $id;
    public $col1_data;
    public $col2_data;
    public $col3_data;
    public $col4_data;
    public $col1_name;
    public $col2_name;
    public $col3_name;
    public $col4_name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $col1_data, $col2_data, $col3_data, $col4_data, $col1_name, $col2_name, $col3_name, $col4_name)
    {
        $this-> id = $id;
        $this-> col1_data = $col1_data;
        $this-> col2_data = $col2_data;
        $this-> col3_data = $col3_data;
        $this-> col4_data = $col4_data;
        $this-> col1_name = $col1_name;
        $this-> col2_name = $col2_name;
        $this-> col3_name = $col3_name;
        $this-> col4_name = $col4_name;
    }

    public function meth_mysql_query(){ //for test only!!!
       // return $data = DB::select('select * from test where id = :id', $this->id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        //var_dump(meth_mysql_query ());
        //return view('components.table.code');
    }
}
