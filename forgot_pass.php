<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Sanguine</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--<link href="jumbotron.css" rel="stylesheet">-->
  </head>
<script>
  function checkEmail(theForm) 
{
    var pass1 = document.getElementById("inputEmail1").value;
    var pass2 = document.getElementById("inputEmail2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Emailaddresses Do not match");
        document.getElementById("inputEmail1").style.borderColor = "#E34234";
        document.getElementById("inputEmail2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
        //alert("Passwords Match!!!");
    }
    return ok;
}
</script>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </div>
          </button>
          <a class="navbar-brand" href="index.html"></a>
      </div>
    </div>
	
	
	

	
	 <div class="jumbotron">
      <div class="container">
		<div class = "row">
		<div class="col-md-12">
		<h1 style = "text-align: center">Welcome to Sanguine</h1>
		</div>
        </div>
		</div>
	  </div>
    </div>
	
<div class="btn-group btn-group-justified">
  <a class="btn btn-default" href="user_login.html">Home</a>
  <a class="btn btn-default" href="new_user.php">Register</a>
  <a class="btn btn-default" href="maps.php">Send Blood Request</a>
  <a class="btn btn-default" href="#">About Us</a>
</div>
	
	<div class="row">
	<div class="col-lg-12">
	<form class="form-horizontal" action="user_login.html" method="post" onsubmit="return checkEmail()">
  <fieldset>
  <div class = "well col-lg-12">
    <legend style="padding-left:80px">Enter your email address</legend>
    <div class="form-group">
      <label for="inputEmail1" class="col-lg-2 control-label">emailAddress</label>
      <div class="col-lg-4">
        <input type="email" class="form-control" id="inputEmail1" placeholder="emailAddress"required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail2" class="col-lg-2 control-label">Confirm emailAddress</label>
      <div class="col-lg-4">
        <input type="email" class="form-control" id="inputEmail2" placeholder="Confirm emailAddress"required>
      </div>
    </div>
    </div>
	<button type="submit" class="btn btn-success" style="margin-left:2em">Submit
	</button>

  
      </fieldset>
</form>
</div>
</div>
	
		
	<div class="container">
	<hr>
	<footer>
        <p>&copy; Sanguine 2015</p>
      </footer>
    </div> <!-- /container -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
