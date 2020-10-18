<?php

    session_start();
    include_once("connections.php");

        if(isset($_POST['submit1'])){


            $Q1 = $_POST["question1"];
            $Q2 = $_POST['question2'];
            $Q3 = $_POST['question3'];
            $Q4 =  $_POST['question4'];
            $Q5 = $_POST['question5'];
            $Q6 = $_POST['question6'];
            $Q7 =  $_POST['question7'];
            $Q8 =  $_POST['question8'];
            $Q9 =  $_POST['question9'];
            $Q10 =  $_POST['question10'];
            $Q11 = $_POST['question11'];
            $Q12 = $_POST['question12'];
            $Q13 = $_POST['question13'];
            $Q14 =  $_POST['question14'];

            if ( empty( $Q1) || empty( $Q2) || empty( $Q3) ||empty( $Q4) ||empty( $Q5) ||empty( $Q6) ||empty( $Q7) ||empty( $Q8) ||empty( $Q9)
             || empty( $Q10) ||empty( $Q11) ||empty( $Q12) ||empty( $Q13) || empty($Q14) ){
                echo "<script> alert('You Didnot set all the inputs');  window.location.href='../Backend/nonTechnical.php' ;</script>";} 
            //array of answers if needed
            // $questions = array($_POST["question1"],$_POST["question2"],$_POST["question3"],$_POST["question4"],$_POST["question5"]
            // ,$_POST["question6"],$_POST["question7"],$_POST["question8"],$_POST["question9"],$_POST["question10"]
            // ,$_POST["question11"],$_POST["question12"],$_POST["question13"],$_POST["question14"]); 


            // $stmt_pref1 = $conn->prepare("SELECT pref1 FROM participants WHERE phone= ? ");
            // $stmt_pref1->bind_param("s" , $_SESSION['phone']);
            // $stmt_pref1->execute();
            // $result_pref1 = $stmt_pref1->get_result();
            // $res_pref1 = $result_pref1->fetch_array(MYSQLI_ASSOC);
            //echo $res_pref1['pref1'];

            $Techninal = array("Internet of things IOT","Machine learning","Mobile development using flutter");

            if (in_array($_SESSION['pref1'], $Techninal))
            {
                //echo 'iam tech '.$res_pref1['pref1'];
                $_SESSION['techQ1'] = $Q1;
                $_SESSION['techQ2'] = $Q2;
                $_SESSION['techQ3'] = $Q3;
                $_SESSION['techQ4'] = $Q4;
                $_SESSION['techQ5'] = $Q5;
                $_SESSION['techQ6'] = $Q6;
                $_SESSION['techQ7'] = $Q7;
                $_SESSION['techQ8'] = $Q8;
                $_SESSION['techQ9'] = $Q9;
                $_SESSION['techQ10'] = $Q10;
                $_SESSION['techQ11'] = $Q11;
                $_SESSION['techQ12'] = $Q12;
                $_SESSION['techQ13'] = $Q13;
                $_SESSION['techQ14'] = $Q14;
                if ($_SESSION['pref1'] == 'Internet of things IOT'){
                      echo "<script>  window.location.href='../Backend/technical/IoT.php'; </script>";}
                elseif($_SESSION['pref1'] == 'Machine learning'){
                    echo  "<script> window.location.href='../Backend/technical/ML.php'; </script>";//php
                }
                elseif($_SESSION['pref1'] == 'Mobile development using flutter')  {
                    echo "<script>   window.location.href='../Backend/technical/flutter.php'; </script>";}//php   
            }
            else{
                    //echo 'iam not tech '.$res_pref1['pref1'];
                $stmt_insert= $conn->prepare("INSERT into nontechanswers (phone,Question1,Question2,Question3,Question4,Question5,Question6,
                Question7,Question8,Question9,Question10,Question11,Question12,Question13,Question14) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
                $stmt_insert->bind_param("sssssssssssssss" , $_SESSION['phone'] , $Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10, $Q11, $Q12,
                $Q13,$Q14);
                if (!$stmt_insert->execute())
                    echo "<script> alert('Oops!, please check your info again'); window.location.href='../phoneNumber.html';</script>";
                else{ 
                    $_SESSION['tested']='YES';
                    $stmt_update = $conn->prepare("UPDATE participants SET tested = 'YES' WHERE phone = ?");  
                    $stmt_update->bind_param('s',$_SESSION['phone']) ;
                    if (!$stmt_update->execute()){
                        echo "<script> alert('Oops!, please check your info again'); window.location.href='../phoneNumber.html';</script>";
                    }  
                        
                    echo "<script> alert('Thank you. We will contact you soon');  window.location.href = 'https://stp-org.com';</script>"; }
                }


            //$_SESSION['tested']='YES';
        }






     //echo $_SESSION['tested'];
            //echo "q1: ".$Q1."\nq2: ".$Q2."\nq3: ".$Q3."\n q4: ".$Q4."\n q5: ".$Q5."\n /q6: ".$Q6."\n /q7: ".$Q7."\n /q8: ". $Q8."\n /q9: ". $Q9."\n /q10: ". $Q10."\n /q11: ". $Q11."\n /q12: ". $Q12."\n /q14: ". $Q14."\n /q14: ". $Q14;
            // foreach($questions as $q){
            //     echo $q."<br>";
            // }