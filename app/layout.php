<?php

class Layout {
	static function HTMLheader($pageTitle) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Fitzwilliam College JCR">
		<meta name="title" content="<?php echo $pageTitle; ?>">
		<meta name="description" content="">
		<title><?php echo $pageTitle; ?></title>
		<!--<link href="include/img/icon.ico" rel="shortcut icon">-->
		<link href="include/css/bootstrap.css" rel="stylesheet">
		<link href="include/css/bootstrap-theme.css" rel="stylesheet">
		<script src="include/js/bootstrap.js"></script>
	</head>
	<body>
<?php
	}

	static function HTMLfooter() {
?></div>
	</body>
</html>
<?php
	}

	static function navbar() {
?>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Fitz JCR Housing Ballot System</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  	<ul class="nav navbar-nav navbar-right">
					<li><a href="#news">Latest News</a></li>
					<li><a href="#timetable">Ballot Timetable</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ballot Order <span class="caret"></span></a>
					  	<ul class="dropdown-menu">
							<li><a href="#order">Order of the Ballot</a></li>
							<li><a href="#shaddow">Shaddow Ballot</a></li>
					  	</ul>
					</li>
					<li><a href="#guide">Ballot Guide</a></li>
					<li><a href="#rooms">Rooms in the Ballot</a></li>
					<li><a href="#houses">Houses in the Ballot</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<?php
	}
}
?>