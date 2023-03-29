<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<form action="{{url('/')}}/signup" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="container">
    <h1 class="text-center">Signup-form</h1>
    <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="" placeholder="Enter name">
    <small id="HelpId" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
    
</body>
</html>
