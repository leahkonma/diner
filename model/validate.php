<?php

/*
 * 328/diner/model/validate.php
 * Validate data for the diner app
 */

// Return true if food is valid

class Validate{
    static function validFood($food)
    {
        return trim($food) != "";
    }

    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}