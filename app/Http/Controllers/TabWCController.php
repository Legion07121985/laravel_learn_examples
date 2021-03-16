<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabWCController extends Controller
{
	public $table;       # workin table

	public function __construct(){
		$this->table = 'tables_with_code';
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $query_data = DB::select('select * from '. $this->table);
      return view('layauts.main', ['data'=>$query_data, 'inc'=>'layauts.tabwc.index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return 'Method name: '.__METHOD__;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return 'Method name: '.__METHOD__;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $query_data = DB::select('select * from '. $this->table.' where id = ?', [$id]);
      return view('layauts.main', ['data'=>$query_data[0], 'inc'=>'layauts.tabwc.show']);
    }

    /**
     * Display the specified resource in other resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_in($id)
    {
      $query_data = DB::select('select * from '. $this->table.' where id = ?', [$id]);
      $query_data[0]->description = html_entity_decode($query_data[0]->description);
      return view('components.table.code', ['data'=>$query_data[0]]);   //!!! must will be change on layauts.show_in !!!
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $query_data = DB::select('select * from '. $this->table.' where id = ?', [$id]);
      return view('layauts.main', ['data'=>$query_data[0], 'inc'=>'layauts.tabwc.edit']);
       //return 'Method name: '.__METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //var_dump($_REQUEST);
       
       $name = $request->name;
       $col1_name = $request->col1_name;
       echo $col1_name;
       $col1_data = $request->col1_data;
       $col2_name = $request->col2_name;
       $col2_data = $request->col2_data;
       $col3_name = $request->col3_name;
       $col3_data = $request->col3_data;
       $col4_name = $request->col4_name;
       $col4_data = $request->col4_data;
       $description  = $request->description;

        DB::table($this->table)->where('id', $id)
                   ->update([ 'name' => $name, 
                              'col1_name' => $col1_name, 
                              'col1_data' => $col1_data, 
                              'col2_name' => $col2_name, 
                              'col2_data' => $col2_data, 
                              'col3_name' => $col3_name, 
                              'col3_data' => $col3_data, 
                              'col4_name' => $col4_name, 
                              'col4_data' => $col4_data, 
                              'description' => $description]);
       
       //var_dump ($name);
       //$affected = DB::update('update users set votes = 100 where name = ?', ['Anita']);
       return 'Method name: '.__METHOD__;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return 'Method name: '.__METHOD__;
    }
}

