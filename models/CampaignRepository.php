<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of CampaignRepository
 *
 * @author victor.leite@gmail.com
 */
class CampaignRepository {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getCampaignsActives() {

        // TODO return all Campaigns actives
    }

}
