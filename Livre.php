<?php

Class Livre {

    private string $_titre;
    private int $_nbPages;
    private int $_annePar;
    private float $_prix;
    //Objet de type Auteur
    private Auteur $_auteur;

    public function __construct(string $titre,int $nbPages,int $annePar, float $prix, Auteur $auteur){
        $this->_titre=$titre;
        $this->_nbPages=$nbPages;
        $this->_annePar=$annePar;
        $this->_prix=$prix;
        $this->_auteur=$auteur;
        //ajoute directement dans la class Auteur le livre associé à l'auteur dans le tableau.
        $this->_auteur->addLivre($this);
                
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getNbPages(){
        return $this->_nbPages;
    }
    public function getAnne(){
        return $this->_annePar;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getAuteur(){
        return $this->_auteur;
    }

    public function setTitre($newtitre){
        $this->_titre=$newtitre;
    }
    public function setNbPages($newNbPages){
        $this->_nbPages=$newNbPages;
    }
    public function setAnne($newAnne){
        $this->_annePar=$newAnne;
    }
    public function setPrix($newPrix){
        $this->_prix=$newPrix;
    }
    public function __toString()
    {
        return $this->getTitre(). " (". $this->getAnne().") : ".$this->getNbPages()." pages / ". $this->getPrix(). " €";
    }

}


?>