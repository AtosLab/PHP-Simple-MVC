<!DOCTYPE html>
<html lang="en">
<head>
    <title id="title"><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>CSS/Style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="<?php echo $base_url; ?>js/main.js"></script>
</head>
<body>
<div class="header">
    <div class="left">
        <div style="display: inline-block">
            <a href="<?php echo $base_url; ?>"><img alt=''  src="<?php echo $base_url; ?>assets/logo.png"/></a>
        </div>
        <div class="vertical-row"></div>
    </div>
    <div class="main">
        <form>
            <span><input type="text" class="search rounded" placeholder="Search..."></span>
        </form>
    </div>

    <div class="right">
        <div class="vertical-row"></div>
        <div style="display: inline-block;">
          <?php if($logined == "false") { ?>
            <div id="sign-up-links">
                <p><a href="<?php echo $base_url.'user'; ?>">Login</a><span class="footer-vertical-row"></span><a href="<?php echo $base_url.'user/signup'; ?>">Sign Up</a></p>
            </div>
          <?php } else { ?>
            <div id="sign-up-links">
                <p><a href="<?php echo $base_url.'home/adddetails'; ?>">Add</a><span class="footer-vertical-row"></span><a href="<?php echo $base_url.'user/profile'; ?>">Profile</a><span class="footer-vertical-row"></span><a href="<?php echo $base_url.'user/logout'; ?>">Logout</a></p>
            </div>
          <?php } ?>
        </div>

    </div>
</div>

<div class="horizontal-row"></div>