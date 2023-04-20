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

class Paganini extends View
{
    public function showPaganini()
    {
        $paganini = 'Niccolò Paganini';
        require 'HTML.php';
        echo $this->view;
        $this->id;
        $stmt = $this->connection->prepare('SELECT * FROM musicians WHERE id = ?');

        $stmt->execute(array(12));
        $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($musicians as $musician) :
            echo $buttonPlace . "title = '$musician->role'
        data-content= '$paganini $musician->info' >$paganini</button>";
        endforeach;
        echo "</div></div>";
    }
}
class Mozart extends View
{
    function justMozart()
    {
        require 'HTML.php';
        $stmt = $this->connection->prepare('SELECT * FROM musicians WHERE id = ?');
        $stmt->execute(array(6));
        $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($musicians as $musician) :
            echo $buttonPlace . "title = '$musician->role'
        title = '$musician->role'
        data-content= '$musician->info' >Mozart</button>";
        endforeach;
        foreach ($musicians as $musician) : ?>
            <div style="margin-top:-20px;"><a class='btn btn-outline-danger btn-sm text-light' id="violaReset" href='https://frozen-beach-43331.herokuapp.com/' target='_blank'>Test your knowledge of the viola here!</a></div>"; ?>
        <?php endforeach; 
        echo "</div></div><br>"; 
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
$view_5 = new Mozart('', 6, $connection, '');
$view_5->justMozart();

$view_6 = new View($view5, 13, $connection,  $info6);
$view_6->get_info(); //Perlman
$view_6 = new View('', 14, $connection, '');
$view_6->get_composer();
$view_6->spacer();

$view_7 = new View($view6, 11, $connection,  $info7);
$view_7->get_info();  //Ricci
$view_7 = new Paganini('', 12, $connection, '');
$view_7->showPaganini();

$view_8 = new View($view7, 9, $connection,  $info8);
$view_8->get_info();  //Mutter
$view_8 = new View('', 10, $connection, '');
$view_8->get_composer();  //Mendelssohn
$view_8->spacer();

$view_9 = new View($view8, 15, $connection,  $info9);
$view_9->get_info(); 
$view_9 = new View('', 16, $connection, '');
$view_9->get_composer();
$view_9->spacer();

$view_10 = new View($view9, 1, $connection,  $info10);
$view_10->get_info(); //Heifetz
$view_10 = new View('', 17, $connection, '');
$view_10->get_composer();  //Tchaikovsky
?>
</button><br/><a class = 'btn btn-outline-danger btn-sm text-light' href='https://jaliov.github.io/react-heifetz/' target='_blank' id='heifetz_link'>Check out my Heifetz Tribute Page!</a>
</div></div><br>

<?php
$view_11 = new View($view10, 8, $connection,  $info11);
$view_11->get_info();  //Ferras
$view_11 = new View('', 18, $connection, '');
$view_11->get_composer(); //Sibelius
$view_11->spacer();
?>

