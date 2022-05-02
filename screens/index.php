<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake-Bank</title>
</head>
<body>
    <?php
        if(isset($_POST['shareRadio'])){
            echo '--------- '.$_POST['shareRadio'];
            $actionValue=$_POST['shareRadio'];
        }else{
            $actionValue='index.php';   
        }
    ?>
    <link rel='stylesheet' type="text/css" href='../styles/index.css'>
    <div id='index_container'>
        <h1 id='page_title'>Fake Bank SRL</h1>

        <form id='index_form'>

            <div>
                <label id='amount'>Required amount($)</label>
                <input required type='number' id='amount'>
            </div>

            <div>
                 <label id='amount'>Interest</label>
                <p>
                    If you have high interest you will obtain more instalments, but with less monthly costs
                </p>
                <select id='Interest' required>
                    <option value='one_interest'>1 %</option>
                    <option value='two_interest'>2 %</option>
                </select>
            </div>
               
            <div>
                <label id='reason'>Reason</label>
                <input type='text' id='amount' required>
            </div>

            <form method='POST' action=index.php>
                <label id='share_amount'>Share amount:</label>
                <input required type='radio' id='yes_share' name='shareRadio' value='YES'><label id='yes_share'>yes</label>
                <input required type='radio' id='no_share' name='shareRadio' value='NO'><label id='no_share'>no</label>
                <input type='submit' id='submit_radio' value='Confirm radio'>
            </form>

            <input type='submit' value='Next Page'>

        </form>
    </div>
</body>
</html>