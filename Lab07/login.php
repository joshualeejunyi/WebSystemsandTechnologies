<?php
    include "head.inc.php";
?>

<body>
    <?php
        include "nav.inc.php";
    ?>
    
    <main class="container">
        <h1>
            Member Login
        </h1>
        
        <p>
            For new members, please go to the <a href="register.php">Registration page.</a>
        </p>
        <form action="process_login.php" method="post">
            <div class="form-group">  
                <label for="email">
                    Email:
                </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>
            
            <div class="form-group">
                <label for="pwd">
                    Password:
                </label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" required>
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </main>
    
    <?php
        include "footer.inc.php";
    ?>
</body>