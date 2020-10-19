<?PHP
    session_start();


    if ($_SESSION['tested']=='YES'){
        echo "<script> alert('Oops!, you already TOOK the test!');  window.location.href='https://stp-org.com'; </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport">

    <title> Flutter Test </title>


    <!-- Bootstrap + Js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



        <link href="../../CSS/technical.CSS" rel="stylesheet">
        <link rel="icon" href="../../img/stp_logo.ico">

    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Libre+Baskerville&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital@1&family=Noto+Sans+SC:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>

    <div class=" bodyContainer">
        <header id="header">

          <h2>Technical Test</h2>
        </header>
        <!-- main contains the sections  -->
        <main>
            <form action="../../Checks/techCheck.php" method="POST" name="myForm" onsubmit="return validateForm(2)">
                <div class="QAContainer">
                    <div class="progress">
                        <div class="progress-done" data-done="30">
                        </div>
                    </div>
                    <section id="sectionOne">

                        <ol id="questions">
                            <!-- question one -->
                            <li>
                                <p>Write a function to return the sum of two numbers </p>
                                <textarea id="question1" class="form-control" rows="5" cols="100" maxlength="300"
                                    placeholder="Enter your code hear" name="Flutter1"></textarea>
            </li>
            <!-- question two -->
            <li>
                <p> Write a code to print the integers that have an even index use this given array(List) 1,5,8,9,3,4,2
                    (use any programming language) </p>
                    <textarea id="question2" class="form-control" rows="10" cols="100" maxlength="1000"
                        placeholder="Enter your code hear" name="Flutter2"></textarea>
            </li>

            </ol>

            <button type="submit" name="submitFlutter" class="btn btn-lg btn-danger leftBtn"> Submit </button>
            <br><br>
            <br><br>
            <div>
                            <p id="wishes">
                                Best wishes <br> STP Team
                            </p>
                        </div>
            </section>

    </div>
    </form>
    </main>
    <!-- footer -->
    <footer id="footer" class="bg-danger container-fluid">
        <!-- make that wish appear with the last section  -->
        <p> © Copyright STP </p>
    </footer>

    </div>

</body>

<script src="../../JS/flutter.js"></script>


</html>
