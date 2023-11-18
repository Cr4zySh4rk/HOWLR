<?php
require 'db/config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $name = $_SESSION["name"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <Title>HOWLR</Title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/landing.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="module" src="script.js"></script>
        <script>
            function changeLanguage(language) {
                var element = document.getElementById("url");
                element.value = language;
                element.innerHTML = language;
            }

            function showDropdown() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
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
        <script src="https://maps.googleapis.com/maps/api/js?key=<your api key>&callback=initMap&libraries=&v=weekly"
        defer
        ></script>   
        <style>
            #data, #allData{
            display:none;
                }
        </style>
    </head>
    <body>
        <input type="checkbox">
        <div class="sidebar">
            <div class="sidebar-brand">
            <h1><span><img src="res/wolf.png" width="70px" height="70px" alt=""></span><span><a href="landing.php">HOWLR</a></span></h1>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                       <br><br>
                    </li>
                    <li>
                        <a href="htmlcss.php"><span class="fa-brands fa-html5"></span>
                            <span>HTML/CSS</span></a>
                    </li>
                    <li>
                        <a href="phpjs.php"><span class="fa-brands fa-php"></span>
                            <span>PHP/JS</span></a>
                    </li>
                    <li>
                        <a href="fs.php"><span class="fa-solid fa-file-code"></span>
                            <span>Full Stack</span></a>
                    </li>
                    <li>
                        <a href="c.php"><span class="fa-solid fa-c"></span>
                            <span>C programming</span></a>
                    </li>
                    <li>
                        <a href="java.php"><span class="fa-brands fa-java"></span>
                            <span>JAVA</span></a>
                    </li>
                    <li>
                        <a href="#" class="active"><span class="fa-brands fa-python"></span>
                            <span>PYTHON</span></a>
                    </li>
                    <li>
                        <a href="aiml.php"><span class="fa-solid fa-robot"></span>
                            <span>AI/ML</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="fa-brands fa-python"></span>
                    </label>
                    &nbsp;&nbsp;Jobs Nearby for Python
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
                            <a href="#home">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
                
            </header>

            <main class="landbg">
            <select name="Set" class="dropmain" aria-placeholder="Set location">
                    <option value="Set_by_location">Filter by location</option>
                    <option>Jayanagar</option>
                    <option>Basavanagudi</option>
                    <option>JP Nagar</option>
                    <option>Kumarswamy Layout</option>
                    <option>Bommanahalli</option>
                    <option>Indiranagar</option>
                    <option>Koramangala</option>

                </select> 
                <input type="text" class="textusland" placeholder="Search area...">
                <input type="submit" value="Search" class="textusiland" >
                <div id="map"  style="height: 45%; width: 80%; position: relative;top: 3rem;border-radius: 1rem;"></div>
                <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="_ib_",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
                    ({key: "AIzaSyDa3tPUaEQcOJqTi6fxaSO0LU529j7GD74", v: "weekly"});</script>
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
            </main>
        </div>
        <?php
                    require 'jobs.php';
                    $str = new howlr2;
                    $coll = $str->getBlankLatLng();
                    $coll = json_encode($coll, true);
                    // print_r($coll);
                    echo '<div id="data">' . $coll . '</div>';

                    $allData = $str->getP();
                    $allData = json_encode($allData, true);
                    echo '<div id="allData">' . $allData . '</div>';
                    ?>
    </body>
</html>
