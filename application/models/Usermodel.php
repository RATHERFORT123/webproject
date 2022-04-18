<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {

function __construct() {
    parent::__construct();
    
}

function userQueryInsert($table, $array_data) {
    /* if (!empty($array_condition)) {
        $this->db->where($array_condition);
    } */
    $result = $this->db->insert($table, $array_data);
	$rs = $this->db->insert_id();
    if ($result) {
        return $rs;
    } else {
        return FALSE;
    }
}
function getUsers(){
	$this->db->select("*");
            $this->db->from('All_User_Detail');
            $this->db->where('user_type',3);
            $query = $this->db->get();
            return $query->result_array();
}
 
 
 function SelectData($tbl,$field,$where){
	 $this->db->select($field);
            $this->db->from($tbl);
            $this->db->where($where);
            $query = $this->db->get();
			//echo $this->db->last_query();die;
            return $query->row();
 }
 

function fetch_data_singel_user($tbl,$field,$where){
    $this->db->select($field);
    $this->db->where($where);
    $this->db->from($tbl);
    $query = $this->db->get();
    // echo $this->db->last_query();die;
    return $query->row(); 
}

public function getProductByID($id){
    $query = $this->db
                 ->from('product')
                 ->where('id', $id)
                 ->get();
    $results = $query->result();
    return $results;
}


function fetch_data_all_cat($tbl,$field,$where){
    $this->db->select($field);
    $this->db->where($where);
    $this->db->from($tbl);
    $query = $this->db->get();
    // echo $this->db->last_query();die;
    return $query->result(); 
}

public function catupdate($data,$id){
    $this->db->where('categrory_id', $id );
    $this->db->update('category', $data);	

}	
public function proupdate($data,$id){
    $this->db->where('id', $id );
    $this->db->update('product', $data);	

}	



 function getAllData($tbl,$field,$where){
	 $this->db->select($field);
            $this->db->from($tbl);
            $this->db->where($where);
            $query = $this->db->get();
			//echo $this->db->last_query();die;
            return $query->result();
 }


 function getAllCatgory($tbl,$field){
    $this->db->select($field);
           $this->db->from($tbl);
        //    $this->db->where($where);
           $query = $this->db->get();
           //echo $this->db->last_query();die;
           return $query->result();
}

function Addcategorys($table, $array_data) {
    /* if (!empty($array_condition)) {
        $this->db->where($array_condition);
    } */
    $result = $this->db->insert($table, $array_data);
	// $rs = $this->db->insert_id();
    if ($result) {
        return "Add data succesfull..";
    } else {
        return FALSE;
    }
}

function getAllProduct($tbl,$field){
    // $this->db->select($field);
        //    $this->db->from($tbl);
        //    $this->db->where($where);
        //    $query = $this->db->get();
           //echo $this->db->last_query();die;
        // $query ="SELECT '.$tbl.'.id,'.$tbl.'.product_name,'.$tbl.'product_img,'.$tbl.'.product_price,'.$tbl.'.product_qty,'.$tbl.'.statusp, FROM '.$tbl.' INNER JOIN category ON '.$tbl.'.'.product_category_id = category.categrory_id";
        //    $this->db->select($field);
        //    $this->db->from($tbl);
        //    $this->db->join('category','category.categrory_id = '.$tbl.'.product_category_id');
        //    $query = $this->db->get();
        $this->db->select(''.$tbl.'.id,'.$tbl.'.product_id,'.$tbl.'.product_name,'.$tbl.'.product_img,'.$tbl.'.product_price,'.$tbl.'.product_qty,'.$tbl.'.statusp,category.categrory_name,'.$tbl.'.product_category_id');
        $this->db->from(''.$tbl.''); 
        $this->db->join('category','category.categrory_id ='.$tbl.'.product_category_id');
        // $this->db->join('sub_category',''.$tbl.'.s_id = sub_category.s_id');   
        $query = $this->db->get();


           return $query->result();
}

function Addproducts($table, $array_data){
    $result = $this->db->insert($table, $array_data);
	// $rs = $this->db->insert_id();
    if ($result) {
        return "Add data succesfull..";
    } else {
        return FALSE;
    }
}

 
 function deleteData($tbl,$where){
	  $this->db-> where($where);
   return $this->db->delete($tbl);
	 
 }
 
 function updateData($tbl,$data,$where){
	 
			$this->db->where($where);
			return $this->db->update($tbl,$data);
			 
 }
/* function customQueryInsertGetId($table, $array_data, $array_condition) {
    if (!empty($array_condition)) {
        $this->db->where($array_condition);
    }
    $result = $this->db->insert($table, $array_data);
    if ($result) {
        return $this->db->insert_id();
    } else {
        return FALSE;
    }
}

function lastQuery() {
    return $this->db->last_query();
} */

function selectdatas($query){
 $result = $this->db->query($query);
 foreach($result->result_array() as $row){
     return $row;
 }
 }

 function get_all_product(){
    $result=$this->db->get('product');
    return $result;
}


}

?>