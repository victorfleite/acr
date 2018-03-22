<?php


/**
 *
 * @author victor.leite@gmail.com
 */
abstract class ReportProcesser {
    
    protected $settings;
    
    public function __construct(Array $settings) {
        $this->settings = $settings;
    }
    
    abstract function process(ReportData $data);
    
}
