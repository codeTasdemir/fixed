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
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a href="{{ route('manager_dashboard') }}" class="btn btn-dark btn-lg" type="submit">Back</a>
            <form action="{{route('logout')}}" method="post" class="d-flex">
                @csrf
                <button class="btn btn-danger btn-lg" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row ">
        <h2 class="text-center mt-3 "><b>My Account</b></h2>
        <div class="col-6 m-auto mt-5">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item" aria-current="true"><p class="lead">User İnformation</p></li>
                        <li class="list-group-item">Department : <b>@foreach($manager->dept_emp as $department) {{$department->dept_name}}   @endforeach</b></li>
                        <li class="list-group-item">Manager date : <b>@foreach($manager->dept_manager as $department_manager) {{$department_manager->to_date == '9999-01-01' ? "Active Manager" : $department_manager->from_date ." / ". $department_manager->to_date  }} @endforeach</b> </li>
                        <li class="list-group-item">Employee No : <b>{{$manager->emp_no}}</b></li>
                        <li class="list-group-item">First Name : <b>{{$manager->first_name}}</b></li>
                        <li class="list-group-item">Last Name :  <b>{{$manager->last_name}}</b></li>
                        <li class="list-group-item">Birth Date : <b>{{$manager->birth_date}}</b></li>
                        <li class="list-group-item">Gender :  <b>{{$manager->gender == 'M' ? "Male" : "Female"}}</b></li>
                        <li class="list-group-item">Hire Date : <b>{{$manager->hire_date}}</b></li>
                    </ul>
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
