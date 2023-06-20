<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bookingsystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <style>
    body {
      background-image: url('images/4.jpg');
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

            <h1 align='center'>fill your booking date and time</h1>
          </div>
          <div class="card-body">

          <form action="/passdata" method="POST">
          {{csrf_field()}}

                  
     <div class="mb-3">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="Ex:thilina kotawattha" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  
  <div class="mb-3">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="077551010" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>

  <div class="mb-3">
    <label for="adult" class="form-label">Age</label>
    <input type="number" id="age" name="age" placeholder="2" min="1" required>
  </div>

  <div class="mb-3">
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="gen">
  <option selected>select your Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  
</select>
</div>

<div class="mb-3">
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="doctor">
  <option selected>select your doctor here</option>
  <option value="Dr.Kularathne">Dr.Kularathne</option>
  <option value="Dr.Abahayarathne">Dr.Abahayarathne</option>
  <option value="Dr.Sirimewan">Dr.Sirimewan</option>
  <option value="Dr.Ranmalinda">Dr.Ranmalinda</option>
</select>
</div>

<div class="mb-3">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>
  

  <hr>
  <div class="mb-3">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>

  <button class="btn btn-primary" input type="submit" name="submit" value="Submit">Submit</button>
  
  <center> <a href="http://127.0.0.1:8000/signup" class="btn btn-primary"> Back</a></center>
</form>
          </div>
        </div>
      </div>

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

   
 
 
  </body>
</html>