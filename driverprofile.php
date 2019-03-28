<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <style>
   #border-1 {
    border-top: white;
    border-left: white;
    border-right:white;
    width:350px !important;
    margin-left:0;
  }
  .pic {
      max-height: 40px;
  }
  body{
    background-position: center;
    background-size: cover;
  }
 #text {
     border-left:1px solid white;
     border-right:1px solid white;
     border-top:1px solid white;
     height:40px;
     width:350px;
 }

</style>
	<title>My Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="background-color:white;">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> <img src="icon.png" class="pic  mb-3"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                      <a class="nav-link" onclick='window.open("dashboard.php")'>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" onclick='window.open("driverprofile.php")'>Pool Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" onclick='window.open("busdriver.php")'>Document</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Polling Service
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" onclick='window.open("Carpooling.php")'>Car Pooling</a>
                        <a class="dropdown-item"  onclick='window.open("pollingservice.php")'>Pooling Service</a>
                        <a class="dropdown-item"  onclick='window.open("putcarsonpoll.php")'>Put Your Car on Pool</a>
                        <a class="dropdown-item"   onclick='window.open("requestpoll.php")'>Request Pool</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
             
			<div id="bck">
                 <img src="sample6.jpg" width="130px;" height="130px;" alt="" style=" margin-top: 60px; margin-left:120px; border-radius:50%;">
                 <br />
                 <br />
                 <p style="margin-left:108px; font-size: 30px;"> Ram Charan</p>
                 
                 <span style="margin-left:130px; font-size: 24px; color:#D4AF37;"><i class="fa fa-star fa-1x mr-3 " aria-hidden="true"></i>
                 <i class="fa fa-star fa-1x" aria-hidden="true"></i> <i class="fa fa-star-half-o ml-3" aria-hidden="true"></i></span>
                  <br>
                 <br>
                 <p style="margin-left:20px; font-size: 25px;"> Car Number : JK09A 1475</p>
                 <br>
                 <p style="margin-left:20px; font-size: 25px;"> Strikes Remaining : <span style="margin-left:40px;"> 3</span> </p>
                 
                 <input type="submit" class="btn btn-primary mt-4 btn-block w-200 p-2 ml-3"  name="login" value="Pool Request"  style="width:320px !important; height:50px; font-size:20px; border-radius:10px;">
                  <br />
                  <input type="submit" class="btn btn-primary  btn-block w-200 p-2 ml-3"  name="login" value=" Pool History "  style="width:320px !important; height:50px; font-size:20px; border-radius:10px;">
                
                  
                   <br />
                   
                  <p style="font-size:33px; margin-left:45px;"> Give Your Review</p>
                  <input id="textinput" name="textinput" type="text" placeholder="Full  Name" class="form-control input-md" style="height:60px; margin-left:14px; width:320px;">
                  <br />

                  <textarea class="form-control" id="textarea" name="textarea" style="height:60px; margin-left:14px; height:250px; width:320px;">Add your Comment</textarea>
                       <br />
                  <p style="margin-left:30px; font-size:25px">Moshin Ali<span style="font-size:15px;"> (Verified Passenger)<span><p>
                 <p style="margin-left:20px; font-size:20px;"><b>Comment: </b> Had a great experience in journey. Suggest to everyone.</p>
                  
                </div> 

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>