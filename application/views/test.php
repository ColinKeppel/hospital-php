<?php
public function login()
{
    //de regels van de inputs maken
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]' );
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]' );
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]' );
    //als de regels niet true zijn, word dit uitgevoerd
    if ($this->form_validation->run() == FALSE){
        $data = array(
            'errors' => validation_errors()
        );
        //Dit print de error op de login pagina
        $this->session->set_flashdata($data);
        //blijf op de login pagina en geeft de error
        redirect('home');
    } else {
        //pak met superglobal $_POST de username en de password
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_id = $this->user_model->login_user($username, $password);

        //ingelogde gebruikers data meegeven
        if ($user_id) {
            $user_data = array(
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true
            );

            $this->session->set_userdata($user_data);
            $this->session->flashdata('login_succes', 'You are now logged in');
            redirect('home/index');
        } else {
            $this->session->flashdata('login_failed', 'Sorry you are not logged in');
            redirect('home/index');
        }


    }
//        $this->input->post('username');
}
