Esta es una aplicación web de noticias que cuenta con un sistema de inicio de sesión y registro de usuarios. Los usuarios pueden publicar noticias y ver las noticias previamente publicadas. La aplicación está construida utilizando HTML, CSS, PHP y MySQL, y utiliza el framework Bootstrap
Funcionalidades:

Login (login.php):

Página de inicio de sesión donde los usuarios pueden ingresar con su nombre de usuario y contraseña.
Si los datos son válidos, el usuario inicia sesión y se le redirige a la página "publicar_noticia.php".
Si los datos son incorrectos o el usuario no existe, se muestra un mensaje de error apropiado.

Registro (registro.php):

Página donde los usuarios pueden crear una cuenta proporcionando un nombre de usuario, contraseña, nombre, edad y correo electrónico.
Antes de agregar un nuevo usuario a la base de datos, se verifica que el nombre de usuario no esté duplicado.
Si el registro es exitoso, el usuario puede utilizar las credenciales para iniciar sesión.

Publicar Noticia (publicar_noticia.php):

Página a la que solo se puede acceder después de iniciar sesión correctamente.
Permite a los usuarios publicar una nueva noticia con un titular, contenido y URL de una imagen opcional.
La noticia se almacena en la base de datos junto con la fecha y hora actual y el ID del usuario que la publicó.

Ver Noticias (ver_noticias.php):

Página donde se muestran todas las noticias publicadas en orden de fecha y hora, mostrando la más reciente primero.
Cada noticia se muestra con su titular, contenido, imagen (si está disponible), nombre del usuario que la publicó y la fecha de publicación.
Solo los usuarios autenticados pueden ver esta página.

Instrucciones de Uso:

Abre tu navegador web e ingresa la URL de la página de inicio de sesión "login.php" o "index.php".
Si ya tienes una cuenta, inicia sesión con tu nombre de usuario y contraseña.
Si no tienes una cuenta, haz clic en el enlace "Registrarse" en la página de inicio de sesión para crear una nueva cuenta.
Una vez que inicies sesión correctamente, serás redirigido a la página "publicar_noticia.php", donde podrás publicar nuevas noticias.
Haz clic en el enlace "Ver Noticias" en el menú de navegación para ver todas las noticias publicadas.