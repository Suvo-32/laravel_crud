<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
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

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>User Update Form</h2>
    <form action="{{route('employees.update',$employee->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$employee->name}}" required>

        <label for="id">id:</label>
        <input type="hidden" id="id" name="id" value="{{$employee->id}}" required/>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{$employee->email}}" required>

        <!-- <label for="role">Role:</label>
        <input type="text" id="role" name="role" value="{{$employee->role}}" required> -->

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <!-- <option value="">Select</option> -->
            <option value="Backend" {{($employee['role']=="Backend")?'selected':''}}>Backend</option>
            <option value="Frontend" {{($employee['role']=="Frontend")?'selected':''}}>Frontend</option>
            <option value="Analyst" {{($employee['role']=="Analyst")?'selected':''}}>Analyst</option>
            <!-- <option value="AB">AB</option> -->
        </select>

        <label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="blood_group"  required>
            <!-- <option value="">Select</option> -->
            <option value="A" {{($employee['blood group']=="A")?'selected':''}}>A</option>
            <option value="B" {{($employee['blood group']=="B")?'selected':''}}>B</option>
            <option value="O" {{($employee['blood group']=="O")?'selected':''}}>O</option>
            <option value="AB"{{($employee['blood group']=="AB")?'selected':''}}>AB</option>
        </select>

        <label for="rh">RH:</label>
        <select id="rh" name="rh" required>
            <!-- <option value="">Select</option> -->
            <option value="+" {{($employee['blood group']=="+")?'selected':''}}>+</option>
            <option value="-" {{($employee['blood group']=="-")?'selected':''}}>-</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
