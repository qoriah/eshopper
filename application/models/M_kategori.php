
<?php
 
class M_kategori extends Model{
 
    function categoryModel(){
        parent::Model();
    }
     function getCategory($id){
 
        $data = array();
 
        $where = array('id_kategori' => $id);
 
        $query = $this->db->getwhere('tbl_kategori',$where,1);
 
        if ($query-> num_rows() > 0){
            $data = $query->row_array();
        }
 
        $query->free_result();
        return $data;
    }
 
    function getAllCategories(){
        $data = array();
        $query = $this->db->get('tbl_kategori');
 
        if ($query->num_rows() > 0){
            foreach($query->result_array() as $row){
            $data[] = $row;
            }
        }
        $query-> free_result();
        return $data;
    }
    }