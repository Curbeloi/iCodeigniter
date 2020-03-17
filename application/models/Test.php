<?php

/**
 * Created by PhpStorm.
 * User: hcurbelo
 * Date: 11/14/2017
 * Time: 8:28 PM
 */
class Test extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendSql()
    {
       $data = array(
            'CTURRF' => 'HECTOR T',
            'CTLITM' => 'HECTOR A',
       );

        if($this->db->insert('F56JRICT', $data))
        {
            return $data;
        }
        else
        {
            return false;
        }
    }
}