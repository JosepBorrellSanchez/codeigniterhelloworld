<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	
	<!-- jQuery -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

		<tittle> Llista d'usuaris </tittle>


 
	<!-- <style type="text/css" title="currentStyle"> 
		@import "/demo_page.css"; @import "/header.ccss";
		@import "/demo_table.css";
	</style> -->

	<!-- <script type="text/javascript" language="javascript" src="/javascript/jquery/jquery.js"></script>

	<script type="text/javascript" language="javascript" src="/javascript/jquery/datatables/jquery.dataTables.js"></script> -->

		 <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#25').dataTable();
			} );
		</script>
	</head>

<p>
</p>
<body>
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Title</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>
	<p>Aquesta es la taula d'usuaris</p>
	<table id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
	<thead>
		<tr>
			<th><b>ID</b></th>
			<th><b>Nom</b></th>
			<th><b>DNI</b></th>
			<th><b>Direccio</b></th>
			<th><b>Edad</b></th>
			<th><b>Sexe</b></th>
			<th><b>Accions</b></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1</td>
			<td>Manolita</td>
			<td>41423658D</td>
			<td>Av/error</td>
			<td>22</td>
			<td>M</td>
			<td><a href="modificarusuari/1"><input type="button" name="boton" value="Modificar"/></a><a href="eliminarusuari/1"><input type="button" name="boton" value="Eliminar"/></a>
			
		</tr>
		<tr>
			<td>2</td>
			<td>Dirtino</td>
			<td>13458251Q</td>
			<td>C.404</td>
			<td>25</td>
			<td>H</td>
			<td><a href="modificarusuari/2"><input type="button" name="boton" value="Modificar"/></a><a href="eliminarusuari/2"><input type="button" name="boton" value="Eliminar"/></a>
		</tr>
		<tr>
			<td>3</td>
			<td>Emma</td>
			<td>46582137A</td>
			<td>C.English</td>
			<td>20</td>
			<td>M</td>
			<td><a href="modificarusuari/3"><input type="button" name="boton" value="Modificar"/></a><a href="eliminarusuari/3"><input type="button" name="boton" value="Eliminar"/></a>
		</tr>
		<tr>
			<td>4</td>
			<td>Fructuoso</td>
			<td>44552211F</td>
			<td>C.Taberna</td>
			<td>66</td>
			<td>H</td>
			<td><a href="modificarusuari/4"><input type="button" name="boton" value="Modificar"/></a><a href="eliminarusuari/4"><input type="button" name="boton" value="Eliminar"/></a>
		</tr>
		</tbody>
</table>
</body>
</html>
