<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY ASSIGNMENT</title>
</head>
<body>
    <table>
    <tr>
    <th>Employee_ID</th>
    <th>Name</th>
    <th>Gender</th>
    <th>DOJ</th>
    <th>Status</th>
   </tr>

    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee['employee_id']}}</td>
            <td>{{$employee['name']}}</td>
            <td>{{$employee['gender']}}</td>
            <td>{{$employee['status']}}</td>
            <td>{{date('d-m-y', strtotime($employee['doj'])) }}</td>
            
            @if((abs(strtotime($employee->doj)-strtotime($currdate))/60/60/24/365)>5 && $employee->status==1)
            {{Turn the colour of the row as Green}};
            @endif
        
        </tr>
        @endforeach
    </tbody>

    </table>
</body>
</html>