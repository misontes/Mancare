<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rețete</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/recipe-style.css">
</head>
<body>
    <div id="header">
        <div id="menu-bar">
            <a href="index.php">Acasă</a>
            <a href="retete.php" style="text-decoration: underline;">Rețete</a>
            <a href="bucatari.php">Bucătari</a>
            <a href="restaurante.php" style>Restaurante</a>
            <a href="galerie.php">Galerie</a>
        </div>
        <div id="titlu">
            <h1>Mâncare pentru toate gusturile! </h1>
        </div>
        <div id="nav-spacer"></div>
    </div>
    
    <div id="content">
        <div id="display-notebook">
            <div style="flex:1"></div>
            <div id="notebook">
                <img src="img/recipe-photo1.jfif" style="height:230px; width:320px; position:absolute; right:50px;top:50px">
                <div class="notebook-spacer" style="padding:0%">
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> <div class="notebook-circle"></div>
                    <div class="notebook-circle"></div> <div class="notebook-circle"></div> 
                </div>
                <div id="notebook-content">
                    <h2><strong> Paste Carbonara </strong></h2>
                    <h3><strong>Timp de preparare:</strong> 20 minute</h3>
                    <h3><strong>Porții:</strong> 4</h3>
                    <h3><strong>Ingrediente:</strong></h3>
                    <ul>
                        <li>400 g paste (de preferință spaghetti)</li>
                        <li>200 g guanciale (slănină de gură de porc) sau bacon, tăiate în cuburi</li>
                        <li>4 ouă mari, la temperatura camerei</li>
                        <li>100 g brânză Pecorino Romano, răzuită fin</li>
                        <li>50 g brânză Parmezană, răzuită fin</li>
                        <li>Sare și piper negru proaspăt măcinat</li>
                        <li>2 litri de apă pentru fierbere</li>
                    </ul>       
                    <h3>Instrucțiuni Detaliate:</h3>
                    <ol>
                        <li><h3>Prepararea amestecului de ouă:</h3>
                        Într-un bol mediu, spargeți ouăle și bateți-le ușor cu o furculiță. Adăugați brânza Pecorino și 
                        jumătate din Parmezană, amestecând bine. Condimentați cu piper negru măcinat proaspăt. 
                        Important: nu adăugați sare deocamdată, deoarece brânzele sunt deja sărate. Lăsați amestecul la o parte 
                        pe blatul de lucru.</li>

                        <li><h3>Fierberea apei:</h3>
                        Într-o oală mare, aduceți apa la fierbere și adăugați o mână generoasă de sare 
                        (apa trebuie să aibă gust de apă de mare). Amestecați bine.</li>

                        <li><h3> Prăjirea guancialului:</h3>
                        Într-o tigaie de dimensiuni medii, adăugați cuburile de guanciale și prăjiți-le la foc 
                        mediu-mic timp de 8-10 minute. Grăsimea din guanciale trebuie să se topească lent și să 
                        se elibereze. Carne trebuie să fie crocantă pe margini, dar nu ars. Scoateți tigaia din 
                        foc și lăsați-o la o parte (nu o spălați!).</li>

                        <li><h3> Fierberea pastelor:</h3>
                        Adăugați pastele în apa fierbinte și amestecați imediat. Urmăriți tiempo de gătire de pe 
                        pachet, dar scoateți pastele cu 1-2 minute înainte de a fi complet gata (trebuie să fie al 
                        dente).</li>

                        <li><h3> Amestecul final:</h3>
                        Aceasta este faza crucială. Adăugați pastele fierbinți din ciur direct în tigaia cu guanciale
                        (tigaia trebuie să fie îndepărtată de foc). Amestecați repede și constant timp de 1-2 minute.
                        Treptat, versați amestecul de ouă peste paste, continuând să amestecați energic și constant.
                        Ouăle vor coagula ușor din cauza căldurii pastelor, creând o cremă bogată.</li>

                        <li><h3> Verificare și gust:</h3>
                        Gustați și ajustați condimentarea cu sare și piper. Rețineți că brânzele și guancialul sunt 
                        deja destul de sărate.</li>

                        <li><h3> Servire:</h3>
                        Serviți imediat, în boluri calde, cu o ușoară presărare de brânză Parmezană și piper negru
                         proaspăt măcinat pe deasupra fiecărei porții.</li>
                     </ol>
                </div>
            </div>
            <section class="suggestions">
                <form action="" method="post">
                    <label for="nume">Nume</label>
                    <input type="text" id="nume" name="nume" placeholder="Ion Popescu" required>

                    <label for="schimbari">Ce ați schimba la rețetă?</label>
                    <textarea id="schimbari" name="schimbari" rows="4"></textarea>

                    <label for="apreciat">Ce v-a plăcut la această rețetă?</label>
                    <textarea id="apreciat" name="apreciat" rows="4"></textarea>

                    <button type="submit">Trimite</button>
                </form>
                <h2>Spune-ne părerea ta</h2>
            </section>
        </div>
    </div>
    <div id="footer">
        <p>&copy; 2026 Mancarea lui Fatu Mihai. Toate drepturile rezervate.</p>
    </div>
</body>
</html>