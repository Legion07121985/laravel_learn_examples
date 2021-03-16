@section('content')
<style>
  table .p0 {
    padding: 0px;
  }
  .textarea_clean {background-color: rgb(253, 246, 227); border: 0px; 
    display: block;
    width: 100%; 
    margin: 0px; 
    padding: 10px; 
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
  }
  .input_clean {
    width: 100%; 
    background-color: #657b83; 
    border: 0; 
    color: #fdf6e3; 
    font-weight: bold; 
    padding: 10px;
  }
  .input_name {
    max-height: 34px;
  }
</style>

<h1>Edit code data</h1>
<form name="tabwc" action="{{$_ENV['APP_URL']}}/tabwc/{{$data->id}}" method="POST">
  <input type="hidden" name="id" value="{{$data->id}}">

<table class="table id-{{ $data->id }}">
    <tr>
      <td class="top_cell p0">
        <input type="text" value="Name" class="input_clean" disabled  style="color: black">
      </td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="name" class="textarea_clean" style="max-height: 34px; min-height: 34px">{{ $data->name }}</textarea>
      </td>
    </tr>

    <tr>
      <td class="top_cell p0">
        <input type="text" name="col1_name" value="{{ $data->col1_name }}" class="input_clean">
      </td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="col1_data" class="textarea_clean">{{ $data->col1_data }}</textarea>
      </td>
    </tr>
    <tr>
      <td class="top_cell p0">
        <input type="text" name="col2_name" value="{{ $data->col2_name }}" class="input_clean">
      </td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="col2_data" class="textarea_clean">{{ $data->col2_data }}</textarea>
      </td>
    </tr>
    <tr>
      <td class="top_cell p0">
        <input type="text" name="col3_name" value="{{ $data->col3_name }}" class="input_clean">
      </td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="col3_data" class="textarea_clean">{{ $data->col3_data }}</textarea>
      </td>
    </tr>
    <tr>
      <td class="top_cell p0">
        <input type="text" name="col4_name" value="{{ $data->col4_name }}" class="input_clean">
      </td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="col4_data" class="textarea_clean">{{ $data->col4_data }}</textarea>
      </td>
    </tr>
    
    <tr>
      <td class="top_cell" style="color: black">Description</td>
    </tr>
    <tr>
      <td class="bottom_cell p0">
        <textarea name="description" class="textarea_clean">{{ $data->description }}</textarea>
      </td>
    </tr>
  </table>
  @method('PUT')
  @csrf
  <button type="submit" hidden id="updt_btn_frm_ok" style="float: right;">Update</button>
  </form>

  <form method="POST" action="{{$_ENV['APP_URL']}}/tabwc/{{$data->id}}">
    @method('DELETE')
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <button type="submit" hidden id="dlt_btn_frm_ok" >Delete</button>
  </form>
  
  <div style="height: 38px;">
    <button type="button" class="btn btn-success" id="update_btn_frm" data-toggle="modal" data-target="#exampleModal" style="float: right;">Update</button>
    <button type="button" class="btn btn-danger" id="delete_btn_frm" data-toggle="modal" data-target="#exampleModal" style="float: right; margin-right: 10px;">Delete</button>
  </div>

  
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" id="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal_save_button">Save changes</button>
      </div>
    </div>
  </div>
</div>

      {{-- <script defer src="{{$_ENV['APP_URL']}}/js/my-code.js"></script> --}}
   @endsection