<?php 

require_once("classConexion.php");

class DaoAnuncio {
    public function publicarAnuncio ($anuncio) {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "INSERT INTO anuncios (idUsuario, nombre, contenidoAnuncio) VALUES (:idUsuario, :nombre, :contenidoAnuncio)";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idUsuario', $anuncio->idUsuario);
            $stmt->bindParam(':nombre', $anuncio->nombre);
            $stmt->bindParam(':contenidoAnuncio', $anuncio->contenidoAnuncio);
            $stmt->execute();
            $rowAf = $stmt->rowCount();
            echo $rowAf;

            echo "<a href = '../view/viewDoctor.php'>PUBLICADO EXITOSAMENTE</a>";
        } catch(PDOException $e) {
            echo "ERROR: ". $e->getMessage();
        }
    }

    public function listadoAnuncios(){
        $sql = "SELECT id, idUsuario, nombre, contenidoAnuncio, fechaPublicacion FROM anuncios ORDER BY id";
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $anuncio = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $anuncio;
    }
}

?>