<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-BILL VERIFICATION SYSTEM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<!-- <link href="css/style.css" rel="stylesheet" />	 -->
    <!-- =======================================================
        Theme Name: Day
        Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
<body>
    <header>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">E-BILL VERIFICATION SYSTEM</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
<!--                    <li><a href="#">Page 1</a></li>-->
<!--                    <li><a href="#">Page 2</a></li>-->
<!--                    <li><a href="#">Page 3</a></li>-->
                </ul>
            </div>
        </nav>

        <div class="container">
            <center>
                <h3>Welcome to E-Bill Verfication System</h3>
                <p>Crosscheck below for your details and click the pay button to proceed with payment.</p>
            </center>

        </div>

        </body>
        </html>
    </header>
	<section>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 well">
                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> First Name: </label>
                            <input class="form-control" value="Ajayi Nurudeen" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label> Last Name: </label>
                            <input class="form-control" value="olawale@mail.com" type="text" name="">
                        </div>
                    </div>
                </div>
                <br> <br>

                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Email : </label>
                            <input class="form-control" readonly value="0000101101" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label> Meter Number: </label>
                            <input class="form-control" value="60, Unity Street Ikotun Lagos State." readonly type="text" name="">
                        </div>
                    </div>
                </div>
                <br> <br>


                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Providers Name: </label>
                            <input value="07017400751" class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label> Email: </label>
                            <input value="ydeveloper15@gmail.com" class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
                <br>

                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Amount Due: </label>
                            <input class="form-control" value="150,000" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Enter amount to be paid: </label>
                            <input class="form-control" value="150,000" type="text" name="">
                        </div>
                    </div>

                </div>
                <br> <br>

                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Date Generated: </label>
                            <input class="form-control" value="150,000" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label> Bill Number: </label>
                            <input class="form-control" value="B100111121" type="text" name="">
                        </div>
                    </div>
                </div>
                <br> <br>

                <div class="row col-lg-offset-1">
                    <div class="col-lg-5 ">
                        <div class="form-group">
                            <label> Address: </label>
                            <input class="form-control" value="150,000" type="text" name="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label> <span>Enter Address if differet from above</span>: </label>
                            <input class="form-control" value="B100111121" type="text" name="">
                        </div>
                    </div>
                </div>
                <br> <br>


                <center>
                    <input type="submit" class="btn btn-primary" value="PAY NOW!">
                </center>
            </div>
		</div>
<!--        1. Split name to first name and lastname-->
<!--        2. Remove dupicate email field-->
<!--        3. Add Providers name field-->
<!--        4. Add new field for payment amount-->
<!--        5. add new address incase the default address isnt correct-->
<!--        6. add field for the date the bill was generated-->
	</section>
</body>
</html>