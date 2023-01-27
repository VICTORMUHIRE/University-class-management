<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Attribuer</title>
</head>
<body>
    <div class="main">
        <div class="menu">
            <div class="logo"></div>

            <div class="menus" id="first"><img src="./static/home.svg" alt=""></i> <a href="accueil.php">Accueil</a>  </div>
            <div class="menus"><img src="./static/La Gestion Icône.svg" alt=""> <a href="gestion.php">Gestion</a> </i></div>
            <div class="menus"><img src="./static/demande.svg" alt=""> <a href="demande.php">Demandes</a> </div>
            <div class="menus"><img src="./static/attribuer.svg" alt=""></i> <a href="attribuer.php">attribuer</a></div>
            <div class="menus"><img src="./static/about.svg" alt=""> <a href="about.php">about</a></div>

        </div>
        <div class="contenu-accueil" style="gap: 2%;">
            <div class="header">
                <div class="headeConteneur">
                    <div class="aboutAvator">
                        <div class="avatar"><img src="./static/Avatar.svg" alt=""></div>
                        <div class="admin">
                            <p>Victor</p>
                            <p>Administrateur</p>
                        </div>
                    </div>
                <div class="ucmPhtoto"><img src="./static/UCM.png" alt=""></div>
                </div>
            </div>
            <div class="gestion">
                <p>Attributionde salle des salles</p>
            </div>
            <div class="contenerAt">
                <div class="RechercheA">
                    <input type="text">
                    <button>Recherche</button>
                </div>
                <div class="contenuA">
                    <table>
                        <tr>
                            <th>nom de la salle</th>
                            <th>capacité de la salle</th>
                            <th>action</th>
                        </tr>
                        <tr>
                            <td>salle G1</td>
                            <td>30</td>
                            <td><button>choisir</button></td>
                        </tr>
                        <tr>
                            <td>salle G2</td>
                            <td>20</td>
                            <td><button>choisir</button></td>
                        </tr>
                        <tr>
                            <td>salle polyvalente</td>
                            <td>300</td>
                            <td><button>choisir</button></td>

                        </tr>
                    </table>
                </div>
            </div>
            <div class="foter">
                <p>copyright @ victor</p>
            </div>
        </div>
    </div>
</body>
</html>