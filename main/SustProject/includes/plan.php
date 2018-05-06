<?php

class Plan extends DB_object
{
    protected static $db_table = "tbl_plan";
    protected static $db_table_field = array('from_city', 'destination_city', 'first_place', 'second_place', 'plan_description', 'stay');

    public $id;
    public $from_city;
    public $destination_city;
    public $first_place;
    public $second_place;
    public $plan_description;
    public $stay;

    public static function find_plan($destination_city, $stay)
    {
        global $database;
        $query = "SELECT * FROM tbl_plan WHERE destination_city = '{$destination_city}' AND stay = '{$stay}'";
        return $database->query($query);
    }
}

?>