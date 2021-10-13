<html>

<head>
    <?php
    include "includes/header.php";
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>



    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>

</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="container">
        <div class="output" id="output">
            <h1 class="cursor"></h1>
            <p class="para"></p>
        </div>
    </div>
    <div class="page-container">
        <h1 class="bank-heading">
            Our Services
        </h1>
        <div class="row">
            <div class="bank-card-container col-xl-2 col-sm-6">
                <a href="transactions.php" data-bs-toggle="tooltip" data-container="body" data-bs-placement="top" title="Transactions">
                    <div class="bank-card rounded-circle">
                        <i class="fa fa-exchange-alt bank-img"></i>

                    </div>
                </a>
            </div>
            <div class="bank-card-container col-xl-2 col-sm-6">
                <a href="customers.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Customers">
                    <div class="bank-card rounded-circle">
                        <i class="fa fa-users bank-img"></i>
                    </div>
                </a>
            </div>
            <div class="bank-card-container col-xl-2 col-sm-6">
                <a href="history.php" data-bs-toggle="tooltip" data-bs-placement="top" title="History">
                    <div class="bank-card rounded-circle">
                        <i class="fa fa-history bank-img"></i>
                    </div>
                </a>
            </div>
            <div class="bank-card-container col-xl-2 col-sm-6">
                <a href="about.php" data-bs-toggle="tooltip" data-bs-placement="top" title="About">
                    <div class="bank-card rounded-circle">
                        <i class="fa fa-info bank-img"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>