<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Add any necessary styles here */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <header class="header header-mobile">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="Home.php" class="logo"><i class="fas fa-paper-plane"></i>Digital Backpackers</a>
        <?php include 'nav.php'; ?>
    </header>
    <br><br><br>

    <h1>Welcome to the Home Page</h1>
    <p>This is the home page content.</p>
</body>
</html>