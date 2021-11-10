<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
    public function __construct() {
        parent::__construct();
        $this->call->model('user_model');
        $this->call->helper(array('form','alert'));
    }
	public function show_data() {
        $data = $this->user_model->retrieve_data();
        if($this->form_validation->submitted())
        {
            
            $this->form_validation
            ->name('username')->required()
            ->min_length(5)
            ->max_length(15)
            ->name('password')->required()
            ->name('email')->required()
            ->valid_email()
            ->name('usertype')->required();


                  if($this->form_validation->run()){
                      
                        if( $this->user_model->insert_data($this->io->post('username'),$this->io->post('password'),$this->io->
                  post('email'),$this->io->post('usertype'))){
                     
                       $this->session->set_flashdata(array('status'=> 'User was Successfully Inserted'));
                       redirect('user/show_data');
                       exit;
                        }
                     }
                  }
        
		$this->call->view('user/show',$data);
	}
    
    public function delete_data($id){
        if($this->user_model->delete_data($id))
        redirect('user/show_data');
        exit;
        
    }
    public function update_data(){
      if($this->form_validation->submitted())
        {
            
            $this->form_validation
            ->name('username')->required()
            ->min_length(5)
            ->max_length(15)
            ->name('password')->required()
            ->name('email')->required()
            ->valid_email()
            ->name('usertype')->required();


                  if($this->form_validation->run()){
                      
                        if( $this->user_model->update_data($this->io->post('id'),$this->io->post('username'),$this->io->post('password'),$this->io->
                  post('email'),$this->io->post('usertype'))){
                     
                       $this->session->set_flashdata(array('status'=> 'User was Successfully Updated'));
                       redirect('user/show_data');
                       exit;
                        }
                     }
                  }
    }
    public function edit_data($id){
        $data=$this->user_model->get_single_data($id);
         $this->call->view('user/edit',$data); 
    }
}
?>