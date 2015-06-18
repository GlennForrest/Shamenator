<?
//Secure File
if(!authenticator){
  die();
}

if( isset($_GET['website_id']) ){
  $website_id = $_GET['website_id'];
  $website = $db->queryRow("SELECT * FROM `websites` WHERE id = '$website_id'");
  $readonly = true;
}else{
  header('Location: /shamenator/manage-websites/?error=No Website ID supplied.');
}
include('../header.php');
?>

<h3>View Website</h3>
<form method="GET" action="<?= $_SERVER['PHP_SELF']?>?action=view-website&website=<?=$_GET['website_id']?>">
	<? include('_website-form.php'); ?>
	<button type="button" class="btn btn-success">Back</button>
</form>
<?
include('../footer.php');
?>