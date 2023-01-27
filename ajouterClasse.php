<?php 
$connection = new mysqli("localhost", "root", "","university");

$type_de_salle="";
$capacité_de_la_salle="";
$nom_de_la_salle="";

$error_message = "";
$succes_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom_de_la_salle = $_POST["nom_de_la_salle"];
    $capacité_de_la_salle = $_POST["capacité_de_la_salle"];
    $type_de_salle = $_POST["type_de_salle"];

   do {
        if( empty($nom_de_la_salle) || empty($capacité_de_la_salle) || empty($type_de_salle)){
            $error_message = "Tout les champs sont obligatoire";
            break;
        }

        //add new client in the database 
        $sql = "INSERT INTO gestion(nom_de_la_salle, type_de_salle,capacité_de_la_salle) VALUES ('$nom_de_la_salle', '$type_de_salle', '$capacité_de_la_salle')";
        $result = $connection->query($sql);

        if(!$result){
            $error_message ="Invalid query: " .$connection->error;
        }


        $type_de_salle="";
        $capacité_de_la_salle="";
        $nom_de_la_salle="";

        $succes_message = "Salle ajoute avec succes";

        header("location: gestion.php");

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
                <p>Création d'une salles</p>
            </div>
            <div class="formulaire">


                
                <?php   
                    if (!empty($error_message)) {
                        echo "
                        <div>
                            <strong>$error_message</strong>
                        </div>
                        ";
                    }
                    if (!empty($succes_message)) {
                        echo "
                        <div>
                            <strong>$succes_message</strong>
                        </div>
                        ";
                    }
                ?>

            <form method="post" action="" >
                    <div>
                        <label for="">Nom de la salle: <span>*</span></label>
                        <input type="text" name="nom_de_la_salle" value="<?php echo $nom_de_la_salle; ?>">
                    </div>

                    <div>
                        <label for="">type de salle: <span>*</span></label>
                        <select class="selectC" name="type_de_salle" value="<?php echo $type_de_salle; ?>">
                        <?php 
                        
                        //read the data from the table
                        $sqls = "SELECT * FROM types";
                        $result = $connection->query($sqls);

                       // read data of each row
                       while ($row = $result->fetch_assoc()) {
                           echo "<option>$row[nom_du_type]</option>";                                    
                       }
                        ?>
                        </select>
                    </div>
                    <div>
                        <label for="">nombres des places: <span>*</span></label>
                        <input type="text" name="capacité_de_la_salle" value="<?php echo $capacité_de_la_salle; ?>">
                    </div>
                    <div>
                        <label for="">Description :</label>
                        
                        <input type="text" id="description" >
                    </div>
                    <div>
                        <div></div>
                        <button>Enregistrer</button>
                    </div>

                </form>
            </div>
            <div class="foter">
                <p>copyright @ victor</p>
            </div>
    
        </div>
        
    </div>
</body>
</html>