DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pais` varchar(100) NOT NULL,
  
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
);
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  
  PRIMARY KEY (`id`)
);
INSERT INTO `categorias` VALUES (1, 'Deportes', '¿Crees que sabes mucho sobre deportes en general? Pon a prueba tus conocimientos sobre fútbol, tenis, basket, handball y muchas otras disciplinas.', 'img/deportes.jpg'), (2, 'Curiosidades', 'Datos curiosos que no todo el mundo conoce, juega y descubre si eres de ese pequeño porcentaje de la gente que puede responder bien estas preguntas. Anímate, puede resultar muy interesante!', 'img/pregunta.jpg'), (3, 'Game Of Thrones', 'Esta serie relata las vivencias de un grupo de personajes de distintas casas nobiliarias en el continente ficticio Poniente para tener el control del Trono de Hierro y gobernar los siete reinos que conforman el territorio. Cuenta con 8 temporadas, y es la serie mas premiada de la historia. Eres un verdadero aficionado? Demuestralo..', 'img/got.jpg'), (4, 'Animales', 'Preguntas acerca de los seres vivos que integran el reino animal. Si eres un amante de los animales y sabes mucho sobre ellos, de seguro te irá bien... Descubre animalia!', 'img/animaleshd2.jpg'), (5, 'Superhéroes', '¿Marvel? ¿DC? Preguntas sobre superhéroes y villanos, si eres un fan de los comics podrás responderlas, evalúa cuanto sabes', 'img/superheroes.jpg'), (6, 'Historia', 'Sección de interrogantes sobre historia general, todos deberíamos conocer las respuestas. ¡Vuélvete un poco mas culto!', 'img/historia.jpg'), (7, 'Los Simpson', 'Los Simpson son una familia políticamente incorrecta, de clase media, que habita en la ficticia localidad estadounidense de Springfield. Pon a prueba tu fanatismo por la familia más amarilla de la televisión', 'img/the-simpson.jpg'), (8, 'Animes', 'Midamos tu conocimiento sobre algunos conceptos típicos del anime y también de algunas series de este tipo. Si eres un verdadero otaku, responderás las preguntas sin ningún problema', 'img/animes.jpg'), (9, 'HarryPotter', 'Eres un verdadero fan de la mágica saga de J. K. Rowling? ¿Eres de la auténtica Generación Potter? Responde estas preguntas y si eres un experto podrás lucirte!', 'img/HarryPotter.jpg');

