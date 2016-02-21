<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "config.php"; ?>
    <title><?php echo "$name"; ?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
  </head>
  <body>
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="index.php"><?php echo "$name" ?></a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
      <h1 class="text-center"><?php echo "$name"; ?></h1>
      <h2 class="text-center"><?php echo "$slogan"; ?></h2>
    </div>
    
    <div class="plans text-center">
      <div class="container">
      <div class="row">
        <div class="col-md-4" id="plan">
          <div class="content">
            <div class="planName">
              <h1><?php echo "$plan1Name"; ?></h1>
            </div>
            
            <div class="planFeatures">
                  <?php echo $plan1feature1; ?>
                  <br>
                  <?php echo $plan1feature2; ?>
                  <br>
                  <?php echo $plan1feature3; ?>
                  <br>
                  <?php echo $plan1feature4; ?>
                  <br>
                  <?php echo $plan1feature5; ?>
            </div>
            
            <div class="purchase">
              <a href="PUT BUY NOW LINK HERE">Buy Now!</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4" id="plan">
          <div class="content">
            <div class="planName">
              <h1><?php echo "$plan2Name"; ?></h1>
            </div>
            
            <div class="planFeatures">
                <?php echo $plan2feature1; ?>
                  <br>
                  <?php echo $plan2feature2; ?>
                  <br>
                  <?php echo $plan2feature3; ?>
                  <br>
                  <?php echo $plan2feature4; ?>
                  <br>
                  <?php echo $plan2feature5; ?>
            </div>
            
            <div class="purchase">
              <a href="PUT BUY NOW LINK HERE">Buy Now!</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4" id="plan">
          <div class="content">
            <div class="planName">
              <h1><?php echo "$plan3Name"; ?></h1>
            </div>
            
            <div class="planFeatures">
                <?php echo $plan3feature1; ?>
                  <br>
                  <?php echo $plan3feature2; ?>
                  <br>
                  <?php echo $plan3feature3; ?>
                  <br>
                  <?php echo $plan3feature4; ?>
                  <br>
                  <?php echo $plan3feature5; ?>
            </div>
            
            <div class="purchase">
              <a href="PUT BUY NOW LINK HERE">Buy Now!</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    
    <div class="features text-center">
      <div class="container">
        <h1>Why Us?</h1>
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-usd"></i>
            <h2><?php echo"$featuresOne"; ?></h2>
          </div>
          
          <div class="col-md-4">
            <i class="fa fa-bolt"></i>
            <h2><?php echo"$featuresTwo"; ?></h2>
          </div>
          
          <div class="col-md-4">
            <i class="fa fa-users"></i>
            <h2><?php echo"$featuresThree"; ?></h2>
          </div>
        </div>
      </div>
    </div>
    
    <div class="reviews text-center">
      <div class="container">
        <h1>What Our Customers Have To Say</h1>
        <div class="row">
          <div class="col-md-4">
            <h3 class="reviewContent"><?php echo"$review1content"; ?></h3>
            <h3 class="reviewName"><?php echo"$review1name"; ?></h3>
          </div>
          
          <div class="col-md-4">
            <h3 class="reviewContent"><?php echo"$review2content"; ?></h3>
            <h3 class="reviewName"><?php echo"$review2name"; ?></h3>
          </div>
          
          <div class="col-md-4">
            <h3 class="reviewContent"><?php echo"$review3content"; ?></h3>
            <h3 class="reviewName"><?php echo"$review3name"; ?></h3>
          </div>
        </div>
      </div>
    </div>
    
    <div class="foot text-center">
      <p>© YOUR BUSINESS 2016</p>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>