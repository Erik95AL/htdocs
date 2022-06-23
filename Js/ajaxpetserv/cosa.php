<?php
switch ($_POST["queHacer"]) {
    case 1:
        peticion1();
        break;

    case 2:
        peticion2();
        break;
    case 3:
        peticion3();
        break;
    case 4:
        peticion4();
        break;
}
function peticion1()
{
    // print_r($_REQUEST);
    // echo $_GET["nombre"];
    // echo $_POST["nombre"];
    $total = $_POST["numero1"] + $_POST["numero2"];
    echo json_encode(array('nombre' => $_POST['nombre'], 'edad' => $_POST['edad'], 'TOTALIZAR' => $total));
    // echo json_encode($_GET[])
    // echo hola
}

function peticion2()
{
    echo 'hola';
}

function peticion3()
{
    $conn = new mysqli("localhost", "root", "");
    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
    echo "Connected sucessfully";
    $conn->close();
}

function peticion4()
{
    $conn = new mysqli("localhost", "root", "");
    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
    // echo "Connected sucessfully";
    //
    $sql = "DROP DATABASE IF EXISTS cesi";
    if ($conn->query($sql) === TRUE) {
        echo "Create database \"cesi\"";
    } else {
        echo "Error: create database \"cesi\" " . $conn->error;
    }

    //
    $conn->close();
    $sql = "CREATE DATABASE cesi";
    if ($conn->query($sql) === TRUE) {
        echo "Create database \"cesi\"";
    } else {
        echo "Error: create database \"cesi\" " . $conn->error;
    }

    //
    $conn->close();
}
