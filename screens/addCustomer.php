<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <link rel='stylesheet' type="text/css" href='../styles/addCustomer.css'>
    <div id='add_container'>
        <h1>Add Customer</h1>
        <p>
            INFO:
            Add a customer for dividing the instalment with a percentage defined in the form.
        </p>

        <form method='post' id='customer_form' action='viewResult.php'>
            
            <div>
                <label id='nameLabel'>Name</label>
                <input required type='text' id='name' name='name'>
            </div>

            <div>
                <label id='surnameLabel'>Surname</label>
                <input required type='text' id='surname' name='surname'>
            </div>

            <div>
                <label id='percentageLabel'>Percentage of share(%)</label>
                <input required type='number' id='percentage' name='percentageCustomer'>
            </div>

            <input type='submit' value='Next Page'>
            
        </form>

    </div>
</body>
</html>