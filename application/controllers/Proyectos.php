<?php
class Proyectos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Proyectos_Model');
    }
    public function index()
    {   
        $data['proyectos'] = $this->Proyectos_Model->obtenerProyectos();
        $data['estados'] = $this->Proyectos_Model->obtenerEstados();
        $data['usuarios'] = $this->Proyectos_Model->obtenerUsuarios();
        $this->load->view('welcome_message', $data);
    }
    



    public function guardarProyecto()
    {

            $nombre = $this->input->post('nombreProyecto');
            $descripcion = $this->input->post('descripcion');
            $avance = $this->input->post('avance');
            $usuario = $this->input->post('id_Usuario');
            $estado = $this->input->post('id_estado');

    
            $insert['nombreProyecto'] = $nombre;
            $insert['descripcion'] = $descripcion;
            $insert['avance'] = $avance;
            $insert['id_Usuario'] = $usuario;
            $insert['id_estado'] = $estado;

            $this->Proyectos_Model->guardarProyecto($insert);
            redirect('Proyectos');
       
       
    }
    public function modificarProyecto($id = null)
    {
            $this->Proyectos_Model->obtenerProyectoId($id);
            if($id == null)
            {
                redirect('NoExiste');
            }
            else
            {
                $nombre = $this->input->post('nombreProyecto');
                $descripcion = $this->input->post('descripcion');
                $avance = $this->input->post('avance');
                $usuario = $this->input->post('id_Usuario');
                $estado = $this->input->post('id_estado');
                
                // $modificar['id_proyecto'] = $id;
                $where = array('id_proyecto' => $id);
                $modificar['nombreProyecto'] = $nombre;
                $modificar['descripcion'] = $descripcion;
                $modificar['id_Usuario'] = $usuario;
                $modificar['avance'] = $avance;
                $modificar['id_estado'] = $estado;
                $this->Proyectos_Model->modificarProyecto($modificar,$where);
                redirect('Proyectos');
            }
        }
   
        
    
    
    
    public function detalle($id){
        $data['proyectos'] = $this->Proyectos_Model->obtenerProyectoId($id);
        $data['estados'] = $this->Proyectos_Model->obtenerEstados();
        $data['usuarios'] = $this->Proyectos_Model->obtenerUsuarios();
        $this->load->view('detalle', $data);
    }

    public function obtenerRegistro($id)
    {
        $data['data'] = [];
        if (is_numeric($id)) {
            $consulta = $this->Proyectos_Model->obtenerProyectoId($id);
            if (count($consulta) > 0) {
                $data['data'] = $consulta;
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function eliminarProyecto($id)
    {
        $item = $this->Proyectos_Model->eliminarProyecto($id);
        redirect(base_url('/index.php/Entregas/index'));
    }

    
    
}