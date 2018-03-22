<?php

/**
 * Description of ConcreteOptimization2
 *
 * @author victor.leite@gmail.com
 */
class ConcreteOptimization2 extends BaseOptimization {

    public function __construct(MDB2_Driver $db, LogInterface $log, AditionBaseInterface $adition) {
        $settings = array('runtime' => 'website');
        parent::__construct($db, $log, $settings);
    }

    public function getPostTrackingReport() {

        $settings = array_merge($this->settings, [
                //Set especific config here
        ]);

        $soapReportProcesser = new SoapReportProcesser($settings);
        $campaignArchivedRepository = new Models\CampaignArchivedRepository($this->db);
        $reportData->campaigns = $campaignArchivedRepository->getAll();
        // Do all access of repository classes here

        return parent::getPostTrackingReport($soapReportProcesser, $reportData);
    }

    public function afterReplaceCampaign(Array $settings, \ReportData $data) {
        
    }

    public function beforeRepleceCampaign(Array $settings, \ReportData $data) {
        
    }

}
