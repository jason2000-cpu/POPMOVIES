<?php
require_once('DBConnection.php');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucwords(str_replace('_','',$page)) ?> | <?php echo $_SESSION['system_info']['company_name'] ?></title>
    <link rel="icon" href="<?php echo isset($_SESSION['system_info']['logo_path']) && is_file('.'.(explode('?',$_SESSION['system_info']['logo_path'])[0])) ? '.'.$_SESSION['system_info']['logo_path'] : "./images/no-image-available.png" ?>" />
<html lang="en">
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>

<body class="bdy" onload="redirect()">
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">POPMOVIES</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">Home</li>
                    <li class="menu-list-item">Movies</li>
                    <li class="menu-list-item">Series</li>
                    <li class="menu-list-item">Popular</li>
                    <li class="menu-list-item">Trends</li>

                </ul>
            </div>
            <div style="visibility:hidden;" class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
                <div class="profile-text-container">
                    <span class="profile-text">Profile</span>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
            <div>
                <button  id="btn_lgn" onclick="login()">Login</button>
                <button onclick="signup()">Signup</button>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
                <img class="featured-title" src="img/f-t-1.png" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button" id="fetured-btn" onclick="login()">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">TRENDING</h1>
                <div class="movie-list-wrapper">
                    <div class="trending movie-list">
                        <!---Trending movies are injected here-->
                    <?php 
                            $movies = $conn->query("SELECT * FROM trending_movies");
                            while($row = $movies->fetchArray()):
                    ?>
                     <div class="movie-list-item">
                            <img class="movie-list-item-img" src=<?php echo $row['url'] ?> alt="">
                            <span class="movie-list-item-title"><?php echo $row['title'] ?></span>
                            <p class="movie-list-item-desc"><?php echo $row['description'] ?></p>
                            <button class="movie-list-item-button" value=series/<?php echo $row['id'] ?>>Watch</button>
                    </div>

                   <?php endwhile; ?>

                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Popular</h1>
                <div class="movie-list-wrapper">
                    <div class="popular movie-list">
                        <!--popular movies injected here-->
                    <?php 
                            $movies = $conn->query("SELECT * FROM popular_movies");
                            while($row = $movies->fetchArray()):
                    ?>
                     <div class="movie-list-item">
                            <img class="movie-list-item-img" src=<?php echo $row['url'] ?> alt="">
                            <span class="movie-list-item-title"><?php echo $row['title'] ?></span>
                            <p class="movie-list-item-desc"><?php echo $row['description'] ?></p>
                            <button class="movie-list-item-button" value=series/<?php echo $row['id'] ?>>Watch</button>
                    </div>

                   <?php endwhile; ?>                    

                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button">WATCH</button>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="new-release movie-list">
                        <!--New release movies injected here-->
                        <?php
                        $movies = $conn->query("SELECT * FROM popular_movies");
                            while($row = $movies->fetchArray()):
                        ?>
                            <div class="movie-list-item">
                                    <img class="movie-list-item-img" src=<?php echo $row['url'] ?> alt="">
                                    <span class="movie-list-item-title"><?php echo $row['title'] ?></span>
                                    <p class="movie-list-item-desc"><?php echo $row['description'] ?></p>
                                    <button class="movie-list-item-button" value=series/<?php echo $row['id'] ?>>Watch</button>
                            </div>

                        <?php endwhile; ?>

                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">SERIES</h1>
                <div class="movie-list-wrapper">
                    <div class="series movie-list">
                    
                        <!--series movies injected here-->

                        <?php
                        $movies = $conn->query("SELECT * FROM series_movies");
                        while ($row = $movies->fetchArray()):
                        ?>
 
                             <div class="movie-list-item">
                                    <img class="movie-list-item-img" src=<?php echo $row['url'] ?> alt="">
                                    <span class="movie-list-item-title"><?php echo $row['title'] ?></span>
                                    <p class="movie-list-item-desc"><?php echo $row['description'] ?></p>
                                    <button class="movie-list-item-button" value=series/<?php echo $row['id'] ?>>Watch</button>
                            </div>
                        <?php endwhile ?>
 
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>



<!-----------login/logout modal------------>

<div class="loginModal">
    <div class="login-form">
        <h1>LOGIN</h1>
        <form id="signin"  action="actions.php" method="POST"> 
            <input type="text" id="username" placeholder="username" required>
            <input type="password" class="pwd" name="loginPass" placeholder="password" required> <i class="hide1 bi bi-eye-slash-fill"></i>
            <p>Forgot <span style="cursor: pointer; color:blue">Password?</span></p>

            <button class="loginBtn" value="SUBMIT">SUBMIT</button>
        </form>
        <p>Don't have an account? Create <span onclick="signup()" style="cursor: pointer;color:blue">Here</span></p>
        <div class="social-icons">
            <i class="bi bi-instagram"></i> <i class="bi bi-linkedin"></i>
            <i class="bi bi-facebook"></i> <i class="bi bi-twitter"></i>
        </div>
        </form>
    </div>
</div>

<!--signup-->
<div class="signupModal">
    <div class="signup-form">
        <h1>SIGNUP</h1>
        <form  method="POST" onsubmit="event.preventDefault();" id="signup">
            <input type="text" name="username" placeholder="username" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="number" name="phoneNo" id="phoneNo" placeholder="phone number" required>
            <input type="password" class="pwd" name="signup-pass" id="password" placeholder="password" required>
            <input type="password" name="pwd" placeholder="confirm password" required> 
            <i class="hide2 bi bi-eye-slash-fill"></i>
            <span><input style="margin:0rem 1rem 0rem 2rem;" type="checkbox" id="chckbox">Terms & Conditions</span>
            <button id="register_btn" type="submit" value="SUBMIT">Register</button>
        </form>
        <p>Already have and account ? Login <span onclick="login()" style="cursor: pointer; color:blue">Here</span></p>
        <div class="social-icons">
            <i class="bi bi-instagram"></i> <i class="bi bi-linkedin"></i>
            <i class="bi bi-facebook"></i> <i class="bi bi-twitter"></i>
        </div>
    </div>
</div>

<!-----------end of login/logout modal form------->


<footer style="text-align: center ;">
    GET NOTIFICATIONS | CONTACTS | REVIEWS
</footer>
    <script src="/js/fetch.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script  type="text/javascript" src="./js/movie.js"></script>

<script>
    let form = document.getElementById('signup');
   // const httpRequest = new XMLHttpRequest();
    form.onsubmit = (event) =>{
        event.preventDefault();
        const form = document.querySelector('#signup');
        const dataObject = {
            "username": form.username.value,
            "email": form.email.value,
            "phoneNo":form.phoneNo.value,
            "password": form.pwd.value
        }
        
        //console.log(JSON.stringify(dataObject))
        //const userName = form.username.value 
        makeRequest('actions.php?a=save_viewer', JSON.stringify(dataObject));
    }

    function makeRequest(url, formData) {
        httpRequest = new XMLHttpRequest();
        if (!httpRequest) {
            alert("Giving up :( Cannot create an XMLHTTP instance");
            return false;
        }

        httpRequest.onreadystatechange = alertContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send(`formData=${encodeURIComponent(formData)}`);
    }
    function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
        const response = JSON.parse(httpRequest.responseText);
        alert(response.computedString);
        } else {
        alert('There was a problem with the request.');
        }
    }
    }


</script>
</body>
</html>