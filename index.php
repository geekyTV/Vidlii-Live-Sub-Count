<?php
$output = file_get_contents("https://www.vidlii.com/api?ty=user&ta=Vidlii");
$user_info = json_decode($output, true);
?>
<html>
    <head>
        <title>VidLii Live Subcount</title>
		<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/style.css">
		<link rel="stylesheet" href="assets/animate.css">
    </head>
    <body>
        <div class="header-thing">
            <h1>VidLii Subcount</h1>
            <p>Made by JonBot415 and geekyTV. Special thanks to Jan for helping us with the API.</p>
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
    </body>
</html>

<script src="js/subcount.js"></script>
