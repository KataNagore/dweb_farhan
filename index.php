<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style\bootstrap.css" rel="stylesheet">
    <!--font awesome-->
    <link rel="stylesheet" href="fontawesome\css\fontawesome.css">
    <link rel="stylesheet" href="fontawesome\css\brands.css">
    <link rel="stylesheet" href="fontawesome\css\solid.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!--CSS Font From Google Font-->
    <link href="style\fonts.css" rel="stylesheet">
</head>
<body>
    <script src="js\bootstrap.bundle.js"></script>
    <!--Navbar-->
    <?php 
    include 'pages\navbar.php';
        if (isset($_GET['page'])){
            $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        include 'pages/home.php';
                            break;

                        case 'resume':
                            include 'pages/resume.php';
                            break;

                        case 'blog':
                        include 'pages/blog.php';
                        break;

                        default:
                        include 'pages/home.php';
                            break;
                    }
                }else{
                    include 'pages/home.php';
                }

                ?>
    <!--Bagian Pas Foto-->
 
</body>
</html>