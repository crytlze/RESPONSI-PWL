 <?php 
      $namaleng = $_POST['nama'];

      $username = $_POST['username'];
      $pass = $_POST['password'];


  //$bisalog = array('admin','user','cry');
    $bisalog = 'admin';
    

    if ($username == $bisalog) {
    header('Location:page01.php');
    }else{
   echo "USERNAME SALAH";
    }
   ?>