<?php

class SampleModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtener() {
        $registros = $this->db->QueryArray("SELECT * FROM tabla");
        return $registros;
    }

    public function insertar($datos) {
        $datos["columna1"] = MySQL::SQLValue($datos['columna1']);
        $datos["columna2"] = MySQL::SQLValue($datos['columna2']);
        $this->db->InsertRow("tabla", $datos);
    }

    public function modificar($datos) {
        $datos["columna1"] = MySQL::SQLValue($datos['columna1']);
        $datos["columna2"] = MySQL::SQLValue($datos['columna2']);
        $filtro["id"] = $datos['id'];
        $this->db->UpdateRows("tabla", $datos, $filtro);
    }

    public function eliminar($id) {
        $filtro["id"] = $id;
        $this->db->DeleteRows("tabla", $filtro);
    }

}

?>