<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
    $this->addBehavior(new Timestampable(
        array('onCreate' => array(
            'field' => 'created_at',
            'format' => 'Y-m-d'
        )
    )));
   }

}




