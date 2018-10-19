<?php
include_once 'dbconfig.php';

	if(isset($_POST['btn-salvar'])){
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];

		if($crud->create($nome,$telefone,$email)){
			header("Location: adicionar.php?inserido");
		}else{
			header("Location: adicionar.php?falhou");
		}
	}
?>

<?php include_once 'header.php'; ?>

<div class="clearfix"></div>
	<?php if(isset($_GET['inserido'])){ ?>
		<div class="container">
			<div class='alert alert-success'>
				<strong>Uau!</strong> Contato adicionado com sucesso <a href='../index.php'>HOME</a>!
			</div>
		</div>
	<?php } else if(isset($_GET['falhou'])) { ?>
		<div>
			<div class='alert alert-warning'>
				<strong>Desculpa!</strong> ERRO ao adicionar contato !
			</div>
		</div>
	<?php }	?>
</div>

<div class="clearfix"></div>

<div class="container">

 	
	 <form method='post'>
	    <table class='table table-bordered'>
	 		<div class="alert alert-info"><i class="fa fa-phone"></i> Adicionar contato</div>
	        <tr>
	            <td>Nome</td>
	            <td><input type='text' name='nome' class='form-control' required></td>
	        </tr>
	 
	        <tr>
	            <td>Telefone</td>
	            <td><input type='text' id='telefone' name='telefone' class='form-control' required></td>
	        </tr>
	 
	        <tr>
	            <td>Email</td>
	            <td><input type='text' name='email' class='form-control' required></td>
	        </tr>
	 
	        <tr>
	            <td colspan="2">
	            <button type="submit" class="btn btn-primary btn-info" name="btn-salvar">Adicionar</button>  
	            <a href="index.php" class="btn btn-primary btn-success"><i class="fa fa-angle-double-left"></i> &nbsp; Voltar</a>
	            </td>
	        </tr>
	 
	    </table>
	</form>
 
</div>

<?php include_once '../footer.php'; ?>