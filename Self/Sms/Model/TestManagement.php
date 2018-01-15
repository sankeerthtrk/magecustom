<?php


namespace Self\Sms\Model;

class TestManagement
{

    /**
     * {@inheritdoc}
     */
    public function getTest($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}
