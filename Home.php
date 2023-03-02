<?php

session_start();

if ( isset( $_SESSION[ 'user_id' ] ) )
 {
    $mysqli = require __DIR__. '/database.php';

    $sql = "SELECT * FROM user WHERE id = {$_SESSION['user_id']}";

    $result = $mysqli->query( $sql );

    $user = $result-> fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>HOME PAGE</title>
<link rel = 'stylesheet' href = 'home.css'>

</head>
<body>

<h1>Home</h1>

<?php if ( isset( $user ) ): ?>

<p>Hello < ?= htmlspecialchars( $user[ 'name' ] ) ?></p>

<p><a href = 'logout.php'>Log Out</a></p>
<?php endif;
?>
<nav>
<ul>
<li>
<a href = '#' class = 'logo'>
<img src = 'logo.png' width = '100px'  height = '70px'  alt = ''>
<span class = 'nav-item'></span>
</a>
</li>
<li>
<a href = ''>
<img src = 'dash.jpg' width = '20px'  height = '20px'    alt = ''>
<span class = 'nav-item'>dashboard</span>
</a>
</li>
<li>
<a href = 'Fee Receipt.pdf'>
<img src = 'fin.png' width = '20px'  height = '20px' alt = ''>
<span class = 'nav-item'>finance</span>
</a>
</li>
<li>
<a href = 'clearance.html'>
<img src = 'clear.png' width = '20px'  height = '20px' alt = ''>
<span class = 'nav-item'>CLEARANCE</span>
</a>
</li>
<li>
<a href = 'resit.html'>
<img src = 'exam.png'  width = '20px'  height = '20px'alt = ''>
<span class = 'nav-item'>RESIT EXAMS</span>
</a>
</li>
<li>
<a href = 'Academics.html'>
<img src = 'evalu.png' width = '20px'  height = '20px'alt = ''>
<span class = 'nav-item'>ACADEMICS</span>
</a>
</li>
<li>
<a href = 'Accomodation.html'>
<img src = 'host.png' width = '20px'  height = '20px' alt = ''>
<span class = 'nav-item'>ACCOMODATION</span>
</a>
</li>
<li>
<a href = '#'>
<img src = 'reg.png' width = '20px'  height = '20px' alt = ''>
<span class = 'nav-item'>sem registration</span>
</a>
</li>
<li>
<a href = 'login.php' class = 'logout'>
<img src = 'logout.jpg' width = '20px'  height = '20px' alt = ''>
<span class = 'nav-item'>Log out</span>
</a>
</li>
</ul>
</nav>
<div class = 'dashboard'>
<div class = 'main-content'>
<div class = 'card'>
<h2>ANNOUNCEMENTS</h2>
</div>
<div class = 'card'>
<h2> UP COMMING EVENTS</h2>
</div>
<div class = 'card'>
<h2>STUDENT RATING</h2>
</div>

</body>
</html>