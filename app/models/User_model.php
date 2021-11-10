<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function insert_data($username,$password,$email,$usertype) {
		$data=array(
            'username'=> $username,
            'password'=> $password,
            'email'   => $email,
            'usertype'=> $usertype
        );

        $result = $this->db->table('user')
        ->insert($data)
        ->exec();
        if($result)
            
                return true;  
                  
        }
   public function retrieve_data(){
           
        return $this->db->table('user')
        ->get_all();
   }
   public function delete_data($id){
           $result = $this->db->table('user')
           ->delete()
           ->where(array('id'=>$id))
          
           ->exec();
      
           if($result)
            
                return true;  
                  
           
   }
   public function update_data($id,$username,$password,$email,$usertype){

        $data = array(
                'username'=>$username,
                'password'=>$password,
                'email'   =>$email,
                'usertype'=>$usertype
        );
           $result = $this->db->table('user')
           ->update($data)
           ->where('id',$id)
           
           ->exec();
      
           if($result)
            
                return true;  
                  
           
   }
   public function get_single_data($id){
            return $this->db->table('user')
        ->where('id',$id)->get();
   }
}

?>