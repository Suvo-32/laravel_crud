<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Information</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f8f8f8;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .unique-style {
        background-color: #f2f2f2;
        color: #333;
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>User Information</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Computer</th>
            <th>CPU</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data['name']}}</td>
            <td>{{$data['email']}}</td>
            <td>{{$data['system']['computer']}}</td>
            <td>{{$data['system']['cpu']}}</td>
        </tr>
    </tbody>
</table>

</body>
</html>
