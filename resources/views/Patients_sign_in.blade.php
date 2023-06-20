<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <style>
    body {
      background-image: url('images/3.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style> 

</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <br><br><br>
  <div class="row">
    <div class="col-md-7">

    </div>

    <div class="col-md-4">

      <div class="card">
        <div class="p-3 mb-0 bg-primary-subtle text-emphasis-primary">
          <div class="card-head">

            <h1 align='center'>Patients Login</h1>
          </div>
          <div class="card-body">  

            <form name="form" action="check.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input class="form-control" type="text" placeholder="Enter your User Name"
                  aria-label="default input example" id="user" name="user">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>

              
              <center> <a href="http://127.0.0.1:8000/signup" class="btn btn-primary"> Submit</a></center>
            </form>
           
          </div>
        </div>
      </div>
      <br>
      
      <div class="card">

<p style="font-size:20px;">if you dont have a accout click here</p>

      <center> <a href="http://127.0.0.1:8000/Register" class="btn btn-primary"> Register</a></center>

        

         
            <br>

          </div>
        
        <div class="col-md-1">

        </div>

      </div>

      <div class="row">
        <div class="col-md-8">

        </div>

        <div class="col-md-2">

          <br>

        </div>
      </div>

      <div class="col-md-2">

      </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>