<?php 
    class User extends CI_Model {

        public function agregar($user) {
            $this->db->insert('user', $user);
        }//end agregar

        public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('user');
            return $this->db->get()->result();
        }//end seleccionar_todo

        public function eliminar($id_user) {
            $this->db->where('id', $id_user);
            $this->db->delete('user');
        }//end eliminar

        public function actualizar($user, $id_user) {
            $this->db->where('id', $id_user);
            $this->db->update('user', $user);
        }//end actualizar
    }
?>
