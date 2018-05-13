<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>OSPAF - Framework CSS - Home page</title>
        <link rel="stylesheet" href="css/ospaf.css">
        <link rel="stylesheet" href="css/homepage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
    <header>
        <section>
            <p>OSPAF</p>
            <nav>
                <ul>
                    <li><a href="https://github.com/TOSLE/OSPAF">Github</a></li>
                    <li><a href="https://github.com/TOSLE/OSPAF-collaborators">Github Collaborators</a></li>
                    <li><a class="btn btn-white-outline" href="mailto:contact.tosle@gmail.com">Contact us</a></li>
                    <li><a class="btn btn-green-outline" href="#">Download</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <main>
        <section id="presentation-container">
            <h1>
                OSPAF - Framework CSS & Javascript
            </h1>
            <div id="description-presentation">
                <p>
                    "Bienvenue sur la page de téléchargement et de documentation du Framework OSPAF.<br>
                    Ici, vous pourrez apprendre à utiliser notre Framework."<br>
                    <span class="autor-citation">- OSPAF dev team</span>
                </p>
            </div>
        </section>
        <section id="main-container">
            <section id="nav-container" class="container">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <li>
                                <a href="#buttons-ospaf">Buttons</a>
                            </li>
                            <li>
                                <a href="#modal-ospaf">Modal</a>
                            </li>
                            <li>
                                <a href="#forms-ospaf">Forms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="doc-container" class="container">
                <?php include"views/buttons.php";?>
                <?php include"views/modals.php";?>
                <?php include"views/forms.php";?>
            </section>
        </section>

    </main>
    <script src="js/modals.js"></script>
    </body>
</html>