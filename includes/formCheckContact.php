<?php
$i=0;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
     



if(!preg_match($regUsername,$name)){
            $i++;
            $msg='Ime nije dobro uneto';
        }
        if(!preg_match($regEmail,$email))
            {$i++;
                $msg='Mejl nije dobro unet';
            }
            if($i==0){
                $status=1;
                 $msg="Registracija uspešna, možete se ulogovati !";
            $query=mysqli_query($conn,"insert into contact(con_nm,con_email,con_query) values('$name','$email','$message')");
            echo $msg;
            die;
            }
            else{
                $status=422;
                echo $msg;
            }
            echo json_encode($msg);
            http_response_code($status);




?>