<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title><?=$title?></title>
</head>

<body>

<div class="container">

	<div class="header">
				
		<div class="title">
			<h1><?=$siteName?></h1>
            <h2><?=$slogan?></h2>
		</div>

	</div>

	<div class="navigation">
			<?=makeLinks($nav1);?>
			<div class="clearer"><span></span></div>
		</div>

	<div class="main">		
		
		<div class="content">
            
            <h2><?=$pageHeader?></h2>
            
            <!--header ends here-->