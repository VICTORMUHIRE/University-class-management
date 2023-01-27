<?php 

$servername = "localhost";
$username = "root";
$password ="" ;
$database = "university";
$connection = new mysqli($servername, $username, $password,$database);

$id = "";
$type_de_salle="";
$capacité_de_la_salle="";
$nom_de_la_salle="";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    // GET method: show the data of a classe

    if(!isset($_GET["id"])){
        header("location: gestion.php");
        exit;
    }

    $id = $_GET["id"];

    //read the row of the selected classe from database

    $sql = "SELECT * FROM gestion WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: gestion.php");
        exit;
    }

    $nom_de_la_salle = $row["nom_de_la_salle"];
    $type_de_salle = $row["type_de_salle"];
    $capacité_de_la_salle = $row["capacité_de_la_salle"];

}
else {
    //POST method : to Update the data of the class

    $id = $_POST["id"];
    $nom_de_la_salle = $_POST["nom_de_la_salle"];
    $type_de_salle = $_POST["type_de_salle"];
    $capacité_de_la_salle = $_POST["capacité_de_la_salle"];

    do {
        if(empty($id) || empty($nom_de_la_salle) || empty($capacité_de_la_salle) || empty($type_de_salle)){
            $error_message = "tout les champs sont obligatoires";
            break;
        }

        $sql = "UPDATE gestion  SET nom_de_la_salle = '$nom_de_la_salle', type_de_salle = '$type_de_salle', capacité_de_la_salle = '$capacité_de_la_salle' WHERE id = $id ";

        $result = $connection->query($sql);

        if (!$result) {
            $error_message = "Invalid query: " . $connection->error;
            break;
        }
        $succes_message = "La salle a ete ajoute avec succes";

        header("location: gestion.php");
        exit;

    } while (true);

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

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label for="">Nom de la salle: <span>*</span></label>
                        <input type="text" name="nom_de_la_salle" value="<?php echo $nom_de_la_salle; ?>">
                    </div>

                    <div>
                        <label for="">type de salle: <span>*</span></label>
                        <input type="text" name="type_de_salle" value="<?php echo $type_de_salle ;?>">
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