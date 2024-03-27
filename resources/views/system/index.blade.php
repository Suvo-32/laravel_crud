<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Form</title>
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

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add a New Resource</h2>
        <form action="{{route('systems.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="computer">Computer Name:</label>
                <input type="text" id="computer" name="computer" required>
            </div>
            <div class="form-group">
                <label for="cpu">CPU Name:</label>
                <input type="text" id="cpu" name="cpu" required>
            </div>
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <select id="user_id" name="user_id" required>
                    <!-- <option value="">Select User ID</option> -->
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user['name']}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
