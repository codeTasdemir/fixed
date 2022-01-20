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

<div class="container">
    <div class="row">
        <div class="col-8 m-auto mt-5">
            <div class="card p-4">
                <div class="card-title d-flex justify-content-between">
                    <div><p class="text-success lead"> {{session('userSessions')['first_name'] ." ". session('userSessions')['last_name']}} , what do you want to do? </p></div>
                    <form action="{{route('logout')}}" method="post" class="d-flex">
                        @csrf
                        <button class="btn btn-danger btn-lg" type="submit">Logout</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{route('employee_account')}}" type="button" class="list-group-item list-group-item-action lead">My Account</a>
                        <a href="{{route('employee_salaries')}}" type="button" class="list-group-item list-group-item-action lead">My salaries</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
