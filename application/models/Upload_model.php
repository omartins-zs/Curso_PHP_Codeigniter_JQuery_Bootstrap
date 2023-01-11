<?php

class Pessoa_model extends CI_Model
{

    public function construct() {
        parent::__construct();
    }

    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagem)
    {
        $data = array(
            'titulo' => $titulo,
            'caminho' => $imagem
        );
        return $this->db->insert('imagens', $data);
    }
}
