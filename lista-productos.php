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
                                    <h4 class="m-t-0">Productos</h4>
                                    <div class="table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th>Categor&iacute;a</th>
                                            <th>Vendidos</th>
                                            <th>Disponibiliad</th>
                                            <th>Estado</th>
                                            <th>Proveedor</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<?php
$MostrarProdcutos = mysql_query("
SELECT 
	i.item_id as id,
	i.item_name as nombre,
	i.price as precio,
	i.category as id_cat,
	i.stock as disponible,
	i.count_sold as vendido,
	i.status as estado, 
	i.provider as proveedor,
	c.id, c.label as categoria_etiqueta,
	p.pid as id_proveedor,
	p.fullname as nombre_proveedor,
	p.email as email_proveedor
FROM
	store_items as i
JOIN
	store_categories as c
JOIN
	store_providers as p
WHERE
	i.category = c.id
AND
	i.provider = p.pid
ORDER BY
	item_id
DESC
");
if(mysql_num_rows($MostrarProdcutos)>0){
	while($P=mysql_fetch_assoc($MostrarProdcutos)){
?>
                                        <tr>
                                            <td><?php echo $P["nombre"]; ?></td>
                                            <td><?php echo $P["precio"]; ?></td>
                                            <td><?php echo $P["categoria_etiqueta"]; ?></td>
                                            <td><?php echo $P["vendido"]; ?></td>
                                            <td><?php echo $P["disponible"]; ?></td>
                                            <td><?php echo $P["estado"]; ?></td>
                                            <td><?php echo $P["nombre_proveedor"]; ?></td>
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