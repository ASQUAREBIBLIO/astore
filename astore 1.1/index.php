<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Astore</title>
        <meta name="description" content="Online marketing business for print on demand">
        <meta name="author" content="Ahmed">
        <meta name="copyright" content="astore000">
        <meta name="robots" content="index, follow">
        <meta name="rating" content="safe for kids">
        <!-- Custom styles for this template -->
        <link href="cssStyle.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/astore.png">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S1SNFDJLXE"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S1SNFDJLXE');
        </script>
    </head>
    <body style="background-color: #f6f7f3;">
        <div id="loader" class="center">
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
        <div class="page-wrapper">
            <div class="nav-wrapper">
                <div class="grad-bar"></div>
                <nav class="navbar">
                    <img src="assets/logov.png" alt="Company Logo">
                    <input type="checkbox" id="check">
                    <label for="check" class="menu-toggle">
                        <span class="navbar-toggler-icon"></span>
                    </label>
                    <ul class="nav">
                        <li class="nav-item"><a href="index.php" id="active">Home</a></li>
                        <li class="nav-item"><a href="artworks.php">Artworks</a></li>
                        <li class="nav-item"><a href="links.php">Links</a></li>
                        <li class="nav-item"><a href="about.php">About us</a></li>
                    </ul>
                </nav>
            </div>

            <section class="headline">
            <h1 class="text-white">Find your thing</h1>
            <p> <a href="https://linktr.ee/astore000">Linktree</a> | 
                <a href="https://lnk.bio/astore">Lnkbio</a> | 
                <a href="https://philo10.redbubble.com/">Redbubble</a> | 
                <a href="https://www.teepublic.com/user/astore000">Teepublic</a></p>
            </section>
            
            <section class="features-bloc">
                <div class="topnav">
                    <a class="active">New release</a>
                    <div class="topnav-right">
                    <a href="artworks.php">See more >></a>
                    </div>
                </div>
                
                <div class="features">
                    <div class="feature-container">
                        <img src="assets/ihatevolcanoes.jpg" alt="Flexbox Feature">
                        <img src="assets/keepitclean.jpg" alt="Flexbox Feature">
                        <img src="assets/alien.jpg" alt="Flexbox Feature">
                        <img src="assets/astronaut_cat.jpg" alt="Flexbox Feature">
                    </div>
                </div>
            </section>
            
            <footer class="footer-section">
                <div class="head-footer">
                    <div class="footer-content pt-5 pb-5">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 mb-50 widgets">
                                <div class="footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="assets/logov.png" class="img-fluid" alt="logo"></a>
                                    </div>
                                    <div class="footer-text">
                                        <p>Find your thing.</p>
                                    </div>
                                    <div class="footer-social-icon">
                                        <span>Follow us</span>
                                        <a href="https://web.facebook.com/astore000/" target="_blank"><i class="bi bi-facebook facebook-bg"></i></a>
                                        <a href="https://www.instagram.com/astore000/" target="_blank"><i class="bi bi-instagram google-bg"></i></a>
                                        <a href="https://www.youtube.com/@astore000/" target="_blank"><i class="bi bi-youtube yt-bg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="artworks.php">Artworks</a></li>
                                    <li><a href="links.php">Links</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="https://philo10.redbubble.com/" target="_blank">Redbubble</a></li>
                                    <li><a href="https://www.teepublic.com/user/astore000" target="_blank">Teepublic</a></li>
                                    <li><a href="https://linktr.ee/astore000" target="_blank">Linktree</a></li>
                                    <li><a href="https://lnk.bio/astore" target="_blank">Linkbio</a></li>
                                    <li><a href="https://web.facebook.com/astore000/" target="_blank">Facbook</a></li>
                                    <li><a href="https://www.instagram.com/astore000/" target="_blank">Instagram</a></li>
                                    <li><a href="https://www.youtube.com/@astore000/" target="_blank">YouTube</a></li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                                <div class="footer-widget">
                                    <div class="footer-widget-heading">
                                        <h3>Subscribe</h3>
                                    </div>
                                    <div class="footer-text mb-25">
                                        <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                    </div>
                                    <div class="subscribe-form">
                                        <form method="post">
                                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                                            <button type="submit" name="saveButton"><i class="bi bi-telegram text-white"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                                
                                if(isset($_POST['saveButton'])){
                                    $email = $_POST['email'];
                                    $txt = $email."\n";
                                    $f = fopen("subscribers.txt", "a+") or die("Unable to open file!");
                                    fwrite($f, $txt);
                                    fclose($f);
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2023, All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="jsFile.js"></script>
            <script>
                document.onreadystatechange = function() {
                    if (document.readyState !== "complete") {
                        document.querySelector(
                        "body").style.visibility = "hidden";
                        document.querySelector(
                        "#loader").style.visibility = "visible";
                    } else {
                        document.querySelector(
                        "#loader").style.display = "none";
                        document.querySelector(
                        "body").style.visibility = "visible";
                    }
                };
            </script>
    </body>
</html>