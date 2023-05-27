<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <Title>HOWLR</Title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/newhowl.css">
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
                    &nbsp;&nbsp;Job Opening
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
                <div class="editpage">
        
                    <form>
                        <div class="centprof">

                            <div class="mb-4">
                                <div class="jobtxt">Job Opening</div>
                            </div>
                            
                            <div class="mb-1">
                                
                                <label class="form-label">Company Name&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" 
                                    class="form-control"
                                    name="fname"
                                    value="" style="border-radius: 1rem; width: 20rem; height: 40px; font-size: 1.5rem; font-family: myfont;" placeholder="Verna tech">
                            </div>
                    
                            <div class="mb-2">
                                <label class="form-label">Job Description&nbsp;&nbsp;&nbsp;</label>
                                <textarea rows="10" cols="50"></textarea>
                            </div>
                    
                            <div class="mb-3">
                                <label class="form-label">Skillset required: &nbsp;&nbsp;&nbsp;</label>
                                <input type="radio">&nbsp;<h4>HTML/CSS</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>PHP/JS</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>Full Stack</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>C</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>Java</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>Python</h4>&nbsp;&nbsp;
                                <input type="radio">&nbsp;<h4>AI/ML</h4>&nbsp;&nbsp;
                                

                               
                            </div>
                            <div class="subbut"><input type="submit" value="Howl" style="width: 100px; height: 40px; font-family: myfont;"><a href="businesslanding.php" class="homeprof">Home</a></div>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </body>
</html>