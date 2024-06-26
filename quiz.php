<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submitQuiz'])) {
    $email = "reyesajane26.23@gmail.com";
    $name = ($_POST['name']);
    $score = ($_POST['score']);


    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'SMTP.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'malolos.website@gmail.com';
    $mail->Password = 'bawf vwzu yjeh irki';

    $mail->setFrom('malolos.website@gmail.com', 'MalolosWebsite');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'Malolos Website Quiz';
    $mail->Body = "<h1>Name: $name</12><br>
    <h3>Score: $score</h3>";

    $mail->send();     
} 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Malolos Museum</title>
        <!---CSS LINK--->
        <link rel="stylesheet" href="style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        #question-2, #question-3, #question-4, #question-5, #question-6, #question-7, #question-8, #question-9, #question-10, 
        #question-11, #question-12, #question-13, #question-14, #question-15, #question-17, #question-18, #question-19, #question-20, 
        #question-21, #question-22, #question-23, #question-24, #question-25, #question-26, #question-27, #question-28, #question-29, #question-30, 
        #question-32, #question-33, #question-34, #question-35 {
            display: none;
        }

        #difficulty, #quizContainer, #beginner, #intermediate, #advanced {
            display: none;
        }

        #doneBeginner, #doneIntermediate, #doneAdvanced {
            display: none;
        }
    </style>
    </head>

    <body>   
        <section id="profile">
            <header style="background-color: #362406;">
                <div class="container">
                    <nav class="navbar navbar-expand-lg linear-border">
                        <a href="#" class="navbar-brand fs-3 ms-3 text-white" style="font-family: 'Batangas', sans-serif;">Museum Website</a>
                        <button class="navbar-toggler border-1 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#FFFFFF" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="btn">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link mr-3 text-white text-center" href="home.html">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3 text-white text-center" href="exhibit-gallery.html">EXHIBIT GALLERIES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3 text-white text-center" href="timeline.html">INTERACTIVE TIMELINE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3 text-white text-center" href="education-and-resources.html">EDUCATION & RESOURCES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3 text-white text-center" href="team.html">TEAM MEMBERS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header> 
            <div class="container-fluid d-flex justify-content-center align-items-center flex-column custom-bg" style="height: calc(100vh - 60px);">
                <div class="container d-flex justify-content-center align-items-center">
                   <h1 class="text-white text-center py-5">CHOOSE YOUR CHARACTER</h1>
                </div>            
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="thinking-small char-quiz" onclick="active(this)"></div>
                    <div class="waving-small char-quiz" onclick="active(this)"></div>
                    <div class="pointing-small char-quiz" onclick="active(this)"></div>
                    <div class="blinking-small char-quiz" onclick="active(this)"></div> 
                                  
                </div> 
                <div class="container py-2">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-md-4 text-center">
                        <form action="" id="nicknameForm">
                            <input type="text" class="form-control" id="nicknameInput" required>
                            <h3 class="text-white py-1">ENTER YOUR NICKNAME</h3>
                            <button type="submit" class="fs-6 hover-fx btn-name">Enter</button>
                        </form>
                      </div>
                    </div>
                </div>              
            </div>
        </section>

        <section id="difficulty">
            <div class="container-fluid custom-bg">
                <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-white display-1 py-2">Hi, <span style="font-family: 'Batangas',sans-serif; font-weight: bold; color: #CC9900;" id="playerName"></span>!</h1>
                    <p class="text-white text-center fs-4" style="max-width: 800px;">
                        Welcome to 'MAnaLO_LOSe Quiz Challenge!’ This is your chance to journey through time
                        and explore the rich history of the First Philippine Republic.
                        No matter your current knowledge level,
                        this quiz is designed to both challenge and educate you.
                        Remember, every question is a step in your journey.<br><br> 

                        So, are you ready to dive into Philippine history?<br>
                        You only have 10 seconds for each question to answer while taking the quiz... Take the challenge!               
                    </p>
                    <img class="img-fluid hover-fx py-3" src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/quiz/start-quiz.png?raw=true" alt="" style="max-width: 300px; height: auto;" onclick="difficult('difficulty', 'beginner')">
                    <p class="text-white fs-3 pb-1" style="font-weight: bold;">BEGINNER LEVEL</p>
                </div>
            </div>
        </section>

        <div id="quizContainer" class="container-fluid p-0 custom-bg">
            <div class="container-fluid d-flex flex-column justify-content-center align-items-center px-3 vh-100" style="background: rgba(97, 62, 10, 0.5); position: relative;">
                <div class="container d-flex justify-content-between" style="position: absolute; top: 0; left: 50%; transform:  translateX(-50%); width: 100%;">
                    <p class="py-3 text-white fs-3" id="timer">00:00</p>
                    <p class="py-3 fs-3 hover-fx" style="color: #FFFFFF; text-decoration: none; font-family: 'Roboto', sans-serif; font-weight: bold;"  data-bs-toggle="modal" data-bs-target="#modalQuit">EXIT</p>                   
                </div>
                <section id="beginner">
                    <div id="question-1">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">When was the First Philippine Republic established?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1892</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1896</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1898</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1901</button>
                        </div>
                    </div>

                    <div id="question-2">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the first president of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Aguinaldo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Andres Bonifacio</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Jose Rizal</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Antonio Luna</button>
                        </div>
                    </div>

                    <div id="question-3">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Where was the declaration of Philippine independence from Spanish rule proclaimed?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Kawit, Cavite</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Malolos, Bulacan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Manila</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Cebu City</button>
                        </div>
                    </div>

                    <div id="question-4">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">The First Philippine Republic was established after which event?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Paris</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Battle of Manila Bay</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Cry of Pugad Lawin</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Philippine-American War</button>
                        </div>
                    </div>

                    <div id="question-5">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the official language of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">English</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Spanish</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Tagalog</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Visayan</button>
                        </div>
                    </div>

                    <div id="question-6">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the name of the constitution of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Malolos Constitution</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Manila Constitution</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Aguinaldo Constitution</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Katipunan Constitution</button>
                        </div>
                    </div>

                    <div id="question-7">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who led the Malolos Congress, which drafted the constitution of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Aguinaldo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Apolinario Mabini</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Andres Bonifacio</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Antonio Luna</button>
                        </div>
                    </div>

                    <div id="question-8">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">The Malolos Constitution was inspired by the constitution of which country?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">United States</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">France</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Spain</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">United Kingdom</button>
                        </div>
                    </div>

                    <div id="question-9">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What year did the Philippine-American War break out, leading to the eventual downfall of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1896</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1898</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1899</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">1900</button>
                        </div>
                    </div>
                    
                    <div id="question-10">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which country colonized the Philippines after the defeat of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">United States</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Spain</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Japan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">United Kingdom</button>
                        </div>
                    </div>

                    <div id="question-11">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the leader of the Filipino forces during the Philippine-American War?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Aguinaldo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Antonio Luna</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Andres Bonifacio</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Jose Rizal</button>
                        </div>
                    </div>

                    <div id="question-12">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which treaty marked the end of the Spanish-American War and led to the cession of the Philippines to the United States?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Paris</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Versailles</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Tordesillas</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Brest-Litovsk</button>
                        </div>
                    </div>

                    <div id="question-13">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the nickname given to the soldiers of the Philippine Republic during the Philippine-American War?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Katipuneros</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Guerrillas</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Insurrectos</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Freedom Fighters</button>
                        </div>
                    </div>

                    <div id="question-14">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Where did the Battle of Tirad Pass, a significant engagement during the Philippine-American War, take place?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Luzon</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Visayas</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Mindanao</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Palawan</button>
                        </div>
                    </div>

                    <div id="question-15">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who became the President of the Philippines after Emilio Aguinaldo surrendered to the United States?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Manuel L. Quezon</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Sergio Osmeña</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">William McKinley</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Theodore Roosevelt</button>
                        </div>
                    </div>

                    <div id="doneBeginner">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center display-1" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">DONE!</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="difficult('beginner', 'intermediate')">NEXT LEVEL</button>
                            <h3 class="text-white text-center py-5" style="font-family: 'Roboto',sans-serif; font-weight: bold;"> INTERMEDIATE LEVEL</h3>
                        </div>
                    </div>
                </section>

                <section id="intermediate">
                    <div id="question-16">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the venue of the Malolos Congress?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Manila</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Malolos, Bulacan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Cebu City</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Iloilo City</button>
                        </div>
                    </div>

                    <div id="question-17">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which document served as the basis for the drafting of the Malolos Constitution?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Declaration of Independence</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Treaty of Paris</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Biak-na-Bato Constitution</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Pack of Biak-na-Bato</button>
                        </div>
                    </div>

                    <div id="question-18">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the first Prime Minister of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Apolinario Mabini</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Pedro Paterno</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Antonio Luna</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Aguinaldo</button>
                        </div>
                    </div>

                    <div id="question-19">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the primary mode of transportation during the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Cars</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Trains</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Horses and Carriages</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Bicycles</button>
                        </div>
                    </div>

                    <div id="question-20">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which industry played a significant role in the economy of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Agriculture</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Manufacturing</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Mining</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Technology</button>
                        </div>
                    </div>

                    <div id="question-21">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What traditional Filipino attire was commonly worn during the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Barong Tagalog</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Kimona</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Terno</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Balintawak</button>
                        </div>
                    </div>

                    <div id="question-22">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which battle marked the first major victory of Filipino forces against the Spaniards during the Philippine Revolution?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Battle of Manila Bay</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Battle of Tirad Pass</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Battle of Imus</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Battle of Alapan</button>
                        </div>
                    </div>

                    <div id="question-23">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the significance of the Pact of Biak-na-Bato?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">It marked the end of the Philippine Revolution against Spain</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">It established the Malolos Congress</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">It initiated the Philippine-American War</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">It declared the independence of the Philippines from the United States</button>
                        </div>
                    </div>

                    <div id="question-24">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the American general who led the capture of Emilio Aguinaldo, effectively ending the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Douglas MacArthur</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">John Pershing</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Arthur MacArthur</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Frederick Funston</button>
                        </div>
                    </div>
                    
                    <div id="question-25">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which event led to the establishment of the Republic of Biak-na-Bato, a precursor to the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Execution of Jose Rizal</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Cry of Balintawak</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Spanish defeat at the Battle of Manila Bay</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Truce between Filipino Revolutionaries and Spanish Authorities</button>
                        </div>
                    </div>

                    <div id="question-26">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who authored the "Decalogue," a set of ten commandments outlining the duties and responsibilities of Filipino citizens during the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Andres Bonifacio</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Aguinaldo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Apolinario Mabini</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Marcelo H. del Pilar</button>
                        </div>
                    </div>

                    <div id="question-27">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which country was the first to recognize the independence of the First Philippine Republic?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">United States</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Spain</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Japan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Germany</button>
                        </div>
                    </div>

                    <div id="question-28">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the name of the revolutionary organization founded by Andres Bonifacio, which played a crucial role in the Philippine Revolution against Spain?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Katipunan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Liga Filipina</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">KKK</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Magdalo</button>
                        </div>
                    </div>

                    <div id="question-29">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the Filipino general known for his leadership in the Battle of Tirad Pass, where he made a valiant stand against American forces?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Gregorio del Pilar</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Antonio Luna</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Emilio Jacinto</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Mariano Alvarez</button>
                        </div>
                    </div>

                    <div id="question-30">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which event led to the capture and exile of Emilio Aguinaldo, effectively ending the armed resistance against American rule in the Philippines?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Capture of Malolos</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Capture of Manila</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Capture of Palanan</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Capture of Cebu</button>
                        </div>
                    </div>

                    <div id="doneIntermediate">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center display-1" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">DONE!</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="difficult('intermediate', 'advanced')">NEXT LEVEL</button>
                            <h3 class="text-white text-center py-5" style="font-family: 'Roboto',sans-serif; font-weight: bold;">ADVANCED LEVEL</h3>
                        </div>
                    </div>
                </section>

                <section id="advanced">
                    <div id="question-31">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Which renowned Filipino artist is known for his vivid and nostalgic portrayals of rural Filipino life, often featuring landscapes, barrios, and scenes of everyday life during the early 20th century?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Juan Luna</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Fernando Amorsolo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Felix Resurrection Hidalgo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Damian Domingo</button>
                        </div>
                    </div>

                    <div id="question-32">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the title of Fernando Amorsolo's painting that portrayed a group of women dressed in traditional Filipiniana attire, symbolizing grace, elegance, and the beauty of Filipino culture during the early 20th century?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"The Harvesters"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Portrait of Purita"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Dalagang Bukid"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Mga Bata sa Gubat"</button>
                        </div>
                    </div>

                    <div id="question-33">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">Who was the Filipino painter known for his "Ladies of Malolos" series, which depicted the bravery and intellect of the women of Malolos who petitioned for the establishment of a night school for women?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Damian Domingo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Fernando Amorsolo</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">Juan Luna</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)"> Carlos "Botong" Francisco</button>
                        </div>
                    </div>

                    <div id="question-34">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the title of Fernando Amorsolo's painting that showcased a Filipino farmer standing proudly beside his carabao, symbolizing the importance of agriculture in Filipino society?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"The Rice Planters"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Planting Rice"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Afternoon Meal"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"The Farmers Pride"</button>
                        </div>
                    </div>

                    <div id="question-35">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">What was the title of Fernando Amorsolo's painting that portrayed a rural Filipino woman carrying a bundle of rice stalks on her head, symbolizing the resilience and strength of Filipino women?</h1>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"The Harvesters"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Under the Mango Tree"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"Dalagang Bukid"</button>
                            <button class="fs-4 hover-fx quiz-btn my-2" onclick="checkAnswer(this)">"The Rice Planters"</button>
                        </div>
                    </div>

                    <div id="doneAdvanced">
                        <div class="container d-flex flex-column justify-content-center align-items-center">
                            <h1 class="pb-3 text-center display-1" style="color: #FFFFFF; font-family: 'Roboto', sans-serif; font-weight: bold;">DONE!</h1>                           
                                <button class="fs-4 hover-fx quiz-btn my-2" data-bs-toggle="modal" data-bs-target="#modalDoneQuiz">FINISH THE QUIZ</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="modal fade" id="modalQuit" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true" data-backdrop="true" data-keyboard="true">
            <div class="modal-dialog modal-dialog-centered d-flex flex-column justify-content-center align-items-center" role="document">
                <div class="modal-content text-center align-items-center p-3 custom-bg" style="border: none; border-radius: 20px; box-shadow: 0 0 20px 10px rgba(204, 153, 0, 0.5); position: relative; overflow: hidden;">
                    <h1 class="text-white">Do you want to quit in Quiz?</h1>
                    <div class="w-100 d-flex justify-content-around pt-5" style="border: none;">
                        <button class="hover-fx btn-name" onclick="yes()">Yes</button>
                        <button class="hover-fx btn-name" data-bs-dismiss="modal" style="background: #000000 !important;">No</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalQuiz" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="true">
            <div class="modal-dialog modal-dialog-centered d-flex flex-column justify-content-center align-items-center" role="document">
                <div class="modal-content text-center align-items-center p-3 custom-bg" style="border: none; border-radius: 20px; box-shadow: 0 0 20px 10px rgba(204, 153, 0, 0.5); position: relative; overflow: hidden;">
                    <h1 id="status" class="display-1 pt-3"></h1>
                    <h1 id="Answer" class="display-5 text-white py-3"></h1>
                    <button class="hover-fx btn-name" data-bs-dismiss="modal" onclick="nextQuestion()">Next</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalDoneQuiz" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true" data-backdrop="true" data-keyboard="true">
            <div class="modal-dialog modal-dialog-centered d-flex flex-column justify-content-center align-items-center" role="document">
                <div class="modal-content text-center align-items-center p-3 custom-bg" style="border: none; border-radius: 20px; box-shadow: 0 0 20px 10px rgba(204, 153, 0, 0.5); position: relative; overflow: hidden;">
                    <h2 class="text-white pt-3">Congratulations!</h2>
                    <div class="character"></div>
                    <h4 class="text-white" id="playerNickName"></h4>
                    <p class="text-white fs-4 py-1">YOUR SCORE IS: <span id="quizScore" style="font-weight: bold;"></span>/35</p>
                    <p id="textMoral" class="text-white fs-5 py-3" style="font-family: 'Roboto',sans-serif;"></p>                   
                    <form action="" method="post">  
                        <input type="hidden" id="playerNameInput" name="name">
                        <input type="hidden" id="playerScoreInput" name="score">
                        <button style="background: transparent; border: none" type="submit" name="submitQuiz"><img class="img-fluid hover-fx" src="https://github.com/Nthnnn26/MalolosMuseum.io/blob/main/assets/quiz-again.png?raw=true" alt="" style="max-width: 250px; height: auto;"> </button>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="script/main.js"></script>
        <script>
            function active(clickedElement) {
                const allCharQuizElements = document.querySelectorAll('.char-quiz');
                const characterContainer = document.querySelector('.character');

                // Remove 'active' class from all elements
                allCharQuizElements.forEach(function(element) {
                    element.classList.remove('active');
                });

                // Add 'active' class to the clicked element
                clickedElement.classList.add('active');
                characterContainer.innerHTML = ''; // Clear previous content
                const selectedCharacter = clickedElement.cloneNode(true);
                characterContainer.appendChild(selectedCharacter);
            }

            document.getElementById('nicknameForm').addEventListener('submit', function(event) {
                event.preventDefault(); 
                var nickname = document.getElementById('nicknameInput').value;
                document.getElementById('playerName').textContent = nickname;
                document.getElementById('playerNickName').textContent = nickname;
                document.getElementById('profile').style.display = 'none';
                document.getElementById('difficulty').style.display = 'block';
            });

            function difficult(level, diffId) {
                document.getElementById(level).style.display = 'none';
                document.getElementById('quizContainer').style.display = 'block';
                document.getElementById(diffId).style.display = 'block';    
                resetTimer();
            }

            var question = 1;
            var score = 0;
            let timerStarted = false;

            function showQuestion(question) {
                var currentQuestion = document.getElementById('question-' + (question - 1));
                var nextQuestion = document.getElementById('question-' + question);

                if (currentQuestion) {
                    currentQuestion.style.display = 'none';
                }

                if (nextQuestion) {
                    updateTimer();
                    if(question === 16) {
                        document.getElementById('doneBeginner').style.display = 'block';
                        stopTimer();
                    } else if (question === 31) {
                        document.getElementById('doneIntermediate').style.display = 'block';    
                        stopTimer();               
                    } else {
                        nextQuestion.style.display = 'block';
                    }
                    
                } else {
                    document.getElementById('quizScore').textContent = score;
                    var textMoralElement = document.getElementById('textMoral');
                    if (score >= 0 && score <= 7) {
                        textMoralElement.textContent = "You're just beginning your journey through the rich history of the First Philippine Republic. Don't be discouraged, there's so much more to learn and explore. Keep going!";
                    } else if (score >= 8 && score <= 14) {
                        textMoralElement.textContent = "You've taken your first steps into understanding the First Philippine Republic. There's more to uncover, so keep up the momentum!";
                    } else if (score >= 15 && score <= 21) {
                        textMoralElement.textContent = "Good job! You're making progress on your journey through the history of the First Philippine Republic. Keep learning and improving!";
                    } else if (score >= 22 && score <= 28) {
                        textMoralElement.textContent = "Impressive! Your knowledge about the First Philippine Republic is expanding. Continue on this path and you'll be an expert in no time!";
                    } else if (score >= 29 && score <= 35) {
                        textMoralElement.textContent = "BRILLIANT! Your understanding of the First Philippine Republic is commendable. Your journey through the history of MALOLOS REPUBLIC has been fruitful. Keep up the excellent work!";
                    }
                    var playerName = document.getElementById('playerNickName').textContent;
                    var playerScore = document.getElementById('quizScore').textContent;

                    // Set the values to hidden input fields
                    document.getElementById('playerNameInput').value = playerName;
                    document.getElementById('playerScoreInput').value = playerScore;
                    console.log(playerName);
                    console.log(playerScore);
                    document.getElementById('doneAdvanced').style.display = 'block';
                }
            }

            function nextQuestion() {
                question++;
                currentQuestionIndex = question - 1;
                showQuestion(question);
            }

            const answerKey = [
            "1898",
            "Emilio Aguinaldo",
            "Kawit, Cavite",
            "Battle of Manila Bay",
            "Spanish",
            "Malolos Constitution",
            "Apolinario Mabini",
            "France",
            "1899",
            "United States",
            "Emilio Aguinaldo",
            "Treaty of Paris",
            "Insurrectos",
            "Luzon",
            "Manuel L. Quezon",
            "Malolos, Bulacan",
            "Biak-na-Bato Constitution",
            "Pedro Paterno",
            "Horses and Carriages",
            "Agriculture",
            "Barong Tagalog",
            "Battle of Imus",
            "It marked the end of the Philippine Revolution against Spain",
            "Frederick Funston",
            "Truce between Filipino Revolutionaries and Spanish Authorities",
            "Apolinario Mabini",
            "Germany",
            "Katipunan",
            "Gregorio del Pilar",
            "Capture of Palanan",
            "Fernando Amorsolo", 
            "Portrait of Purita",
            "Carlos Botong Francisco",
            "The Farmers Pride",
            "Dalagang Bukid"
            ];

            function checkAnswer(clickedButton) {
                const questionIndex = parseInt(clickedButton.parentElement.parentElement.id.split("-")[1]) - 1;
                const selectedAnswer = clickedButton.textContent.trim().replace(/"/g, '');
                const statusElement = document.getElementById('status');
                const answerElement = document.getElementById('Answer');

                const correctAnswer = answerKey[questionIndex];

                if (selectedAnswer === correctAnswer) {
                    statusElement.textContent = 'Correct';
                    statusElement.style.color = '#00CC14';
                    answerElement.textContent = correctAnswer;
                    score++;
                } else {
                    statusElement.textContent = 'Wrong';
                    statusElement.style.color = '#D20101';
                    answerElement.textContent = correctAnswer;
                }
                $('#modalQuiz').modal('show');
                stopTimer();
            }

            function formatTime(seconds) {
                const mins = Math.floor(seconds / 60);
                const secs = seconds % 60;
                return `${mins < 10 ? '0' : ''}${mins}:${secs < 10 ? '0' : ''}${secs}`;
            }

            let currentQuestionIndex = 0;
            let timerInterval;
            // Function to update timer
            function updateTimer() {
                const timerElement = document.getElementById('timer');
                let seconds = 0;

                // Start timer
                timerInterval = setInterval(() => {
                    timerElement.textContent = formatTime(seconds);
                    seconds++;

                    // Check if 5 seconds have elapsed
                    if (seconds === 11) {
                        const selectedAnswer = document.querySelector('.quiz-btn.active');
                        if (!selectedAnswer) {
                            // No answer selected, display correct answer modal
                            displayCorrectAnswer();
                        }
                    }
                }, 1000);
            }

            function stopTimer() {
                clearInterval(timerInterval);
            }

            function displayCorrectAnswer() {
                const correctAnswer = answerKey[currentQuestionIndex];
                const statusElement = document.getElementById('status');
                const answerElement = document.getElementById('Answer');

                statusElement.textContent = 'Time Up';
                statusElement.style.color = '#D20101';
                answerElement.textContent = correctAnswer;
                $('#modalQuiz').modal('show');
                
                stopTimer();
            }
            function resetTimer() {
                updateTimer();
            }

            function yes() {
                window.location.href = 'education-and-resources.html';
            }

            function restart() {
                location.reload(); 
            }

        </script>
    </body>
</html>