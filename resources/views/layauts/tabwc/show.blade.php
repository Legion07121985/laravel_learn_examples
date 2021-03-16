@section('content')
<h1>Show code data</h1>
<table class="table id-{{ $data->id }}">
    <tr>
      <td class="top_cell">{{ $data->col1_name }}</td>
    </tr>
    <tr>
      <td class="bottom_cell"><pre>{{ $data->col1_data }}</pre></td>
    </tr>
    @if ($data->col2_name !== NULL)
    <tr>
      <td class="top_cell">{{ $data->col2_name }}</td>
    </tr>
    <tr>
      <td class="bottom_cell"><pre>{{ $data->col2_data }}</pre></td>
    </tr>
    @endif
    @if ($data->col3_name != NULL)
    <tr>
      <td class="top_cell">{{ $data->col3_name }}</td>
    </tr>
    <tr>
      <td class="bottom_cell"><pre>{{ $data->col3_data }}</pre></td>
    </tr>
    @endif
    @if ($data->col4_name != NULL)
    <tr>
      <td class="top_cell">{{ $data->col4_name }}</td>
    </tr>
    <tr>
      <td class="bottom_cell"><pre>{{ $data->col4_data }}</pre></td>
    </tr>
    @endif
    
    <tr>
      <td class="top_cell">Description</td>
    </tr>
    <tr>
      <td class="bottom_cell">@php echo html_entity_decode($data->description) @endphp</td>
    </tr>
  </table> 
@endsection