<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Data Table</title>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-H8oVKJOQVGGCdfFNM+9gLKN0xagtq9oiNLirmijheEuqD3kItTbTvoOGgxVKqNiB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-yaqfDd6oGMfSWamMxEH/evLG9NWG7Q5GHtcIfz8Zg1mVyx2JJ/IRPrA28UOLwAhi" crossorigin="anonymous"></script>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    td.delete, td.update {
        text-align: center;
    }

    .delete-icon, .update-icon {
        cursor: pointer;
        color: #f44336;
        margin: 0 5px;
    }

    .update-icon:hover {
        color: #2196F3;
    }
</style>
</head>
<body>
<div class="container">
    <h2>User Data Table</h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Blood Group</th>
                <!-- <th>RH</th> -->
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>
                <td>{{$data['blood group']}} <sup>{{$data->rh}}</sup></td>
                <td><form action="{{route('employees.destroy',$data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="border: none; background-color: transparent;">
            <span class="delete-icon">&#128465;</span>
        </button>
                </form></td>
                <td class="update">
                <form action="{{route('employees.edit',$data->id)}}" method="get">
                    @csrf
                    @method('UPDATE')
                    <button type="submit" style="border: none; background-color: transparent;">
                    <span class="update-icon">&#9998;</span>
                  </button>
                </form> </td>
            </tr>
            @endforeach
            
            <!-- Add more rows for additional data -->
        </tbody>
    </table>
</div>
<script>
   $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
