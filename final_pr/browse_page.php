<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Recipes for all diets and preferences." />
    <title> Recipe App | Browse</title>
    <link rel="stylesheet" href="css/stylebr.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 94%;
            color: #588c7e;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            text-align: center;
            margin-top: 2%;
            margin-left: 3%;
            margin-right: 3%;
            margin-bottom: 2%;
        }

        th {
            padding: 15px;
            background-color: #65B52C;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        .ddtf-processed th.ing > select {
            display: none;
        }

        .ddtf-processed th.ing > div {
            display: block !important;
        }
        .ddtf-processed th.rname > select {
            display: none;
        }

        .ddtf-processed th.rname > div {
            display: block !important;
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
                <!-- <li><a>Sort By</a>
				<div class="sub1">
                    <ul>
                        <li><a>Name (A-Z)</a></li>
                        <li><a>Name (Z-A)</a></li>
                        <li><a>Price (Low to High)</a></li>
                        <li><a>Price (High to Low)</a></li>
                        <li><a>Prep Time (Low to High)</a></li>
                        <li><a>Prep Time (High to Low)</a></li>
                    </ul>
				</div>
                </li>  -->

                <!-- <li><a>Filter By</a>
				<div class="sub2">
                    <ul>
                        <li><a>Price</a></li>
                        <li><a>Prep Time</a></li>
                        <li><a>Cuisine Type</a></li>
                        <li><a>Diet Type</a></li>
                    </ul>
				</div>
                </li> -->
                <li>Filter results:</li>

                <!-- <li><a>Results Per Page</a>
				<div class="sub3">
                    <ul>
                        <li><a>10</a></li>
                        <li><a>25</a></li>
                        <li><a>50</a></li>
                        <li><a>100</a></li>

                    </ul>
				</div>
                </li> -->

            </ul>
        </div>
    </section>

    <div class="container">
        <!--<table id="mytable" class="w3-table-all">
            <thead>
                <tr>
                    <th class="rname">Recipe Name</th>
                    <th class="filtr">Price</th>
                    <th class="filtr">Prep Time</th>
                    <th class="filtr">Cuisine Type</th>
                    <th class="ing">Ingredients</th>
                    <th class="filtr">Diet Type</th>
                </tr>
            </thead>
            <tbody>
            -->
        <!--Table Search Bar For Filtering-->
       <!-- <input type="text" id="tinput" /> -->

        <table id="mytable" class="tpge tsrt">
            <thead>
                <tr>
                    <th>Recipe Name</th>
                    <th>Price</th>
                    <th>Prep Time</th>
                    <th>Cuisine Type</th>
                    <th>Ingredients</th>
                    <th>Diet Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("login.php");
                $sqlget = "SELECT recipe_name, cost_total, prep_time, cuisine_name, diet_name, ingredients FROM recipes JOIN cuisine USING(cuisine_id) JOIN diets USING(diet_id)";
                $sqldata = mysqli_query($conn, $sqlget) or die("ERROR");
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["recipe_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["cost_total"] ?>
                    </td>
                    <td>
                        <?php echo $row["prep_time"] ?>
                    </td>
                    <td>
                        <?php echo $row["cuisine_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["ingredients"] ?>
                    </td>
                    <td>
                        <?php echo $row["diet_name"] ?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/table-search/table_search.js"></script>
   <!-- <script src="js/ddtf.js"></script>
    <script>
        $('#mytable').ddTableFilter();
    </script>
           -->
    <!-- Table Sorter -->
    <link href="css/sorter.css" rel="stylesheet" />
    <script src="js/sorter-pager/sorter.js"></script>
    <!-- Table Pager -->
    <link href="css/pager.css" rel="stylesheet" />
    <script src="js/sorter-pager/pager.js"></script>
    <script>
        $(function() {
        $('.tsrt').tablesorter();
        $('.tpge').tablepager();
        });
    </script>
    <script src="js/jquery.filtertable.js"></script>
    <script>
        $("#mytable").filterTable();
    </script>

   <!-- <script>
        $('#tinput').keyup(function () {
        table_search($('#tinput').val(),$('#mytable tbody tr'),'0');
        });
    </script> -->
 

</body>
</html>
