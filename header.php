<?php
header ( 'Content-Type: text/html;charset=utf-8' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Tana - Magazine, News and Blog HTML Template</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Themeton" >
    <meta name="description" content="Tana - Blog, News and Magazine HTML Template">
    <meta name="author" content="Themeton">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap-theme.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="vendors/font-awesome/css/font-awesome.min.css">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="vendors/animate.css">

    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="vendors/swiper/css/swiper.min.css">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="vendors/magnific-popup/magnific-popup.css">

    <!-- Base MasterSlider style sheet -->
    <link rel="stylesheet" href="vendors/masterslider/style/masterslider.css" />
    
    <!-- Master Slider Skin -->
    <link href="vendors/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>
    
        
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body class="news-content b-container">

    <div class="tana-loader">
        <div class="loader-content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        
        <header id="header" class="header-news">
            <div class="panel-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="header-wrapper">

                                <div class="site-branding">
                                    <!-- image logo -->
                                    <a href="index.php" rel="home" class="custom-logo-link">
                                        <img src="images/logo.svg" alt="logo image">
                                    </a>
                                    <!-- text logo -->
                                    <!--
                                    <a href="index.html" rel="home" class="logo-text-link">Development Fruit</a>
                                    <p class="site-description">The Awesome WordPress Theme</p>
                                    -->
                                </div>

                                <div class="right-content">
                                    <div class="user-profile">
                                        <a href="javascript:;" class="entry-notify">
                                            <img src="images/notify.png" alt="notification image">
                                            <span>9</span>
                                        </a>
                                        <div class="entry-name">

                                                <?php
                                            if (empty($_SESSION['login']) or empty($_SESSION['id']))
                                            {
                                            echo '<a href="login.php">Войти в учетную запись</a>';
                                            }
                                            else
                                            {
                                                
                                            echo '<a href="javascript:;"> Привет '. $_SESSION['login'];
                                                    }
                                            ?>

                                            
                                            <div class="entry-dropdown">
                                                <a href="javascript:;">Profile</a>
                                                <a href="javascript:;">Notification</a>
                                                <a href="javascript:;">Settings</a>
                                                <a class="border-top" href="logout.php">Log out</a>
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="user-avatar">
                                            <img src="images/user-01.png" alt="user avatar">
                                        </a>

                                        <div class="follow-links">
                                            <span class="visible-lg-*">Follow Us:</span>
                                            <a class="visible-lg-*" href="javascript:;"><i class="fa fa-facebook"></i></a>
                                            <a class="visible-lg-*" href="javascript:;"><i class="fa fa-twitter"></i></a>
                                            <a class="visible-lg-*" href="javascript:;"><i class="fa fa-youtube"></i></a>
                                            <a class="visible-lg-*" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                            <a class="hidden-lg" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="panel-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="main-nav">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="news2.html">News</a>
                                        <ul>
                                            <li><a href="news2.html">News 2</a></li>
                                            <li><a href="news3.html">News 3</a></li>
                                            <li><a href="news4.html">News 4</a></li>
                                            <li><a href="news5.html">News 5</a></li>
                                            <li><a href="news6.html">News 6</a></li>
                                            <li><a href="news7.html">News 7</a></li>
                                            <li><a href="news8.html">News 8</a></li>
                                            <li><a href="news9.html">News 9</a></li>
                                            <li><a href="news10.html">News 10</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="entertainment.html">U.S.</a></li>
                                    <li><a href="blog.html">Fashion</a></li>
                                    <li class="menu-item-has-children menu-item-mega">
                                        <a href="entertainment.html">Entertainment</a>
                                        <ul>
                                            <li>
                                                <div class="mega-menu-lists">
                                                    <a href="single-news.html">Autos</a>
                                                    <a href="single-news.html">Future</a>
                                                    <a href="single-news.html">TV</a>
                                                    <a href="single-news.html">Radio</a>
                                                    <a href="single-news.html">CBBC</a>
                                                    <a href="single-news.html">CBeebies</a>
                                                    <a href="single-news.html">Local</a>
                                                </div>
                                                <div class="mega-menu-panel">
                                                    <div class="row">

                                                        <div class="col-sm-4 col-md-3 mega-menu-column">
                                                            <div class="post ps-medium">
                                                                <div class="meta">
                                                                    <span class="author">Dave Clarke</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="single.html">North Carolina Voter ID Law Is Upheld</a></h4>
                                                                <p>France: Prostitution legal, paying for sex illegal. Modi makes his mark</p>
                                                            </div>
                                                            <div class="post ps-medium">
                                                                <div class="meta">
                                                                    <span class="author">Dave Clarke</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="single.html">North Carolina Voter ID Law Is Upheld</a></h4>
                                                                <p>Oprah Winfrey continues Real Estate shopping spree Mansion Global</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4 col-md-6 mega-menu-column">
                                                            <div class="post ps-large">
                                                                <div class="image video-frame" data-src="images/news/video-04.jpg">
                                                                    <img src="images/5x3.png" alt="Proportion">
                                                                    <a class="video-player" href="https://player.vimeo.com/video/164110862"></a>
                                                                </div>
                                                                <div class="meta">
                                                                    <span class="author">Dave Clark</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="#">North Carolina Voter ID Law Is Upheld by Federal Judge</a></h4>
                                                                <p>North Carolina Voter ID Law Is Upheld by Federal Judge...</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4 col-md-3 mega-menu-column">
                                                            <h4 class="mega-title">Radio</h4>

                                                            <div class="post ps-small">
                                                                <p><a href="#">Michael Phelps: 'I don't know if I'm an alcoholic,' says 18-time gold...</a></p>
                                                            </div>
                                                            <div class="post ps-small">
                                                                <p><a href="#">What A Million Dollars Can Buy You Around the World</a></p>
                                                            </div>
                                                            <div class="post ps-small">
                                                                <p><a href="#">Jennifer Aniston named 'World's Most Beautiful Woman'</a></p>
                                                            </div>
                                                            <div class="post ps-small">
                                                                <p><a href="#">Russia’s submarine program: How big?</a></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children menu-item-mega mm-medium">
                                        <a href="news.html">Science</a>
                                        <ul>
                                            <li>
                                                <div class="mega-menu-lists">
                                                    <a href="single.html">Autos</a>
                                                    <a href="single.html">Future</a>
                                                    <a href="single.html">TV</a>
                                                    <a href="single.html">Radio</a>
                                                    <a href="single.html">CBBC</a>
                                                    <a href="single.html">CBeebies</a>
                                                    <a href="single.html">Local</a>
                                                </div>
                                                <div class="mega-menu-panel">
                                                    <div class="row">

                                                        <div class="col-sm-6 col-md-3 mega-menu-column">
                                                            <div class="post ps-medium">
                                                                <div class="meta">
                                                                    <span class="author">Dave Clarke</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="single.html">Dollars Drops to 11-Month Low as asian stocks</a></h4>
                                                                <p>France: Prostitution legal, paying for sex illegal. Modi makes his mark</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-3 mega-menu-column">
                                                            <div class="post ps-medium">
                                                                <div class="meta">
                                                                    <span class="author">Dave Clarke</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="single.html">Billionaire icahn exits apple stake after 3 years</a></h4>
                                                                <p>France: Prostitution legal, paying for sex illegal. Modi makes his mark</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-3 mega-menu-column">
                                                            <div class="post ps-medium">
                                                                <div class="meta">
                                                                    <span class="author">Dave Clarke</span>
                                                                    <span class="date">2h</span>
                                                                </div>
                                                                <h4><a href="single.html">Social media, theme parks and kung fu panda</a></h4>
                                                                <p>France: Prostitution legal, paying for sex illegal. Modi makes his mark</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-3 mega-menu-column">
                                                            <div class="post ps-large">
                                                                <div class="image video-frame" data-src="images/news/video-04.jpg">
                                                                    <img src="images/5x3.png" alt="Proportion">
                                                                    <a class="video-player video-player-small" href="https://player.vimeo.com/video/164110862"></a>
                                                                </div>
                                                                <h4><a href="#">North Carolina Voter ID Law Is</a></h4>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="news.html">Culture</a></li>
                                    <li><a href="entertainment.html">Health</a></li>
                                    <li><a href="blog.html">Travel</a></li>
                                    <li class="menu-item-has-children"><a href="news2.html">Politics</a>
                                        <ul>
                                            <li><a href="news2.html">Autos</a></li>
                                            <li class="menu-item-has-children"><a href="news2.html">Future</a>
                                                <ul>
                                                    <li><a href="news2.html">Autos</a></li>
                                                    <li><a href="news2.html">Future</a></li>
                                                    <li><a href="news2.html">TV</a></li>
                                                    <li><a href="news2.html">Radio</a></li>
                                                    <li><a href="news2.html">CBBC</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="news2.html">TV</a>
                                                <ul>
                                                    <li><a href="news2.html">Autos</a></li>
                                                    <li><a href="news2.html">Future</a></li>
                                                    <li><a href="news2.html">TV</a></li>
                                                    <li><a href="news2.html">Radio</a></li>
                                                    <li><a href="news2.html">CBBC</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="news2.html">Radio</a></li>
                                            <li><a href="news2.html">CBBC</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single.html">Lifestyle</a></li>
                                    <li><a href="single-news.html">World</a></li>
                                    <li><a href="fitness.html">Sports</a></li>
                                </ul>


                                <div class="search-panel">
                                    <form method="get">
                                        <input type="text" name="s" placeholder="Search...">
                                        <button type="submit"></button>
                                    </form>
                                </div>

                                
                                <div class="right-content news-search-menu">
                                    <a href="javascript:;" class="search-handler" id="search_handler">
                                        <svg class="icon-search" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14" xml:space="preserve">
                                            <path d="M5.4,0C2.4,0,0,2.4,0,5.4s2.4,5.4,5.4,5.4c1.2,0,2.2-0.4,3.1-1l0,0l4,4c0.1,0.1,0.2,0.1,0.3,0l1.1-1.1c0.1-0.1,0.1-0.2,0-0.3l-4-4c0.6-0.9,1-2,1-3.1C10.9,2.4,8.4,0,5.4,0z M5.4,9.6c-2.3,0-4.2-1.9-4.2-4.2s1.9-4.2,4.2-4.2s4.2,1.9,4.2,4.2S7.7,9.6,5.4,9.6z"></path>
                                        </svg>
                                        <svg class="icon-close" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                            <polygon points="16,1.6 14.4,0 8,6.4 1.6,0 0,1.6 6.4,8 0,14.4 1.6,16 8,9.6 14.4,16 16,14.4 9.6,8"/>
                                        </svg>
                                    </a>
                                    <a href="javascript:;" class="burger-menu pm-right">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 12" xml:space="preserve">
                                            <g>
                                                <path d="M1.1,0.1h11.7c0.6,0,1.1,0.5,1.1,1.1s-0.5,1.1-1.1,1.1H1.1C0.5,2.3,0,1.8,0,1.2S0.5,0.1,1.1,0.1z"></path>
                                                <path d="M1.1,4.9h11.7C13.5,4.9,14,5.4,14,6s-0.5,1.1-1.1,1.1H1.1C0.5,7.1,0,6.6,0,6S0.5,4.9,1.1,4.9z"></path>
                                                <path d="M1.1,9.7h11.7c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1H1.1c-0.6,0-1.1-0.5-1.1-1.1C0,10.2,0.5,9.7,1.1,9.7z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </nav>                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-ticker">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="tt-el-ticker">
                                <strong>Last Rumor: </strong>
                                <span class="entry-arrows">
                                    <a href="javascript:;" class="ticker-arrow-prev"><img src="images/arrow-lr-left.png" alt="arrow"></a>
                                    <a href="javascript:;" class="ticker-arrow-next"><img src="images/arrow-lr-right.png" alt="arrow"></a>
                                </span>
                                <span class="entry-ticker">
                                    <span>Что бы произвести впечатление на мужчину, женщине достаточно крепко обнять его ногами.</span>
                                    <span>Хороший собеседник не только слушает, но и подливает.</span>
                                    <span>Ничто так не ориентирует человека на местности, как поиски туалета.</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right phl0">
                            <div class="tt-el-info text-right">
                                <h4>
                                    <?php
                                    echo date("j");
                                    ?>
                                </h4>
                                <p>
                                    <?php
                                    echo date("F");
                                    ?>
                                </p>
                            </div>  
                            <br>                          
                            <div class="tt-el-info text-right">
                                <h4>32˚C</h4>
                                <p>Витебск</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="push-menu pm-news">
                <div class="pm-overlay"></div>
                <div class="pm-container">
                    <div class="pm-viewport">
                        <div class="pm-wrap">
                        
                            <a href="javascript:;" class="close-menu"></a>
                            
                            <div class="pm-socials">
                                <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                            </div>

                            <div class="author-info">
                                <img src="images/pages/author.jpg" alt="search icon">
                                <div class="auth-name">
                                    <h4><a href="javascript:;">Patrick Pitt</a></h4>
                                    <p><a href="javascript:;">Sign out</a></p>
                                </div>
                            </div>

                            <h4 class="pm-en-title">Menu</h4>

                            <nav class="big-menu">
                                <ul>
                                    <li>
                                        <a href="news.html">News</a>
                                    </li>
                                    <li>
                                        <a href="entertainment.html">Movies</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">TV Series</a>
                                    </li>
                                    <li>
                                        <a href="news.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Trailers</a>
                                    </li>
                                    <li>
                                        <a href="entertainment.html">Music</a>
                                    </li>
                                </ul>
                            </nav>

                            <h4 class="pm-en-title">Featured News</h4>

                            <div class="pm-en-recent">
                                <a href="blog.html" class="er-item">
                                    <img src="images/pages/pm-en1.png" alt="recent news">
                                </a>
                                <a href="entertainment.html" class="er-item">
                                    <img src="images/pages/pm-en3.png" alt="recent entertainment">
                                </a>
                            </div>

                            <div class="pm-go-home">
                                <a href="entertainment.html">
                                    <i data-bg-image="images/pm-en-ico-home-dark.png"></i>
                                    Go to home
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

