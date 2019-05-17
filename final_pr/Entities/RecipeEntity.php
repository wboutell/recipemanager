<?php

class RecipeEntity {
  public $recipe_id;
  public $recipe_name;
  public $cost_per_serving;
  public $cost_total;
  public $prep_time;
  public $cook_time;
  public $ingredients;
  public $directions;
}

function __construct($recipe_id, $recipe_name, $cost_per_serving, $cost_total, $prep_time, $cook_time, $ingredients, $directions) {
  $this->recipe_id = $recipe_id;
  $this->recipe_name = $recipe_name;
  $this->cost_per_serving = $cost_per_serving;
  $this->cost_total; = $cost_total;
  $this->prep_time = $prep_time;
  $this->cook_time = $cook_time;
  $this->ingredients = $ingredients;
  $this->directions = $directions;
}

?>
