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
            $manager2 = new UtilisateurManager();
            unset($_POST['myform']['role']);
            $_POST['myform']['user_id'] = $wuser['id'];
            $manager2->insert($_POST['myform']);
            $this->redirectToRoute('index');
        }
        else{
            $this->show('user/inscription');
        }
    }

    public function connexion(){
        if(isset($_POST['login'])){
            $auth_manager = new AuthentificationManager();
            $user_manager = new UserManager();

            if($auth_manager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])){
                    $user = $user_manager->getUserByUsrnameOrEmail($_POST['myform']['username']);
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