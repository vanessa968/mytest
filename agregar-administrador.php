<?php
$min_role_required = "full";
include("db.php");
include("_header.php");
include("_aside.php");

if(isset($_POST["registrar"])){
	$password_encrypt = md5($_POST["password"]);
	$session = rand(0,10000000000);
	if($_POST["password"]==$_POST["confirm_password"]){
		//Comprobar que no exista un email anteriormente
		$revisar_email = mysql_query("SELECT email FROM site_admins WHERE email='".$_POST["email"]."'");
		if(mysql_num_rows($revisar_email)>0){
			echo '<script>alert("El correo seleccionado ya esta en uso");</script>';
		} else {
			//Con clientes y proveedores esto es aceptable porque pueden no contar con un emaill personal o sea el correo de una empresa cuyo dominio sea el mismo
			$datos = mysql_query("INSERT INTO site_admins SET fullname='".$_POST["fullname"]."', email='".$_POST["email"]."', phone='".$_POST["phone"]."', password='".$password_encrypt."', role='".$_POST["role"]."', request='confirmed', session='".$session."', date_signin=NOW()");
			if($datos){
				echo '<script>alert("Exito");</script>';
			} else {
				echo '<script>alert("Fallo");</script>';
			}
		}			
	} else {
		echo '<script>alert("La constras&ntilde;as no coinciden");</script>';
	}
}

?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						



                            <div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Agregar cliente</h4>

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
                                                <label class="col-md-2 control-label">Contrase&ntilde;a</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="" name="password" required/>
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Confirmar contrase&ntilde;a</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" value="" name="confirm_password" required/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Telefono</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" placeholder="opcional" name="phone" />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Rol</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="role">
														<option>Seleccione</option>
														<option value="full">Completo</option>
														<option value="medium">Medio</option>
													</select>
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
