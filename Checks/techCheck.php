<?php
    session_start();
    include_once("connections.php");

            if(isset($_POST['submitIot']))
            {
               //echo $_SESSION['techQ1']."<br/>".$_SESSION['techQ9']."<br/>";
               $iot_1 = trim($_POST["iot1"]);
               $iot_2 = trim($_POST['iot2']);
              // echo $iot_1."<br/>".$iot_2."<br/>";
               if ( empty( $iot_1) || empty($iot_2) ){
                    echo "<script> alert('You Didnot set all the inputs');  window.location.href='../Backend/technical/IoT.php' ;</script>";} 
               else
               {
                    $stmt_iot_nonTech= $conn->prepare("INSERT INTO nontechanswers (phone,Question1,Question2,Question3,Question4,Question5,Question6,
                    Question7,Question8,Question9,Question10,Question11,Question12,Question13,Question14) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");

                    $stmt_iot_nonTech->bind_param("sssssssssssssss" , $_SESSION['phone'] , $_SESSION['techQ1'], $_SESSION['techQ2'], $_SESSION['techQ3'], $_SESSION['techQ4'],
                    $_SESSION['techQ5'],$_SESSION['techQ6'], $_SESSION['techQ7'], $_SESSION['techQ8'], $_SESSION['techQ9'], $_SESSION['techQ10'], $_SESSION['techQ11'],
                    $_SESSION['techQ12'],$_SESSION['techQ13'],$_SESSION['techQ14']);

                    if (!$stmt_iot_nonTech->execute()){
                        echo "<script> alert('Oops!, please check your info again SQL FAILED'); </script>";}

                    else{
                            $stmt_iot_tech = $conn->prepare("INSERT INTO iot_answers(phone,Question1,Question2) VALUES(?,?,?);");
                            $stmt_iot_tech->bind_param("sss",$_SESSION['phone'],$iot_1,$iot_2);
                            if (!$stmt_iot_tech->execute()){
                                echo "<script> alert('Oops!, please check your info again'); window.location.href='../Backend/technical/IoT.php' </script>";}
                            
                            $_SESSION['tested']='YES';
                            $stmt_update_iot = $conn->prepare("UPDATE participants SET tested = 'YES' WHERE phone = ?");  
                            $stmt_update_iot->bind_param('s',$_SESSION['phone']) ;
                            if($stmt_update_iot->execute()){
                            echo "<script> alert('Thank you. We will contact you soon'); window.location.href = 'https://stp-org.com'; </script>";} 
                            
                            else{
                                echo "<script> alert('Oops!, please check your info again SQL FAILED'); window.location.href='../Backend/technical/IoT.php' </script>";}
                        } 
                }      
            } 
            elseif(isset($_POST['submitML']))
            {
                // we can use ((trim)) if we want to remove the spaces before and after words//
                $ML_1 = trim($_POST["ML1"]);
                $ML_2 = trim($_POST["ML2"]);
                $ML_3 = trim($_POST["ML3"]);
                $ML_4 = $_POST["ML4"];
                $ML_5 = trim($_POST["ML5"]);
                //echo $ML_1."<br/>".$ML_2."<br/>".$ML_3."<br/>".$ML_4."<br/>".$ML_5."<br/>";
                //echo $_SESSION['techQ1']."<br/>".$_SESSION["techQ6"]."<br/>".$_SESSION["techQ14"];
                if ( empty( $ML_1) || empty($ML_2) || empty($ML_3)|| empty($ML_4)  || empty($ML_5) ){
                    echo "<script> alert('You Didnot set all the inputs');  window.location.href='../Backend/technical/ML.php' ;</script>";}
                else
                {   
                    $stmt_ML_nonTech= $conn->prepare("INSERT INTO nontechanswers (phone,Question1,Question2,Question3,Question4,Question5,Question6,
                    Question7,Question8,Question9,Question10,Question11,Question12,Question13,Question14) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
        
                    $stmt_ML_nonTech->bind_param("sssssssssssssss" , $_SESSION['phone'] , $_SESSION['techQ1'], $_SESSION['techQ2'], $_SESSION['techQ3'], $_SESSION['techQ4'],
                    $_SESSION['techQ5'],$_SESSION['techQ6'], $_SESSION['techQ7'], $_SESSION['techQ8'], $_SESSION['techQ9'], $_SESSION['techQ10'], $_SESSION['techQ11'],
                    $_SESSION['techQ12'],$_SESSION['techQ13'],$_SESSION['techQ14']);
        
                    if (!$stmt_ML_nonTech->execute()){
                        echo "<script> alert('Oops!, please check your info again SQL FAILED'); window.location.href='../Backend/technical/ML.php' ; </script>";}
                    else{
                            $stmt_ML_tech = $conn->prepare("INSERT INTO ml_answers (phone,Question1,Question2,Question3,Question4,Question5) VALUES(?,?,?,?,?,?);");
                            $stmt_ML_tech->bind_param("ssssss",$_SESSION['phone'], $ML_1, $ML_2, $ML_3, $ML_4, $ML_5);
                            if (!$stmt_ML_tech->execute()){
                                echo "<script> alert('Oops!, please check your info again'); window.location.href='../Backend/technical/ML.php' </script>";}
                            
                            $_SESSION['tested']='YES';
                            $stmt_update_ML = $conn->prepare("UPDATE participants SET tested = 'YES' WHERE phone = ?");  
                            $stmt_update_ML->bind_param('s',$_SESSION['phone']) ;
                            if($stmt_update_ML->execute()){
                            echo "<script> alert('Thank you. We will contact you soon'); window.location.href = 'https://stp-org.com'; </script>";} 
                            
                            else{
                                echo "<script> alert('Oops!, please check your info again SQL FAILED'); window.location.href='../Backend/technical/ML.php' </script>";}
                        }
                }    
            }
            elseif(isset($_POST['submitFlutter']))
            {
                $Flutter_1 = trim($_POST["Flutter1"]);
                $Flutter_2 = trim($_POST["Flutter2"]);
                if ( empty( $Flutter_1) || empty($Flutter_2) ){
                    echo "<script> alert('You Didnot set all the inputs');  window.location.href='../Backend/technical/flutter.php' ;</script>";} 
                else
                {    
                    $stmt_Flutter_nonTech= $conn->prepare("INSERT INTO nontechanswers (phone,Question1,Question2,Question3,Question4,Question5,Question6,
                    Question7,Question8,Question9,Question10,Question11,Question12,Question13,Question14) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
        
                    $stmt_Flutter_nonTech->bind_param("sssssssssssssss" , $_SESSION['phone'] , $_SESSION['techQ1'], $_SESSION['techQ2'], $_SESSION['techQ3'], $_SESSION['techQ4'],
                    $_SESSION['techQ5'],$_SESSION['techQ6'], $_SESSION['techQ7'], $_SESSION['techQ8'], $_SESSION['techQ9'], $_SESSION['techQ10'], $_SESSION['techQ11'],
                    $_SESSION['techQ12'],$_SESSION['techQ13'],$_SESSION['techQ14']);
        
                    if (!$stmt_Flutter_nonTech->execute()){
                        echo "<script> alert('Oops!, please check your info again SQL FAILED'); </script>";} 
                    else{
                        $stmt_Flutter_tech = $conn->prepare("INSERT INTO flutter_answers (phone,Question1,Question2) VALUES(?,?,?);");
                        $stmt_Flutter_tech->bind_param("sss",$_SESSION['phone'], $Flutter_1, $Flutter_2);
                        if (!$stmt_Flutter_tech->execute()){
                            echo "<script> alert('Oops!, please check your info again'); window.location.href='../Backend/technical/flutter.php' </script>";}
                        
                        $_SESSION['tested']='YES';
                        $stmt_update_Flutter = $conn->prepare("UPDATE participants SET tested = 'YES' WHERE phone = ?");  
                        $stmt_update_Flutter->bind_param('s',$_SESSION['phone']) ;
                        if($stmt_update_Flutter->execute()){
                        echo "<script> alert('Thank you. We will contact you soon'); window.location.href = 'https://stp-org.com'; </script>";} 
                        
                        else{
                            echo "<script> alert('Oops!, please check your info again SQL FAILED'); window.location.href='../Backend/technical/flutter.php' </script>";}
                        }
                }           
            }

