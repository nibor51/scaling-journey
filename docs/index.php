
<?php
$survey = [
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
    [
        "question" => "La Population de la Ville ?",
        "answerOne" => "",
        "answerTwo" => "",
        "answerThree" => "",
        "answerFour" => "",
        "img" => ["scr"=> "", "alt" => "",],
        "trueAnswer" => "",
        "toKnow" => "",
    ],
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/favicon/" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Reims Quiz</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-light bg-white sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c4d9.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                Reims Quiz
            </a>
            <a href="#" class="btn" type="submit">Retour</a>
            <a href="#" class="btn" type="submit">Crédits</a>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- main accueil -->
    <div class="card card-index">
        <div class="card-body card-index">
            <h2 class="card-title">Reims Quiz</h2>
            <p class="card-text">Le temps estimé est de 5 minutes, bonne chance !</p>
            <a href="#q-one" class="btn btn-primary button-width">Play</a>
        </div>
    </div>
    <!-- END MAIN -->

    <!-- survey -->
    <main class="survey">

        <!-- Question one -->
        <div>
            <section id="q-one"
                class="no-scroll question one d-flex justify-content-center align-items-center flex-column text-center">

                <h1 class="question-title p-6 ">1 La Population de la Ville ? </h1>
                <div class="debug btn-group-vertical">
                    <div>

                        <input class="btn-check" type="radio" name="question1" value="0" id="Q1-a">
                        <label class="btn btn-secondary" for="Q1-a">125 000</label>

                        <input class="btn-check" type="radio" name="question1" value="0" id="Q1-b">
                        <label class="btn btn-secondary" for="Q1-b">150 000</label>

                    </div>

                    <div>
                        <input class="btn-check" type="radio" name="question1" value="0" id="Q1-c">
                        <label class="btn btn-secondary" for="Q1-c">175 000</label>

                        <input class="btn-check" type="radio" name="question1" value="correct" id="Q1-d">
                        <label class="btn btn-secondary" for="Q1-d">185 000</label>
                    </div>
                    <a href="#a-one" class="btn btn-primary button-width mt-3">Réponse</a>

                </div>
            </section>


            <section id="a-one"
                class="no-scroll answer one d-flex justify-content-center align-items-center flex-column text-center">
                <h1>Réponse 185 000 !</h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Des années 50 à 70 la ville de Reims passa de 130 000 à 180 000 habitants. <br>Depuis 50 ans
                        la population reste pratiquement la même.
                        Reims est actuellement la 12 ème ville de France.</p>
                </article>
                <a href="#q-two" class="btn btn-primary button-width mt-3">Suivant</a>
            </section>
        </div>

        <!-- Question two -->
        <div>
            <section id="q-two"
                class="no-scroll question two d-flex flex-column justify-content-center align-items-center text-center p-1">


                <h1 class="question-title">2- Quel était le nom de la ville de Reims à l'époque Galo Romaine ? </h1>
                <div class="debug btn-group-vertical">
                    <div>
                        <input class="btn-check" type="radio" name="question2" value="0" id="Q2-a">
                        <label class="btn btn-secondary" for="Q2-a">Rodium</label>
                        <input class="btn-check" type="radio" name="question2" value="correct" id="Q2-b">
                        <label class="btn btn-secondary" for="Q2-b">Durocorturum</label>
                    </div>

                    <div>
                        <input class="btn-check" type="radio" name="question2" value="0" id="Q2-c">
                        <label class="btn btn-secondary" for="Q2-c">Camaracum</label>
                        <input class="btn-check" type="radio" name="question2" value="0" id="Q2-d">
                        <label class="btn btn-secondary" for="Q2-d">Reimzorum</label>
                    </div>
                    <a href="#a-two" class="btn btn-primary button-width mt-3">Réponse</a>
                </div>


            </section>

            <section id="a-two"
                class="no-scroll answer two d-flex justify-content-center align-items-center flex-column text-center">
                <h1>Durocorturum</h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Des années 50 à 70 la ville de Reims passa de 130 000 à 180 000 habitants. <br>Depuis 50 ans
                        la population reste pratiquement la même.
                        Reims est actuellement la 12 ème ville de France.</p>
                </article>
                <a href="#q-three" class="btn btn-primary button-width mt-3">Suivant</a>
            </section>

        </div>

        <!-- Question three -->
        <div>
            <section id="q-three"
                class="no-scroll question three d-flex justify-content-center align-items-center flex-column text-center">

                <h1 class="question-title p-3">3- Comment se nomme cette porte ? </h1>
                <img class="shadow p-lg-3"
                    src="https://cdt51.media.tourinsoft.eu/upload/Place-d-Erlon-Reims-----Pauline-Colin.jpg"
                    width="250px" height="250px">

                <div class="debug btn-group-vertical">
                    <div>
                        <input class="btn-check" type="radio" name="question3" value="0" id="Q3-a">
                        <label class="btn btn-secondary" for="Q3-a">Porte de Paris</label>

                        <input class="btn-check" type="radio" name="question3" value="0" id="Q3-b">
                        <label class="btn btn-secondary" for="Q3-b">Porte de Liberté</label>
                    </div>

                    <div>
                        <input class="btn-check" type="radio" name="question3" value="correct" id="Q3-c">
                        <label class="btn btn-secondary" for="Q3-c">Porte de Mars</label>

                        <input class="btn-check" type="radio" name="question3" value="0" id="Q3-d">
                        <label class="btn btn-secondary" for="Q3-d">Porte de Vénus</label>
                    </div>
                    <a href="#a-three" class="btn btn-primary button-width mt-3">Réponse</a>
                </div>
            </section>

            <section id="a-three"
                class="no-scroll answer three d-flex justify-content-center align-items-center flex-column text-center">
                <h1>La Porte de Mars</h1>

                <article>
                    <h2>A savoir ;)</h2>
                    <p>La Porte de Mars est la seule des quatre portes permettant l'accès à la ville antique encore
                        visible aujourd'hui. <br>
                        Elle a été construite au 3ème siècle.</p>
                </article>
                <a href="#result" class="btn btn-primary button-width mt-3">Suivant</a>
            </section>
        </div>
        <!-- 
       


        <div>
            <section>
                <h1>4- Quand la première pierre de la cathédrale de Reims fut poser?</h1>

                <label for="Q4-a">- 946</label><input type="radio" name="questionFour" value="0" id="Q4-a">
                <label for="Q4-b">- 1005</label><input type="radio" name="questionFour" value="0" id="Q4-b">
                <label for="Q4-c">- 1212</label><input type="radio" name="questionFour" value="1" id="Q4-c">
                <label for="Q4-d">- 1384</label><input type="radio" name="questionFour" value="0" id="Q4-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Notre-Dame de Reims est l’une des réalisations majeures de l’art gothique en Europe.
                        Inscrite sur la Liste du patrimoine mondial de l’UNESCO, cette cathédrale du XIIIe siècle
                        présente des traits qui la rende unique, notamment par son unité de style, sa luminosité et
                        sa statuaire.<br>
                        Fortement endommagée pendant la première guerre mondiale, elle comporte une prouesse
                        architecturale du XXe siècle : <br>
                        une charpente en béton armé élaborée par l'achitectre Henri Deneux, ainsi qu'un riche
                        ensemble de vitraux contemporains dont certains contemporains dessinés par Marc Chagall
                        (1974) et Imi Knoebel (2011 et 2015).</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        


        <div>
            <section>
                <h1>5- Combien de roi de France ont été sacré à la catédrale de Reims ? </h1>

                <label for="Q5-a">- 4</label><input type="radio" name="questionFive" value="0" id="Q5-a">
                <label for="Q5-b">- 8</label><input type="radio" name="questionFive" value="0" id="Q5-b">
                <label for="Q5-c">- 23</label><input type="radio" name="questionFive" value="0" id="Q5-c">
                <label for="Q5-d">- 31</label><input type="radio" name="questionFive" value="1" id="Q5-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>A partir du XIe siècle, presque tous les rois de France se sont fait sacrer à Reims, jusqu’à
                        Charles X en 1825.</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        


        <div>
            <section>
                <h1>6- Comment se nomme cette place ? </h1>

                <label for="Q6-a">- Place Ducale</label><input type="radio" name="questionSix" value="0" id="Q6-a">
                <label for="Q6-b">- Place Drouet d'Erlon</label><input type="radio" name="questionSix" value="1"
                    id="Q6-b">
                <label for="Q6-c">- Place Royal</label><input type="radio" name="questionSix" value="0" id="Q6-c">
                <label for="Q6-d">- Place du Forum</label><input type="radio" name="questionSi x" value="0" id="Q6-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Aux beaux jours, la Place Drouet-d'Erlon au centre de Reims, est le plus souvent noire de
                        monde, à l'heure du déjeuner, notamment.<br>
                        Avec ses 20.000 m2, les terrasses, au fil du temps s'y sont multipliées.<br> Elles y
                        occupent aujourd'hui 3.710 m2, ce qui en fait en quelque sorte, la plus grande terrasse de
                        France.</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        
        

        <div>
            <section>
                <h1>7- Où a été signé les actes de capitulation du Troisième Reich à Reims ?</h1>

                <label for="Q7-a">- Sur le canal de la Marne </label><input type="radio" name="questionSeven" value="0"
                    id="Q7-a">
                <label for="Q7-b">- Aux portes de la catédrale de Reims</label><input type="radio" name="questionSeven"
                    value="0" id="Q7-b">
                <label for="Q7-c">- Dans la mairie de Reims</label><input type="radio" name="questionSeven" value="0"
                    id="Q7-c">
                <label for="Q7-d">- Dans une salle du collège technique de Reims</label><input type="radio"
                    name="questionSeven" value="1" id="Q7-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Vous pouvez vous rendre au musée de la Reddition situé dans une partie des locaux du lycée
                        Franklin-Roosevelt à Reims où eut lieu la signature.
                    </p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        
        

        <div>
            <section>
                <h1>8- Comment se nomme cette satue ?</h1>

                <label for="Q8-a">- L'ange au sourire</label><input type="radio" name="questionEight" value="1"
                    id="Q8-a">
                <label for="Q8-b">- L'ange gardien</label><input type="radio" name="questionEight" value="0" id="Q8-b">
                <label for="Q8-c">- L'ange souriant</label><input type="radio" name="questionEight" value="0" id="Q8-c">
                <label for="Q8-d">- L'ange de la catédrale</label><input type="radio" name="questionEight" value="0"
                    id="Q8-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Le sourire énigmatique de cet ange devient pendant la première guerre mondiale le symbole de
                        la cathédrale martyre, puis rapidement la symbole de la ville de Reims. <br>
                        Il porte depuis le nom d’Ange au sourire.</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        
        

        <div>
            <section>
                <h1>9- Comment appelle-t-on les habitants de Reims ? </h1>

                <label for="Q9-a">-Les reimsois</label><input type="radio" name="questionNine" value="0" id="Q9-a">
                <label for="Q9-b">- Les rémois</label><input type="radio" name="questionNine" value="1" id="Q9-b">
                <label for="Q9-c">- Les rétiriens</label><input type="radio" name="questionNine" value="0" id="Q9-c">
                <label for="Q9-d">- Les rémolois</label><input type="radio" name="questionNine" value="0" id="Q9-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Je sais pas quoi mettre désolé les bgs</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div>

        
        

        <div>
            <section>
                <h1>10- Quelle est la première maison de Champagne de Reims ?</h1>

                <label for="Q10-a">- Champagne Mum</label><input type="radio" name="questionTen" value="0" id="Q10-a">
                <label for="Q10-b">- Champagne Charles de Cazanove</label><input type="radio" name="questionTen"
                    value="0" id="Q10-b">
                <label for="Q10-c">- Champagne Moet et Chandon</label><input type="radio" name="questionTen" value="0"
                    id="Q10-c">
                <label for="Q10-d">- Champagne Ruinart</label><input type="radio" name="questionTen" value="1"
                    id="Q10-d">
            </section>
            <section>
                <h1></h1>
                <article>
                    <h2>A savoir ;)</h2>
                    <p>Des kilomètres de galeries souterraines...Des millions de bouteilles de champagne
                        précieusement conservées à l’abri de la lumière et de la chaleur...<br>
                        À Reims, les visites de caves des plus grandes maisons de champagne font partie des
                        incontournables. Et ça pétille d’histoires et de savoir-faire.</p>
                    <img src="" alt="" srcset="">
                </article>
            </section>
        </div> 
    -->
        <!-- END SURVEY -->


        <!-- START resultat -->
        <section id="result" class="result d-flex justify-content-center align-items-center flex-column">
            <h1>Résultat</h1>
            <p>Bravo tu as obtenu</p>
            <p id="resultat"></p>
            <p>bonnes réponses !</p>
            <button href="result" onclick="getResults()">
            </button>
        </section>
    </main>
    <!-- END resultat -->
    <!-- START CAROUSEL-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <!-- card origin-->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/Grobin-min.JPG" class="card-img-top" alt="Robin Jonval">
                    <div class="card-body">
                        <h5 class="card-title">Robin Jonval</h5>
                        <p class="card-text">Mail pro : jonval.robin@gmail.com <br>
                            Tél Pro : 07.49.38.42.38</p>
                    </div>
                </div>

            </div>

            <div class="carousel-item">
                <!-- card class de l'image du carousel -->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/Neo-min.JPG" class="card-img-top" alt="Marvin Crepin">
                    <div class="card-body">
                        <h5 class="card-title">Marvin Crepin</h5>
                        <p class="card-text">Mail pro : marvincrepin@gmail.com <br>
                            Tél Pro : 06.17.87.71.13</p>
                    </div>
                </div>

            </div>

            <div class="carousel-item">
                <!-- card class de l'image du carousel -->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/Mauricia-min.JPG" class="card-img-top" alt="Rimie Mauricia Nkou">
                    <div class="card-body">
                        <h5 class="card-title">Rimie Mauricia Nkou</h5>
                        <p class="card-text">Mail pro : rimie.nkou.20@neoma-bs.com <br>
                            Tél Pro : 06.67.52.74.31</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <!-- card class de l'image du carousel -->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/Luis-min.JPG" class="card-img-top" alt="Luis Sousa">
                    <div class="card-body">
                        <h5 class="card-title">Luis Sousa</h5>
                        <p class="card-text">Mail pro : luis.sousa89360@gmail.com <br>
                            Tél Pro : 07.83.18.35.57</p>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <!-- card class de l'image du carousel -->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/Corentin-min.JPG" class="card-img-top" alt="Corentin Chalons">
                    <div class="card-body">
                        <h5 class="card-title">Corentin Chalons</h5>
                        <p class="card-text">Mail Pro : chalons.corentin@gmail.com <br>
                            Tél Pro : 06.21.10.25.97</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">

                <!-- card avec class origin + img carousel -->
                <div class="d-block w-100">
                    <img src="assets/img/carousel/clement-1000_1500.png" class="card-img-top" alt="Clément Moreaux">
                    <div class="card-body">
                        <h5 class="card-title">Clément Moreaux</h5>
                        <p class="card-text">Mail pro : clement.moreaux.20@noema-bs.com <br>
                            Tél Pro : 07.83.35.56.68</p>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END CAROUSEL-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>