<?php
include("connection.php");
include("includes/header.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/transactions.css">
    <title>Send Money</title>

</head>

<body>
   

    <div class="main-content main ">
        <h1>MONEY TRANSFER</h1>
        <form action="" method="post">
            <label for="username">Select the sender </label>
            <?php
            $sql = "Select * from users";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <select name="sender" id="sender-name" required>
                    <option name="0" value="0" select disabled>Select sender</option>
                    <?php
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $rows['sno']; ?>"><?php echo $rows['username']; ?></option>
                <?php }
                } else {
                    echo "No data found";
                }
                ?>
                </select> <br>
                <label for="username">Select the beneficiary </label>
                <?php
                $sql = "Select * from users";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <select name="receiver" id="receiver-name" required>
                        <option name="0" value="0" select disabled>Select Beneficiary</option>
                        <?php
                        while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $rows['sno']; ?>"><?php echo $rows['username']; ?></option>
                    <?php }
                    } else {
                        echo "No data found";
                    }
                    ?>
                    </select>
                    <br>
                    <label for="amount">Enter the amount to Transfer</label>
                    <input type="number" name="amount" value="<?php echo $amount; ?> " placeholder="Enter the amount" required>
                    <input class="btn" type="submit" value="submit">
        </form>
    </div>
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $sender = $_POST["sender"];
    $receiver = $_POST["receiver"];

    if ($sender === $receiver) {
        echo "<script>alert('both users can't be same');</script>";
    } else {
        $query1 = "SELECT bankBalance FROM users where sno=$sender";
        $query2 = "SELECT bankBalance FROM users where sno=$receiver";
        $data = mysqli_query($conn, $query1);
        $result = mysqli_fetch_assoc($data);
        $senderbalance = (float)$result["bankBalance"];

        $data = mysqli_query($conn, $query2);
        $result = mysqli_fetch_assoc($data);
        $receiverbalance = (float)$result["bankBalance"];

        $updatesendervalue = $senderbalance - (float)$amount;
        $updatereceivervalue = $receiverbalance + (float)$amount;
        if ($updatesendervalue < 0) {
            echo "<script>
            window.location='fail.php';
            </script>";

        } else {
            $query1 = "UPDATE `users` SET `bankBalance`=$updatesendervalue WHERE sno=$sender";
            $query2 = "UPDATE `users` SET `bankBalance`=$updatereceivervalue WHERE sno=$receiver";
            $query = "SELECT * FROM transactions";

            $data = mysqli_query($conn, $query1);
            $data = mysqli_query($conn, $query2);
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data) + 1;

            $query1 = "SELECT username FROM users where sno=$sender";
            $query2 = "SELECT username FROM users where sno=$receiver";
            $data = mysqli_query($conn, $query1);
            $result = mysqli_fetch_assoc($data);
            $user1 = $result["username"];

            $data = mysqli_query($conn, $query2);
            $result = mysqli_fetch_assoc($data);
            $user2 = $result["username"];

            $query3 = "INSERT INTO `transactions`(`sno.`, `username`, `beneficiary`, `date`, `amount`) VALUES ('$total','$user1','$user2',current_timestamp(),'$amount')";

            $data = mysqli_query($conn, $query3);
            echo "<br> success";
            if ($query3) {
                echo "<script>
            window.location='success.php';
            </script>";
            }
        }
    }
}
?>