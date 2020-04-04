<!-- <!DOCTYPE html>
<html>
<head><title>Weather Report Using api</title>

</head>

<body>


	<center><br><br>


		<form method="GET" action="get.php">
		<h1>Type City and Country</h1>
		<br><p>For Example Delhi,in</p>
			<input type="text" name="q" required>
			<input type="submit" name="submit">
		</form>
	</center>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <title>WeatherApp</title>

    <style type="text/css">

    html {
        background: url(weather10.jpg) no-repeat
        center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;

    }

    /* .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  height: 40px;
  line-height: 30px;
   background-color: blueviolet;
   color: white;
   text-align: center;
} */


    body {
        background:none;

    }

    p {
        color: #00008B;
    }
    .container {
        text-align: center;
        margin-top: 200px;
        width: 450px;
        color: #00008B;
    }

    .container p {
        text-align: center;
        font-size: 30px;
        margin-top: 100;


    }
    input {
        margin: 20px 0;
    }


    #weather {
        margin-top: 20px;
    }
    </style>

<center>

<!-- <a href="http://blog.hackerrahul.com"> Blog</a>/<a href="http://hackerrahul.com">HackerRahul Portfolio</a>/ -->
<a href=""><p style="font-size: 30px;">Welcome to My Weather App</p></a>
<!-- <a href="https://www.youtube.com/channel/UCThD9sEw37dndHMyFCXPFVQ">/Subscribe Me on Youtube</a>  -->
</center>

    </head>

    <body>

    <div class="container">



        <br> <br>

        <h3>What's the weather ? </h3>

        <form method="GET" action="get.php">
        <div class="form-group">
        <label for=" ">Enter the name of a city.</label>

        <br><br>

                <input type="text" name="q" required>
                <input type="submit" name="submit">
            </form>
        </div>


  <!-- Copyright -->

  <div class="footer">
  <p>© 2020 Copyright: Abass Durodola</p>
</div>
  <!-- Copyright -->
        </body>
        </html>
