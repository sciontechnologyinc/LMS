        <!-- Header-->
    
        <link rel="stylesheet" href="<?php echo ('/css/headercss.css'); ?>">


        <header id="header" class="header">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
             


                    </div>
                </div>

    <div class="col-sm-5">
    <div class="user-area dropdown float-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src="<?php echo asset('storage/uploads/admin.png'); ?>" class="admin"> <?php echo e(Auth::user()->email); ?> <i class="fa fa-caret-down"></i>
                                </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                               

                                <a class="nav-link" href="<?php echo e(url('changepassword')); ?>"><i class="fa fa-cog"></i> Settings</a>

                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                        </div>
                    </div>

        <div class="notification-menu float-right">
		    <div class="open">
			<a href="#" class="btn btn-default info-number" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-bell"></i>

<<<<<<< HEAD
                
                <span class="badge badge-danger">0</span>
=======


 <?php
 
 $dataPoints = array();
 //Best practice is to create a separate file for handling connection to database
 try{
      // Creating a new connection.
     // Replace your-hostname, your-db, your-username, your-password according to your database
     $link = new \PDO(   'mysql:host=127.0.0.1;dbname=lms;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
     
     $handle = $link->prepare('SELECT COUNT(*) as TOTAL FROM reservations where notification = 1'); 
     $handle->execute(); 
     $result = $handle->fetchAll(\PDO::FETCH_OBJ);
         
     foreach($result as $row){
         array($row->TOTAL);
     }
     $link = null;
 }
 catch(\PDOException $ex){
     print($ex->getMessage());
 }

 
     
 ?>

<script>
var json = { ... };
var key = "foo";
delete json[key]; 
</script>

                <span class="badge badge-danger"> <?php echo json_encode($row, JSON_NUMERIC_CHECK); ?> </span>
>>>>>>> 80f6e45af3b238790893dc0e52b6d7369206a342

               
			</a>
			<div class="dropdown-menu dropdown-menu-head notifdropdown pull-right">
				<h5 class="title">You have <?php echo json_encode($row, JSON_NUMERIC_CHECK); ?> Notification </h5>
				<div class="dropdown-list normal-list">
					<div class="new text-center"><a href="<?php echo e(url('reservations')); ?>"> View new reservation request</a></div>
                </div>
		        	</div>
                  </div>
             </div>

    </div>  


        </header><!-- /header -->
        <!-- Header-->