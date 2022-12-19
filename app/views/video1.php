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
$view_1->get_info();
$view_1 = new View('', 19, $connection, '');
$view_1->get_composer();

?>

<?php echo $view2; #Kyung Wha Chung Bach A minor:
?>
<?php
$id = 2;
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $info2 . $musician->concerto . "</span></div></div>"; ?>

    <?php echo $buttonPlace .
        "data-content= '$musician->info' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 3;
$stmt; //Bach
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "data-content='$musician->info' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div>"; ?>

<?php echo $view3;  //Menuhin 
?>
<?php $id = 4;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $info3 . $musician->concerto . "</span></div></div>"; ?>

    <?php echo $buttonPlace .
        "data-content= '$musician->info' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php  //Oistrakh
$id = 7;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace .
        "data-content= '$musician->info' title = $musician->role ?>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 3;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : //Bach
?>
    <?php echo $buttonPlace . "data-content='$musician->info'  title = '$musician->role'>JS Bach</button>"; ?>
<?php endforeach;
echo "</div></div>"; ?>

<?php echo $view4; ?>
<?php $id = 5;
$stmt; //Hahn
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $info4 . $musician->concerto . "</span></div></div>"; ?>
    <?php echo $buttonPlace .
        "data-content= '$musician->info' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 6;
$stmt; //Mozart
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "data-content='$musician->info' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div>"; ?>

<?php echo $view11; ?>
<?php  //Wolfram Brandl
$id = 21;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $info5 . $musician->concerto .
        "</span></div></div>"; ?>

    <?php echo $buttonPlace .
        "data-content= '$musician->info;' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php  //Yulia Deyneka
$id = 22;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace .
        "data-content= '$musician->info' title = $musician->role ?>$musician->name</button>"; ?>
<?php endforeach; ?>


<?php $id = 6;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace . "data-content='$musician->info'  title = '$musician->role'>Mozart</button></br><a class = 'btn btn-outline-danger btn-sm text-light' href='https://frozen-beach-43331.herokuapp.com/' target='_blank'   id='heifetz_link'>Test your knowledge of the viola!</a>"; ?>
<?php endforeach;
echo "</div></div><br>"; ?>

<?php echo $view5; ?>
<!--Beethoven -->
<?php $id = 13;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
$perlman = "He played the solo violin passages in John Williams’s Oscar-winning score for the movie Schindler’s List (1993)."; ?>
<?php foreach ($musicians as $musician) : ?>
    <?php echo $info6 . $musician->concerto .
        "</span></div></div>"; ?>

    <?php echo $buttonPlace .  "title = '$musician->role'
data-content= '$musician->info $perlman'>$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 14;
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach ($musicians as $musician) : ?>
    <?php echo $buttonPlace .  "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach;
echo "</div></div>";
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