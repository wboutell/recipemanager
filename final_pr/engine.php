

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recipes for all diets and preferences." />
    <title> Recipe App | Browse</title>
    <link rel="stylesheet" href="./css/stylebr.css" />

    <--!>Table CSS</--!>
    <style>
     
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
                        <li><a href="engine.php?sort=name">Name (A-Z)</a></li>
                        <li><a href="engine.php?sort=eman">Name (Z-A)</a></li>
                        <li><a href="engine.php?sort=price">Price (Low to High)</a></li>
                        <li><a href="engine.php?sort=ecirp">Price (High to Low)</a></li>
                        <li><a href="engine.php?sort=time"> Prep Time (Low to High)</a></li>
                        <li><a href="engine.php?sort=emit">Prep Time (High to Low)</a></li>
                    </ul>
                </li>
                <li><a>Filter By</a>
                    <ul>
                        <li><a>Price</a></li>
                        <li><a>Prep Time</a></li>
                        <li><a>Cuisine Type</a></li>
                        <li><a>Flavor</a></li>
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
    <?php
    //include_once('database.php');
    //include(browse_page.php);
    //echo "Here is what you entered: " . $_GET["search_inp"];
    //require... something..

    include("login.php");

    //Grab typed text from textbox
    //real_escape_string prevents SQL injections
    //$search = mysqli_real_escape_string($_GET["search_inp"]);
    $search = $_GET["search_inp"];

    //Query the DB

    //Attempt to make search bar autosuggest
    /*$query1= mysqli_query($conn, "SELECT recipe_name FROM recipes WHERE recipe_name LIKE '$search'");
    $recipeData = array();
    if($query1->num_rows > 0){
        while($row = mysqli_fetch_array($query1, MYSQLI_ASSOC)){
            $data['id'] = $row["recipe_id"];
            $data['value'] = $row['recipe_name'];
            array_push($recipeData, $data);
        }
    }
    echo json_encode($recipeData);
    */

    $sqlget = "SELECT * FROM recipes JOIN cuisine USING(cuisine_id) JOIN diets USING(diet_id) WHERE recipe_name= '$search'";
    $sqldata = mysqli_query($conn, $sqlget) or die("ERROR");

    if($sqldata->num_rows > 0){

       /* if ($_GET['sort'] == 'name')
        {
            $sqlget .= " ORDER BY recipe_name ASC";
        } */

        echo "<table>";
        echo "<tr><th>Recipe Name</th><th>Price</th><th>Prep Time</th><th>Cuisine Type</th><th>Ingredients</th><th>Diet Type</th></tr>";

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
            echo $row["ingredients"];
            echo "</td><td>";
            echo $row["diet_name"];
            echo "</td></tr>";
        }
    }
    else{
        echo "No Results";
    }
    ?>
</body>
</html>
