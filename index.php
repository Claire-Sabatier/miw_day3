<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?email='.$_POST['email']);
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?><!DOCTYPE html>
<html lang="fr" >

<head>

    <title>La super soirée des MIW</title>

    <style type="text/css">
    /* version mobile */
        body  {
            height: 1300px;
            background-image: url('https://i.imgur.com/AEOWzJp.png'); 
            /* ajout d'une couleur de fond dans le cas où l'image charge mal */
            background-color: #00913D;
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position:center;
        }
        /* alignement de la zone d'entrée */
        form{
            margin-top: 50%; 
            margin-left: 20%;
        }
        .email{
            height: 60px; 
            width: 50%; 
            border-color: #B2B2B2;
            border-radius: 5px;
            font-size : 35px;
        }
        .submit{
            width: 33%; 
            height: 70px; 
            background-color: #C30078; 
            font-size : 35px;
            border: none; 
            border-radius: 5px; 
            color: #FFFF;
        }
        
        .delivery_sent .sent{
            display: block;
        }
        .delivery_sent form{
            display: none;
        }
        .sent{
            display: none; 
            height: 200px; 
            width: 300px; 
            background-color: rgba(255,255,255,0.5);
            margin-left: 40%; 
            margin-top: 20%;
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 30px;
            
            border: 2px solid #707070;
        }
        /* placement de l'image de l'envoi réussi */
        img{
            margin-left: 15%;
            
        }
        /* version pc/tablette */
        @media screen and (min-width: 768px){
            body  {
                height:0; 
                background-position: top;
            }
            /* diminution de la taille de la zone d'entrée */
            form{
                margin-top: 20%; 
                margin-left: 20%;
            }
            .email{
                height: 40px; 
                width: 50%; 
                font-size : 20px;
            }
            .submit{
                width: 33%; 
                height: 40px; 
                font-size : 20px;
            }
            
        }
    </style>

</head>
<body class="<?= $body_class ?>" style="">

    <form action="#" method="post">
        <input class="email" type="email" name="email" placeholder="Ton email de star..." required/>
        <input class="submit" type="submit" value="Inscris-toi !" />
    </form>
    <div class="sent">
        <img src="https://i.imgur.com/oDxBR9f.png" alt="Mail envoyé">
    </div>

</body>
</html>