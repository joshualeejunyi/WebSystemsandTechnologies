<!DOCTYPE html>
<html>
    <head>
        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
              crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <!--jQuery-->
        <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
        <script defer
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
        crossorigin="anonymous">
        </script>
        
        <script defer src="js/main.js"></script>
        
        <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png">
    </head>
    <body>
        <?php
            include "nav.inc.php";
        ?>

        <header class="jumbotron text-center">
            <h1 class="display-4">Welcome to World of Pets!</h1>
            <h2>Home of Singapore's Pet Lovers</h2>
        </header>
        <main class="container">
            <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Poodles</h3>
                        <figure>
                            <img class="image-thumbnail" src="images/poodle_small.jpg" alt="Poodle" title="View larger image..."/>
                            <figcaption>Standard Poodle</figcaption>
                        </figure>
                        <p>
                            Poodles are a group of formal dog breeds, the Standard
                            Poodle, Miniature Poodle and Toy Poodle...
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Chihuahua</h3>
                        <figure>
                            <img class="image-thumbnail" src="images/chihuahua_small.jpg" alt="Chihuahua" title="View larger image..."/>
                            <figcaption>Chihuahua</figcaption>
                        </figure>
                        <p>
                            The Chihuahua is the smallest breed of dog, and is named
                            after the Mexican state of Chihuahua...
                        </p>
                    </article>
                </div>
            </section>
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Tabby</h3>
                        <figure>
                            <img class="image-thumbnail" src="images/tabby_small.jpg" alt="Tabby" title="View larger image..."/>
                            <figcaption>Tabby Cat</figcaption>
                        </figure>
                        <p>
                            A tabby is any domestic cat with an 'M' on its forehead,
                            stripes by its eyes and across its cheeks.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Calico</h3>
                        <figure>
                            <img class="image-thumbnail" src="images/calico_small.jpg" alt="Calico" title="View larger image..."/>
                            <figcaption>Calico Cat</figcaption>
                        </figure>
                        <p>
                            A calico cat is a domestic cat with a coat that is
                            typically 25% to 75% white and has large orange and
                            black patches.
                        </p>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
