@include('layauts.bootstrap.modal_win')
@section('content')
    <h1>Edit code data</h1>
    <form name="tabwc" action="{{$_ENV['APP_URL']}}/tabwc/{{$data->id}}" method="POST">

        <input type="hidden" name="id" value="{{$data->id}}">

        <table class="table id-{{ $data->id }}">
            <tr><td class="top_cell p0"><input type="text" value="Name (id = {{ $data->id }})" class="input_clean blck" disabled></td></tr>
            <tr><td class="bottom_cell p0"><textarea name="name" class="textarea_clean nm_cll_stl">{{ $data->name }}</textarea></td></tr>

            <tr><td class="top_cell p0"><input type="text" name="col1_name" value="{{ $data->col1_name }}" class="input_clean"></td></tr>
            <tr><td class="bottom_cell p0"><textarea name="col1_data" class="textarea_clean">{{ $data->col1_data }}</textarea></td></tr>

            <tr><td class="top_cell p0"><input type="text" name="col2_name" value="{{ $data->col2_name }}" class="input_clean"></td></tr>
            <tr><td class="bottom_cell p0"><textarea name="col2_data" class="textarea_clean">{{ $data->col2_data }}</textarea></td></tr>

            <tr><td class="top_cell p0"><input type="text" name="col3_name" value="{{ $data->col3_name }}" class="input_clean"></td></tr>
            <tr><td class="bottom_cell p0"><textarea name="col3_data" class="textarea_clean">{{ $data->col3_data }}</textarea></td></tr>
            
            <tr><td class="top_cell p0"><input type="text" name="col4_name" value="{{ $data->col4_name }}" class="input_clean"></td></tr>
            <tr><td class="bottom_cell p0"><textarea name="col4_data" class="textarea_clean">{{ $data->col4_data }}</textarea></td></tr>
          
            <tr><td class="top_cell blck">Description</td></tr>
            <tr><td class="bottom_cell p0"><textarea name="description" class="textarea_clean">{{ $data->description }}</textarea></td></tr>
        </table>
        @method('PUT')
        @csrf
        <button type="submit" id="updt_btn_frm_ok" class="blck" hidden>Update</button>
    </form>

    <form method="POST" action="{{$_ENV['APP_URL']}}/tabwc/{{$data->id}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        @method('DELETE')
        @csrf
        <button type="submit" id="dlt_btn_frm_ok" hidden>Delete</button>
    </form>
      
    <div class="div_wth_btn">
        <button type="button" class="btn btn-success bttn_strt_mdl_wndw" id="update_btn_frm" data-toggle="modal" data-target="#exampleModal">Update</button>
        <button type="button" class="btn btn-danger bttn_strt_mdl_wndw bttn_strt_mdl_wndw_updt" id="delete_btn_frm" data-toggle="modal" data-target="#exampleModal">Delete</button>
    </div>

    @yield('modal_win') {{-- Modal window --}}

@endsection