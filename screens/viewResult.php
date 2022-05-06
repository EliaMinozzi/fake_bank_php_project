<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result</title>
</head>
<body>
    <?php
        session_start();

        if($_SESSION['interestValue']==='one_interest'){
            $RATE=$_SESSION['requiredAmount']*0.01;
            $N_RATE=$_SESSION['requiredAmount']/$RATE;
        }else{
            $RATE=$_SESSION['requiredAmount']*0.02;
            $N_RATE=$_SESSION['requiredAmount']/$RATE;
        }
         
        if($_SESSION['shareRadio']==='YES'){
            if(isset($_POST['percentageCustomer'])){
                $RATE2=$RATE*($_POST['percentageCustomer']/100);
                $RATE=$RATE-$RATE2;
            }
        }

    ?>
    <link rel='stylesheet' type="text/css" href='../styles/viewResult.css'>
    <div id='view_container'>
        <h1>
            Planning:
        </h1>

        <label>Number of instalment: <?php echo $N_RATE?></label>
        <label>Instalment for customer1($): <?php echo $RATE?></label>

        <?php
            if(isset($RATE2)){
                echo '<label>Instalment for customer2($): '.$RATE2.'</label>';
            }
        ?>

        <input type='button' value='OK'/>

    </div>
    
</body>
</html>