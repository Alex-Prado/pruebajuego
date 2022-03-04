<?php

require "../model/Pregunta.php";
$instance = new Pregunta();

    if ($_POST["action"] == "create") {
        echo $instance->ver($_POST["nombre"], $_POST["apellido"], $_POST["area"]);
    } else if ($_POST["action"] == "readupdate") {
        echo $instance->readupdate($_POST["id"]);
    } else if ($_POST["action"] == "update") {
        echo $instance->update($_POST["id"], $_POST["nombre"], $_POST["apellido"], $_POST["area"]);
    } else if ($_POST["action"] == "delete") {
        echo $instance->delete($_POST["id"]);
    } else if ($_POST["action"] == "verpregunta") {
        echo $instance->verpregunta();
    } else if ($_POST["action"] == "buscar"){
    }
