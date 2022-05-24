<?php
$this->view("header", $data);
?>

<div class="card text-danger bg-transparent">
    <!-- <h5 class="card-header">Additional</h5> -->
    <div class="card-body text-light text-center">
        <div class="card-title">Other sites I built:</div>

        <div class="text-center">
      
        <a href="https://lisabflamenco.herokuapp.com/" class="btn btn-outline-danger btn-light btn-list"
                target="_blank">Lisa Botalico Flamenco!</a>
                
        <a href="https://jaliov.github.io/JoelRudinArt/index.html" class="btn btn-outline-danger btn-light btn-list"  target="_blank">Joel Rudin Art</a>

        <div class="card-title">Also:</div>    
        <a href="https://soundwavecompany.com/products/birds-out-my-window" class="btn btn-outline-danger btn-light btn-list" target="_blank">A piece I composed</a>           
           
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>