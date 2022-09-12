<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>form</title>
</head>
<body>
    <div class="container">
        <h1 style="color:blue">{{$title}}</h1>
        <div class="row">
            <div class="col-sm-4">
                <form action="{{$url}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" value="{{isset($user->name) ? $user->name : ''}}">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email </label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="{{isset($user->email) ? $user->email : ''}}">
                     
                    </div>
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" class="form-control" id="address" placeholder="address" value="{{isset($user->address) ? $user->address : ''}}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>