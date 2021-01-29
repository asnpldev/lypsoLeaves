<?php

function vacationControl($userAction){
    switch ($userAction){
        // case à ajouter pour chaque nouvelle action souhaitée
        case 'store':
            vacationControl_storeAction();
            break;
        default:
            vacationControl_defaultAction();
        break;
    }
}


function vacationControl_defaultAction()
{
    $tabTitle="Demande de congé";
    echo $_SESSION['login']);
    include('../page/vacationPage_default.php');
}

function vacationControl_storeAction()
{
   // Code pour la route vacation et l'action store
   $datas['start']=$_POST['startResa'];
   $datas['end']=$_POST['endResa'];
   $datas['user_id']=$_SESSION['id'];
   $datas['status']=$_POST['statusResa'];

   $test=vacation_storeAction($datas);

   if ($test>0){
       $message="Votre demande de congé à été envoyée avec succès.";
   }
   else {
       $message="Il y a un problème dans la demande de congé ou bien nous avons perdu la connexion !!";
   }

   // On appelle à nouveau la vue par défaut 
   $tabTitle="Demande de congé";
   include('../page/vacationPage_default.php');
}




