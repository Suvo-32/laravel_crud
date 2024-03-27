<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
            color: #333;
        }

        td {
            color: #555;
        }

        .actions {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .actions button {
            padding: 6px 12px;
            margin-right: 6px;
            border: none;
            background-color: transparent;
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s;
        }

        .actions button:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Computer</th>
                    <th>CPU</th>
                    <th>User ID</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->computer}}</td>
                    <td>{{$data->cpu}}</td>
                    <td>{{$data->users_id}}</td>
                    
                    <td><form action="{{route('systems.destroy',$data->id)}}" method="post">
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
                <!-- Add more rows for additional resources -->
            </tbody>
        </table>
    </div>
</body>

</html>
