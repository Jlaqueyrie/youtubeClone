<!doctype html>
<html lang="en">

<head>
    <title>Youtube clone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div id="pageContainer">

        <header>
            <button class="navShowHide">
                <img src="assets/images/icons/menu.png" alt="menu">
            </button>
            <a href="index.php" class="logoContainer">
                <img src="assets/images/logo-youtube.png" alt="logo">
            </a>
            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" name="term" placeholder="Rechercher ..." class="searchBar">
                    <button class="searchBtn"><img src="assets/images/icons/search.png" alt="search button"></button>
                </form>
            </div>
            
            <div class="rightIcons">
                <a href="upload.php">
                    <img src="assets/images/icons/upload.png" alt="">
                </a> 
                <a href="profile.php">
                    <img src="assets/images/default.png" alt="">
                </a>
            </div>

        </header>

            <aside id="sidenavContainer">Menu</aside>
            <section id="mainSectionContainer" class="leftPadding">
            <div class="mainContent">Vidéo