<?php 


$this->view("header", $data);


require 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
};

$message = '';

$sql = 'SELECT * FROM people WHERE id=:id';

$statement = $connection->prepare($sql);

$statement->execute([':id' => $id]);

$person = $statement->fetch(PDO::FETCH_OBJ);

if(isset ($_POST['name']) && isset($_POST['email']) ) {

    // echo 'submitted';
    
    $name = $_POST['name'];

    $email = $_POST['email'];

    $sql = 'UPDATE people SET name=:name, email=:email WHERE id=:id';

    $statement = $connection->prepare($sql);

    if(

    $statement->execute([':name' => $name, ':email' => $email, ':id' => $id])) 

    $message = "updated";

    header("Location: index.php");
   
    }
?>

<div class="container">

    <div class="card mt-5">
        <!--margin-top: 5 -->

        <div class="card-header">

            <h2>Update entry</h2>

        </div>

        <div class="card-body">

            <?php if(!empty($message)): ?>

            <div class="alert alert-success">

                <?= $message; ?>
                <!--shorter version of //?php echo $message-->
            </div>

            <?php endif; ?>

            <form method="post">

                <div class="form-group">

                    <label for="name">Name</label>

                    <input value="<?= $person->name; ?>" type="text" id="name" name="name" class="form-control">

                    <label for="email">Email</label>

                    <input type="email" value="<?= $person->email; ?>" name="email" class="form-control">

                </div>

                <div class="form-group">

                    <button class="btn btn-info" type="submit" onclick="alert('Updated')">Create a Person</button>

                </div>

            </form>

        </div>

    </div>

    </form>

</div>

<?php require 'footer.php' ?>