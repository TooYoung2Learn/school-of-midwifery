<?php 
require "dynamic_pages/admin.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

        <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css2/ie-emulation-modes-warning.js" ></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css2/carousel.css" rel="stylesheet">
    <style>
	.text_color {
		
		color:#d43f3a;
		font-weight:bold;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:24px;}
	</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="Images2/slider4.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="text-capitalize " style="color:#000;">Welcome to School of Midwifery Minna.</h1>
            
              <blockquote class="text_color">
                     Nurses have come a long way in a few short decades. In the past our attention focused on Physics,
                     Mental and emotional healing. Now we talk of healing your life, healing the environment and healing the planet.<br>
                      Lynn Keegan
                     </blockquote>
                               

            <p>  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Staff Login </button></p>

  <!-- Modal -->
  <div class="modal fade in" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">..
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
             <h4 style="color:#F00;" class="modal-title">
                   <span class="glyphicon glyphicon-lock"> 
                   </span>
                    Login 
               </h4>
            
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="form-group"> 
                <label for="username" class="col-xs-3 control-label text-success"> <span class="glyphicon glyphicon-user"> </span>User Name: </label>
                <div class="col-xs-9">
                <input type="text" name="user_id" class="form-control"  id="username" placeholder="Enter Your User Name" />
                </div>
                </div>
                
                <div class="form-group">
                <label for="pwd" class="col-xs-3 control-label text-success"> <span class="glyphicon glyphicon-eye-open"> </span>Password </label>
                <div class="col-xs-9">
                <input type="password" name="pass" class="form-control" id="pwd"  placeholder="Enter Password"/>
                </div>
                </div>
                <div>
                
               
                <p class="text-info"> Forgot <a href="#"> password </a></p>
                 <P class=" col-xs-12">
                <?php echo $error_mess;?>
                </P>
                </div>
               
            
                

        </div>
        <div class="modal-footer">
        <div class="col-xs-offset-9">
        <input type="submit" class="btn btn-default btn-default pull-left"  name="submit" value="Login"> 
           </form>  
         </div>
         
                
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
        </div>
      </div>
      
    </div>
  </div>

            </div>
          </div>
        </div>
              </div>
      
            </div>
         </div><!-- /.carousel -->
          
          <div>   <p class="text-center h3 text-capitalize">Powered by IT Department<br>
          &#169 2015  School of midwifery, Minna. </p>
</div>
  
  
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="css2/jquery.min.js"></script>
    <script src="css2/bootstrap.min.js"></script>
    <script src="css2/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css2/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
