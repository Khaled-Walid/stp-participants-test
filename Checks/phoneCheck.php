 <?php 

    session_start();
    include ('connections.php');

    if(isset($_POST['submit'])){     
            $phone = $_POST['phone'];

            
            $_SESSION['phone'] =  $phone;

            if (empty($phone)){
                echo "<script> alert('You Didnot set all the inputs');  window.location.href='../phoneNumber.html';</script>";}
            else{
                $stmt_phone = $conn->prepare("SELECT phone FROM participants WHERE phone= ? ");
                $stmt_tested = $conn->prepare("SELECT tested FROM participants WHERE phone= ? ");

                if(! ($stmt_phone && $stmt_tested)){
                echo "<script> alert('SQL failed');  window.location.href='../phoneNumber.html';</script>";
                }
                else{
                    $stmt_phone->bind_param("s" , $phone);
                    $stmt_phone->execute();
                    $result_phone = mysqli_stmt_get_result($stmt_phone);
                    
                    //el 7eta bta3t el cookies
                    $stmt_pref1 = $conn->prepare("SELECT pref1 FROM participants WHERE phone= ? ");
                    $stmt_pref1->bind_param("s" , $_SESSION['phone']);
                    $stmt_pref1->execute();
                    $result_pref1 = $stmt_pref1->get_result();
                    $res_pref1 = $result_pref1->fetch_array(MYSQLI_ASSOC);
                    $_SESSION['pref1'] =  $res_pref1['pref1'];
                    
                    // echo $result_phone ->num_rows;
                    if($result_phone ->num_rows == 0){
                        echo "<script> alert('oops! this phone doesnot exist');  window.location.href='../phoneNumber.html';</script>";}

                        // echo "gvgj";
                        // echo "<script> alert('Oops!, This phone doesn't NOT Exist!');  window.location.href='../phoneNumber.html'; </script>";
                    
                    else{
                        $stmt_tested->bind_param("s" , $phone);
                        $stmt_tested->execute();
                        $result_tested = $stmt_tested->get_result();

                        $res = $result_tested->fetch_array(MYSQLI_ASSOC);
                        if ($res['tested'] === "YES"){
                            //add stp link
                            echo "<script> alert('Oops!, you already take the test!');  window.location.href='https://stp-org.com'; </script>";
                        }else{
                            $_SESSION['tested']=  $res['tested']; 
                            echo "<script>   window.location.href='../Backend/nonTechnical.php'; </script>";}
                            
                        }// bind the data from the first result row to $res
                    //echo $res['tested']; // will return the tested
                
                    }
                }

            }


                 
                 

                 // while ($row = mysqli_fetch_assoc( $result_tested)){
                 //     echo $row['tested'];
                 // }
                 // if ($stmt_tested == 1){
                 //     echo "<script> alert('you compeleted the test before');  window.location.href='../phoneNumber.html';</script>";
                 // } 

 /*
    include ('connections.php');
    if(isset($_POST['submit'])){     
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);

            if (empty($phone)){
                echo "<script> alert('You Do not set all the inputs');  window.location.href='../phoneNumber.html';</script>";
            }
            else{
                $stmt_phone = $conn->prepare("SELECT phone FROM participants WHERE phone= ? ");
                $stmt_tested = $conn->prepare("SELECT tested FROM participants WHERE phone= ? ");

                if(! ($stmt_phone && $stmt_tested)){
                echo "<script> alert('SQL failed');  window.location.href='../phoneNumber.html';</script>";
                }
                else{
                    $stmt_phone->bind_param("s" , $phone);
                    $stmt_phone->execute();
                    $result_phone = mysqli_stmt_get_result($stmt_phone);
                    

                    $stmt_tested->bind_param("s" , $phone);
                    $stmt_tested->execute();
                    $result_tested = $stmt_tested->get_result();

                    $res = $result_tested->fetch_array(MYSQLI_ASSOC); // bind the data from the first result row to $res
                    //echo $res['tested']; // will return the tested

                    if($result_phone ->num_rows == 0)
                        echo "<script> alert('Oops!, This phone is NOT Exist!');  window.location.href='../phoneNumber.html'; </script>";

                    else{
                        if ($res['tested'] === "YES"){
                            echo "<script> alert('Oops!, you already take the test!');  window.location.href='../phoneNumber.html'; </script>";
                        }else{
                        echo "<script> alert('tmam');  window.location.href='../Backend/nonTechnical.html'; </script>";
                        }

                    }    

                    // while ($row = mysqli_fetch_assoc( $result_tested)){
                    //     echo $row['tested'];
                    // }
                    // if ($stmt_tested == 1){
                    //     echo "<script> alert('you compeleted the test before');  window.location.href='../phoneNumber.html';</script>";
                    // } 
                }
            }

    }*/ 