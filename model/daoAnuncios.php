<?php 

require_once("classConexion.php");

class DaoAnuncio {
    public function publicarAnuncio ($anuncio) {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "INSERT INTO anuncios (anuncio) VALUES (:anuncio)";

        try {
            $stmt = $dbh->prepare($sql);
            //$stmt->bindParam(':idUsuario', $anuncio->idUsuario);
            $stmt->bindParam(':anuncio', $anuncio->anuncio);
            $rowAf = $stmt->rowCount();
            echo $rowAf;

            echo "<a href = '#'>PUBLICADO EXITOSAMENTE</a>";
        } catch(PDOException $e) {
            echo "ERROR: ". $e->getMessage();
        }
    }
}

?>