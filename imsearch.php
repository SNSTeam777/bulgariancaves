<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="bg-BG" dir="ltr">
	<head>
		<title>Търсене - Красиви пещери в България</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="СНС " />
		<meta name="generator" content="Incomedia WebSite X5 Free 10.1.12.57 - www.websitex5.com" />
		<meta name="viewport" content="width=1112" />
		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?57"></script>
		<script type="text/javascript" src="res/x5engine.js?57"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Търсене - Красиви пещери в България</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Прескачане на главното меню">Отиване към съдържанието</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главно меню:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Въведение</span>
							</span>
						</a>
					</li><li id="imMnMnNode3">
						<a href="page-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Дяволското гърло</span>
							</span>
						</a>
					</li><li id="imMnMnNode4">
						<a href="page-4.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Утробата</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<a href="page-5.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Ягодинската пещера</span>
							</span>
						</a>
					</li><li id="imMnMnNode6">
						<a href="page-6.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Снежанка</span>
							</span>
						</a>
					</li><li id="imMnMnNode7">
						<a href="page-7.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Деветашката пещера</span>
							</span>
						</a>
					</li><li id="imMnMnNode8">
						<a href="page-8.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Магура</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Резултати от търсенето</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>
				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочетете отново тази страница">Назад към съдържанието</a> | <a href="#imGoToMenu" title="Навигация за уебсайта">Назад към главното меню</a></span>
		
	<noscript class="imNoScript"><div class="alert alert-red">За да използвате този сайт, трябва да разрешите JavaScript</div></noscript>
				</body>
</html>
