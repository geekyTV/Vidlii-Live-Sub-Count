<?php
$output = file_get_contents("https://www.vidlii.com/api?ty=user&ta=Vidlii");
$user_info = json_decode($output, true);
?>
<html>
    <head>
        <title>VidLii Live Subcount</title>
        <link rel="stylesheet" href="css/style.css">
		<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="animate.css">
    </head>
    <body>
        <div class="header-thing">
            <h1>VidLii Subcount by geekyTV</h1>
            <p>Special thanks to Jan and JonBot for helping me</p>
        </div>
        <div class="wrapper">
            <!-- user details n' stuff -->
            <p id="error"></p>
            <div class="user-details">
                <img align="center" id="avatar" src="<?php echo $user_info['avatar'] ?>">
                <h1 id="username"><?php echo $user_info['displayname'] ?></h1>
                <h2 id="subs"><?php echo $user_info['subscribers'] ?> Subscribers</h2>
            </div>
            
            <!-- search -->
            <div class="search">
                <p>search for your favorite vidlii creators here:</p>
                    <input type="text" id="user" onkeypress="return enter_username(event)">
                    <button id="submit" type="submit" onclick="set_username()">search</button>
            </div>
        </div>
        <p style="text-align:right;">back to geekyweirdguy.host</p>
    </body>
</html>

<script src="subcount.js"></script>