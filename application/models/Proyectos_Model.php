<?php
class Proyectos_Model extends CI_Model 
{
    
    function obtenerProyectos()
    {
        $query = $this->db->query("select p.id_proyecto,p.nombreProyecto,p.descripcion,p.avance,est.nombreEstado as estado from proyectos p inner join estado est on p.id_estado = est.id_estado");
        $data['proyectos'] = $query -> result_array();
        return $query->result_array;
    }
    //Cargar proyecto para detalle
    function obtenerProyectoId($id)
    {
        $consulta=$this->db->where('id_proyecto',$id)->get('vw_proyecto');
        return $consulta->result_array();
    }
    //Guardar nuevo proyecto
    function guardarProyecto($data)
    {
        $this->db->insert('proyectos',$data);
        return $this->db->affected_rows();
    }
    //Editar proyecto existente
    function modificarProyecto($data)
    {
        $this->db->where("id_proyecto",$data["id_proyecto"]);
        $this->db->update('proyectos',$data);
        return $this->db->affected_rows();
    }

     //Obtener estados de proyecto
    function obtenerEstados()
    {
        $query = $this->db->query("select * from estado");
        $data['estados'] = $query -> result_array();
        return $query->result_array;
    }

    //Obtener usuarios de proyectos
    function obtenerUsuarios()
    {
        $query = $this->db->query("select * from usuarios");
        $data['usuarios'] = $query -> result_array();
        return $query->result_array;
    }

    //Elimnar 
    public function eliminarProyecto($id)
    {
        return $this->db->delete('proyectos', array('id_proyecto' => $id));
    }
    
    function obtenerTareas()
    {
        $query = $this->db->query("select * from tareas");
        $data['tareas'] = $query -> result_array();
        return $query->result_array;
    }
}
