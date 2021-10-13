<?php
include("connection.php");
include("includes/header.php");
?>
<html>

<head>
    <title>Customers</title>
    <link rel="stylesheet" href="css/common.css">
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customers</li>
        </ol>
    </nav>
    <div class="main-content main">
        <br><br>
        <h3> Customers </h3>
        <br><br>
        <div class="table-responsive">
            <table class="table ">
                <tr>
                    <!-- <th>sno.</th> -->
                    <th>sno.</th>
                    <th>username</th>
                    <th>userid</th>
                    <th>bank balance</th>
                </tr>
                <?php

                $query = "SELECT * FROM users";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                if ($total != 0)
                    while ($result = mysqli_fetch_assoc($data)) {
                        //echo $result['username']." ".$result['beneficiary']." ".$result['date']." ".$result['amount'];
                        echo "<tr>
                        <td>" . $result['sno'] . "</td> 
                        <td>" . $result['username'] . "</td>
                        <td>" . $result['userID'] . "</td> 
                        <td>" . $result['bankBalance'] . "</td> </tr>";
                        //echo "success";
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