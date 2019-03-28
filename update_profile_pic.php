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
.takephoto{
    max-width:100%;
    height:420px;
}
#button 
{
  width:350px;  
  height:50px;
  margin-bottom:50px;
}

</style>
<title>Swing</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="background-color:white;">
<br />
<p> <span style="margin-left:10px;"> <a href="busdriver.html"><i class="fa fa-arrow-left fa-1x ml-2" aria-hidden="true"></i></a></span>  <span style="text-align:right; margin-left:270px; font-size:20px;"><a href="help.html">Help</a></span>
<br />
<br/>
<p style="margin-left:13px; font-size: 25px; margin-right:3px;"> Please upload the document by taking a picture.</p>
    
    
     <img src="sample6.jpg" id= "img3" class="takephoto">
 <br />   <br />

                     
</div> 
</form>

<input type="file" name="img_3" id="imgu3" class="btn btn-primary" onchange="previewFile3()" ><br>
                      
						  

                          <script>
                            function previewFile3(){
                              var preview = document.getElementById('img3'); //selects the query named img
                              var file    = document.getElementById('imgu3').files[0]; //sames as here
                              var reader  = new FileReader();

                              reader.onloadend = function () {
                                preview.src = reader.result;
                              }

                           if (file) {
                               reader.readAsDataURL(file); //reads the data as a URL
                           } else {
                               preview.src = "";
                           }
                          }

                    
                      </script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>