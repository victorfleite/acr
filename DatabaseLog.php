<?php

/**
 * Description of DatabaseLog
 *
 * @author victor.leite@gmail.com
 */
class DatabaseLog implements LogInterface{
    
    private $owner;
    
    public function __construct($owner) {
       $this->owner = $owner;
    }
    
    public function write(array $proprieties) {
        // TODO Write a log
    }

}
