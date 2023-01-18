<?php

class Upload_model extends CI_Model
{

    public function construct() {
        parent::__construct();
    }

    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen)
    {
        $data = array(
            'titulo' => $titulo,
            'caminho' => $imagen
        );
        return $this->db->insert('imagens', $data);
    }
}
