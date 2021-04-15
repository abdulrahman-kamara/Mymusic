<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/tems.css">
    <title>Tems</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            background: linear-gradient(149deg, rgba(0, 36, 2, 1) 0%, rgba(41, 217, 159, 1) 97%);
            font-family: 'BioRhyme', serif;
        }
    </style>
</head>

<body>
    <!-- header-nav -->
    <!-- avec require on recoupurer le header dans le racine ./commponents -->
    <?php require "./components/header.php"; ?>
    <main>
        <!-- le list de mon tralist de c'est artists avec le card et le audio  -->
        <div class="card" style="width: 18rem; background-color: aliceblue;">
            <img class="card-img-top" style="width:18rem;" src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">FRE MIND</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Free Mind.mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>
        <div class="card" style="width: 18rem; background-color: aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">HIGHER</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Higher.mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>
        <div class="card" style="width: 18rem; background-color: aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">ICE T</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Ice T.mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>
        <div class="card" style="width: 18rem; background-color: aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">INTERFERENCE</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Interference.mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>
        <div class="card1" style="width: 18rem; background-color: aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">THE KEY</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/The Key.mp3 " type="audio/mp3 " />
                </audio>

            </div>
        </div>
        <div class="card1" style="width: 18rem; background-color: aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg " alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">TÉMILÀDÈ INTERLUDE</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Témìládè Interlude.mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>
        <div class="card1" style="width: 18rem; background-color:aliceblue; ">
            <img class="card-img-top " style="width:18rem; " src="../img/tems.jpg" alt="Card image cap ">
            <div class="card-body ">
                <h5 class="card-title ">DAMAGES</h5>
                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <audio style="width: 16rem; color:white; " controls preload="metadata ">
                    <source src="../audio/Damages- Tems (Official Music Video).mp3 " type="audio/mp3 " />
                </audio>
            </div>
        </div>

        <!-- </div> -->

    </main>
    <!-- le footer -->
    <!-- avec require on recoupurer le footer dans le racine ./commponents -->
    <?php require "./components/footer.php" ?>
</body>

</html>