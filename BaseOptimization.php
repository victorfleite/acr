<?php

/**
 * Description of BaseOptimization
 *
 * @author victor.leite@gmail.com
 */
abstract class BaseOptimization {

    abstract function beforeRepleceCampaign(Array $settings, ReportData $data);

    abstract function afterReplaceCampaign(Array $settings, ReportData $data);

    /** MDB2_Driver Abstraction */
    protected $db;

    /** Setting */
    protected $settings = Array();

    /** Log Abstraction */
    protected $log;

    /** Debug mode flag */
    protected $debugmode = false;

    public function __construct(\MDB2_Driver $db, Array $settings, LogInterface $log) {

        $this->db = $db;
        $this->settings = $settings;
        $this->log = $log;
        $this->log->owner = $this;
    }

    /**
     * Activates or deactivates debug mode
     * @param boolean $mode
     */
    public function setDebugMode($mode) {
        $this->debugmode = $mode;
    }

    public function getPostTrackingReport(ReportProcesserInterface $reportProcesser, ReportData $data) {

        return $reportProcesser->process($this->settings, $data);
    }

    final function replaceCampaign(ReportData $data) {
        try {
            $this->beforeRepleceCampaign($this->settings, &$data);
            $this->processReplacimentCampaign($this->settings, &$data);
            $this->log->write($this->settings);
            $this->afterReplaceCampaign($this->settings, $data);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function processReplacimentCampaign(ReportData $data) {
        // Todo Here
    }

}
