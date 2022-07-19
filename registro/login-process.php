<link rel="stylesheet" href="css/master.css?n=1">
<?php


$error = array();

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "Olvidaste ingresar el usuario";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "Olvidaste ingresar la contraseña";
}

if(empty($error)){
    // sql query
    $query = "SELECT userID, username, usertype, password FROM user WHERE username=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);

    // bind parameter
    mysqli_stmt_bind_param($q, 's', $username);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        // verify password
        if(password_verify($password, $row['password'])){
           if($row["usertype"]=="admin")
    {   

        $_SESSION["username"]=$username;

        header("location:../indexad.php");
    }

    elseif($row["usertype"]=="IT")
    {

        $_SESSION["username"]=$username;
        
        header("location:../inicio.php");
    }
        }
    }else{
        print "Usted no esta registrado o no tiene permisos para acceder a esta pagina!";
    }

}else{
    echo "Por favor ingrese su correo y contraseña para ingresar!";
}



