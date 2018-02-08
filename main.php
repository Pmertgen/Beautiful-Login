<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    
</head>

<body id="main">

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
        	
         	 <a class="navbar-brand" href="#">Navbar</a>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                  </li class="nav-item">
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>

    <div class="container">
    	
		 <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">Beautiful Login</h4>
                <form action="index.php" method="post">
				<input type="email" name="email" placeholder="E-Mail">
				<input type="password" name="pw" placeholder="Password">
				<button href="#" class="btn btn-primary" type="submit" name="submit">Login</button>
				</form>
            </div>
        </div>
    	
    </div>

</body>
</html>