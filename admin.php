<? 
require_once('/shamenator/kint/Kint.class.php');

dd($_SERVER);
//Require security helper functions
require_once('authenticator.php');
//Secured content, redirect unauthenticated users
$authenticator = new AuthenticatorHelper();
$authenticator->redirectUnauthenticatedUser();

switch($_GET['action']){
	case'manage-shames':
		header('Location: /shamenator/manage-shames/');
		break;
	case'manage-websites':
		header('Location: /shamenator/manage-websites/');
		break;
	case'manage-users':
		header('Location: /shamenator/manage-users/');
		break;
}

include('header.php');
?>

<!-- html content for admin page -->

<h1>Control Panel</h1>
<div class="col-xs-4">
	<h3>Manage Users</h3>
</div>
<div class="col-xs-4">
	<h3>Manage Websites</h3>
</div>
<div class="col-xs-4">
	<h3>Manage Shame</h3>
</div>

<?
include('footer.php');
?>