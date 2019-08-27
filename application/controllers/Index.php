<?php
class Index extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('index');
    }
    public function login(){
        
        $this->load->view('login');
    }
    public function register(){
        $this->load->view('register');
    }
    public function getUserDetails2($id){
        $this->db->select('*');
        $this->db->from('tbl_records');
        $this->db->where('Record_id',$id);
        echo json_encode($this->db->get()->result_array());
    }
    public function registerDetails($name,$email,$pwd){
        $data['Name']=str_replace("%20","",$name);
        $data['Email']=$email;
        $data['Pwd']=md5(str_replace("%20","",$pwd));
        if($this->db->insert('tbl_admin',$data))
        echo 1;
    }
    public function phoneBookInsert($name,$phone,$address){
        $data['Name']=str_replace("%20","",$name);
        $data['Phone']=str_replace("%20","",$phone);
        $data['Address']=str_replace("%20","",$address);
        //$data['Fk_id']=$this->userdata('Admin_id');
        if($this->db->insert('tbl_records',$data)){
            echo 1;
            exit();
        }
    }
    public function viewRecord(){
        if($this->session->userdata('Admin_id')){
            $this->load->view("viewRecord");
        }
        else{
            redirect(base_url()."../Admin/Login");
        }
    }
    public function editRecord($id){
        $this->db->select('*');
        $this->db->from('tbl_records');
        $this->db->where('Record_id',$id);
        $data2=$this->db->get()->result_array();
        $data['dataRecords']=$data2;
        $this->load->view('admin',$data);
    }
    public function updateRecord($name,$number,$address,$id){
        $data['Name']=str_replace("%20","",$name);
        $data['Phone']=str_replace("%20","",$number);
        $data['Address']=str_replace("%20","",$address);
        $this->db->where('Record_id',$id);
        if($this->db->update('tbl_records',$data)){
            echo 1;
            exit();
        }

    }
    public function getRecords(){
        $this->db->select('*');
        $this->db->from('tbl_records');
        $this->db->where('Status',1);
        $data=$this->db->get()->result_array();
        echo json_encode($data);
    }
    public function deleteRecord($id){
        $data['Status']=0;
        $this->db->where('Record_id',$id);
        if($this->db->update('tbl_records',$data))
        echo 1;
    }
    public function checkLogin($user,$pwd){
        $pw=md5(str_replace("%20","",$pwd));
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('Email',$user);
        //$this->db->where('Pwd',$pw);
        $this->db->where('Status',1);
        $data=$this->db->get()->result_array();
        $pwd2=$data[0]['Pwd'];
        //$array=array('Admin_id',$data[0]['Pk_id']);
        if($pwd2==$pw){
            echo 1;
            $this->session->set_userdata('Admin_id', $data[0]['Pk_id']);
            exit();
        }
        else{
            echo 0;
            exit();
        }
    }
    public function home(){
        if($this->session->userdata('Admin_id')){
            $this->load->view("admin");
        }
        else{
            redirect(base_url()."Admin/Login");
        }
    }
    public function logout(){
        $this->session->unset_userdata('Admin_id');
        redirect(base_url()."Home");
    }
    public function getAllRecords(){
            $this->db->select('*');
            $this->db->from('tbl_records');
            $this->db->where('Status',1);
            echo json_encode($this->db->get()->result_array());
    }
    public function searchRecord(){
        $name=$_REQUEST['name'];
        $this->db->select('*');
        $this->db->from('tbl_records');
        $this->db->where('Status',1);
        $this->db->where("Name LIKE '%".$name."%'");
        $records=$this->db->get()->result_array();
        $data['records']=$records;
        $this->load->view('searchResult',$data);
    }
}
?>