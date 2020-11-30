<?php

class participanteDAO{
    private $pdo;

    public function __construct(){
        require_once '../db/connection.php';
        $this->pdo=$pdo;
    }

    public function addParticipante($participante){
        try {
            $this->pdo->beginTransaction();
            
            $query = "INSERT INTO `tbl_participante`(`nom_part`, `apellido_part`, `DNI_part`, `fechaNac_part`, `sexo_part`) VALUES (?,?,?,?,?)";
            
            $sentencia=$this->pdo->prepare($query);
                $sentencia->bindValue(1,$participante->getNom_part());
                $sentencia->bindValue(2,$participante->getApellido_part());
                $sentencia->bindValue(3,$participante->getDNI_part());
                $sentencia->bindValue(4,$participante->getFechaNac_part());
                $sentencia->bindValue(5,$participante->getSexo_part());
            $sentencia->execute();

            echo "Has sido inscrito";

            $this->pdo->commit();

        } catch (Exception $e) {
            $this->pdo->rollBack();
            echo $e;

            echo "No has sido inscrito";

        }
    }

    public function addInscripcion($participante){
        try {
            $this->pdo->beginTransaction();

            $cumpleanos = new DateTime($participante->getFechaNac_part());
            $hoy = new DateTime();
            $annos = $hoy->diff($cumpleanos);
            $edad = $annos->y;

            $query = "SELECT id_cat FROM tbl_categoria WHERE edadMin<=$edad AND edadMax>=$edad
            AND sexo = '{$participante->getSexo_part()}'";
            $sentencia=$this->pdo->prepare($query);
            $sentencia->execute();
            $idCatx = $sentencia->fetch(PDO::FETCH_ASSOC);
            $idCat = $idCatx['id_cat'];

            $query = "SELECT id_part FROM `tbl_participante` WHERE DNI_part = ?";
            $sentencia=$this->pdo->prepare($query);
                $sentencia->bindValue(1,$participante->getDNI_part());
            $sentencia->execute();
            $idPartx = $sentencia->fetch(PDO::FETCH_ASSOC);
            $idPart = $idPartx['id_part'];
        
            $query = "INSERT INTO `tbl_inscripcion`(`id_cursa`, `id_part`, `pago`, `id_cat`) VALUES (1, $idPart,'Si' , $idCat)";
            $sentencia=$this->pdo->prepare($query);
            $sentencia->execute();
            

            $this->pdo->commit();

        } catch (Exception $e) {
            $this->pdo->rollBack();
            echo $e;
        }
    }

}

?>