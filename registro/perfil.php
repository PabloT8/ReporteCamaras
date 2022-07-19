<?php

session_start();
include ('header.php');
include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

?>

<section id="main-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div >
                    <div class="text-center">
                        <img class="img rounded-circle" style="width: 200px; height: 200px;" src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './assets/profile/beard.png'; ?>" alt="">
                        <h4 class="py-3">
                            <?php
                            if(isset($user['username'])){
                                printf('%s', $user['username'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <li class="nav-link"><b>Nombre de Usuario: </b><span><?php echo isset($user['username']) ? $user['username'] : ''; ?></span></li>
                        <li class="nav-link"><b>Tipo de Usuario: </b><span><?php echo isset($user['usertype']) ? $user['usertype'] : ''; ?></span></li>
                        <li class="nav-link"><b>Grupo: </b><span><?php echo isset($user['usergrupo']) ? $user['usergrupo'] : ''; ?></span></li>
                        <li class="nav-link"><b>Turno: </b><span><?php echo isset($user['userturno']) ? $user['userturno'] : ''; ?></span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>
