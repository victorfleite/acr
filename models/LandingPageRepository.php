<?php

namespace Models;

/**
 * Description of LandingPagesRepository
 *
 * @author victor.leite@gmail.com
 */
class LandingPageRepository {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

}
