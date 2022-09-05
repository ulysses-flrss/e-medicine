<?php

require_once("classConexion.php");

class DaoAnuncio {
    public function publicarAnuncio ($idUsuario, $nombre, $contenidoAnuncio) {
        $cn = new Conexion;
        $dbh = $cn->getConexion();
        $sql = "INSERT INTO anuncios (idUsuario, nombre, contenidoAnuncio) VALUES (:idUsuario, :nombre, :contenidoAnuncio)";

        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':contenidoAnuncio', $contenidoAnuncio);
            if ($stmt->execute()){
                return "OK";
            }else{
                return "ERROR: Se ha generado un error al guardar la información";
            }
            $rowAf = $stmt->rowCount();
        } catch(PDOException $e) {
            echo "ERROR: ". $e->getMessage();
        }
    }

    public function listadoAnuncios(){
        $sql = "SELECT id, idUsuario, nombre, contenidoAnuncio, fechaPublicacion FROM anuncios ORDER BY fechaPublicacion DESC";
        $cn = new Conexion();
        $dbh = $cn->getConexion();
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $anuncio = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $anuncio;
    }
}

?>