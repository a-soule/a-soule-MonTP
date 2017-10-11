<?php
class reservations_modele extends CI_Model {
    public function __construct(){ //constructeur
            $this->load->database();
    }
        
    public function getReservationByClient($numClient){ //retourne la requete
        $query = $this->db->get_where('reservation', ['idClient' => $numClient]);
        return $query->result();
    }
        
    public function addReservation(){
    //fonction pour ajouter une réservation    
        $this->load->helper('url');
            
        $data = [
                "dateArrivee" => $this->input->post('dateArrivee'),
                "dateDepart" => $this->input->post('dateDepart'),
                "nbPersonnes" => $this->input->post('nbPersonnes'),
                "menage" => $this->input->post('menage'),
                "pensionC" => $this->input->post('pensionC'),
                "etatReservation" => $this->input->post('etatReservation')
            ];
            
        return $this->db->insert('reservation', $data); //insert
        }

}

?>