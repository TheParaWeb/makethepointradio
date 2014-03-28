<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 4:39 PM
 */

class Shows
{
    function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    function getShowByTime($time,$day){
        $stmt = $this->db->prepare("SELECT * FROM schedule
                                    INNER JOIN shows
                                    ON schedule.show_id=shows.id
                                    WHERE day = :day AND
                                    (begin < :time AND end > :time)");
        $stmt->execute(array(':day'=>$day, ':time'=>$time));
        $result = $stmt->fetchAll();
        return $result[0];
    }

    function getShowByPlug($plug)
    {
        die($plug);
    }

}