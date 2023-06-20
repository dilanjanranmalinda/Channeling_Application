
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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

  <div class="row">

    <div class="col-md-7">

    </div>
    <div class="col-md-4">
      <br><br>

      <div class="card">
        <div class="p-3 mb-0 bg-primary-subtle text-emphasis-primary">
          <div class="card-head">

            <h1 align='center'>Sign Up Form</h1>
          </div>
          <div class="card-body">

            <form action="/check" method="GET">
                {{csrf_field()}}

              <div class="mb-3">
                <label for="UserName" class="form-label">User Name</label>
                <input class="form-control" type="text" placeholder="Username" aria-label="default input example"
                  id="name" name="name">
                <div id="emailHelp" class="form-text"></div>
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="mail" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com"
                  aria-describedby="emailHelp" id="mail" name="mail">
                <div id="emailHelp" class="form-text"></div>

              <div class="mb-3">
                <label for="12345V" class="form-label">NIC</label>
                <input type="NIC" class="form-control" id="12344V" placeholder="1234455V"
                  aria-describedby="emailHelp" id="NIC" name="NIC">
                <div id="emailHelp" class="form-text"></div>

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="pass" class="form-control" id="exampleInputPassword1" id="pass" name="pass" "
                  placeholder=" Enter your password">
              </div>

              <div class="mb-3">
                <label for="UserName" class="form-label">Phone</label>
                <input class="form-control" type="number" placeholder="07xxxxxxxx" aria-label="default input example"
                  id="number" name="number">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
              </div>
              
              <button type="submit2" class="btn btn-primary" name="submit2" value="submit"></button>
              
              <center> <a href="http://127.0.0.1:8000/signup" class="btn btn-primary"> Booking</a></center>
            </form>

          </div>
        </div>
      </div>
      <br>

  

          </div>
        </form>


      </div>
    </div>



    <div class="col-md-1">

    </div>
  </div>

  

</body>

</html>
