<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-edmono</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="container">
                   <h3>Quản lý trang Edmono</h3>
                 </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="manage-admin.php">Manage: Admin
                    <i class="bi bi-cloud-plus-fill"></i>
                    
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="mange-nd.php">Manage: User
                    <i class="bi bi-person-video2"></i>  </a>
                </li>   
                

                    <?php
                        if(isset($_SESSION['isLoginOK']))
                        {
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link'>Welcome Admin : ".$_SESSION['isLoginOK']."</a>";
                            echo '</li>';
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link text-danger' href='logout_admin.php'>Logout</a>";
                            echo '</li>';
                        }

                    ?>
                    
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </header>