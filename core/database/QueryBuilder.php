<?php
class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function make($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();
        return $statement->FetchAll(PDO::FETCH_ASSOC);
    }
    public function insert($arrayData, $tableName){
        //INSERT INO $TABLENAME(NAME,JEO) VALUES (?,?,?)
        $keysData = implode(",",array_keys($arrayData));
        $questionMark = "";
        $valueArray = array_values($arrayData);
        $col = array_keys($arrayData);
        foreach($col as $keys){
            $questionMark.="?,";
        }
        $valuesData = rtrim($questionMark, ",");
        $sql = "INSERT INTO $tableName ($keysData) VALUES ($valuesData)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($valueArray);
    }
    public function update($arrayData, $tableName, $idNumber){
        //UPDATE menu SET price = 1000, category="Some" WHERE id = 1;
        $cols = array_keys($arrayData);
        $arryValues = array_values($arrayData);
        $questionMark = "?";
        //name = ?, price = ?, category = ?
        //die($questionMark);
        $result = "";
        $arrayKeys = implode(" = ?, ",array_keys($arrayData));
        foreach($cols as $keys){
           $result = "$arrayKeys = $questionMark";
        }
        $sql = "UPDATE $tableName SET $result WHERE id = $idNumber";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($arryValues);
    }
    public function delete($tableName,$id){
        //DELETE FROM $TABLENAME WHERE id = $id;
        $sql = "DELETE FROM $tableName WHERE id = $id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}