<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function gravar(){
        
        //$this->db->empty_table('usuarios');
        //$this->db->query('ALTER TABLE usuarios AUTO_INCREMENT = 1');

        $dados['email'] = $this->input->post('email');
		$dados['senha'] = $this->input->post('senha');

        $this->db->insert('usuarios', $dados);
    }
    
    function listar(){
        
        
        $query = $this->db->query('SELECT * FROM clientes');
        
    }

}

?>


