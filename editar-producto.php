<?php
$min_role_required = "full";
include("db.php");
include("_header.php");
include("_aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE store_items SET item_name='".$_POST["item_name"]."', details='".$_POST["details"]."', price='".$_POST["price"]."', category='".$_POST["category"]."', stock='".$_POST["stock"]."', status='".$_POST["status"]."', provider='".$_POST["provider"]."' WHERE item_id='".$_POST["id"]."'");
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
                                <h4 class="m-b-20 header-title">Editar producto</h4>
								
								
<?php
if(isset($_GET["id"])){
	$MostrarDatos = mysql_query("SELECT * FROM store_items WHERE item_id='".$_GET["id"]."' LIMIT 1");
	if(mysql_num_rows($MostrarDatos)>0){
	while($info=mysql_fetch_assoc($MostrarDatos)){	
	?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form"  method="post" action="" >
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre del producto</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["item_name"]; ?>" name="item_name" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Detalles</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="details"><?php echo $info["details"]; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Precio</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="<?php echo $info["price"]; ?>" name="price" required />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Categor&iacute;a</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="category" required>
														<option value="">Seleccione</option>
													<?php
														$MostrarCategorias = mysql_query("SELECT * FROM store_categories ORDER BY id DESC");
														if(mysql_num_rows($MostrarCategorias)>0){
															while($C=mysql_fetch_assoc($MostrarCategorias)){
																if($info["category"]==$C["id"]){ $selected=' selected'; } else { $selected=''; }
																echo '<option value="'.$C["id"].'"'.$selected.'>'.$C["label"].'</option>';
															}
														}
													?>
													</select>
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Proveedor</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="provider" required>
														<option value="">Seleccione</option>
													<?php													
														$MostrarProveedores = mysql_query("SELECT * FROM store_providers ORDER BY pid DESC");
														if(mysql_num_rows($MostrarProveedores)>0){
															while($P=mysql_fetch_assoc($MostrarProveedores)){
																if($info["provider"]==$P["pid"]){ $selected=' selected'; } else { $selected=''; }
																echo '<option value="'.$P["pid"].'"'.$selected.'>'.$P["fullname"].'</option>';
															}
														}
													?>
													</select>
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Disponibilidad</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="stock" name="stock" required />
                                                </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Estado de publicaci&oacute;n</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" value="<?php echo $info["status"]; ?>" name="status" required>
														<option>Seleccione</option>
														<option value="published">Publicado</option>
														<option value="draft">Borrador</option>
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
