<?
// Require security helpers
require_once('../authenticator.php');
$authenticator = new AuthenticatorHelper();
// Secured content, redirect unauthenticated users
$authenticator->redirectUnauthenticatedUser();
$db = new DatabaseHelper();


switch($_GET['action']){
  case 'add-shame':
      require('add-shame.php');
      die();
    break;
  
  case 'edit-shame':
      require('edit-shame.php');
      die();
    break;
  
  case 'view-shame':
      require('view-shame.php');
      die();
    break;
}
# @TODO Handle error better
$shames = $db->getAllByTableName('shames');
include('../header.php');
?>
<div class="manage">
  <h1>Manage Shames</h1>
  <? if( $_GET['message'] ) echo '<p class="alert alert-success">'.$_GET['message'].'</p>'; ?>
  <? if( $_GET['error'] ) echo '<p class="alert alert-danger">'.$_GET['error'].'</p>'; ?>
  <a href="/shamenator/manage-shames/?action=add-shame" class="btn btn-success"><i class="fa fa-plus-square"></i> Add Shame</a>
</div>

<div class="list">
  <h3>List All Shames</h3>
  <ul><? 
    foreach($shames as $shame){ ?>
        <li>
          <strong><?= $shame['user_id'] ?> - <?= $shame['website_id']?></strong> 
          <em><?= $shame['shame']?></em>
          <a href="/shamenator/manage-shames/?action=edit-shame&shame_id=<?= $shame['id'] ?>"><i class="fa fa-pencil"></i> Edit</a>
          <a href="/shamenator/manage-shames/?action=view-shame&shame_id=<?= $shame['id'] ?>"><i class="fa fa-eye"></i> View</a>
        </li><? 
    } ?>
</ul>
</div>
<?
include('../footer.php');
?>