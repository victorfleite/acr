<?php

namespace Models;

/**
 * Description of CampaignsArchived
 *
 * @author victor.leite
 */
class CampaignsArchived {

    private $id;
    private $name;
    private $dateArchived;

    function __construct($id, $name, $dateArchived) {
        $this->id = $id;
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setDateArchived($date) {
        $this->dateArchived = $date;
        return $this;
    }

    public function getDateArchived() {
        return $this->dateArchived;
    }

}
