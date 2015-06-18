<?
 
require_once('authenticator.php');
require_once('logger.php');

$authenticator = new AuthenticatorHelper();
$logger = new Logger();
//$logger->setLog("access","This is the message detailing the error");
//$logger->saveLog();
//$logger->sendEmail();

?><html>
<head>
	<title>Shamenator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/shamenator/css/style.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	
</head>
<body>
	<div class="container">
		<div class="row">
			<? if($authenticator->isAuthenticated() ): ?>
			<nav class="navbar navbar-default">
  			<div class="container-fluid">
    			<div class="navbar-header">
    			  <a class="navbar-brand" href="/shamenator/index.php">Shamenator</a>
    			</div>
    			<div id="navbar" class="navbar-collapse collapse">
    				<ul class="nav navbar-nav">
    					<li><a href="/shamenator/admin.php?action=manage-shames">Manage Shame</a></li>
    					<li><a href="/shamenator/admin.php?action=manage-websites">Manage Websites</a></li>
    					<li><a href="/shamenator/admin.php?action=manage-users"> Manage Users</a></li>
    					<li><a href="index.php?logout=yes">Logout</a></li>
    				</ul>
    				</div>
    			</div>
    		</nav>
    			<? else: ?>
    		    <h1 class="text-center">Shamenator</h1>
    		      
    			 	<form class="col-xs-9" id="login-form" method="POST" action="<?= $_SERVER['PHP_SELF']?>">
    			 	<div class="form-group">
    					<h3>Login</h3>
    					<label>Username</label>
    					<input class="form-control" type="text" name="login[username]"/>
            </div>
            <div class="form-group">
    					<label>Password</label>
    					<input class="form-control" type="password" name="login[password]"/>
            </div>
    					<button class="btn btn-success pull-right">Login</button>
    				</form>
    			<? endif; ?>
    			<div class="col-xs-9 col-xs-offset-2">