<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recipes for all diets and preferences." />
    <title> Recipe App | Welcome</title>
    <link rel="stylesheet" href="./css/style.css" />

</head>
<body>
    <header>
        <div class="container">
            <div id="brand">
                <h1><span class="highlight">Recipe</span>Manager</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><a href="about.html">About</a></li>
                </ul>
            </nav>
        </div>
    </header>

    
    <div class="dtable">
        <table id="mytable" class="tpge tsrt">
            <thead>
                <tr>
                    <th>Diet Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("login.php");
                $getdiets = "SELECT diet_name, benefits FROM diets";
                $dietdata = mysqli_query($conn, $getdiets) or die("ERROR");
                while($row = mysqli_fetch_array($dietdata, MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["diet_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["benefits"] ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <section id="browse">
        <div class="container">
            <h1>Technology Used </h1>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="./image/html_logo.png" />
            </div>
            <div class="box">
                <img src="./image/css_logo.png" />
            </div>
            <div class="box">
                <img src="./image/js_logo.png" />
            </div>
        </div>
    </section>

    <footer>Group 8 Web Design, Copyright &copy; 2019</footer>
</body>
</html>