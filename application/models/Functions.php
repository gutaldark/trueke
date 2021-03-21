<?php
class Functions extends CI_Model
{
    /**
    * Controler __construct function to initialize options
    */
    public function __construct()
    {
        parent::__construct();
    }

    public function validar_sesion(){
        if ($this->session->userdata('correo')) {
            return true;
        } else {
            header('Location: '.base_url('welcome'));
        }
    } 

    public function find($tabla, $id){
        $consulta = $this->db->query("SELECT * FROM $tabla where id = '$id'")->result_object();
        if ($consulta) {
            return $consulta[0];
        } else {
            return false;
        }
    }

    public function all($tabla){
        $consulta =  $this->db->query("SELECT * FROM $tabla")->result_object();
        return $consulta;
    }

    public function whereFirst($tabla, $key, $value){
        $consulta = $this->db->query("SELECT * FROM $tabla where $key = '$value'")->result_object();

        if ($consulta) {
            return $consulta[0];
        } else {
            return 0;
        }
    }

    public function last($tabla){
        $consulta = $this->db->query("SELECT * FROM $tabla order by id desc limit 1")->result_object();

        if ($consulta) {
            return $consulta[0];
        } else {
            return 0;
        }
    }

    public function whereAll($tabla, $key, $value){
        $consulta = $this->db->query("SELECT * FROM $tabla where $key = '$value'")->result_object();
        if ($consulta) {
            return $consulta;
        } else {
            return 0;
        }
    }

    public function delete($table, $key, $value){

        // verificar
        $verificar = $this->db->query("SELECT * FROM $table where $key = '$value' ")->result_object();        
        if ($verificar) {
            $verificar = $verificar[0];            
            
            // eliminar registro de la base de datos
            $consulta=$this->db->query("DELETE FROM $table WHERE $key = '$value' ");

            return 1;
            
        } else {
            return 0;
        }
       
    } 

    public function uploadImage($fileName, $folder){
        //Obtenemos algunos datos necesarios sobre el archivo
        $archivo = date('Y_m_d_h_i_s')."_".$_FILES[$fileName]['name'];
        $tipo = $_FILES[$fileName]['type'];
        $tamano = $_FILES[$fileName]['size'];
        $temp = $_FILES[$fileName]['tmp_name'];
        
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, './assets/img/'.$folder.'/'.$archivo)) {                    
            return 1;
        } else {
        //Si no se ha podido subir la imagen, mostramos un mensaje de error
            return 0;
        }
    }
    
    public function get_distinct($distinct, $table){
        $this->db->distinct($distinct);
		$this->db->select('*');
		$this->db->from($table);
		$consulta = $this->db->get()->result_object();
		return $consulta;
    }

    public function slugify($string){
        $preps = array('in', 'at', 'on', 'by', 'into', 'off', 'onto', 'from', 'to', 'with', 'a', 'an', 'the', 'using', 'for');
            $pattern = '/\b(?:' . join('|', $preps) . ')\b/i';
            $string = preg_replace($pattern, '', $string);
        $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
        $string = trim($string, '-');
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        $string = strtolower($string);
        $string = preg_replace('~[^-\w]+~', '', $string);
        
        return $string;
    }

    public function gen_uuid() {
        $output = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
    
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
    
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );

        // convertir letras a mayusculas
        return strtoupper($output);
    }

}