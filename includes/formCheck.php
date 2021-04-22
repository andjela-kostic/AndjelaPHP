<?php
header('Content-type:application/json'); 
print_r($_POST);
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('config.php');
	echo ('Poslalo se');
    $fullname=$_POST['fnm'];
	$email=$_POST['mail'];
    $password=($_POST['pwd']);
	$contactno=$_POST['contact'];
    $gender=$_POST['gender'];
    $username=$_POST['unm'];
    $city=$_POST['city'];
    $regUsername='/^([A-ZČĆŽĐŠ][a-zčćžđš]+([ ]?[a-zčćžđš]?["-]?[A-ZČĆŽĐŠ][a-zčćžđš]+)*)$/';
    $regEmail='/\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/';
    $regPassword='/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/';
    $regNumber='/[^a-z ]\ *([.0-9])*\d/';
    $br=0;
    if(!preg_match($regUsername,$fullname))
    { $br++;
        $msg='Ime nije dobro uneto';
    }
    if(!preg_match($regEmail,$email))
    {$br++;
        $msg='Mejl nije dobro unet';
    }
    if(preg_match($regPassword,$password)){$password=md5($_POST['pwd']);}
    else{$br++;
        $msg='Sifra nije dobro uneta';
    }
    if(!preg_match($regNumber,$contactno))
    {$br++;
        $msg='Broj nije dobro unet';
    
    }

		if($br==0){
            $status=1;
             $msg="Registracija uspešna, možete se ulogovati !";
		$query=mysqli_query($conn,"insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city) values('$fullname','$username','$password','$gender','$email','$contactno','$city')");
		echo $msg;
		die;
        }
        else{
            $status=422;
            echo $msg;
        }
        echo json_encode($msg);
        http_response_code($status);
}
else{
    header('Location:../404.php');
}



















?>