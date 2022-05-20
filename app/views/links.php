<?php
$this->view("header", $data);
?>


<div class="card text-danger bg-transparent">
    <!-- <h5 class="card-header">Additional</h5> -->
    <div class="card-body text-light text-center">
        <div class="card-title">Other sites by me:</div><br/>

        <div class="text-center">

            <a href="https://jaliov.github.io/JoelRudinArt/index.html" class="btn btn-outline-danger btn-light btn-list"
                target="_blank">Joel Rudin Art</a><br>
            <a href="https://lisabflamenco.herokuapp.com/" class="btn btn-outline-danger btn-light btn-list"
                target="_blank">Lisa Botalico
                Flamenco!</a><br>
            <a href="https://boiling-beyond-86124.herokuapp.com/" class="btn btn-outline-danger btn-light' btn-list"
                target="_blank">Website
                Portfolio</a>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>