<style>
b,ul.search-ul,ul.search-li { margin:5px; }
b.search-h { margin-top: -20px;}
ul.search-ul { margin-top: -5px; }
li.search-li { width: 130%; list-style: none; padding: 5px; font-size:14px; margin-left: -40px; margin-top: 2px; }
li:hover.search-li { background-color: #CCC; }
</style>
<b class="search-h" style="margin-top:-6px;">Administradores</b>
<ul class="search-ul">
<?php
	include('db.php');
	$q=$_GET['q'];//se recibe la cadena que queremos buscar
	if(isset($q)){
		$admin_res=mysql_query("select * from site_admins where (fullname like '%$q%' or email like '%$q%' or phone like '%$q%') order by aid LIMIT 5");
		if(mysql_num_rows($admin_res)>0){
			while($admin=mysql_fetch_array($admin_res)){
				echo '<li class="search-li"><a href="profile.php?type=admin&id='.$admin["aid"].'">'.$admin["fullname"].'</a></li>';
			}
		} else {
			echo 'sin resultados';
		}
	} else {
		echo 'sin resultados';
	}

?>
</ul>
<hr>

<b class="search-h" style="margin-top:-6px;">Proveedores</b>
<ul class="search-ul">
<?php
	$q=$_GET['q'];//se recibe la cadena que queremos buscar
	if(isset($q)){
		$p_res=mysql_query("select * from store_providers where (fullname like '%$q%' or email like '%$q%' or phone like '%$q%') order by pid LIMIT 5");
		if(mysql_num_rows($p_res)>0){
			while($p=mysql_fetch_array($p_res)){
				echo '<li class="search-li"><a href="profile.php?type=provider&id='.$p["pid"].'">'.$p["fullname"].'</a></li>';
			}
		} else {
			echo 'sin resultados';
		}
	} else {
		echo 'sin resultados';
	}

?>
</ul>
<hr>

<b class="search-h" style="margin-top:-6px;">Clientes</b>
<ul class="search-ul">
<?php
	$q=$_GET['q'];//se recibe la cadena que queremos buscar
	if(isset($q)){
		$c_res=mysql_query("select * from store_customers where (fullname like '%$q%' or email like '%$q%' or phone like '%$q%') order by cid LIMIT 5");
		if(mysql_num_rows($c_res)>0){
			while($c=mysql_fetch_array($c_res)){
				echo '<li class="search-li"><a href="profile.php?type=customer&id='.$c["cid"].'">'.$c["fullname"].'</a></li>';
			}
		} else {
			echo 'sin resultados';
		}
	} else {
		echo 'sin resultados';
	}

?>
</ul>