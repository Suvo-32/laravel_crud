<?php
$message = session('message');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-H8oVKJOQVGGCdfFNM+9gLKN0xagtq9oiNLirmijheEuqD3kItTbTvoOGgxVKqNiB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.2/dist/js/coreui.bundle.min.js" integrity="sha384-yaqfDd6oGMfSWamMxEH/evLG9NWG7Q5GHtcIfz8Zg1mVyx2JJ/IRPrA28UOLwAhi" crossorigin="anonymous"></script>
</head>
<body>
<style>
    .card{
        min-width: 500px;
        max-width: 800px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
    }
</style>

     

   
    @if ($message)
    <div class="container">
        <div class=" alert alert-success" role="alert">
        {{ $message }}
        </div>
    </div>
    @endif

    <div class="container">
    <div class="alert alert-primary d-flex justify-content-between align-items-center" role="alert">
        <div>Employee Management</div>
        <div>
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add New Employee</a>
            <a href="{{ url('employees/employees') }}" class="btn btn-primary">Display Employees</a>
        </div>
    </div>
</div>

</body>
</html>
