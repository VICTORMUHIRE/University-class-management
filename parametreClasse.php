<?php 

$servername = "localhost";
$username = "root";
$password ="" ;
$database = "university";
$connection = new mysqli($servername, $username, $password,$database);

$nom_du_type="";

$error_message = "";
$succes_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom_du_type = $_POST["nom_du_type"];
    
   do {
        if( empty($nom_du_type)){
            $error_message = "le champs sont obligatoire";
            break;
        }

        //add new client in the database 
        
        $sql = "INSERT INTO types(nom_du_type) VALUES ('$nom_du_type')";
        $result = $connection->query($sql);

        if(!$result){
            $error_message ="Invalid query: " .$connection->error;
            echo $error_message;
        }
        $nom_du_type="";
        
        $succes_message = "type ajoute avec succes";
        
   } while (false);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>parametre</title>
</head>
<body>
    <div>
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
                            <a href="ajouterClasse.html">
                                <div><img src="./static/ajouter.png" alt=""></div>
                                <p>ajouter une classes</p>
                            </a>
                        </div>
                        <div><img src="./static/parametre.png" alt=""></div>
                    </div>
                    <div class="recherche">
                        <label for="">recherche : </label>
                        <input type="text">
                    </div>
                    <div class="classe">
                        <table>
                            <tr>
                                <td>salle G1</td>
                                <td>salle de lecture</td>
                                <td>30</td>
                                <td><span><img src="./static/Calendrier.png" alt=""></span>
                                    <span><img src="./static/Editer Le Fichier Icône.png" alt=""></span>
                                    <span><img src="./static/Poubelle Icône.png" alt=""></span>
                                </td>
                            </tr>
                            <tr>
                                <td>salle G2</td>
                                <td>laboratoire</td>
                                <td>20</td>
                                <td><span><img src="./static/Calendrier.png" alt=""></span>
                                    <span><img src="./static/Editer Le Fichier Icône.png" alt=""></span>
                                    <span><img src="./static/Poubelle Icône.png" alt=""></span>
                                </td>
                            </tr>
                            <tr>
                                <td>salle polyvalente</td>
                                <td>Grande salle</td>
                                <td>300</td>
                                <td><span><img src="./static/Calendrier.png" alt=""></span>
                                    <span><img src="./static/Editer Le Fichier Icône.png" alt=""></span>
                                    <span><img src="./static/Poubelle Icône.png" alt=""></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <p>vous avez 3 salle dans votre université</p>
                    </div>
                </div>
                <div class="foter">
                    <p>copyright @ victor</p>
                </div>
            </div>
        </div>
        <div class="parametre">
            <div class="parametres">
                <div class="config">
                    <p>Confugurer les types des salle</p>
                </div>
                <div class="type">
                    <div class="typeB">
                        <form action="" method="post">
                            <input type="text" placeholder="type..." name="nom_du_type" value="<?php echo $nom_du_type; ?>">
                            <button type="submit"><img src="./static/ajouter.png" alt=""><p>Ajouter un type</p></button>
                        </form>
                    </div>
                    <div class="recherche">
                        <label for="">recherche : </label>
                        <input type="text">
                    </div>
                    <div class="classe">
                        <table>
                            <tr>
                                <th>nom de la salle</th>
                                <th>liste de salles ayant ce type</th>
                                <th>action</th>
                            </tr>
                            <br> 
                            
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
                                $sql = "SELECT * FROM types";
                                 $result = $connection->query($sql);

                                // read data of each row

                                $nombre_salle = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $nombre_salle +=1;
                                    echo "
                                    <tr>
                                        <td>$row[nom_du_type]</td>
                                        <td>$nombre_salle</td>
                                        <td>
                                            <span><a href='delete.php?id=$row[id]'><img src='./static/Poubelle Icône.png' alt=''></a></span>
                                        </td>
                                    </tr>
                                    ";                                    
                                }
                            ?>
                        </table>
                    </div>
                    
                    <div class="typeBf">
                        <button type="submit">Fermer</button>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>