-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2019 at 07:59 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
CREATE DATABASE IF NOT EXISTS final;
USE final;
--

CREATE TABLE `cuisine` (
  `cuisine_id` int(10) UNSIGNED NOT NULL,
  `cuisine_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisine_id`, `cuisine_name`) VALUES
(1, 'African'),
(2, 'American'),
(3, 'British'),
(4, 'Cajun'),
(5, 'Caribbean'),
(6, 'Chinese'),
(7, 'Eastern European'),
(8, 'French'),
(9, 'German'),
(10, 'Greek'),
(11, 'Indian'),
(12, 'Irish'),
(13, 'Italian'),
(14, 'Japanese'),
(15, 'Jewish'),
(16, 'Korean'),
(17, 'Latin American'),
(18, 'Mexican'),
(19, 'Middle Eastern'),
(20, 'Nordic'),
(21, 'Southern'),
(22, 'Spanish'),
(23, 'Thai'),
(24, 'Vietnamese');

-- --------------------------------------------------------

--
-- Table structure for table `diets`
--

CREATE TABLE `diets` (
  `diet_id` int(10) UNSIGNED NOT NULL,
  `diet_name` varchar(45) DEFAULT NULL,
  `benefits` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diets`
--

INSERT INTO `diets` (`diet_id`, `diet_name`, `benefits`) VALUES
(1, 'Ketogenic', 'The keto diet is based more on the ratio of fat, protein, and carbs in the diet rather than specific ingredients. Generally speaking, high fat, protein-rich foods are acceptable and high carbohydrate foods are not.'),
(2, 'Paleo', 'Allowed ingredients include meat (especially grass fed), fish, eggs, vegetables, some oils (e.g. coconut and olive oil), and in smaller quantities, fruit, nuts, and sweet potatoes. We also allow honey and maple syrup (popular in Paleo desserts, but strict Paleo followers may disagree). Ingredients not allowed include legumes (e.g. beans and lentils), grains, dairy, refined sugar, and processed foods.'),
(3, 'Primal', 'Very similar to Paleo, except dairy is allowed - think raw and full fat milk, butter, ghee, etc.'),
(4, 'Vegan', 'No ingredients may contain meat or meat by-products, such as bones or gelatin, nor may they contain eggs, dairy, or honey.'),
(5, 'Vegetarian', 'No ingredients may contain meat or meat by-products, such as bones or gelatin.'),
(6, 'Whole 30', 'Allowed ingredients include meat, fish/seafood, eggs, vegetables, fresh fruit, coconut oil, olive oil, small amounts of dried fruit and nuts/seeds. Ingredients not allowed include added sweeteners (natural and artificial, except small amounts of fruit juice), dairy (except clarified butter or ghee), alcohol, grains, legumes (except green beans, sugar snap peas, and snow peas), and food additives, such as carrageenan, MSG, and sulfites.'),
(7, 'Gluten Free', 'Eliminating gluten means avoiding wheat, barley, rye, and other gluten-containing grains and foods made from them (or that may have been cross contaminated).'),
(8, 'Pescetarian', 'Everything is allowed except meat and meat by-products - some pescetarians eat eggs and dairy, some do not.'),
(9, 'Lacto-Vegetarian', 'All ingredients must be vegetarian and none of the ingredients can be or contain egg.'),
(10, 'Ovo-Vegetarian', 'All ingredients must be vegetarian and none of the ingredients can be or contain dairy.');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(10) UNSIGNED NOT NULL,
  `recipe_name` varchar(45) DEFAULT NULL,
  `cost_per_serving` decimal(10,0) DEFAULT NULL,
  `cost_total` decimal(10,0) DEFAULT NULL,
  `prep_time` varchar(45) DEFAULT NULL,
  `cook_time` varchar(45) DEFAULT NULL,
  `ingredients` text,
  `directions` text,
  `cuisine_id` int(10) UNSIGNED NOT NULL,
  `diet_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_name`, `cost_per_serving`, `cost_total`, `prep_time`, `cook_time`, `ingredients`, `directions`, `cuisine_id`, `diet_id`) VALUES
(1, 'Vegetable Lo Mein', '2', '4', '10', '15', 'Whatever is in your fridge', 'Cook it', 14, 4),
(2, 'Cauliflower Crusted Grilled Cheese Sandwiches', '2', '3', '15', '40', 'Whatever is in your fridge', 'Cook it', 2, 1),
(3, 'Spicy Black Bean Soup', '1', '6', '10', '45', 'Beans', 'Cook it', 18, 9),
(4, 'Cuban Sandwich', '2', '10', '30', '15', 'Pork\r\nBread', 'Cook it', 5, 6),
(5, 'Gluten-Free Bread', '1', '4', '15', '40', 'Gluten-Free Flour\r\nWater', 'Cook it', 9, 7),
(6, 'Hummus', '1', '4', '15', '0', 'Chickpeas\r\nGarlic\r\nLemon Juice\r\nOlive Oil', 'Blend it then chill it', 19, 5),
(7, 'Chicken Parmesan', '1', '4', '15', '40', 'Chicken Breast\r\nParmesan\r\nFlour\r\nTomatoes', 'Pan sear it it', 13, 1),
(8, 'Cobb Salad', '2', '8', '20', '0', 'Romaine\r\nBacon\r\nEggs\r\nAvocado\r\nHoney Mustard', 'Cook it', 2, 7),
(9, 'Spinach Quiche', '1', '4', '15', '40', 'Spinach\r\nEggs\r\nCheese\r\nFlour\r\nWater', 'Bake it', 8, 1),
(10, 'Gazpacho', '1', '5', '20', '0', 'Tomatoes\r\nWater\r\nMirepoix\r\nSpices', 'Blend it then chill it', 13, 5),
(11, 'Caprese', '1', '4', '10', '0', 'Tomatoes\r\nMozarella\r\nBasil\r\nOlive Oil', 'Cook it', 13, 5),
(12, 'Apple Pie', '2', '8', '25', '30', 'Apples\r\nBrown Sugar\r\nCinnamon\r\nButter\r\nBrown Sugar', 'Cook it', 2, 5),
(13, 'French Dip', '2', '6', '10', '10', 'Beef\r\nBaguette\r\nOnions\r\nAu jus', 'Roast it', 8, 2);


-- --------------------------------------------------------

--
-- Table structure for table `recipes_x_cuisine`
--

CREATE TABLE `recipes_x_cuisine` (
  `Recipes_recipe_id` int(10) UNSIGNED NOT NULL,
  `Cuisine_cuisine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `recipes_x_diets`
--

CREATE TABLE `recipes_x_diets` (
  `Recipes_recipe_id` int(10) UNSIGNED NOT NULL,
  `Diets_diet_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`cuisine_id`),
  ADD UNIQUE KEY `cuisine_id_UNIQUE` (`cuisine_id`);

--
-- Indexes for table `diets`
--
ALTER TABLE `diets`
  ADD PRIMARY KEY (`diet_id`),
  ADD UNIQUE KEY `diet_id_UNIQUE` (`diet_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`),
  ADD UNIQUE KEY `recipe_id_UNIQUE` (`recipe_id`),
  ADD UNIQUE KEY `Recipescol_UNIQUE` (`recipe_name`),
  ADD KEY `cuisine_id_idx` (`cuisine_id`),
  ADD KEY `diet_id_idx` (`diet_id`);

--
-- Indexes for table `recipes_x_cuisine`
--
ALTER TABLE `recipes_x_cuisine`
  ADD PRIMARY KEY (`Recipes_recipe_id`,`Cuisine_cuisine_id`),
  ADD KEY `fk_Recipes_has_Cuisine_Cuisine1_idx` (`Cuisine_cuisine_id`),
  ADD KEY `fk_Recipes_has_Cuisine_Recipes1_idx` (`Recipes_recipe_id`);

--
-- Indexes for table `recipes_x_diets`
--
ALTER TABLE `recipes_x_diets`
  ADD PRIMARY KEY (`Recipes_recipe_id`,`Diets_diet_id`),
  ADD KEY `fk_Recipes_has_Diets_Diets1_idx` (`Diets_diet_id`),
  ADD KEY `fk_Recipes_has_Diets_Recipes_idx` (`Recipes_recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `cuisine_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `diets`
--
ALTER TABLE `diets`
  MODIFY `diet_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `cuisine_id` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisine` (`cuisine_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `diet_id` FOREIGN KEY (`diet_id`) REFERENCES `diets` (`diet_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipes_x_cuisine`
--
ALTER TABLE `recipes_x_cuisine`
  ADD CONSTRAINT `fk_Recipes_has_Cuisine_Cuisine1` FOREIGN KEY (`Cuisine_cuisine_id`) REFERENCES `cuisine` (`cuisine_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recipes_has_Cuisine_Recipes1` FOREIGN KEY (`Recipes_recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipes_x_diets`
--
ALTER TABLE `recipes_x_diets`
  ADD CONSTRAINT `fk_Recipes_has_Diets_Diets1` FOREIGN KEY (`Diets_diet_id`) REFERENCES `diets` (`diet_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Recipes_has_Diets_Recipes` FOREIGN KEY (`Recipes_recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
