<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    $label_submit='Try to login: ';
    if(isset($_POST['username'])){
        $host='127.0.0.1';
        $user='root';
        $psw='';
        $db_name='users_fake_bank';

        $connection=new mysqli($host,$user,$psw,$db_name);

        $username_insert=$_POST["username"];
        $password_insert=$_POST["password"];

        $sql='SELECT id FROM login_table WHERE (e_mail=? AND psw=?)';
        
        if($statment_select=$connection->prepare($sql)){
            $statment_select->bind_param('ss',$username_insert,$password_insert);
            $statment_select->execute();
            $result_statment=$statment_select->get_result();
            $row=$result_statment->fetch_assoc();
            if($row!=null){
                $result=$row['id'];
                session_start();
                $_SESSION['id']=$result;
                $label_submit='Login OK!';
                $actionValue='index.php';
            }else{
                if($_POST['submit']==='Register'){
                    $sql_insert='INSERT INTO login_table(e_mail,psw) VALUES(?,?)';
                    if($statment=$connection->prepare($sql_insert)){
                        $label_submit='Try to login: ';
                        $statment->bind_param("ss",$e_mail,$psw);
                        $e_mail=$_REQUEST["username"];
                        $psw=$_REQUEST["password"];
                        $statment->execute();
                        $statment->close();
                        $actionValue='login.php';
                        $label_submit='Try to login: ';
                    }else{
                        $label_submit='Error: in prepare '.$connection->error;
                        $actionValue='login.php';
                    }
                }else{
                    $label_submit='Register me';
                    $actionValue='login.php';
                }
               
            }
        }else{
            $label_submit='Error: select '.$connection->error;
            $actionValue='login.php';
        }
    }else{
        $label_submit='Try to login: ';
        $actionValue='login.php';
    }
?>
<link rel='stylesheet' type="text/css" href='../styles/index.css'>
    <div id='login_container'>
        <h1 id='page_title'>Fake Bank SRL: LOGIN</h1>

        <form id='login_form' method='post' action='<?= htmlspecialchars($actionValue) ?>'>

            <div>
                <label id='username_label'>E-mail:</label>
                <input required type='text' id='username' name='username' <?php if(isset($_POST['username'])){echo 'value='.$_POST['username'].' ';}?>>
            </div>

            <div>
                <label id='psw_label'>Password:</label>
                <input required type='password' id='password' name='password' <?php if(isset($_POST['password'])){echo 'value='.$_POST['password'].' ';}?>>
            </div>

            <div>
                <label id='psw_label'><?php echo $label_submit?></label>
                <input type='submit' name='submit' <?php echo 'value='.$label_submit?>>
            </div>
</body>
</html>