<?php
session_start();
require_once("plugins/funciones.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
    <link rel="stylesheet" href="css/viewAdmin-style.css">
    <?php links() ?>
</head>
<body>
    <?php menuDoc() ?>
    <main class="all-container">
        <article>
            <section>

            <a href="" class="agregarUser">
                <img class = "add-image" src="../assets/add.png" alt="">
                <span class="add-text">Agregar Usuario</span>
            </a>

        <div class="users">
            <button class="focus">Pacientes</button>
            <button class="focus">Doctores</button>
            <button class="focus">Administradores</button>
        </div>
            

                <table>
                    
                <tr>
                    <th>ID de Usuario</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>

                </tr>

                <tr>
                    <td>P-00001</td>
                    <td>Ulises Adonay</td>
                    <td>Flores Martínez</td>
                    <td>
                        <ul>
                            <li><button><i class='fas fa-edit'></i></button></li>
                            <li><button><i class='fas fa-trash-alt'></i></button></li>
                        </ul>
                    </td>
                </tr>
            </table>
            </section>
        </article>
    </main>
</body>
</html>