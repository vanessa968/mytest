<?php
$min_role_required = "full";
include("db.php");
include("_header.php");
include("_aside.php");

if(isset($_POST["registrar"])){
	$datos = mysql_query("INSERT INTO store_providers SET fullname='".$_POST["fullname"]."', email='".$_POST["email"]."', address='".$_POST["address"]."', phone='".$_POST["phone"]."', date_signin=NOW()");
	if($datos){
		echo '<script>alert("Exito");</script>';
	} else {
		echo '<script>alert("Fallo");</script>';
	}
}

?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						



                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Agregar proveedor</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre completo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="fullname" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" value="" name="email" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Direcci&oacute;n</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="address"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="" name="phone" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input type="submit" class="btn btn-primary" name="registrar" value="Registrar" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>

						
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("_footer.php");
?>
