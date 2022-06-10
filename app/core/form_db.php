<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<?php
$NameError="";
$message = "failed";
$formSubmit = "";

try {
$connection = new PDO($dsn, $username, $password, $options);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO users(name_entry, email, comments) VALUES( :nameEntry, :emailEntry, :textEntry )';

$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;

$stmt = $connection->prepare($sql); 

$email = isset($_POST['email']) ? $_POST['email'] : null;
$stmt = $connection->prepare($sql); 

$comments = isset($_POST['comments']) ? $_POST['comments'] : null;
$stmt = $connection->prepare($sql); 

$stmt->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$email, ':textEntry'=>$comments)); 

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
// $connection = null;

$data = $_POST;
if (!empty($data['name_entry']) &&
    !empty($data['email']) &&
    !empty($data['comments'])) {
    $formSubmit = 'submitted';
    unset($data);
    } else {
      $connection = null;
      $formSubmit = '<h5>please fill out all fields</h5>';
    }
 ?>  