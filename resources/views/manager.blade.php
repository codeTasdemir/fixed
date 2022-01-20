<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <title>Login System</title>
</head>
<body>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a href="{{route('manager_dashboard')}}" class="btn btn-dark btn-lg" >Back</a>
            <form action="{{route('logout')}}" method="post" class="d-flex">
                @csrf
                <button class="btn btn-danger btn-lg" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row ">
        <div class="col-10 m-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5 mb-5">
                        <h5>Employee Table</h5>
                        <p class="lead">Employees working in my department</p>
                        <table id="table_id" class="display table mb-5">
                            <thead>
                            <tr>
                                <th scope="col">Employee No</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Birth Date</th>
                                <th scope="col">Hire Date</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees_by_department as $employee_by_department)
                                <tr>
                                    <th>{{$employee_by_department->emp_no}}</th>
                                    <td>{{$employee_by_department->first_name}}</td>
                                    <td>{{$employee_by_department->last_name}}</td>
                                    <td>{{$employee_by_department->birth_date}}</td>
                                    <td>{{$employee_by_department->hire_date}}</td>
                                    <td>Active Employee</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


</body>
</html>
