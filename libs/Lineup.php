<?php
/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 4:39 PM
 */

class Lineup
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
        // Get primary show information.

        $stmt = $this->db->prepare("SELECT * FROM shows
                                    WHERE plug = :plug");
        $stmt->execute(array(':plug'=>$plug));
        $result = $stmt->fetchAll();
        $result = $result[0];

        // Get schedule information.
        $stmt = $this->db->prepare("SELECT * FROM schedule WHERE show_id = :show_id LIMIT 1");
        $stmt->execute(array(':show_id'=>$result['id']));
        $schedule = $stmt->fetchAll();

        $result['displayDay'] = $schedule[0]['day_text'];
        $result['displayTime'] = $schedule[0]['time_text'];

        return $result;
    }

    function getScheduleById($id){
        $stmt = $this->db->prepare("SELECT * FROM schedule WHERE show_id = :show_id LIMIT 1");
        $stmt->execute(array(':show_id'=>$id));
        $schedule = $stmt->fetchAll();
        echo "getScheduleById()<br/>";
        var_dump($schedule);
    }

}