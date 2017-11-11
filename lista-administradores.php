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
                                            <th>Rol</th>
                                            <th>Activaci&oacute;n de la cuenta</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarAdministradores = mysql_query("
SELECT * FROM site_admins ORDER BY aid DESC");
if(mysql_num_rows($MostrarAdministradores)>0){
	while($A=mysql_fetch_assoc($MostrarAdministradores)){
?>
                                        <tr>
                                            <td><?php echo $A["fullname"]; ?></td>
                                            <td><?php echo $A["email"]; ?></td>
                                            <td><?php echo $A["role"]; ?></td>
                                            <td><?php echo $A["request"]; ?></td>
                                            <td><i class="mdi mdi-pencil"></i> - <i class="mdi mdi-delete"></i></td>
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