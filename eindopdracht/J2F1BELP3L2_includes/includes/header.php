<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<?php
    echo '
        <header>
            <h1>Eindopdracht</h1>
            <nav>
                <a href="index.php">
                    <img src="images/home.jpg">
                    <p>Home</p>
                </a>
                <a href="index.php?subject=onderwerp1.php">
                    <img src="images/voetbal.jpg">
                    <p>Voetbal</p>
                </a>
                <a href="index.php?subject=onderwerp2.php">
                    <img src="images/programmeren.jpg">
                    <p>Programmeren</p>
                </a>
                <a href="index.php?subject=onderwerp3.php">
                    <img src="images/game.jpg">
                    <p>Gamen</p>
                </a>
                <a href="index.php?subject=onderwerp4.php">
                    <img src="images/internet.jpg">
                    <p>Internet</p>
                </a>
            </nav>
        </header>
    ';
?>