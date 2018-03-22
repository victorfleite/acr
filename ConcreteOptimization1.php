<?php

/**
 * Description of ConcreteOptimization1
 *
 * @author victor.leite@gmail.com
 */
class ConcreteOptimization1 extends BaseOptimization {

    public function __construct(MDB2_Driver $db, LogInterface $log) {
        $settings = array('runtime' => 'lastrun');
        parent::__construct($db, $log, $settings);
    }

    public function getPostTrackingReport() {

        $settings = array_merge($this->settings, [
                //Set especific config here
        ]);

        $soapReportProcesser = new SoapReportProcesser($settings);
        $campaignRepository = new Models\CampaignRepository($this->db);

        $reportData = new ReportData();
        $reportData->campaignsActives = $campaignRepository->getCampaignsActives();
        // Do all access of repository classes here


        return parent::getPostTrackingReport($soapReportProcesser, $reportData);
    }

    public function afterReplaceCampaign(Array $settings, \ReportData $data) {
        
    }

    public function beforeRepleceCampaign(Array $settings, \ReportData $data) {
        
    }

}
