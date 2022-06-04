<?php
$this->view("header", $data);
?>
<?php require '../app/core/db_connect.php'; ?>
<?php require '../app/core/form_db.php'; ?>

<div class='container'>
  <div class='form-group'>
    <form method='POST' action='contact'>
      <span class='text-danger' id='reset'><?= $formSubmit ?></submit>
  </div>
  <div class="row">
    <div class="col">
      <label for='name_entry' class='text-light'>Name</label>
      <input type='text' required name='name_entry' class='form-control' placeholder='Enter name'><span class='text-danger'>
        <?= $NameError ?> </span>
    </div>

    <div class="col">
      <label for='email' class='text-light'>Email</label>
      <input type='email' required class='form-control' name='email' placeholder='name@youremail.tldomain'>
    </div>
  </div>
  <div class='form-group'>
    <label for='comments' class='text-light'>Comments</label>
    <textarea class='form-control' required name='comments' rows='3' placeholder='Violinistic comments...'></textarea><br>
    <button class='btn-outline-danger btn-light btn-lg' type='submit' name='submit'>Submit</button>
  </div>
</div>
</form>
<script>
  setTimeout(() => {
    document.querySelector('#reset').innerHTML = ''
  }, 3000);
</script>
</div>

<?php $this->view("footer", $data); ?>