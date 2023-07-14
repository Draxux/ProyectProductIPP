<?php
    // información recibida
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $interes = isset($_POST['interes']) ? true : false;

    $parrafo_adul = ["Ofrecemos los mejores alimentos para su mascota: Hills, Royal Canin, Taste of the Wild, Purina Proplan, Total Max y Pedigree, disponibles las 24/7.",
    "Accesorios de alta calidad para su mascota: correas, collares, platos, cajas de arena y vestidos que harán feliz a su mascota.",
    "Medicamentos especializados y homeopáticos del laboratorio Heel, disponibles para tratar todo tipo de afecciones."
    ];
    // párrafos de usuarios adultos
    // párrafos de usuarios menores
    $parrafo_menor = ["¡Bienvenidos a nuestra increíble tienda de mascotas! Aquí encontrarán deliciosos alimentos y accesorios divertidos para hacer felices a sus amiguitos peludos.",
        "¡Aventuras y accesorios divertidos te esperan en nuestra tienda de mascotas ! Correas, platos, cajas de arena y trajes increíbles para tus amigos peludos."
    ];
    // imágenes de usuarios adultos
    // imágenes de usuarios menores
    $imagenes_adul = [
        "img/petservice1.jpg",
        "img/petservice2.jpg",
        "img/petservice3.jpg"
    ];

    $imagenes_menor = [
        "img/kidpet1.jpg",
        "img/kidpet2.jpg"
    ];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Pets</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><p><strong class='title'>My</strong> Pets</p></a>
            </div>
                        
        </div>
    </nav>
    <div class="container block">
        <?php
            if ($edad < 18) {
                // El usuario es menor de edad, muestra información específica para menores de edad.
                $fontSizes = array("24px", "20px", "18px");
                for ($i = 0; $i < count($parrafo_menor); $i++) {
                    echo "<p style='font-size: " . $fontSizes[$i] . ";'>" . $parrafo_menor[$i] . "</p>";
                    echo "<img src='" . $imagenes_menor[$i] . "' style='width:900px;height:500px;'>";
                }

            } else {
                // El usuario es mayor de edad, muestra información para adultos.
                $fontSizes = array("24px", "20px", "18px");
                for ($i = 0; $i < count($parrafo_adul); $i++) {
                    echo "<p style='font-size: ". $fontSizes[$i] .";'>" . $parrafo_adul[$i] . "</p>";
                    echo "<img src='" . $imagenes_adul[$i] . "' style='width:900px;height:500px;'>";
                }
                                              
            }


        ?>
    </div>

    <?php
        if ($interes) {
            // Mostrar el carousel solo si el usuario está interesado
            echo'<div id="mislide" class="carousel slide" data-ride="carousel">';
            // Indicadores
            echo'    <ol class="carousel-indicators">';
            echo'        <li data-target="#mislide" data-slide-to="0" class=""></li>';
            echo'        <li data-target="#mislide" data-slide-to="1" class=""></li>';
            echo'        <li data-target="#mislide" data-slide-to="2" class="active "></li>';
            echo'    </ol>';
            // Imágenes del carousel
            echo'    <div class="carousel-inner">';
            echo'        <div class="item">';
            echo'            <img class="center-block" data-src="" alt="" src="img/brand1.jpg" width=\'650px\'>';
            echo'            <div class="container">';
            echo'                <div class="carousel-caption">';                   
            echo'                </div>';
            echo'            </div>';
            echo'        </div>';
            echo'        <div class="item">';
            echo'            <img class="center-block" data-src="" alt="" src="img/brand2.avif" width=\'869px\'>';
            echo'            <div class="container">';
            echo'                <div class="carousel-caption"> ';
            echo'                </div>';
            echo'            </div>';
            echo'        </div>';
            echo'        <div class="item active">';
            echo'            <img class="center-block" data-src="" alt="" src="img/brand3.jpg" width=\'965px\'>';
            echo'            <div class="container">';
            echo'                <div class="carousel-caption">';
            echo'                </div>';
            echo'            </div>';
            echo'        </div>';
            echo'    </div>';
            // Controles del carousel
            echo'    <a class="left carousel-control" href="#mislide" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>';
            echo'    <a class="right carousel-control" href="#mislide" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';
            echo'</div>';
        }else {
            // El usuario no está interesado en la información de la página.
            
        }
    ?>

    <!--footer-->
    <footer class="bg-2">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4"><span class='glyphicon glyphicon-copyright-mark'></span>Copyrigt by Duvan Camilo Gil Cuartas 2023</div>
                
                <div class="col-md-4"> <strong>WebCreativa</strong>, Diseño web con estilo y personalidad.</div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
