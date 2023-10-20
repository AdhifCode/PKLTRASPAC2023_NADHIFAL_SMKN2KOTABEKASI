<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        .table-container {
            width: 100%;
            overflow: auto;
        }

        .sticky-header {
            position: sticky;
            top: 0;
            background-color: #f2f2f2;
            z-index: 1;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>    
</head>
<body>
    <h1>Business is Business😎</h1>
    <div class="d-flex justify-content-between align-items-center">
                
                @include ('component.import')
            </div>
    <table class="table table-striped table-hover table-condensed">
    <thead  class="sticky-header">
      <tr>
        <th><strong>No</strong></th>
        <th><strong>Series_reference</strong></th>
        <th><strong>Period</strong></th>
        <th><strong>Data_value</strong></th>
        <th><strong>Suppressed</strong></th>
        <th><strong>Status</strong></th>
        <th><strong>Units</strong></th>
        <th><strong>Magnitude</strong></th>
        <th><strong>Subject</strong></th>
        <th><strong>Group</strong></th>
        <th><strong>series_title_1</strong></th>
        <th><strong>series_title_2</strong></th>
        <th><strong>series_title_3</strong></th>
        <th><strong>series_title_4</strong></th>
        <th><strong>series_title_5</strong></th>
      </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($daftar as $key => $data)

    
      <th>{{$data->id}}</th>
      <th>{{$data->series_reference}}</th>
      <th>{{$data->period}}</th>
      <th>{{$data->data_value}}</th>
      <th>{{$data->suppressed}}</th>
      <th>{{$data->status}}</th>                 
      <th>{{$data->units}}</th>
      <th>{{$data->magnitude}}</th>
      <th>{{$data->subject}}</th>
      <th>{{$data->group}}</th>
      <th>{{$data->series_title_1}}</th>
      <th>{{$data->series_title_2}}</th>
      <th>{{$data->series_title_3}}</th>
      <th>{{$data->series_title_4}}</th>
      <th>{{$data->series_title_5}}</th>
      </tr>
   @endforeach
    </tbody>
  </table>

</body>
</html>