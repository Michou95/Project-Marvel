<?php
class Model{

  private $database; // Stockage de la database en variable
  private $table; // Variable liée à la connexion BDD
  private $pdo; // Stockage de la table

  function __construct(){
    $pdo = new PDO("mysql:dbname=" . BDDDATABASE . ";host=" . BDDHOST, BDDUSER, BDDPASS);
    $this->database = BDDDATABASE;
    $this->pdo = $pdo;
    // var_dump($pdo);
  }

  public function create($champs, $value){
    $sql = "INSERT INTO $this->table (" . implode(',', $champs) . ") VALUES ('" . implode("','", $value) . "')";
    $this->pdo->exec($sql);
  }
  public function read($champs, $where){
    $sql = "SELECT " . implode(',', $champs) . " FROM $this->table WHERE " . $this->arrayToString($where);
    $resultat = $this->pdo->prepare($sql);
    $resultat->execute();
    $resultat2 = $resultat->fetch(PDO::FETCH_ASSOC);
    echo '<pre>';var_dump($resultat2);echo'</pre>';
  }

  public function update($value, $where){
    $sql = "UPDATE `$this->table` SET " . $this->arrayToString($value) . "  WHERE " . $this->arrayToString($where);
    $this->pdo->exec($sql);
    echo 'normalement ca a marché si j\'ai pas fait de la merde';
  }
  public function delete($where){
    $sql = "DELETE FROM `$this->table` WHERE " . $this->arrayToString($where);
    $this->pdo->exec($sql);
    echo $sql;
  }

  private function arrayToString( $array ){

    if(!is_array($array))//verification variable is_array()
      return false;

    $stringRetour = "";

    foreach($array as $key => $val) // array("name" => "Toto")
      $stringRetour .= $key . " = '" . $val . "' AND "; //$StringRetour = (name = 'Toto')

    $stringRetour = substr($stringRetour, 0, -4); //substr() supprime aucun caractere en partant du debut et 4 caracteres en partant de la fin

    return $stringRetour;
  }
/******************************************************************************/

public function setTable($table){
  $this->table = $table;
}

public function getTable(){
  return $this->table;
}
}
 ?>
