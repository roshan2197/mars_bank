<?php
include("connection.php");
include("includes/header.php");
?>
<html>

<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="css/common.css">

</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">History</li>
        </ol>
    </nav>
    <div class="main-content main">
        <br><br>
        <h1> Transactions History </h1>
        <br><br>
        <div class="table-responsive">
            <table class="table ">
                <tr>
                    <!-- <th>sno.</th> -->
                    <th>S.No</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
                <?php

                $query = "SELECT * FROM transactions";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                // echo "$total";
                if ($total != 0)
                    while ($result = mysqli_fetch_assoc($data)) {
                        echo "<tr>
    <td>" . $result['sno.'] . "</td> 
    <td>" . $result['username'] . "</td> 
    <td>" . $result['beneficiary'] . "</td>
    <td>" . $result['date'] . "</td> 
    <td>" . $result['amount'] . "</td> </tr>";
                    }
                ?>
            </table>
        </div>

    </div>
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>