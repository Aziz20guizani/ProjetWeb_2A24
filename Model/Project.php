<?php
class Project {
    public $id;
    public $name;
    public $description;
    public $start_date;
    public $end_date;

    // Constructeur
    public function __construct($id, $name, $description, $start_date, $end_date) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    // Méthodes supplémentaires de la classe Project si nécessaire
}
