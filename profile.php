<?php
include("db.php");
include("_header.php");
include("_aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">

<?php
	
	$profile_table = $_GET["type"];
	switch($profile_table){
		case 'admin':
			$profile_table = 'site_admins';
			$ID = 'aid';
		break;
		case 'provider':
			$profile_table = 'store_providers';
			$ID = 'pid';
		break;
		case 'customer':
			$profile_table = 'store_customers';
			$ID = 'cid';
		break;
	}
	
	$profile = mysql_query("SELECT * FROM {$profile_table} WHERE {$ID} = '".$_GET["id"]."' ");
	if(mysql_num_rows($profile)>0){
		while($data=mysql_fetch_assoc($profile)){
?>					
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="../uploads/img/profile/<?php echo $data["picture"]; ?>" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5"><?php echo $data["fullname"]; ?></h4>
                                        </div>

                                        <?php	if($user["aid"]!==$_GET["id"]){ ?><button type="button" class="btn btn-custom m-t-10">Message</button><?php } ?>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Profile
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="false">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
												<?php if($data["fullname"]){ ?>
                                                    <div class="m-b-20">
                                                        <strong>Nombre completo</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $data["fullname"]; ?></p>
                                                    </div>
												<?php } ?>
												<?php if($data["phone"]){ ?>
                                                    <div class="m-b-20">
                                                        <strong>Telefono</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $data["phone"]; ?></p>
                                                    </div>
												<?php } ?>
												<?php if($data["email"]){ ?>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $data["email"]; ?></p>
                                                    </div>
												<?php } ?>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                            <!-- Social -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Social</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="social-links list-inline m-b-0">
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Social -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Biography</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <h5 class="header-title text-uppercase">About</h5>
                                                    <p>It was popularised in the 1960s with the release of Letraset
                                                        sheets containing Lorem Ipsum passages, and more recently with
                                                        desktop publishing software like Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Username">Username</label>
                                                    <input type="text" value="john" id="Username" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="AboutMe">About Me</label>
                                                    <textarea style="height: 125px" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>
<?php
		}
	} else { echo '<div class="row"><p>La consulta retorn&oacute; 0 registros en nuestra Base de datos.</p></div>';  }
?>
						
					
					</div>
                    <!-- end container -->


<?php
include("_footer.php");
?>