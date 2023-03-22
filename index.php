<!--THIS CODE HAS BEEN WRITTEN BY ME: ACZW860-->

<?php
session_start();
?>
<!DOCTYPE html>
<!--LANGUAGE CHOSEN IS ENGLISH "EN" AS THE CONTENT OF THE WEBSITE IS EXCLUSIVELY WRITTEN IN ENGLISH.-->
<html lang="en">

<head>
    <!--Encoding has been set to UTF-8 as it is the most versatile in this situation.-->
    <meta charset="UTF-8">
    <!--User viewport set for consistent viewing of the websites.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/basstyle.css">
    <link rel="stylesheet" type="text/css" href="styles/bodystyle.css">
    <link rel="stylesheet" type="text/css" href="styles/footerstyle.css">
    <link rel="stylesheet" type="text/css" href="styles/headerstyle2.css">
    <link rel="stylesheet" type="text/css" href="styles/resizestyle.css">
    <script src="scripts/bascript.js"></script>
    <title>Document</title>

</head>

<body>
    <!--EXCLUSIVELY NAVIGATION LINK ARTICLE, this article will solely contain links to web pages.-->
    <article class="headwrapper">

        <section class="navigationHeadLeft">
            <!--WEBSITE LOGO, this goes on the upper left corner of the website.
                SERVES AS A LINK TO HOMEPAGE, this will be the main way in which to go back to the main page.-->
            <a href="main.html">
                <img class="imgex2" src="images/Logo1.png" height="180px" width="300px">
            </a>
            <!--NAVIGATION LINKS, these links will redirect the user to a number of separate web pages.-->
        </section>


        <section class="navigationHeadRight">
            <!--PAGE HEAD TITLE-->
            <header>
                <h2>Sorting Algorithms</h2>

                <!--PAGE HEAD SUBTITLE-->
                <h4>The importance of order.</h4>
                <?php
                if(isset($_SESSION['currentusername'])){
    echo '  <p>
                Signed in.   
            </p>';}
                ?>
            </header>
            <nav>
                <a href="index.php">Log in/Log out</a>
                <span>|</span>
                <a href="https://www.youtube.com/watch?v=vmT3XUBoxiQ">Graphical Examples</a>
                <span>|</span>
                <a href="sors.html">References</a>
                <input type="search" placeholder="Search Here">
            </nav>
        </section>

    </article>
    <aside>

        <button onclick="myFunction()">hide/show</button>
        <div id="myDIV">

            <a id="dis" href="index.php">Log in/Log out</a>
            <span>|</span>
            <a id="dis" href="https://www.youtube.com/watch?v=vmT3XUBoxiQ">Graphical Examples</a>
            <span>|</span>
            <a id="dis" href="sors.html">References</a>
        </div>





    </aside>
    <!--START OF MAIN BODY CONTENT-->
    <div class="bodyUniverse">

        <article class="bodywrapperlogin">
            <!--ALGORITHMS EXPLANATION PART 1-->

            <section>
<!--PHP[This code will give feedback when the usre commits a mistake in the form]-->
                <?php
if (isset($_GET['error'])){

    if($_GET['error'] == "emptyfields"){

        echo '<p class = "signuperror">PLEASE FILL IN ALL THE FIELDS WITH *</p>';
                                        
                                        }

    if($_GET['error'] == "wrongpass"){

        echo '<p class = "signuperror">INCORRECT PASSWORD</p>';
                                                                            
                                        }
             

    
    if($_GET['error'] == "nouser"){

         echo '<p class = "signuperror">USER DOES NOT EXIST</p>';
                                                                                                                
                                      }
                                                 
                            }
                
if(isset($_SESSION['currentusername'])){
    echo '  <h2>
                SIGN OUT   
            </h2>
    
            <form name = "reg" action = "data/logout.php">
                <input type = "submit" name = "logout" value = "logout">
            </form> ';
                                        } else {


    echo'   <h2>
                SIGN IN
            </h2>
    
            <form name = "reg" action = "data/login.php" method = "POST">
            <br>
            <br>
            <label for="lname"><span class = "signuperror">*</span>Username:</label>
            <br>
            <input type="text" id="uname" name="uname" placeholder="Username">
            <br>
            <br>
            <label for="lname"><span class = "signuperror">*</span>Password:</label>
            <br>
            <input type="password" id="pwd" name="pwd" placeholder="Password">
            <br>
            <br>
            <input type="submit" value="Submit"name = "submitlog">
            </form>
            <br>
            <a class = "reflinks" href = "login.html" >Not registered yet?</a>';
}

?>

            </section>

        </article>

    </div>


    <!--END OF MAIN BODY CONTENT-->

</body>
<!--START OF FOOTER CONTENT-->
<!--START OF FOOTER CONTENT-->
<footer class="footerwrapper">
    <!--NAVIGATIONS LINKS-->
    <nav>
        <section>
            <h3>Useful Links</h3>
            <ul>
                <li>
                    <a href="https://www.khanacademy.org/computing/computer-science/algorithms">
                        Khan academy on algorithms
                    </a>
                </li>
                <li>
                    <a href="http://www.softpanorama.org/Algorithms/sorting.shtml">
                        softpanorama
                    </a>
                </li>


            </ul>
        </section>
        <section>
            <h3>Info Sources</h3>
            <ul>
                <li>
                    <a href="https://brilliant.org/wiki/sorting-algorithms/">
                        Brilliant on sorting algoritms
                    </a>
                </li>
                <li>
                    <a href="https://www.geeksforgeeks.org/sorting-algorithms/">
                        geeksforgeeks
                    </a>
                </li>
            </ul>
        </section>
        <section>
            <h3>Content References</h3>
            <ul>
                <li>
                    <a href="https://en.wikipedia.org/wiki/Sorting_algorithm">
                        wikipedia
                    </a>
                </li>
                <li>
                    <a href="https://xlinux.nist.gov/dads/">
                        xlinux
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=kPRA0W1kECg">
                        youtube
                    </a>
                </li>

            </ul>
        </section>
    </nav>
</footer>
<!--END OF FOOTER-->

</html>