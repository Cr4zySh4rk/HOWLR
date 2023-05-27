<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <Title>HOWLR</Title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/seller.css">
        <script>
            function changeLanguage(language) {
                var element = document.getElementById("url");
                element.value = language;
                element.innerHTML = language;
            }

            function showDropdown() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
         
    </head>
    <body>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="fa-solid fa-dollar-sign"></span>
                    </label>
                    &nbsp;&nbsp;Business Dashboard
                </h2>
                <div class="userwrapper">
                    
                    <div>
                        <img src="res/profilepic.png" width="50px" height="50px" style="background: transparent">
                        <h4>Verna tech&nbsp;&nbsp;&nbsp;</h4>


                        <div class="dropdown">
                            <!-- three dots -->
                            <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- menu -->
                        </div>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="businessprofile.php">Profile</a>
                            <a href="bootup.php">Logout</a>
                        </div>
                    </div>
                </div>
                
            </header>

            <main class="landbg">
                <div class="howimg"><img src="res/wolf.png" style="width: 250px; height: 250px;"></div>
                <div class="seller-content">
                    <a href="newhowl.php">New Howl</a>
                    <a href="activehowl.php">Active Howls</a>
                </div>
            </main>
        </div>

    </body>
</html>