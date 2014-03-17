<?php

/**
 * Created by PhpStorm.
 * User: LeeAllen
 * Date: 12/4/13
 * Time: 4:39 PM
 */
class Poll
{
    function __construct()
    {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function getPollQuestion()
    {
        $results = $this->db->select("SELECT * FROM poll_q ORDER BY poll_id DESC LIMIT 1", array());
        $results = $results[0];
        $question = new stdClass(); // declare var as a new object before accessing object properties
        $question->id = $results["poll_id"];
        $question->question = $results["question"];
        return $question;

    }

    /**
     * insertAnswer
     * @param int $pollId primary key for each question
     * @param int $answer bool for yes/no
     * @param string visitorId md5 visitor id
     * @return bool
     */
    public function insertAnswer($pollId, $answer, $visitorId = NULL)
    {

        // check to make sure person hasn't already answered question
        $result = $this->db->select("SELECT * FROM poll_a
                                        WHERE poll_id = :pollId
                                        AND visitorId = :visitorId", array(":pollId" => $pollId, ":visitorId" => $visitorId)
        );

        if (!$result) {

            $inserted = $this->db->insert("poll_a",
                array(
                'poll_id' => $pollId,
                'answers' => $answer,
                'visitorId' => $visitorId,
                'ip' => $_SERVER['REMOTE_ADDR'])
                );

            if($inserted){
                return array(
                    'status'=>'success',
                    'message'=>'Thank you for your response!'
                );
            }else{
                return array(
                    'status'=>'fail',
                    'message'=>'Houston, we have a problem!'
                );
            }

        } else {

            return array(
                'status'=>'success',
                'message'=>'You have already answered this question!'
            );
        }


    }

}