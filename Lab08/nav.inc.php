<? php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/logo.png" height="50"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobilenav" aria-controls="mobilenav" aria-expanded="false" aria-label="Mobile Nav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mobilenav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#dogs">Dogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#cats">Cats</a>
            </li>
 
            
            <?php
                if ($_SESSION["user"] == true) {
                    echo "<li class='nav-item'> <a class='nav-link'>Welcome, " . $_SESSION["fname"] . " " . $_SESSION["lname"] . "!</a></li>";
                    echo "<li class='nav-item'> <a class='nav-link' href='logout.php'>Logout</a></li>";
                } else { ?>
                    <li class="nav-item">
                         <a class="nav-link" href="login.php">Login</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="register.php">Register</a>
                     </li>
            <?php
                }
            ?>
        </ul>
    </div>

</nav>