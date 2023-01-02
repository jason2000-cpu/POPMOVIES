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
    <!-- <link rel="stylesheet" href="/styles/style.css"> -->
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
                            <video controls width="800" height="450">
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
                   <!--like buttons should be here-->
                </div>

                <!---comments section--->
                <div class="comments_section">
                    <?php
                      $comments = $conn->query("SELECT * FROM comments ");
                      while($row = $comments->fetchArray()):
                     ?>
                    <div class="comment">
                        <div class="comments_profile">
                            <img class="profile-picture" src="img/profile.jpg" alt="">
                            <span class="profile-text">Profile</span>
                        </div>
                        <p><?php echo $row['comment']?></p>
                    </div>



                    <?php endwhile; ?>

                    
                </div>
        </div>
        
        <!--other movies section-->
        <div class="other_movies">
            <?php
              $other_movies = $conn->query("SELECT * FROM $cat");
              while($row = $other_movies->fetchArray()):
             ?>
                    <div class="list">
                            <img class="list-video" src=<?php echo $row['url'] ?> alt="">
                            <div class="text">
                                <h3 class="list-title"><?php echo $row['title'] ?></h3>
   
                                <p class="movie-list-item-desc"><?php echo substr($row['description'], 0, 50)."..." ?></p>
                                <!-- <button class="movie-list-item-button" value=new_release_movies/<?php echo $row['id'] ?>>Watch</button> -->                                
                            </div>

                    </div>

                    <!--TRIAL TRIAL-->
                        <!-- <div class="list">
                            <video src="images/vid-2.mp4" class="list-video"></video>
                            <h3 class="list-title">zoombie walking animation</h3>
                        </div> -->



            <?php endwhile; ?>
        
        </div>
    </div>


    <script src="js/movie.js"></script>
    <script src="js/app.js"></script>
    <script>
        document.querySelector('.profile-text').innerText = window.localStorage.user_name
    </script>
</body>
</html>
