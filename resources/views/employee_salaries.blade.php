<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <a href="{{ route('employee_dashboard') }}" class="btn btn-dark btn-lg" type="submit">Back</a>
            <form method="post" class="d-flex" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger btn-lg" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <h2 class="mt-5 text-center">My Salaries </h2>
    <div class="row">
        <div class="col">
            @if($salaries->salaries->isEmpty())
                <div class="col-6 m-auto mt-5">
                    <div class="alert alert-danger">
                        <h4 class="lead">Dear employee {{ session('userSessions')['first_name']. " " . session('userSessions')['last_name']  }} ,You have not received any salary yet.</h4>
                    </div>
                </div>
            @else
            <table class="table mt-5">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">From Date</th>
                    <th scope="col">To Date</th>
                    <th scope="col">Salary</th>
                </tr>
                </thead>
                <tbody>
                @foreach($salaries->salaries as $salary)
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <td>{{$salary->from_date}}</td>
                        <td>{{$salary->to_date}}</td>
                        <td>{{"$ ". $salary->salary}}</td>
                    </tr>
                @endforeach
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"> Total salary : {{ "$ ". $salaries->salaries()->sum('salary')}}</th>
                </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
