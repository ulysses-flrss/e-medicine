<?php 

require_once("classConexion.php");

class DaoAnuncio {
    public function publicarAnuncio ($anuncio) {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "INSERT INTO anuncios (idUsuario, contenidoAnuncio) VALUES (:idUsuario, :contenidoAnuncio)";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $anuncio);
            $rowAf = $stmt->rowCount();
            echo $rowAf;

            echo "<a href = '#'>PUBLICADO EXITOSAMENTE</a>";
        } catch(PDOException $e) {
            echo "ERROR: ". $e->getMessage();
        }
    }
}

?>