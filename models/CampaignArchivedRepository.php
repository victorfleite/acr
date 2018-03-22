<?php

namespace Models;

/**
 * Description of CampaignsArchivedRepository
 *
 * @author educatux
 */
class CampaignArchivedRepository {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        
        // TODO Select All CampaignsArchived;
        
    }

}
