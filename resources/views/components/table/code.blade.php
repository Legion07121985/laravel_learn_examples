<!-- Usage: https://www.tablesgenerator.com/html_tables# -->
<style>
  .top_cell {
  background-color: #657b83;
  border-color: inherit;
  border-style: solid;
  border-width: 1px;
  color: #fdf6e3;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-weight: bold;
  overflow: hidden;
  padding: 10px 5px;
  text-align: left;
  vertical-align: top;
  word-break: normal;
  }
  .bottom_cell {
  background-color: #fdf6e3;
  border-color: inherit;
  border-style: solid;
  border-width: 1px;
  color: #002b36;
  font-family: Arial, sans-serif;
  font-size: 14px;
  overflow: hidden;
  padding: 10px 10px;
  text-align: left;
  vertical-align: top;
  word-break: normal;
  }
  .table {
  border-collapse: collapse;
  border-color: #93a1a1;
  border-spacing: 0;
  }
  </style>
  {{--
<table class="table id-{{ $data->id }}">
<thead>
  <tr>
    <th class="top_cell">{{ $data->col1_name }}</th>
    <th class="top_cell">{{ $data->col2_name }}</th>
    <th class="top_cell">{{ $data->col3_name }}</th>
    <th class="top_cell">{{ $data->col4_name }}</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="bottom_cell"><pre>{{ $data->col1_data }}</pre></td>
    <td class="bottom_cell"><pre>{{ $data->col2_data }}</pre></td>
    <td class="bottom_cell"><pre>{{ $data->col3_data }}</pre></td>
    <td class="bottom_cell"><pre>{{ $data->col4_data }}</pre></td>
  </tr>
</tbody>
</table> 
--}}

<table class="table id-{{ $data->id }}">
  <tr>
    <td class="top_cell">{{ $data->col1_name }}</td>
  </tr>
  <tr>
    <td class="bottom_cell"><pre>{{ $data->col1_data }}</pre></td>
  </tr>
  <tr>
    <td class="top_cell">{{ $data->col2_name }}</td>
  </tr>
  <tr>
    <td class="bottom_cell"><pre>{{ $data->col2_data }}</pre></td>
  </tr>
  <tr>
    <td class="top_cell">{{ $data->col3_name }}</td>
  </tr>
  <tr>
    <td class="bottom_cell"><pre>{{ $data->col3_data }}</pre></td>
  </tr>
  <tr>
    <td class="top_cell">{{ $data->col4_name }}</td>
  </tr>
  <tr>
    <td class="bottom_cell"><pre>{{ $data->col4_data }}</pre></td>
  </tr>
  <tr>
    <td class="top_cell">Description</td>
  </tr>
  <tr>
    <td class="bottom_cell">@php echo  html_entity_decode($data->description) @endphp</td>
  </tr>
</table>

