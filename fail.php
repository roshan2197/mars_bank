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
    <link rel="stylesheet" href="css/fail.css">
    <title>Error!!</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fail</li>
        </ol>
    </nav>
    <div class="main-content main center">
        <img src="images/fail.png" alt="x-mark">
        <p>Error!! Transaction Failed, <br> Due to low balance in sender's account</p>
        <a href="maketransaction.php">
            <button>click here to retry</button></a>
    </div>
</body>

</html>
<?php
include("includes/footer.php");
?>