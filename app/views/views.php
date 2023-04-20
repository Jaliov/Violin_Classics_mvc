<?php require 'HTML.php'; ?>
<?php require 'video_list.php'; ?>



<?php

$colAdd1 = "data-target='#coll'>";
$colAdd2 = "data-target='#coll2'>";
$colAdd3 = "data-target='#coll3'>";
$colAdd4 = "data-target='#coll4'>";
$colAdd5 = "data-target='#coll5'>";
$colAdd6 = "data-target='#coll6'>";
$colAdd8 = "data-target='#coll8'>";
$colAdd7 = "data-target='#coll7'>";
$colAdd9 = "data-target='#coll9'>";
$colAdd10 = "data-target='#coll10'>";
$colAdd11 = "data-target='#coll11'>";

class Info {
    public $info; 
    public $coll;

    public function  getInfo() {
        $this->info = "<div class='collapse' id= . $this->$coll . >";
        "<div class='card card-body text-light bg-transparent'><span>";
    }

    function __construct ($info, $coll) {
        $this->info = $info; 
        $this->$coll = $coll
    }

    
}

$info_1 = new Info()

$info1 = "<div class='collapse' id='coll'>
<div class='card card-body text-light bg-transparent'><span>";

$view1 = $card . "<iframe id ='player' class='embed-responsive-item border border-light'  src=$clip14 allowfullscreen></iframe></div><div class='card-body'>" .  $collapse . $colAdd1 .
"Vivaldi Violin Concerto in A minor <small> (audio only) </small>
</button><br>";

$info2 = "<div class='collapse' id='coll2'>
<div class='card card-body text-light bg-transparent'><span>";

$view2 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip1' allowfullscreen></iframe></div><div class='card-body'>" .  $collapse . $colAdd2 .
"Bach Violin Concerto in A minor</button><br>";

$info3 = "<div class='collapse' id='coll3'>
<div class='card card-body text-light bg-transparent'><span>";

$view3  = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip11'allowfullscreen></iframe></div><div class='card-body'>" . $collapse . $colAdd3 .
"Bach Double Concerto in D minor</button><br>";

$info4 = "<div class='collapse' id='coll4'>
<div class='card card-body text-light bg-transparent'><span>";

$view4  = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip12'allowfullscreen></iframe></div><div class='card-body'>" .  $collapse  . $colAdd4 . "Mozart Violin Concerto No 3, K 463</button><br>";

$info5 = "<div class='collapse' id='coll5'>
<div class='card card-body text-light bg-transparent'><span>";

$view11 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip15' allowfullscreen></iframe></div><div class='card-body'>" . $collapse . $colAdd5 . "Mozart Sinfonia Concertante in E Flat Majore</button><br>";

$info6 = "<div class='collapse' id='coll6'>
<div class='card card-body text-light bg-transparent'><span>";

$view5  = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip3'allowfullscreen style='margin-top:20px;'></iframe></div><div class='card-body'>" .  $collapse . $colAdd6 . "Beethoven Violin Concerto in D</card></button><br>";

$info7 = "<div class='collapse' id='coll7'>
<div class='card card-body text-light bg-transparent'><span>";
"<row><col>";
$view6 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip9' allowfullscreen></iframe></div><div class='card-body'>" .  $collapse . $colAdd7 . "Paganini Concerto No. 4</button><br>";

$info8 = "<div class='collapse' id='coll8'>
<div class='card card-body text-light bg-transparent'><span>";

$view7 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip4' allowfullscreen></iframe></div><div class='card-body'>".  $collapse . $colAdd8 . "Mendelsohn Violin Concerto in E</button><br>";

$info9 = "<div class='collapse' id='coll9'>
<div class='card card-body text-light bg-transparent'><span>";

$view8 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip8' allowfullscreen></iframe></div><div class='card-body'>".  $collapse . $colAdd9 . "Brahms Violin Concerto in D</button><br>";



$info10 = "<div class='collapse' id='coll10'>
<div class='card card-body text-light bg-transparent'><span>";

$view9 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip7' allowfullscreen></iframe></div><div class='card-body'>" .  $collapse . $colAdd10 . "Tchaikovsky Violin Concerto in D</button><br>";



$info11 = "<div class='collapse' id='coll11'>
<div class='card card-body text-light bg-transparent'><span>";

$view10 = $card . "<iframe id ='player' class='embed-responsive-item border border-light' src='$clip13'allowfullscreen style='margin-top:20px;'></iframe></div><div class='card-body'>" .  $collapse . $colAdd11 . "Sibelius Violin Concerto</button><br>";

?>