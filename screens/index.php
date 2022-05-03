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
            if($_POST['shareRadio']==='YES'){
                $actionValue='addCustomer.php';
                $checkedFlag=true;
                $checkedFlag1=false;
            }else{
                $actionValue='viewResult.php';
                $checkedFlag=false;
                $checkedFlag1=true;
            }
        }else{
            $actionValue='index.php';   
        }

    ?>
    <link rel='stylesheet' type="text/css" href='../styles/index.css'>
    <div id='index_container'>
        <h1 id='page_title'>Fake Bank SRL</h1>

        <form id='index_form' method='post' action='<?= htmlspecialchars($actionValue) ?>'>

            <div>
                <label id='amount'>Required amount($)</label>
                <input required type='number' id='amount' name='requiredAmount'  <?php if(isset($_POST['requiredAmount'])){echo 'value='.$_POST['requiredAmount'].' '.'dasabled=true';}?>>
            </div>

            <div>
                 <label id='amount'>Interest</label>
                <p>
                    If you have high interest you will obtain more instalments, but with less monthly costs
                </p>
                <select id='Interest' required name='interestValue'>
                    <option value='one_interest' <?php if(isset($_POST['interestValue']) && $_POST['interestValue']==='one_interest'){echo 'selected';}?>>1 %</option>
                    <option value='two_interest' <?php if(isset($_POST['interestValue']) && $_POST['interestValue']==='two_interest'){echo 'selected';}?>>2 %</option>
                </select>
            </div>
               
            <div>
                <label id='reason'>Reason</label>
                <input type='text' id='amount' required name='requiredReason'  <?php if(isset($_POST['requiredReason'])){echo 'value='.$_POST['requiredReason'].' '.'dasabled=true';}?>>
            </div>

            <div>
                <label id='share_amount'>Share amount:</label>
                <input required type='radio' id='yes_share' name='shareRadio' value='YES' <?php if(isset($checkedFlag) && $checkedFlag){echo 'checked';}?>>
                    <label id='yes_share'>yes</label>
                <input required type='radio' id='no_share' name='shareRadio' value='NO' <?php if(isset($checkedFlag1) && $checkedFlag1){echo 'checked';}?>>
                    <label id='no_share'>no</label>
                <input type='submit' id='submit_radio' value='Confirm radio'  <?php if(isset($checkedFlag1)){echo 'disabled=true';}?>>
            </div>
                

            <input type='submit' value='Next Page' <?php if(!isset($checkedFlag1)){echo 'disabled=true';}?>>

        </form>
    </div>
</body>
</html>