<?php
include 'db-contact.php'; 
// define variables and set to empty values
$nomErr = $prenomErr = $emailErr = $MessageErr = $numbreErr = "";
$nom = $prenom = $email = $Message = "";

if(isset($_POST['submit']))
{

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $nomvalide="/^[a-zA-Z-' ]*$/";
        $prenomvalide="/^[a-zA-Z-' ]*$/";
        $emailvalide="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $messagevalide="/^[a-zA-Z-' ]*$/";

        if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['email'])) {
                $inputErr = "Veuillez remplir les champs";}
                //Check if firstname and lastname contain less than 20 characters
        elseif ((strlen($nom) or strlen($prenom)) >= 20) {
                $numbreErr = "Votre nom est trop long et/ou vous n'avez pas de prénom ou de patronyme. <br> Vos noms et prénoms ne doivent pas dépasser 48 caractères au total";}    
                // check if name, prename et message only contain letters and whitespace
        elseif (!preg_match($nomvalide,$nom)) {
                $nomErr = "Votre nom: Seules les lettres et les espaces blancs sont autorisés";}
        elseif (!preg_match($prenomvalide,$prenom)) {
                $prenomErr = "Votre prénom: Seules les lettres et les espaces blancs sont autorisés";}
        elseif (!preg_match($messagevalide,$message)) {    
                $messageErr = "Votre message: Seules les lettres et les espaces blancs sont autorisés";}
        elseif (!preg_match($emailvalide,$email)) {    
                $emailErr = "Email n'est pas validé";}
        else {
                echo "<pre>";
                print_r($_POST);

        // Test
        }}
       


// insert Data to Database
        $sql = "INSERT INTO `tbl-users` (`nom`, `prenom`, `email`, `message`) VALUES ('$nom', '$prenom', '$email', '$message')";
        if ($conn->query($sql)===true) {echo "Ok"; }
        else {echo "Error {$sql}".$conn->error;}

// Sending mail
    
            $desinataire='huynh52xd@gmail.com';
            $sujet='Test MailTuto';
            $contenu="<html> <body> <p>$nom</p> <br> <p>$prenom</p> <br> <p>$email</p> <br> <p>$message</p> </body> </html>";
            $header= "From:.$desinataire\n";
            $header.= "Content.type:text/html; charset=UTF-8";
       
//         // Test 
//         // }}
//         // echo "<pre>";
//         // print_r($contenu);

                $mail=mail ($desinataire,$sujet,$contenu,$header);
            
                if ($mail){
            //  echo " <p class='success' > 'Votre message a été envoyé' </p>;
            echo "
            <script>
            alert ('Votre message a été envoyé');
            window.location.href = 'CV.php';
            </script> ";
            } 
            else {
            echo "failed";
            }

           
//     }
// }
?>