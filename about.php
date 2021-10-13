<html>

<head>


    <link rel="stylesheet" href="css/about.css">
</head>


<body>
    <?php
    include "includes/header.php";
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
    <div class="about-container">
        <div class="photo">
            <img src="images/roshan-pic.png" alt="user" width="250px" oncontextmenu="return false">
        </div>
        <h1>Mohd Roshan Hussain</h1>
        <div class="description">
            <p>This is Simple Banking System done by me for Internship under The Sparks Foundation</p>
            <hr>
            <h2>Tech Stack</h2>
            <ul>
                <h3>Front End</h3>
                <li>HTML,CSS and JS</li>
            </ul>

            <ul>
                <h3>Back End</h3>
                <li>PHP,SQL</li>
            </ul>
        </div>

        <ul class="icons">
            <li>
                <h3>Connect Me At: </h3>
            </li>
            <li class="i"><a href="https://www.github.com/roshan2197" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="github">
                    <i class="fa fa-github"></i>
                </a>
            </li>
            <li class="i"><a href="https://www.linkedin.com/in/roshan2197" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="i"><a href="mailto:roshanhussain2003@gmail.com" data-bs-toggle="tooltip" data-bs-placement="top" title="mail">
                    <i class="fas fa-at"></i></a>
            </li>
        </ul>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>