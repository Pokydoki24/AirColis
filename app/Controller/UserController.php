<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\UtilisateurManager;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;
 


class UserController extends Controller
{

    public function inscription(){
        if(isset($_POST['valider'])){
            // print_r($_POST['myform']);
            // die;
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

             // mail
            // Create the Transport
            // $transport = Swift_SmtpTransport::newInstance('smtp.example.org', 25)
            // ->setUsername('your username')
            // ->setPassword('your password')
            // ;
 
            // pour gmail
            // $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            // ->setUsername('xxxx@gmail.com')
            // ->setPassword('xxxx');
 
            // // Create the Mailer using your created Transport
            // $mailer = Swift_Mailer::newInstance($transport);
 
            // // Create a message
            // $message = Swift_Message::newInstance('AirColis-Email de confirmation')
            // ->setFrom(array('aymericnotta@outlook.fr' => 'Aymeric Notta'))
            // ->setTo(array('xxxx@xxxx.xx'))
            // ->setBody('Bonjour 
            //     Vous venez de créer un compte sur le site de Aircolis, nous tenons tout d\'abord à vous remercier pour l\'intérêt que vous portez à nos services afin de confirmer votre inscription ,nous vous prions de cliquer
            //     sur le lien suivant')
            // ;
 
            // Send the message
            $result = $mailer->send($message);
 
 
            
            $this->redirectToRoute('index');
        }
        else{
            $this->show('user/inscription');
         }
    }

    public function connexion(){
        if(isset($_POST['connexion'])){
             // print_r($_POST['connexion']);
             // die;
              
            $auth_manager = new AuthentificationManager();
            $user_manager = new UserManager();

            if($auth_manager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password'])){
                    $user = $user_manager->getUserByUsernameOrEmail($_POST['myform']['username']);
                    $auth_manager->logUserIn($user);
                   
                    $this->redirectToRoute('index');
           } else {
                $this->show('user/connexion');
            }
        }
        $this->show('user/connexion');
    }

    public function deconnexion(){
        $auth_manager = new AuthentificationManager();
        $auth_manager->logUserOut();
        $this->redirectToRoute('index');
    }
}