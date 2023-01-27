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
                <p>Gestion des salles</p>
            </div>
            <div class="contener">
                <div class="ajouter">
                    <div>
                        <a href="ajouterClasse.php">
                            <div><img src="./static/ajouter.png" alt=""></div>
                            <p>Ajouter une classe</p>
                        </a>
                    </div>
                    <div><a href="parametreClasse.php"><img src="./static/parametre.png" alt=""></a></div>
                </div>
                <div class="recherche">
                    <label for="">Recherche : </label>
                    <input type="text">
                </div>
                <div class="classe">
                    <table>
                        <thead>
                            <tr>
                                <th>nom de la salle</th>
                                <th>type de salle</th>
                                <th>capacité de la salle</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $servername = "localhost";
                                $username = "root";
                                $password ="" ;
                                $database = "university";

                                //create connection
                                $connection = new mysqli($servername, $username, $password,$database);
                            
                                // check for connection
                                if ($connection->connect_error){
                                    die("connection failed: ". $connection->connect_error);
                                }
                                
                                //read the data from the table
                                $sql = "SELECT * FROM gestion";
                                 $result = $connection->query($sql);

                                // read data of each row

                                $nombre_salle = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $nombre_salle +=1;
                                    echo "
                                    <tr>
                                        <td>$row[nom_de_la_salle]</td>
                                        <td>$row[type_de_salle]</td>
                                        <td>$row[capacité_de_la_salle]</td>
                                        <td>
                                            <span><a href=''><img src='./static/Calendrier.png' alt=''></a></span>
                                            <span><a href='editClasse.php?id=$row[id]'><img src='./static/Editer Le Fichier Icône.png' alt=''></a></span>
                                            <span><a href='deleteS.php?id=$row[id]'><img src='./static/Poubelle Icône.png' alt=''></a></span>
                                        </td>
                                    </tr>
                                    ";                                    
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="classP">
                    <p>vous avez <?php echo "$nombre_salle"?> salle dans votre université</p>
                </div>
            </div>
            <div class="foter">
                <p>copyright @ victor</p>
            </div>
        </div>
    </div>
</body>
</html>