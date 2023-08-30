<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud Ci 3 </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<?php if($mensaje=="creado"){?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  	El usuario ha sido Creado.
	  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } 
if($mensaje == "actualizado"){?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	El usuario ha sido Actualizado.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } 
if($mensaje == "eliminado"){?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	El usuario ha sido Eliminado.
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }?>
	<div class="row">
		<h2> CRUD</h2>
	</div>
	
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h4>Tabla de users</h4>
			</div>
			<div class="card-body">
			<table class="table table-striped table-hover">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">FIRST_NAME</th>
				<th scope="col">LAST_NAME</th>
				<th scope="col">EMAIL</th>
				<th scope="col">GENDER</th>
				<th scope="col">TELEPHONE</th>
				<th scope="col">AGE</th>
				</tr>
			</thead>
			<tbody>
				<?php $count = 0;
				if($users){
				 foreach ($users as $user){
					?>
				<tr>
				<th scope="row"><?php echo $user->ID; ?></th>
				<th "><?php echo $user->FIRST_NAME; ?></th>
				<td><?php echo $user->LAST_NAME; ?></td>
				<td><?php echo $user->EMAIL; ?></td>
				<td><?php echo $user->GENDER; ?></td>
				<td><?php echo $user->TELEPHONE; ?></td>
				<td><?php echo $user->AGE; ?></td>
				<td><button class="btn btn-warning text-white" onclick="llenar_datos(<?php echo '`'.$user->ID.'`,`'.$user->FIRST_NAME.'`,`'.$user->LAST_NAME.'`,`'.$user->EMAIL.'`,`'.$user->GENDER.'`,`'.$user->TELEPHONE.'`,`'.$user->AGE.'`'; ?>)"  type="button">Editar</button></td>
				<td><a href="<?php echo base_url('Usercrud/eliminar/'.$user->ID) ?>" class="btn btn-danger" type="button">Eliminar</a></td>
				</tr>
				<?php } 
					}?>
			</tbody>
			</table>
			</div>
		</div>
		<div class="row">
		<button type="button" class="btn-success btn btn block" id="nuevo" onclick="nuevo()" >Nuevo</button>
		</div>
	</div>

	<div class="mb-5" style="display: none;" id="formulario">
		<?php echo form_open('Usercrud/agregar',['id'=>'form-user']); ?>
		<!-- <form action=""> -->
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="">Firsr name</label>
					<input type="text" name="FIRST_NAME" class="form-control" placeholder="LAST_NAME" required id="FIRST_NAME">
				</div>
				<div class="form-group col-sm-4">
					<label for="">LAST_NAME</label>
					<input type="text" name="LAST_NAME" class="form-control" placeholder="LAST_NAME" required id="LAST_NAME">
				</div>
				<div class="form-group col-sm-4">
					<label for="">EMAIL</label>
					<input type="email" name="EMAIL" class="form-control" placeholder="EMAIL" required id="EMAIL">
				</div>
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="">GENDER</label>
						<input type="text" name="GENDER" class="form-control" placeholder="GENDER" required id="GENDER">
					</div>
					<div class="form-group col-sm-4">
						<label for="">TELEPHONE</label>
						<input type="number" name="TELEPHONE" class="form-control" required placeholder="TELEPHONE" id="TELEPHONE">
					</div>
					<div class="form-group col-sm-4">
						<label for="">AGE</label>
						<input type="number" name="AGE" class="form-control" required placeholder="AGE" id="AGE">
					</div>
				</div>
				<div class="row">
				<button type="submit" class="btn-primary btn btn block" id="enviar" >Guardar</button>
				</div>
			</div>
			<br>
			

		<!-- </form> -->
		<?php echo form_close(); ?>
	</div>

</div>
	
</body>
<script>
	let url = "<?php echo base_url('Usercrud/editar') ?>";
	let urln = "<?php echo base_url('Usercrud/agregar') ?>";
	const llenar_datos = (ID, FIRST_NAME, LAST_NAME, EMAIL, GENDER, TELEPHONE,AGE) =>{
		let path = url+"/"+ID;
		document.getElementById('form-user').setAttribute('action',path);
		document.getElementById('formulario').setAttribute('style',"display:block");
		console.log(ID, FIRST_NAME, LAST_NAME, EMAIL, GENDER, TELEPHONE,AGE);
		console.log(path);
		document.getElementById('FIRST_NAME').value = FIRST_NAME;
		document.getElementById('LAST_NAME').value = LAST_NAME;
		document.getElementById('EMAIL').value = EMAIL;
		document.getElementById('GENDER').value = GENDER;
		document.getElementById('TELEPHONE').value = TELEPHONE;
		document.getElementById('AGE').value = AGE;
	}
	const nuevo = () =>{
		let path = urln;
		document.getElementById('form-user').setAttribute('action',path);
		document.getElementById('formulario').setAttribute('style',"display:block");
		console.log(path);
		document.getElementById('FIRST_NAME').value = "";
		document.getElementById('LAST_NAME').value = "";
		document.getElementById('EMAIL').value = "";
		document.getElementById('GENDER').value = "";
		document.getElementById('TELEPHONE').value = "";
		document.getElementById('AGE').value = "";
	}
</script>
</html>
