My Pets - Página Web
--------------------
Funcionamiento

1. Página de inicio (index.html)

	*El usuario debe completar el formulario ingresando su nombre y edad.

	*El usuario puede marcar la casilla de verificación si está interesado en la información
	 de la página.

	*Al hacer clic en el botón "Enviar", los datos se envían al archivo main.php para su 
	procesamiento.

2. Página principal (main.php)

	*El archivo main.php recibe los datos enviados desde la página de inicio y los 
	almacena en variables.

	*Se verifica la edad del usuario:
		*Si el usuario es menor de 18 años, se muestran párrafos y imágenes específicas
		 para menores de edad.
		*Si el usuario es mayor de 18 años, se muestran párrafos y imágenes relacionadas
		 con información para adultos.

	*Si el usuario está interesado en la información de la página (casilla de verificación
	 marcada), se muestra un carrusel de imágenes adicionales.

	*La página utiliza estilos CSS y la biblioteca Bootstrap para una apariencia visual
	 atractiva y receptiva.

	*Al final de la página, se muestra un pie de página con información de derechos de 
	autor y créditos.