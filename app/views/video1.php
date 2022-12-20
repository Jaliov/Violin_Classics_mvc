<?php
require '../app/core/db_connect.php';
include 'carousel.php';
require 'video_list.php';
require 'views.php';
require './assets/js/popover_script.php';

echo $heading;

class View
{
    public $view;
    public $id;
    public $stmt;
    public $connection;
    public $role;
    public $info;
    public $spacer;
    public function get_info()
    {
        require 'HTML.php';
        echo $this->view;
        $this->id;
        $stmt = $this->connection->prepare('SELECT * FROM musicians WHERE id = ?');

        $stmt->execute(array($this->id));
        $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($musicians as $musician) :
            echo $this->info . $musician->concerto . "</span></div></div>";
            echo $buttonPlace .
                "data-content = '$musician->info' title = '$musician->role'>$musician->name</button>";
        endforeach;
    }

    public function get_composer()
    {
        require 'HTML.php';
        echo $this->view;
        $this->id;
        $stmt = $this->connection->prepare('SELECT * FROM musicians WHERE id = ?');
        $stmt->execute(array($this->id));
        $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($musicians as $musician) :
            echo $buttonPlace . "data-content='$musician->info' title = '$musician->role'>$musician->name</button>";
        endforeach;
    }
    public function spacer()
    {
        echo "</div></div>";
    }
    function __construct($view, $id, $connection, $info)
    {
        $this->view = $view;
        $this->id = $id;
        $this->connection = $connection;
        $this->info = $info;
    }
}
$view_1 = new View($view1, 20, $connection,  $info1);
$view_1->get_info(); //Szeryng
$view_1 = new View('', 19, $connection, '',);
$view_1->get_composer(); //Vivaldi
$view_1->spacer();

$view_2 = new View($view2, 2, $connection,  $info2);
$view_2->get_info(); //Chung
$view_2 = new View('', 3, $connection, '');
$view_2->get_composer(); //Bach
$view_2->spacer();

$view_3 = new View($view3, 4, $connection,  $info3);
$view_3->get_info();
$view_3 = new View('', 7, $connection, '');
$view_3->get_composer();
$view_3 = new View('', 3, $connection, '');
$view_3->get_composer();
$view_3->spacer();

$view_4 = new View($view4, 5, $connection,  $info4);
$view_4->get_info(); //Hahn
$view_4 = new View('', 6, $connection, '');
$view_4->get_composer(); //Mozart
$view_4->spacer();

$view_5 = new View($view11, 21, $connection,  $info5);
$view_5->get_info();
$view_5 = new View('', 22, $connection, '');
$view_5->get_composer();
$view_5 = new View('', 6, $connection, '');
$view_5->get_composer();
$view_5 = new View('', 6, $connection, '');

$id = 6;
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($musicians as $musician) : ?>
    <br><a class='btn btn-outline-danger btn-sm text-light' style="margin-bottom:2px;" href='https://frozen-beach-43331.herokuapp.com/' target='_blank' id='heifetz_link'>Test your knowledge of the viola!</a>"; 
<?php endforeach;
$view_5->spacer();

$view_6 = new View($view5, 13, $connection,  $info6);
$view_6->get_info(); //Perlaman
$view_6 = new View('', 14, $connection, '');
$view_6->get_composer();
$view_6->spacer();
?>

<?php echo $view6; ?>
<!-- Paganini -->
<?php $id = 11;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);

$paganini = 'Niccolò Paganini'; ?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info7 . $musician->concerto .
        "</span></div></div>"; ?>
    <?php echo $buttonPlace . "title = '$musician->role' data-content=   '$musician->info'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 12;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "title = '$musician->role'
data-content= '$paganini $musician->info' ?>$paganini</button>"; ?>
<?php endforeach;
echo "</div></div>";

?>
<?php echo $view7; ?>
<!-- Mutter Mendelsohn -->

<?php $id = 9;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info8 . $musician->concerto .
        "</span></div></div>"; ?>
    <?php echo $buttonPlace .
        "data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach;
?>

<?php $id = 10;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div>";
?>

<?php echo $view8; ?>
<!-- Midori Brahms -->

<?php $id = 15;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info9 . $musician->concerto .
        "</span></div></div>"; ?>
    <?php echo $buttonPlace .
        "title = '$musician->role'
 data-content= '$musician->info' >$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 16;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "title = '$musician->role'
 data-content= '$musician->info' >$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div>";
?>

<?php echo $view9; ?>
<!--Heifetz Tchaikovsky-->
<?php $id = 1;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info10 . $musician->concerto .
        "</span></div></div>"; ?>
    <?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 17;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button><br/><a class = 'btn btn-outline-danger btn-sm text-light' href='https://jaliov.github.io/react-heifetz/' target='_blank' id='heifetz_link'>Check out my Heifetz Tribute Page!</a>"; ?>
<?php endforeach;
echo "</div></div><br>"; ?>


<?php echo $view10; #Ferras Sibelius
?>

<?php $id = 8;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info11 . $musician->concerto .
        "</span></div></div>"; ?>
    <?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach;
?>

<?php $id = 18;
$stmt; //Sibelius
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "title = '$musician->role'
title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div><br>"; ?>

</div>
</div>