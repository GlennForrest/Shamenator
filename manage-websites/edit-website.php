<?
//Secure File
if(!authenticator){
  die();
}

if( isset($_POST['website']) ){
  $db->update('websites', $_POST['website'], $_GET['website_id']);
}

if( isset($_GET['website_id']) ){
  $website_id = $_GET['website_id'];
  $website = $db->queryRow("SELECT * FROM `websites` WHERE id = '$website_id'");
}else{
  header('Location: /shamenator/manage-websites/?error=No Website ID supplied.');
}
include('../header.php');
?>

<h3>Edit Website</h3>
<form method="GET" action="<?= $_SERVER['PHP_SELF']?>?action=edit-website&website_id=<?=$_GET['website_id']?>">
	<? include('_website-form.php'); ?>
	<button class="btn btn-success">Update Website</button>
</form>
<?
include('../footer.php');
?>