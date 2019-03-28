<nav class="navbar navbar-default" style="margin-bottom:0; padding-bottom:0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav wow slideInDown">
      <li><a href="#"><span class="glyphicon glyphicon-earphone"></span> 8959 363 338</a></li>
       <!-- <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#" href="mailto::pshrivastava50@gmail.com" ><span class="glyphicon glyphicon-envelope"></span> mailus@snippy.in</a></li>
             </ul>
     <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <?php
	  	$getID = $this->session->userdata('user_id'); 
	  	$query = mysql_query('SELECT * FROM `users` WHERE `UID`="'.$getID.'"');
		$row = mysql_fetch_assoc($query);
		$fname = $row['Ffname'];
	  ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Help</a></li>
      <li><a href="<?= base_url('index.php/menu'); ?>">Menu</a></li>
    
      
      <?php
	  	if(	$this->session->userdata('user_id') )
		{
			?>
      
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $fname; ?></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= base_url('index.php/logout/logout_user'); ?>"> Logout</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>   
            <?php
		}
	  ?>
      <?php
	  	if(	! $this->session->userdata('user_id') )
		{
			?>
      <li><a href="<?= base_url('index.php/login'); ?>"> Login</a></li>      
            <?php
		}
	  ?>
     
  		
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bell"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
         

      </ul>
    </div>
  </div>
</nav>
