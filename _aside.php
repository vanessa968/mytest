            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/<?php echo $user["picture"]; ?>" alt="picture" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="profile.php?type=admin&id=<?php echo $user["aid"]; ?>"><?php echo $user["fullname"]; ?></a>
                                    <p class="text-muted m-0">Administrator: <?php echo $user["role"]; ?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard.php"><i class="ti-dashboard"></i> Dashboard </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-user"></i> Administradores <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-administradores.php">Lista</a></li>
                                        <?php if($user["role"]=='full'){ ?><li><a href="agregar-administrador.php">Nuevo</a></li> <?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-user"></i> Proveedores <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-proveedores.php">Lista</a></li>
                                        <?php if($user["role"]=='full'){ ?><li><a href="agregar-proveedor.php">Nuevo</a></li><?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-user"></i> Clientes <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-clientes.php">Lista</a></li>
                                        <?php if($user["role"]=='full'){ ?><li><a href="agregar-cliente.php">Nuevo</a></li><?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-package"></i> Productos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-productos.php">Inventario</a></li>
                                        <?php if($user["role"]=='full'){ ?><li><a href="agregar-producto.php">Nuevo</a></li><?php } ?>
                                        <li><a href="lista-categorias.php">Categorias</a></li>
                                    </ul>
                                </li>

								
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->
