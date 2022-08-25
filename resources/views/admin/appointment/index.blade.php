@extends("admin.main")
@section("content")
    <!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
<h1>Appointment Table</h1>
<table id="customers">
    <tr>
        <th>#</th>
        <th>Patient's Full Name</th>
        <th>Patient's Email</th>
        <th>Complaint</th>
        <th>Doctor's Name</th>
        <th>Date</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Maria Anders</td>
        <td>Germany</td>
        <td>Berglunds snabbköp</td>
        <td>Christina Berglund</td>
        <td>Berglunds snabbköp</td>
    </tr>
</table>
</body>
</html>
@endsection
