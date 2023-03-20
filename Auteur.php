<?php

Class Auteur {

    private string $_nom;
    private string $_prenom;
    private array $_listeLivres;
    
    public function __construct(string $nom, string $prenom){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        // On créée une liste de livres, vide lorsque l'on instancie l'objet auteur.
        $this->_listeLivres = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getListeLivres(){
        return $this->_listeLivres;
    }

    public function setNom(string $newNom){
        $this->_nom=$newNom;
    }
    public function setPrenom(string $newPrenom){
        $this->_prenom=$newPrenom;
    }
//La fonction addLivre prend en argument un objet de type Livre et l'ajoute dans le tableau listeLivres.
    public function addLivre(Livre $livre) {
        $this->_listeLivres[] = $livre;
        //méthode alternative pour ajouter un élément au tableau, mais la méthode précédemment cité est plus morderne.
        // array_push($this->_listeLivres, $livre);
    }

    public function afficherBibliographie(){

            $result="<h3>Livres de $this->_prenom $this->_nom </h3>";
            //récupérer la liste de livre et sépare chaque livre dans la varible résult.
            foreach($this->_listeLivres as $livre){
                // Grace à la méthode _toString dans la classe Livre qui permet de réprésenter textuellement l'objet, on peut afficher le résultat simplement
                //en affichant le contenu de $livre. dans le cas contraire pour obtenir les informations on aurait écrit :  $result.=$livre->getTitre(); pour obtenir les titres
                //$result.=$livre->getPrix() pour les prix, etc...
                $result.=$livre."<br>";
               
            }
            return $result;
    }


}  

?>