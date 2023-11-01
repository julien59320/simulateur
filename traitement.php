if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cornet'])) {
        $cornet = $_POST['cornet'];
        if ($cornet == 'vanille') {
            echo "<img src='chemin_vers_l_image_de_la_glace_vanille' alt='Glace à la vanille'>";
        } elseif ($cornet == 'chocolat') {
            echo "<img src='chemin_vers_l_image_de_la_glace_chocolat' alt='Glace au chocolat'>";
        } else {
            echo "Veuillez choisir une option valide pour le cornet.";
        }
    } else {
        echo "Veuillez choisir une option pour le cornet.";
    }
}
?>