<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\UtilisateurManager;

class UserController extends Controller
{

    public function inscription(){
        if(isset($_POST['valider'])){
            $_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
            $_POST['myform']['role'] = 'user';
            $manager = new UserManager();
            $wuser = $manager->insert([
                'username' => $_POST['myform']['email'],
                'email' => $_POST['myform']['email'],           
                'password' => $_POST['myform']['password'], 
                'role' => $_POST['myform']['role'],
                            ]);
            // print_r($_POST['myform']);
            // die;
            $manager2 = new UtilisateurManager();
            unset($_POST['myform']['role']);
            $_POST['myform1']['user_id'] = $wuser['id'];
            $manager2->insert($_POST['myform']);
            
            $this->redirectToRoute('index');
        }
        else{
            $this->show('user/inscription');
         }
    }

    public function connexion(){
        if(isset($_POST['connexion'])){
            $auth_manager = new AuthentificationManager();
            $user_manager = new UserManager();

            if($auth_manager->isValidLoginInfo($_POST['myform2']['username'], $_POST['myform2']['password'])){
                    $user = $user_manager->getUserByUsrnameOrEmail($_POST['myform1']['username']);
                    $auth_manager->logUserIn($user);
                    $this->redirectToRoute('index');
            }
            else{
                $this->show('default/connexion');
            }
        }
    }

    public function deconnexion(){
        $auth_manager = new AuthentificationManager();
        $auth_manager->logUserOut();
        $this->redirectToRoute('index');
    }
}