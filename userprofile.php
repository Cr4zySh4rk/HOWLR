<?php
require 'db/config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $name = $_SESSION["name"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: bootup.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <Title>HOWLR</Title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/profile.css">
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
                        <span class="fa-solid fa-gear"></span>
                    </label>
                    &nbsp;&nbsp;Profile Settings
                </h2>
                <div class="userwrapper">
                    
                    <div>
                        <img src="res/profilepic.png" width="50px" height="50px" style="background: transparent">
                        <h4><?php echo $row['username'];?>&nbsp;&nbsp;&nbsp;&nbsp;</h4>


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
                            <a href="userprofile.php">Profile</a>
                            <a href="bootup.php">Logout</a>
                        </div>
                    </div>
                </div>
                
            </header>

            <main class="landbg">
                <div class="editpage">
        
                    <form>
                        <div class="centprof">
                            <div class="mb-1">
                                <div class="rounded-circle"><img src="res/aresume pic.jpg" style="width: 150px; height: 150px; border-radius: 50%;"></div>
                                <label class="form-label">Full Name&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" 
                                    class="form-control"
                                    name="fname"
                                    value="" style="border-radius: 1rem; width: 20rem; height: 40px; font-size: 1.5rem; font-family: myfont;" placeholder="Akshay Prasad">
                            </div>
                    
                            <div class="mb-2">
                                <label class="form-label">User name&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" 
                                    class="form-control"
                                    name="uname"
                                    value="" style="border-radius: 1rem;width: 20rem; height: 40px; font-size: 1.5rem; font-family: myfont;" placeholder="akshay_510">
                            </div>
                    
                            <div class="mb-3">
                                <label class="form-label">Profile Picture&nbsp;&nbsp;&nbsp;</label>
                                <input type="file" 
                                    class="form-control"
                                    name="pp" style="font-family: myfont; border-radius: 1rem;">
                                
                                <input type="text"
                                    hidden="hidden" 
                                    name="old_pp"
                                    value="" >

                               
                            </div>
                            <div class="subbut"><input type="submit" value="Update" style="width: 100px; height: 40px;"><a href="userlanding.php" class="homeprof">Home</a></div>

                            <div class="container">
                                <input type="radio" class="radio" name="progress" value="five" id="five">
                                <label for="five" class="label">5KM</label>
                                
                                <input type="radio" class="radio" name="progress" value="twentyfive" id="twentyfive" checked>
                                <label for="twentyfive" class="label">10KM</label>
                                
                                <input type="radio" class="radio" name="progress" value="fifty" id="fifty">
                                <label for="fifty" class="label">15KM</label>
                                
                                <input type="radio" class="radio" name="progress" value="seventyfive" id="seventyfive">
                                <label for="seventyfive" class="label">20KM</label>
                                
                                <input type="radio" class="radio" name="progress" value="onehundred" id="onehundred">
                                <label for="onehundred" class="label">30KM</label>
                                
                                <div class="progress">
                                <div class="progress-bar"></div>
                                </div>
                                </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </body>
</html>