<?php

class Admin extends Controller{

  public function index(){
    session_start();
    if(empty(Session::get('username'))){
      $data['judul'] = 'Login Harian';
      $this->view('templates/header', $data);
      $this->view('admin/index');
      $this->view('templates/footer');
    }else{
      header('Location:'. BASEURL .'/admin/dashboard');
      exit();
    }

  }

  public function loginad(){
    $username = Input::get('username');
    $password = Input::get('password');
    if(!empty($username)){
      $data = $this->model('LoginAdmin')->login($username, $password);
      if($data){
        session_start();
        Session::set('id', $data['id']);
        Session::set('username', $data['user']);
        Session::set('email', $data['email']);

        header('Location:'. BASEURL . '/admin/dashboard');
        exit();
      }else{
        header('Location:'. BASEURL . '/admin');
        exit();
      }

    }else{
      header('Location:'. BASEURL . '/admin');
      exit();
    }
  }

  public function dashboard(){
      session_start();
      $data['judul'] = 'Dashboard';
      $data['email'] = Session::get('email');
      $this->view('admin/header', $data);
      $this->view('admin/dashboard', $data);
      $this->view('admin/footer');
  }

  public function polling(){
      $data['judul'] = 'Polling';
      $data['email'] = 'pollinggann';
      $this->view('admin/header', $data);
      $this->view('admin/dashboard', $data);
      $this->view('admin/footer');
  }

  public function logout(){
    session_start();
    Session_destroy();
    header('Location:'. BASEURL . '/admin');
    exit();
  }

}
