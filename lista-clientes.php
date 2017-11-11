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
                                    <h4 class="m-t-0">Clientes</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Direcci&oacute;n</th>
                                            <th>Telefono</th>
                                            <th>Se uni&oacute;</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarClientes = mysql_query("SELECT * FROM store_customers ORDER BY cid DESC");
if(mysql_num_rows($MostrarClientes)>0){
	while($C=mysql_fetch_assoc($MostrarClientes)){
?>
                                        <tr>
                                            <td><?php echo $C["fullname"]; ?></td>
                                            <td><?php echo $C["email"]; ?></td>
                                            <td><?php echo $C["address"]; ?></td>
                                            <td><?php echo $C["phone"]; ?></td>
                                            <td><?php echo $C["date_signin"]; ?></td>
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