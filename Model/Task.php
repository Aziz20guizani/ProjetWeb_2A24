<?php
class Task {
    public $id;
    public $title;
    public $description;
    public $duration;
    public $state;

    // Constructeur
    public function __construct($id, $title, $description, $duration, $state) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
        $this->state = $state;
    }

    // Méthodes supplémentaires de la classe Task si nécessaire
    public function deleteTask($id) {
        // Code pour supprimer une tâche de la base de données en fonction de son identifiant
    }
    public function updateTask() {
        // Code pour mettre à jour les détails d'une tâche existante dans la base de données
    }
    public function addTask() {
        // Code pour ajouter une nouvelle tâche à la base de données
    }
    public static function getTaskById($id) {
        // Code pour récupérer les détails d'une tâche en fonction de son identifiant
    }
    
    
        
}
