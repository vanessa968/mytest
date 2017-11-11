<?php
include("db.php");
include("_header.php");
include("_aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Administradores</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Direcci&oacute;n</th>
                                            <th>Telefono</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarProveedores = mysql_query("SELECT * FROM store_providers ORDER BY pid DESC");
if(mysql_num_rows($MostrarProveedores)>0){
	while($P=mysql_fetch_assoc($MostrarProveedores)){
?>
                                        <tr>
                                            <td><?php echo $P["fullname"]; ?></td>
                                            <td><?php echo $P["email"]; ?></td>
                                            <td><?php echo $P["address"]; ?></td>
                                            <td><?php echo $P["phone"]; ?></td>
                                            <td><i class="mdi mdi-email-outline"></i> - <i class="mdi mdi-pencil"></i> - <i class="mdi mdi-delete"></i></td>
                                        </tr>
<?php } } ?>
                                        </tbody>
                                    </table>

									
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end container -->


<?php
include("_footer.php");
?>