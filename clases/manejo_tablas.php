<?php
require_once "../soporte.php";
//CREO LA TABLA 'usuarios'
$tablaUsuarios = $db->crearTablaUsuarios();
//CREO LA TABLA 'categorias'
$tablaCategorias = $db->crearTablaCategorias();
//CREO LA CATEGORIA 'Deportes' Y LA GUARDO EN LA BASE DE DATOS
$nombreDep = "Deportes";
$descripcionDep = "¿Crees que sabes mucho sobre deportes en general? Pon a prueba tus conocimientos sobre fútbol, tenis, basket, handball y muchas otras disciplinas.";
$imagenDep = "img/deportes.jpg";
$deportes = new Categoria($nombreDep, $descripcionDep, $imagenDep);
$categoriaDeportes = $db->guardarCategoria($deportes);

//CREO LA CATEGORIA 'Curiosidades' Y LA GUARDO EN LA BASE DE DATOS
$nombreCuriosidades = "Curiosidades";
$descripcionCuriosidades = "Datos curiosos que no todo el mundo conoce, juega y descubre si eres de ese pequeño porcentaje de la gente que puede responder bien estas preguntas. Anímate, puede resultar muy interesante!";
$imagenCuriosidades = "img/pregunta.jpg";
$curiosidades = new Categoria($nombreCuriosidades, $descripcionCuriosidades, $imagenCuriosidades);
$categoriaCuriosidades = $db->guardarCategoria($curiosidades);

//CREO LA CATEGORIA 'Game Of Thrones' Y LA GUARDO EN LA BASE DE DATOS
$nombreGOT= "Game Of Thrones";
$descripcionGOT = "Esta serie relata las vivencias de un grupo de personajes de distintas casas nobiliarias en el continente ficticio Poniente para tener el control del Trono de Hierro y gobernar los siete reinos que conforman el territorio. Cuenta con 8 temporadas, y es la serie mas premiada de la historia. Eres un verdadero aficionado? Demuestralo..";
$imagenGOT = "img/got.jpg";
$gameOfThrones = new Categoria($nombreGOT, $descripcionGOT, $imagenGOT);
$categoriaGOT = $db->guardarCategoria($gameOfThrones);

//CREO LA CATEGORIA 'Animales' Y LA GUARDO EN LA BASE DE DATOS
$nombreAnimales = "Animales";
$descripcionAnimales = "Preguntas acerca de los seres vivos que integran el reino animal. Si eres un amante de los animales y sabes mucho sobre ellos, de seguro te irá bien... Descubre animalia!";
$imagenAnimales = "img/animaleshd2.jpg";
$animales = new Categoria($nombreAnimales, $descripcionAnimales, $imagenAnimales);
$categoriaAnimales = $db->guardarCategoria($animales);

//CREO LA CATEGORIA 'Superheroes' Y LA GUARDO EN LA BASE DE DATOS
$nombreSH = "Superhéroes";
$descripcionSH = "¿Marvel? ¿DC? Preguntas sobre superhéroes y villanos, si eres un fan de los comics podrás responderlas, evalúa cuánto sabes";
$imagenSH = "img/superheroes.jpg";
$superheroes = new Categoria($nombreSH, $descripcionSH, $imagenSH);
$categoriaSuperheroes = $db->guardarCategoria($superheroes);

//CREO LA CATEGORIA 'Historia' Y LA GUARDO EN LA BASE DE DATOS
$nombreHistoria = "Historia";
$descripcionHistoria = "Sección de interrogantes sobre historia general, todos deberíamos conocer las respuestas. ¡Vuélvete un poco mas culto!";
$imagenHistoria = "img/historia.jpg";
$historia = new Categoria($nombreHistoria, $descripcionHistoria, $imagenHistoria);
$categoriaHistoria = $db->guardarCategoria($historia);

//CREO LA CATEGORIA 'Los simpsons' Y LA GUARDO EN LA BASE DE DATOS
$nombreLS = "Los Simpson";
$descripcionLS = "Los Simpson son una familia políticamente incorrecta, de clase media, que habita en la ficticia localidad estadounidense de Springfield. Pon a prueba tu fanatismo por la familia más amarilla de la televisión";
$imagenLS = "img/the-simpson.jpg";
$losSimpson = new Categoria($nombreLS, $descripcionLS, $imagenLS);
$categoriaLosSimpson = $db->guardarCategoria($losSimpson);

//CREO LA CATEGORIA 'Animes' Y LA GUARDO EN LA BASE DE DATOS
$nombreAnimes = "Animes";
$descripcionAnimes = "Midamos tu conocimiento sobre algunos conceptos típicos del anime y también de algunas series de este tipo. Si eres un verdadero otaku, responderás las preguntas sin ningún problema";
$imagenAnimes = "img/animes.jpg";
$animes = new Categoria($nombreAnimes, $descripcionAnimes, $imagenAnimes);
$categoriaAnimes = $db->guardarCategoria($animes);

//CREO LA CATEGORIA 'Harry Potter' Y LA GUARDO EN LA BASE DE DATOS
$nombreHP = "Harry Potter";
$descripcionHP = "Eres un verdadero fan de la mágica saga de J. K. Rowling? ¿Eres de la auténtica Generación Potter? Responde estas preguntas y compruebalo. Si eres un experto podrás lucirte!";
$imagenHP = "img/HarryPotter.jpg";
$harryPotter = new Categoria($nombreHP, $descripcionHP, $imagenHP);
$categoriaHarryPotter = $db->guardarCategoria($harryPotter);
