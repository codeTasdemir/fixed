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
    <div class="row">

        <div class="col-6 m-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="lead mb-3">Add Employee</h4>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('employee_store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <select class="form-select" name="dept_no" >
                                <option selected value="@foreach($manager->dept_manager as $department) {{$department->pivot->dept_no}}  @endforeach" > @foreach($manager->dept_emp as $department) {{$department->dept_name}}  @endforeach</option>
                            </select>
                        </div>
                        @error('dept_no') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="FirtsName" aria-label="Username" name="first_name" aria-describedby="basic-addon1">
                        </div>
                        @error('first_name') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="LastName" aria-label="surname"  name="last_name" aria-describedby="basic-addon1">
                        </div>
                        @error('last_name') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="mb-3">
                            <select class="form-select" name="gender" aria-label="">
                                <option selected>Please Select Gender</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>
                        @error('gender') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" aria-describedby="basic-addon1">
                        </div>
                        @error('birth_date') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" aria-describedby="basic-addon1">
                        </div>
                        @error('hire_date') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="mb-3">
                            <select class="form-select" name="title" aria-label="">
                                <option selected>Please Select Title</option>
                                @foreach($title_names as $title_name)
                                    <option value="{{$title_name->title}}">{{$title_name->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('title') <p class="text-danger">{{$message}}</p> @enderror
                        <button type="submit" class="btn btn-success float-end">Add Employee</button>
                    </form>
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
