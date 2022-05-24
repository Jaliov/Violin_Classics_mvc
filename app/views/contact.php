<?php
$this->view("header", $data);
?>
<?php require '../app/core/db_connect.php'; ?>
<?php require '../app/core/form_db.php'; ?>

<div class = 'container'>
    <form method = 'POST' action = 'contact'>
   <span class = 'text-danger' id='reset'><?=$formSubmit?></submit>
    </div>
         <label for='name_entry' class ='text-light'>Name</label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'><span class = 'text-danger'>
         <?=$NameError?> </span>
                 <div class='form-group'>
                 <label for='email' class ='text-light'>Email</label>
                 <input type='email' class='form-control' name ='email' placeholder='name@youremail.tldomain'> 
               </div>
               
               <div class='form-group'>
                 <label for='comments' class ='text-light'>Comments</label>
                 <textarea class='form-control' name='comments' rows='3' placeholder='Violinistic comments...'></textarea><br>
               <button class ='btn-outline-danger btn-light btn-lg' type = 'submit' name='submit'>Submit</button>
               
        </form>
        <script>
        setTimeout(() => {
            document.querySelector('#reset').innerHTML = ''
        }, 3000);
        </script>
        </div>

<?php $this->view("footer",$data);?>
