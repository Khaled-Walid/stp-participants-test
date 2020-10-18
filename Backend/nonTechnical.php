<?PHP
    session_start();


    if ($_SESSION['tested']=='YES'){
        echo "<script> alert('Oops!, you already TOOK the test!');  window.location.href='https://stp-org.com'; </script>";
    }
  
    setcookie('techpref',$_SESSION['pref1'],time()+3600,"/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <title> Non-Technical Test </title>
 <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="../MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../MDB/css/mdb.min.css">

    <!-- Bootstrap + Js -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link href="../CSS/nonTechnical.CSS" rel="stylesheet">
    <link rel="icon" href="../img/stp_logo.ico">

    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Libre+Baskerville&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital@1&family=Noto+Sans+SC:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>

<body>
  <div class="bodyContainer">
    <!-- header -->
    <header id="header">

      <h2>Participants Test </h2>
    </header>
    <!-- main -->
    <main id="main">

      <form action="../Checks/nonTechCheck.php" method="POST" name="myForm" onsubmit="return validateForm(14)">
      <div class="QAContainer">
                    <div class="progress">
                        <div class="progress-done" data-done="30">

                        </div>

                    </div>
                    <section id="sectionOne">
                        <ol id="questions">
                            <!-- question one -->
                            <li>
                                <p> In my work environment, it is most important to me... </p>
                            </li>
                            <!--  to  make the answers ordered by A B C D-->
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="oneA" name="question1" value="To help co-workers and to be in a peaceful environment.">
                                        <label for="oneA">To help co-workers and to be in a peaceful environment.</label><br>
                                    </li>
                                </div>

                                <div class="answerContainer">
                                    <li> <input type="radio" id="oneB" name="question1" value="To feel that my co-workers admire me and to be free from rigid rules">
                                        <label for="oneB">To feel that my co-workers admire me and to be free from rigid rules</label><br>
                                    </li>
                                </div>
                                <div class="answerContainer">

                                    <li> <input type="radio" id="oneC" name="question1" value="To know exactly what is expected of me and to finish one task before moving
                            to another">
                                        <label for="oneC">To know exactly what is expected of me and to finish one task before moving
                      to another</label><br></li>
                                </div>
                                <div class="answerContainer">

                                    <li> <input type="radio" id="oneD" name="question1" value="To get things done and to see results">
                                        <label for="oneD">To get things done and to see results</label></li>
                                </div>

                            </ul>
                            <br><br>
                            <!-- question two  -->
                            <li>
                                <p> When someone offers an opinion or conclusion and I disagree, I am most likely to... </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">

                                    <li><input type="radio" id="twoA" name="question2" value="Tell them that I disagree.">
                                        <label for="twoA">Tell them that I disagree.</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="twoB" name="question2" value=" Say something humorous">
                                        <label for="twoB"> Say something humorous</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="twoC" name="question2" value="Ask for more information.">
                                        <label for="twoC">Ask for more information.</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="twoD" name="question2" value="Nod and say nothing.">
                                        <label for="twoD">Nod and say nothing.</label></li>
                                </div>
                            </ul>
                            <br><br>
                            <!-- question three -->
                            <li>
                                <p>When I am working on a team and we encounter a difficulty of some kind, I am least likely to say...
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li><input type="radio" id="threeA" name="question3" value="Lighten up! Just go with the flow!">
                                        <label for="threeA">Lighten up! Just go with the flow!</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="threeB" name="question3" value="Let's make a decision!">
                                        <label for="threeB">Let's make a decision!</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="threeC" name="question3" value="How do you feel? I'd like to make sure that everyone is comfortable.">
                                        <label for="threeC">How do you feel? I'd like to make sure that everyone is comfortable.</label><br>
                                    </li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="threeD" name="question3" value="Let's consider this more carefully? Do we have all of the data we need?">
                                        <label for="threeD">Let's consider this more carefully? Do we have all of the data we need?</label>
                                    </li>
                                </div>

                            </ul>
                            <br><br>

                            <div class="btnContainer">
                                <button id="next1" type="button" class="btn btn-lg btn-danger firstBtn" h> Next <i
                    class="fas fa-arrow-right"></i></button>
                            </div>
                    </section>
                    <section id="sectionTwo">
                        <ol start="4">
                            <!-- question four -->
                            <li>
                                <p>My attitude towards detail work — like research and data analysis — is most often...
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li><input type="radio" id="fourA" name="question4" value="Great. I enjoy research and analysis.">
                                        <label for="fourA">Great. I enjoy research and analysis.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="fourB" name="question4" value="If it will get better and faster results, I'll do it.">
                                        <label for="fourB"> If it will get better and faster results, I'll do it.</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="fourC" name="question4" value="If it will make others think more highly of me, I'll do it">
                                        <label for="fourC">If it will make others think more highly of me, I'll do it</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="fourD" name="question4" value="If it will help other people or make things easier, I'll do it.">
                                        <label for="fourD">If it will help other people or make things easier, I'll do it.</label></li>
                                </div>


                            </ul><br><br>
                            <!-- question five -->
                            <li>
                                <p> When I am at an event with many people I have not yet met present, I am most likely to... </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li><input type="radio" id="fiveA" name="question5" value="Find a small group of people with whom I am already comfortable and speak
                            with them in quiet conversation">
                                        <label for="fiveA">Find a small group of people with whom I am already comfortable and speak
                      with them in quiet conversation</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="fiveB" name="question5" value="Seek a good vantage point to observe the event and sit quietly unless someone
                            speaks to me">
                                        <label for="fiveB">Seek a good vantage point to observe the event and sit quietly unless someone
                      speaks to me</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="fiveC" name="question5" value="Meet and talk with as many people as possible before the event is over.">
                                        <label for="fiveC">Meet and talk with as many people as possible before the event is
                      over.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="fiveD" name="question5" value="Go to the people I need to speak with to fulfill my purpose for attending.">
                                        <label for="fiveD">Go to the people I need to speak with to fulfill my purpose for
                      attending.</label></li>
                                </div>


                            </ul><br><br>
                            <!-- question six  -->
                            <li>
                                <p> The way I see myself most is... </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li><input type="radio" id="sixA" name="question6" value="Doing, driving, and accomplishing">
                                        <label for="sixA">Doing, driving, and accomplishing</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="sixB" name="question6" value="Patient, kind, and helpful">
                                        <label for="sixB"> Patient, kind, and helpful</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="sixC" name="question6" value="Logical, factual, and correct.">
                                        <label for="sixC">Logical, factual, and correct.</label><br></li>
                                </div>

                                <div class="answerContainer">
                                    <li><input type="radio" id="sixD" name="question6" value="Friendly, fun, and persuasive">
                                        <label for="sixD">Friendly, fun, and persuasive</label></li>
                                </div>

                                <br><br>
                            </ul>
                            <!-- question seven -->
                            <li>
                                <p>When I hear about a coming change, I am most likely to think...</p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li><input type="radio" id="sevenA" name="question7" value="How does it affect me?">
                                        <label for="sevenA">How does it affect me?</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="sevenB" name="question7" value=" Is there a good reason behind it?">
                                        <label for="sevenB"> Is there a good reason behind it?</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="sevenC" name="question7" value="What will it do to results and speed?">
                                        <label for="sevenC">What will it do to results and speed?</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li><input type="radio" id="sevenD" name="question7" value="How does it affect everyone involved?">
                                        <label for="sevenD"> How does it affect everyone involved?</label></li>
                                </div>

                                <br><br>
                            </ul>
                            <div class="btnContainer">
                                <button id="prev1" type="button" class="btn btn-lg btn-danger rightBtn"> <i
                    class="fas fa-arrow-left"></i>Previous </button>
                                <button id="next2" type="button" class="btn btn-lg btn-danger leftBtn"> Next <i
                    class="fas fa-arrow-right"></i></button>
                            </div>


                    </section>
                    <section id="sectionThree">
                        <ol start="8">
                            <!-- question eight -->
                            <li>
                                <p>The most accurate way to describe my approach to work is...
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="eightA" name="question8" value="Plan your work and work your plan.">
                                        <label for="eightA">Plan your work and work your plan.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="eightB" name="question8" value="How would you like for me to do this?">
                                        <label for="eightB"> How would you like for me to do this?</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="eightC" name="question8" value="Who will do this with me? Is there anyone to talk with while I work?">
                                        <label for="eightC"> Who will do this with me? Is there anyone to talk with while I
                      work?</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="eightD" name="question8" value="Get it done. What's next?">
                                        <label for="eightD">Get it done. What's next?</label></li>
                                </div>

                            </ul>
                            <br><br>
                            <!-- question nine-->
                            <li>
                                <p>The type of work activities that I enjoy the most involve...
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="nineA" name="question9" value="Fast-paced, rapidly changing tasks that create progress.">
                                        <label for="nineA"> Fast-paced, rapidly changing tasks that create progress.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="nineB" name="question9" value="Working alone and focusing on the task at hand to create excellence.">
                                        <label for="nineB"> Working alone and focusing on the task at hand to create excellence.</label><br>
                                    </li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="nineC" name="question9" value="Comfortable and predictable tasks that support the team.">
                                        <label for="nineC"> Comfortable and predictable tasks that support the team.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="nineD" name="question9" value="Interacting with many people to create new ideas and energy">
                                        <label for="nineD">Interacting with many people to create new ideas and energy</label></li>
                                </div>

                            </ul><br><br>
                            <!-- question ten -->
                            <li>
                                <p> When I receive a phone call, I am most interested in… </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="tenA" name="question10" value="Talking with the person who called">
                                        <label for="tenA">Talking with the person who called</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="tenB" name="question10" value="What they want me to do">
                                        <label for="tenB">What they want me to do</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="tenC" name="question10" value="Why they called me">
                                        <label for="tenC">Why they called me</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="tenD" name="question10" value="How I can help.">
                                        <label for="tenD">How I can help.</label></li>
                                </div>

                            </ul><br><br>
                            <!-- question eleven  -->
                            <li>
                                <p> The thing someone could say that would have the most positive impact on me is… </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="elevenA" name="question11" value="I really appreciate you.">
                                        <label for="elevenA">I really appreciate you.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="elevenB" name="question11" value=" You are fantastic!">
                                        <label for="elevenB"> You are fantastic!</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="elevenC" name="question11" value="You get a lot done.">
                                        <label for="elevenC">You get a lot done.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="elevenD" name="question11" value="You do excellent work.">
                                        <label for="elevenD"> You do excellent work.</label></li>
                                </div>

                            </ul><br><br>
                            <div class="btnContainer">
                                <button id="prev2" type="button" class="btn btn-lg btn-danger rightBtn"> <i
                    class="fas fa-arrow-left"></i>Previous </button>
                                <button id="next3" type="button" class="btn btn-lg btn-danger leftBtn"> Next <i
                        class="fas fa-arrow-right"></i></button>
                            </div>


                    </section>
                    <section id="sectionFour">
                        <ol start="12">
                            <!-- question twelve -->
                            <li>
                                <p>The projects or tasks that I enjoy the most allow me to….</p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="twelveA" name="question12" value="Collect and evaluate information to build plans or systems.">
                                        <label for="twelveA">Collect and evaluate information to build plans or systems.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="twelveB" name="question12" value="Achieve big results and overcome a challenge.">
                                        <label for="twelveB"> Achieve big results and overcome a challenge.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="twelveC" name="question12" value="Do what I already know how to do at my own pace.">
                                        <label for="twelveC">Do what I already know how to do at my own pace.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="twelveD" name="question12" value="Work with many different people on a wide range of tasks to keep things
                  interesting.">
                                        <label for="twelveD"> Work with many different people on a wide range of tasks to keep things
          interesting.</label></li>
                                </div>


                            </ul><br><br>

                            <!-- question thirteen -->
                            <li>
                                <p> During a heated argument, you are more likely to…?
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="thirteenA" name="question13" value="Insist that you are right">
                                        <label for="thirteenA"> Insist that you are right</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="thirteenB" name="question13" value="Try to calm the other person down and handle it in an easy way.">
                                        <label for="thirteenB"> Try to calm the other person down and handle it in an easy way.</label><br>
                                    </li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="thirteenC" name="question13" value="Call for a short break before resuming the discussion">
                                        <label for="thirteenC"> Call for a short break before resuming the discussion</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="thirteenD" name="question13" value="Give in and apologize to quickly end the argument.">
                                        <label for="thirteenD">Give in and apologize to quickly end the argument.</label></li>
                                </div>


                            </ul><br><br>
                            <!-- question fourteen-->
                            <li>
                                <p>When making an important decision, you tend to…?
                                </p>
                            </li>
                            <ul class="answers" type="a">
                                <div class="answerContainer">
                                    <li> <input type="radio" id="fourteenA" name="question14" value="Follow your instincts.">
                                        <label for="fourteenA"> Follow your instincts.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="fourteenB" name="question14" value="Rely on direction from other people.">
                                        <label for="fourteenB"> Rely on direction from other people.</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="fourteenC" name="question14" value="Go with the easiest option">
                                        <label for="fourteenC"> Go with the easiest option</label><br></li>
                                </div>
                                <div class="answerContainer">
                                    <li> <input type="radio" id="fourteenD" name="question14" value="Think of the best way to make it.">
                                        <label for="fourteenD"> Think of the best way to make it.</label></li>
                                </div>
                            </ul>
                            <br><br>
                            <div class="btnContainer">
                                <button id="prev3" type="button" class="btn btn-lg btn-danger rightBtn "> <i
                    class="fas fa-arrow-left"></i>Previous </button>
                                <button id="submit" type="submit" name="submit1" class="btn btn-lg btn-danger leftBtn"> Submit </button>

                            </div>
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
<script >
var pref1 = "<?= $_SESSION['pref1'] ?> ";
</script>
<!-- jQuery -->
<script type="text/javascript" src="../MDB/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../MDB/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../MDB/js/mdb.min.js"></script>

<script src="../JS/nonTechnical.js"></script>

</html>