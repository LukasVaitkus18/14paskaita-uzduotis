<?php

include "utilities/FileManger.php";
include "utilities/Sortable.php";
include "utilities/Filter.php";

class Klientai {

    use FileManager, Sortable, Filter;

    protected $klientai = [];
    protected $collumns = array(
        "vardas" => "Vardas",
        "pavarde" => "Pavarde",
        "amzius" => "Amzius",
        "miestas" => "Miestas"
    );

    public function __construct() {
        $this->file = "klientai.json";
        $this->readFile();
        $this->klientai = $this->data;        $this->klientai = $this->sort($this->klientai);
        $this->klientai = $this->filter($this->klientai, "miestas" );
    }

    public function getClients() {
        return $this->klientai;
    }

    public function getCollumns() {
        return $this->collumns;
    }

}
