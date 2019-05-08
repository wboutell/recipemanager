<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recipes for all diets and preferences." />
    <title> Recipe App | Browse</title>
    <link rel="stylesheet" href="./css/stylebr.css" />
    <style type="text/css">
    table {
      border: 2px solid;
    }

    th {
      border-bottom: 5px solid;
    }

    td {
      border-bottom: 2px solid;
    }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="brand">
                <h1><span class="highlight">Recipe</span>Manager</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="browsebar">
        <div class="container">
            <h1>Browse Our Recipes </h1>
        </div>
    </section>

    <section id="filterbar">
        <div class="container">
            <ul>
                <li><a>Sort By</a>
                    <ul>
                        <li><a>Name (A-Z)</a></li>
                        <li><a>Name (Z-A)</a></li>
                        <li><a>Price (Low to High)</a></li>
                        <li><a>Price (High to Low)</a></li>
                        <li><a>Prep Time (Low to High)</a></li>
                        <li><a>Prep Time (High to Low)</a></li>
                    </ul>
                </li>
                <li><a>Filter By</a>
                    <ul>
                        <li><a>Price</a></li>
                        <li><a>Prep Time</a></li>
                        <li><a>Cuisine Type</a></li>
                        <li><a>Diet Type</a></li>
                    </ul>
                </li>
                <li><a>Results Per Page</a>
                    <ul>
                        <li><a>10</a></li>
                        <li><a>25</a></li>
                        <li><a>50</a></li>
                        <li><a>100</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <h2>Results</h2>

    <?php

    include("login.php");
    $sqlget = "SELECT recipe_name, cost_total, prep_time, cuisine_name, diet_name FROM recipes JOIN cuisine USING(cuisine_id) JOIN diets USING(diet_id)";
    $sqldata = mysqli_query($conn, $sqlget) or die("ERROR");

    echo "<table>";
    echo "<tr><th>Recipe Name</th><th>Price</th><th>Prep Time</th><th>Cuisine Type</th><th>Diet Type</th></tr>";

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
      echo "<tr><td>";
      echo $row["recipe_name"];
      echo "</td><td>";
      echo $row["cost_total"];
      echo "</td><td>";
      echo $row["prep_time"];
      echo "</td><td>";
      echo $row["cuisine_name"];
      echo "</td><td>";
      echo $row["diet_name"];
      echo "</td></tr>";
    }

    echo "</table>";

    ?>

</body>
</html>
