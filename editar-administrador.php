<?php
$min_role_required = "full";
include("db.php");
include("_header.php");
include("_aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE site_admins SET fullname='".$_POST["fullname"]."', email='".$_POST["email"]."', phone='".$_POST["phone"]."', role='".$_POST["role"]."' WHERE aid='".$_GET["id"]."'");
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
                                <h4 class="m-b-20 header-title">Editar administrador</h4>
<?php
if(isset($_GET["id"])){
	$MostrarDatos = mysql_query("SELECT * FROM site_admins WHERE aid='".$_GET["id"]."' LIMIT 1");
	if(mysql_num_rows($MostrarDatos)>0){
	while($info=mysql_fetch_assoc($MostrarDatos)){	
	?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre completo</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["fullname"]; ?>" name="fullname" required />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                                <div class="col-md-10">
                                                    <input type="email" id="example-email" class="form-control" value="<?php echo $info["email"]; ?>" name="email" required />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="opcional" value="<?php echo $info["phone"]; ?>" name="phone" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Rol</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="role">
														<option>Seleccione</option>
														<option value="full"<?php if(isset($info["role"]) && $info["role"]=='full'){ echo ' selected';  } ?>>Completo</option>
														<option value="medium"<?php if(isset($info["role"]) && $info["role"]=='medium'){ echo ' selected';  } ?>>Medio</option>
													</select>
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
<?php  } } else { echo '<div class="row">Registro no encontrado.</div>'; } }  ?>
						
                        </div>
                    </div>
                    <!-- end container -->


<?php
include("_footer.php");
?>
