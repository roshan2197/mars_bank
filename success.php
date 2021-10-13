<?php
include("includes/header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/success.css">

    <title>success!!</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Success</li>
        </ol>
    </nav>
    <div class="main-content main center">
        <img src="images/tick.png" alt="rightmark" class="tick-image" width="100px">
        <h3>Transaction Successfull !!</h3>
        <a href="history.php">
            <button><i class="fa fa-history"></i> Go to see transaction history</button></a>
    <a href="transactions.php">
            <button> <i class="fa fa-repeat"></i>  Repeat Again</button></a>
    </div>
</body>

</html>
<?php
include("includes/footer.php");
?>