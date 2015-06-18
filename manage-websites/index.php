<?
// Require security helpers
require_once('../authenticator.php');
$authenticator = new AuthenticatorHelper();
// Secured content, redirect unauthenticated users
$authenticator->redirectUnauthenticatedUser();
$db = new DatabaseHelper();


switch($_GET['action']){
	case 'add-website':
		require('add-website.php');
		die();
		break;

	case 'edit-website':
		require('edit-website.php');
		die();
		break;

	case 'view-website':
		require('view-website.php');
		die();
		break;
}

$websites = $db->getAllByTableName('websites');
include('../header.php');
?>
<div class="manage">
  <h1>Manage Websites</h1>
  
  <? if($_GET['message']) echo '<p class="alert alert-success">'. $_GET['message'].'</p>'; ?>
  <? if($_GET['error']) echo '<p class="alert alert-danger">'. $_GET['error'].'</p>'; ?>
  <a href="/shamenator/manage-websites/?action=add-website" class="btn btn-success"><i class="fa fa-plus-square"></i> Add Website</a>
</div>
<div class="list">
  <h3>List All Websites</h3>
  <ul><?
  	foreach($websites as $website){ ?>
  		<li>
  			<strong> <?= $website['website'] ?></strong>
  			 <em><?= date('D jS F Y', strtotime($website['date_created'])) ?></em>
  			<a href="/shamenator/manage-websites/?action=edit-website&website_id=<?= $website['id'] ?>"><i class="fa fa-pencil"></i> Edit</a>
  			<a href="/shamenator/manage-websites/?action=view-website&website_id=<?= $website['id'] ?>"><i class="fa fa-eye"></i> View</a>
  			 </li> <? 
  	} ?>
  </ul>
</div>
<?
include('../footer.php');
?>