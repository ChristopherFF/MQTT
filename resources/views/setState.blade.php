<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            /*padding: 5px;*/
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Title Goes Here</title>
</head>
<body>



<div class="container">

    <h3>Showroom/Test site</h3>
    <h3>VRM ID: 0cae7d0df73d</h3>

    <div class="row pt-2">
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/1/1" class="btn btn-success btn-lg active" role="button" aria-pressed="true">1: On</a></div>
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/1/0" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">1: Off</a></div>
    </div>

    <div class="row pt-2">
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/2/1" class="btn btn-success btn-lg active" role="button" aria-pressed="true">2: On</a></div>
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/2/0" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">2: Off</a></div>
    </div>

    <div class="row pt-2">
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/3/1" class="btn btn-success btn-lg active" role="button" aria-pressed="true">3: On</a></div>
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/3/0" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">3: Off</a></div>
    </div>

    <div class="row pt-2">
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/4/1" class="btn btn-success btn-lg active" role="button" aria-pressed="true">4: On</a></div>
        <div class="col-6"><a href="/setMeterState/{{ $vrm_id }}/4/0" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">4: Off</a></div>
    </div>

    <table class="mt-5">
        <tr>
            <th>Site Name</th>
            <th>VRM ID</th>
            <th>Meter ID</th>
            <th>Set State</th>
            <th>Time Set</th>
            <th>Reported State</th>
            <th>Reported Time</th>
        </tr>
        @foreach($meters as $meter)
            <tr>
                <td>{{ $meter->site_name }}</td>
                <td>{{ $meter->vrm_id }}</td>
                <td>{{ $meter->meter_id }}</td>
                <td>{{ $meter->set_state }}</td>
                <td>{{ $meter->time_set }}</td>
                <td>{{ $meter->verified_state }}</td>
                <td>{{ $meter->time_verified }}</td>
            </tr>
        @endforeach
    </table>

</div>




</body>
</html>
