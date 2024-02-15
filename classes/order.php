<?php

/**
 * The Order class represents a food order for the GRC diner
 * @author Leah Konma
 * @copyright 2024
 */
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * Default constructor instantiates an Order object
     * @param string $food
     * @param string $meal
     * @param string $condiments
     */
    //new Order("tacos")
    //new Order("tacos", "lunch")
    //new Order("tacos", "lunch", "salsa, guacamole")
    //cannot have more than one constructor because no overloading allowed
    public function __construct($food="", $meal="", $condiments="")
    {
        $this->_food = $food;
        $this->_meal = $meal;
        $this->_condiments = $condiments;
    }

    /**
     * Return the food that was ordered
     * @return string
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * Set the food that was ordered
     * @param string $food
     */
    public function setFood($food): void
    {
        $this->_food = $food;
    }

    /**
     * Return the meal that was ordered
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * Set the meal that was ordereed
     * @param string $meal
     */
    public function setMeal($meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * Return the condiments that were ordered
     * @return string
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * Set the condiments that were ordered
     * @param string $condiments
     */
    public function setCondiments($condiments)
    {
        $this->_condiments = $condiments;
    }


}

