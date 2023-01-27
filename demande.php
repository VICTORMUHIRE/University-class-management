<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
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
                <p>liste des demandes</p>
            </div>
            <div class="contenerD">
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>nom</th>
                                <th>Personnalité</th>
                                <th>type de salle</th>
                                <th>planing</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody class="thead">
                            <tr>
                                <td><div class="demandNom"><img src="./static/A1.png" alt=""><p>MUHIRE BUUNDA</p></div></td>
                                <td>cp L2  GEI</td>
                                <td>salle de laboratoire</td>
                                <td>30</td>
                                <td>7 jours</td>
                                <td class="btnActions">
                                    <button><a href="attribuer.php">Attribuer</a> </button>
                                </td>
                                   
                            </tr>
                            <tr>
                                <td><div class="demandNom"><img src="./static/A2.png" alt=""><p>MUHIRE BUUNDA</p></div></td>
                                <td>cp L2  GEI</td>
                                <td>salle de laboratoire</td>
                                <td>30</td>
                                <td>7 jours</td>
                                <td class="btnActions">
                                    <button><a href="attribuer.php">Attribuer</a> </button>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="demandNom"><img src="./static/A3.png" alt=""><p>MUHIRE BUUNDA</p></div></td>
                                <td>cp L2  GEI</td>
                                <td>salle de laboratoire</td>
                                <td>30</td>
                                <td>7 jours</td>
                                <td class="btnActions">
                                    <button><a href="attribuer.php">Attribuer</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="demandNom"><img src="./static/A4.png" alt=""><p>MUHIRE BUUNDA</p></div></td>
                                <td>cp L2  GEI</td>
                                <td>salle de laboratoire</td>
                                <td>30</td>
                                <td>7 jours</td>
                                <td class="btnActions">
                                    <button><a href="attribuer.php">Attribuer</a> </button>
                                </td>
                            </tr>
                        </tbody>
                        

                    </table>
            </div>
            <div class="foter">
                <p>copyright @ victor</p>
            </div>
        </div>
    </div>
</body>
</html>