<!DOCTYPE html>
<html>
<head>
    <title>Cuento</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
    <div class="container">
        <div class="btn-group">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                Cambiar Idioma
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="?lang=es">Español</a>
                <a class="dropdown-item" href="?lang=en">English</a>
                <a class="dropdown-item" href="?lang=fr">Français</a>
            </div>
        </div>
        <hr>
        <?php
            $idioma = "es"; // Idioma predeterminado (español)

            // Comprobar si se ha seleccionado un idioma diferente a través de la URL
            if (isset($_GET['lang'])) {
                $idioma = $_GET['lang'];
            }

            // Variables de texto en diferentes idiomas
            if ($idioma == "es") {
                $titulo = "El árbol y el viento";
                $texto = "<p>Había una vez un hermoso árbol en medio de un prado, alto y majestuoso, cuyas ramas se alzaban hacia el cielo, brindando sombra y refugio a los animales del bosque. Un día, un fuerte viento empezó a soplar con gran intensidad, agitando las hojas y moviendo las ramas. El viento intentaba derribarlo, pero el árbol se mantenía firme y resistente. Intrigado por su fortaleza, el viento le preguntó cómo resistía. El árbol respondió serenamente: \"Querido viento, no me resisto a tu fuerza, sino que me flexiono y adapto a tus embates, pues sé que eres parte de la naturaleza con tu propósito\". Sorprendido, el viento se detuvo y observó cómo las ramas del árbol se movían en armonía. Comprendió que no era necesario luchar, sino colaborar. Así, el viento y el árbol se convirtieron en grandes amigos. El viento acariciaba las hojas suavemente y el árbol disfrutaba de la brisa fresca. Juntos, creaban una sinfonía que llenaba de alegría el prado, demostrando que la fuerza y la flexibilidad pueden coexistir en armonía, enseñándonos a adaptarnos a los desafíos de la vida con gracia y sabiduría.";
            } elseif ($idioma == "en") {
                $titulo = "The Tree and the Wind";
                $texto = "Once upon a time there was a beautiful tree in the middle of a meadow, tall and majestic, whose branches reached up to the sky, providing shade and shelter to the animals of the forest. One day, a strong wind began to blow with great intensity, shaking the leaves and moving the branches. The wind tried to knock it down, but the tree remained firm and resilient. Intrigued by its strength, the wind asked how it was holding up. The tree serenely replied, \"Dear wind, I do not resist your strength, but I flex and adapt to your onslaught, for I know that you are part of nature with your purpose.\" Surprised, the wind stopped and watched as the branches of the tree moved in harmony. It understood that it was not necessary to fight, but to collaborate. Thus, the wind and the tree became great friends. The wind gently caressed the leaves and the tree enjoyed the cool breeze. Together, they created a symphony that filled the meadow with joy, demonstrating that strength and flexibility can coexist in harmony, teaching us to adapt to life's challenges with grace and wisdom.";
            } elseif ($idioma == "fr") {
                $titulo = "L'arbre et le vent";
                $texto = "Il était une fois un bel arbre au milieu d'une prairie, grand et majestueux, dont les branches montaient jusqu'au ciel, offrant ombre et abri aux animaux de la forêt. Un jour, un vent fort se mit à souffler avec beaucoup d'intensité, secouant les feuilles et faisant bouger les branches. Le vent essaya de le faire tomber, mais l'arbre resta ferme et résistant. Intrigué par sa force, le vent lui demanda comment il tenait le coup. L'arbre répondit sereinement : \"Cher vent, je ne résiste pas à ta force, mais je m'adapte à tes assauts, car je sais que tu fais partie de la nature et que tu as ta raison d'être.\" Surpris, le vent s'arrêta et regarda les branches de l'arbre bouger en harmonie. Il comprit qu'il ne fallait pas se battre, mais collaborer. Ainsi, le vent et l'arbre devinrent de grands amis. Le vent caresse doucement les feuilles et l'arbre profite de la fraîcheur de la brise. Ensemble, ils ont créé une symphonie qui a rempli la prairie de joie, démontrant que la force et la souplesse peuvent coexister en harmonie, nous apprenant à nous adapter aux défis de la vie avec grâce et sagesse.";
            }
        ?>

        <h1><?php echo $titulo; ?></h1>
        <img src="img/book_tale.png" alt="Imagen">
        <p id="justify"><?php echo $texto; ?></p>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
