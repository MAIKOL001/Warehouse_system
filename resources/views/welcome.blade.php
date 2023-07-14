<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="">

<div class="container-fluid">

  <div class="row">
    <div class="col-sm-6" style="background-color:#be1204; padding:4rem;">
   <h1 style="color:whitesmoke;">B O X L E O <span style="color:#1A405B;">C O U R I E R</span></h1>





            <P style="color:whitesmoke;">I N V E N T O R Y - M A N A G E M E N T</P>
        <p style="color:whitesmoke;">
            Welcome to our Inventory Management System!<br>

            We understand that managing inventory can be a complex and time-consuming<br>
            process, which is why we have designed this system to make it easy and efficient for you.<br>
            Our system provides you with real-time information about your<br>
            inventory levels, locations, and movements, allowing you to make informed decisions<br>
            about your business. With our user-friendly interface, you can easily add, update,<br> and track your
            inventory, ensuring that<br> you have the right products in the right place at the right time.</p>

<div class="col-sm-6" style="background-color:pink; padding:1rem;">



            <a href="{{ route('login') }}" class="btn btn-danger">Log in</a>

                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>

    </div>
            </div>





    <div class="col-sm-6" style="background-color:green; padding:3rem;">
    <img style="width:100%; height:100%;" src="https://cdn.dribbble.com/users/920320/screenshots/13074657/media/60e9f84a43943fe745de5a652c8c4777.gif">
    </div>


    {{-- <div class="col-sm-12" style="background-color:pink; padding:1rem;">



            <a href="{{ route('login') }}" class="btn btn-danger">Log in</a>

                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>

    </div> --}}
  </div>
</div>

</body>
</html>





