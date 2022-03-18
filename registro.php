<?php 
require 'database.php';

if(!empty($_POST['Email']) && !empty($_POST['Password'])) {
    $sql = "INSERT INTO users(email, 'Password') VALUES (:email, :'Password')";
    $stat = $conn ->prepare($sql);
    $stat->bindParam('email',$_POST['email']);
    $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
    $stat->bindParam('Password',$Password);

    if(isset($_GET['id'])){
        $id = $_GET['id'];  
        $message = 'Nuevo usuario registrado';
    } else {
        $message = 'Lo sentimos a ocurrido un error';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
</head>

<body>

<?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
    <p><?php $message ?></p>
    <?php endif; ?>


<h1>Registro</h1>

<span>or <a href="login.php">Login</a></span>
<form action="registro.php" method="post">
    <input type="text" name="dir" placeholder = "Direccion" requerid>
    <input type="date" requerid>
			<ul class="menu">
				<li><a href="#">Servicios</a>
					<ul class="submenu">
						<li><a href="#">#1 Albañileria </a></li>
						<li><a href="#">#2 Carpinteria</a></li>
						<li><a href="#">#3 Cerrajero</a></li>
					</ul>
				</li>
			</ul>
    <input type="text" name="Nom" placeholder = "Nombre" requerid>
    <input type="text" name="Mun" placeholder = "Municipio" requerid>
    <input type="time" name="Hora" placeholder = "Horario" requerid>
    <ul>
    <input type="submit" name="registrar" value="registrar">
    </ul>
</form>

</body>
</html>