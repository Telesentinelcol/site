<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of adwords
 *
 * @author scorpio
 */
class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('head');
        $this->load->view('menu');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function section() {

        $path = explode("/", $_SERVER['REQUEST_URI']);

        if ($path[1] == 'telesentinel') :
            $section = $path[2];
        else :
            $section = $path[1];
        endif;

        $data['rut'] = '../';
        $data['section'] = '../';
        $data['equipos'] = '../';
        $data['inicio'] = '../';

        $this->load->view('head', $data);
        $this->load->view('menu', $data);

        $permitidos = $this->Permitidos();

        if (in_array($section, $permitidos)) {
            $this->load->view('section/' . $section, $data);
        } else {
            $this->load->view('section/error');
        }

        $this->load->view('footer', $data);
    }

    public function blog() {

        $path = explode("/", $_SERVER['REQUEST_URI']);

        if ($path[1] == 'telesentinel') :
            $section = $path[2];
        else :
            $section = $path[1];
        endif;

        $data['rut'] = '../';
        $data['section'] = '../';

        $this->load->view('head', $data);
        $this->load->view('menu', $data);

        $this->load->database();
        
        $sql = 'SELECT * FROM logblog WHERE Estado = ? ORDER BY Fecha DESC LIMIT 9';
        $query = $this->db->query($sql, array(1));
        
        $sql_aux = 'SELECT * FROM logblog ORDER BY Calificacion DESC LIMIT 3';
        $query_aux = $this->db->query($sql_aux);
         
        if($query != NULL) :
            $data['registros'] = $query;
        else :
            $data['registros'] = array();
        endif;
        
        if($query_aux != NULL) :
            $data['registros_aux'] = $query_aux;
        else :
            $data['registros_aux'] = array();
        endif;
        
        $permitidos = $this->Permitidos();

        if (in_array($section, $permitidos)) {
            $this->load->view('blog/' . $section, $data);
        } else {
            $this->load->view('section/error');
        }

        $this->load->view('footer', $data);
    }

    public function productos() {

        $path = explode("/", $_SERVER['REQUEST_URI']);

        if ($path[1] == 'telesentinel') :
            $section = $path[2];
        else :
            $section = $path[1];
        endif;

        $data['rut'] = '../';
        $data['section'] = '../';
        $data['equipos'] = '../';
        $data['inicio'] = '../';

        $this->load->view('head', $data);
        $this->load->view('menu', $data);

        $permitidos = array('sensor-doble-tecnologia', 'magneticos', 'teclado', 'sensor-exterior', 'boton-panico', 'sirena', 'radio', 'sensor-lunar', 'sensor-humo', 'magneticos-metalicos', 'dvr', 'discriminador-audio', 'barrerasfotoelectricas', 'camara-domo', 'camara');

        if (in_array($section, $permitidos)) {
            $this->load->view('productos/' . $section, $data);
        } else {
            $this->load->view('section/error');
        }

        $this->load->view('footer', $data);
    }

    public function error() {
        $data['rut'] = '../';
        $this->load->view('head', $data);
        $this->load->view('menu', $data);
        $this->load->view('section/error');
    }

}
