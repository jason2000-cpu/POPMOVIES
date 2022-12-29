<?php
require_once('DBConnection.php');
$page = isset($_GET['page']) ? $_GET['page'] : 'watch';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo ucwords(str_replace('_','',$page)) ?> | <?php echo $_SESSION['system_info']['company_name'] ?></title>
        <link rel="icon" href="<?php echo isset($_SESSION['system_info']['logo_path']) && is_file('.'.(explode('?',$_SESSION['system_info']['logo_path'])[0])) ? '.'.$_SESSION['system_info']['logo_path'] : "./images/no-image-available.png" ?>" />        

     <!-- inherited styles from index.html -->
    <link rel="stylesheet" href="/styles/movie.css">
    <link
         href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
   <link rel="stylesheet" href="/styles/movie.css">
</head>
<body>
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
                <div class="profile-container">
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
        <div class="watch_container">
            <div class="watch-area">
                    <?php
                        $cat = $_GET['category']? : "FAILED";
                        $id = $_GET['id'];
                        $movie = $conn->query("SELECT * FROM $cat WHERE id=$id")->fetchArray();
                    ?>
                    <div  class="screen">
                            <h1><?php echo $movie['title'] ?></h1>
                            <video controls width="800" height="500">
                                    <!-- <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm" type="video/webm"> -->
                                    <source src="/img/y2mate.com - WILLY PAUL AND NANDY NJIWA Official Video_1080p.mp4" type="video/webm">

                                    <source src="/https://youtu.be/9dFRfM-1T9M" type="video/mp4">
                                
                                    Download the
                                    <a href="/media/cc0-videos/flower.webm">WEBM</a>
                                    or
                                    <a href="/media/cc0-videos/flower.mp4">MP4</a>
                                    video.
                            </video>
                            <div style="margin-top:2rem" class="movie_details">
                                 <p><?php echo $movie['description'] ?></p>
                            </div>
                    </div>

                </div>
                <div class="comments_section">
                    <h2>Comments</h1>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                    <div class="profile">
                        <img class="comments_profile_picture" src="img/profile.jpg" alt="">
                        <span class="comments_profile_text">Profile</span>
                        <div class="comment">
                            <p>The movie is awesome I recomment @jackson to watch it and review it later</p>
                        </div>

                    </div>
                <form >
                    <input  style="width:20rem; margin:1rem 0rem; outline:none; height:1.5rem; font-size:18px; border-radius:10px" type="text" name="comment" placeholder="write comment...">
                    <button type="submit">POST</button>
                </form>
                </div>

        </div>
        
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
                                    <button class="movie-list-item-button" value=series_movies/<?php echo $row['id'] ?>>Watch</button>
                            </div>
                        <?php endwhile ?>
 
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
        </div>
    </div>



    <script src="js/movie.js"></script>
    <script>
        document.querySelector('.profile-text').innerText = window.localStorage.user_name
    </script>
</body>
</html>