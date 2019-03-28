<?php session_start();
include('dbconnect.php');

?>
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
  #bck
  {
      
        background-color: azure;
        background-color: rgba(255, 255, 255, 0.8);
        height:100%;
        margin-top:0%;
  }
  #input 
  {
      height:60px;
      border-left:white;
      border-right:white;
      border-top:white;
      background-color:white;
     
  }


</style>
	<title>Swing! - Car Pooling</title>
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
                    <li class="nav-item active">
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
             
	                      <br />
                     <p style="font-size:30px; color:black; text-align:center;">Available Cars</p>
          
                               <?php $query = "SELECT * FROM cars_pool";
			$results = mysqli_query($db,$query);

			$x=1;
			if(mysqli_num_rows($results))
			{
				while($row = mysqli_fetch_assoc($results))
				{
					?>
                                <div class="card  ml-5 mr-5" id="cardbody" style="border:1px solid white;">
                                 	
                                    <img src="sample2.jpg" class="card-img" onclick='window.open("requestpoll.php?id=<?php echo $row['id']; ?>")'>
                                   
                             <div class="input-group mb-2 mt-3">
                                  <div class="input-group-prepend">
                                <span class="input-group-text" id="cardtype" >From</span>
                                 </div>
                               <input type="text" class="form-control" id="cardtype" value="<?php echo $row['source']; ?>"  aria-describedby="basic-addon3">
                                  </div>
                                  
                                  <div class="input-group mb-3 mt-1">
                                  <div class="input-group-prepend">
                                <span class="input-group-text" id="cardtype" >To</span>
                                 </div>
                               <input type="text" class="form-control" id="cardtype" value="<?php echo $row['destination']; ?>" aria-describedby="basic-addon3">
                                  </div>
                                 <input type="submit" class="btn btn-primary btn-block" value="Talk To The Driver" onclick="window.open('chat/chat_window.php?id=<?php  echo $row['u_id']; ?>')" >
                                </div>
                                
                                
                             
                          
                                <br />
								
				<?php }
			}
			?>
    

 

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>