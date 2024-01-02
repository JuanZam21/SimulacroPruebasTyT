-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2018 a las 00:54:19
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulacro_tyt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `di_admin` int(10) NOT NULL,
  `id_tipo_doc_admin` int(11) DEFAULT NULL,
  `nombre_admin` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'not null',
  `apellido_admin` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'not null',
  `telefono_admin` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'not null',
  `email_admin` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'not null',
  `clave_admin` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'not null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`di_admin`, `id_tipo_doc_admin`, `nombre_admin`, `apellido_admin`, `telefono_admin`, `email_admin`, `clave_admin`) VALUES
(1007677635, 1, 'Juan Diego', 'Zambrano TriviÃ±o', '3115839595', 'juanzamtri@gmail.com', 'febc8f96278451d37e9cf3a87867448c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `di_apre` int(10) NOT NULL,
  `id_tipo_doc` int(11) DEFAULT NULL,
  `nombre_apre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_apre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_apre` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_apre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave_apre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`di_apre`, `id_tipo_doc`, `nombre_apre`, `apellido_apre`, `telefono_apre`, `email_apre`, `clave_apre`) VALUES
(1007677635, 1, 'Juan Diego', 'Zambrano TriviÃ±o', '3115839595', 'juanzamtri@gmail.com', 'febc8f96278451d37e9cf3a87867448c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_mate` int(10) NOT NULL,
  `nombre_mate` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_mate`, `nombre_mate`) VALUES
(1, 'Lectura cr&iacute;tica'),
(2, 'Razonamiento cuantitativo'),
(3, 'Comunicaci&oacute;n escrita'),
(4, 'ingl&eacute;s '),
(5, 'Competencias ciudadanas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregu` int(10) NOT NULL,
  `id_mate` int(50) DEFAULT NULL,
  `indicacion` varchar(2000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enu_mate` varchar(4000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enu_img` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `refer` varchar(2000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `enu_respu` varchar(2000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respu1_mate` varchar(700) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respu2_mate` varchar(700) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respu3_mate` varchar(700) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `respu4_mate` varchar(700) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `valor_pregu` int(10) DEFAULT NULL,
  `respu_corre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregu`, `id_mate`, `indicacion`, `enu_mate`, `enu_img`, `refer`, `enu_respu`, `respu1_mate`, `respu2_mate`, `respu3_mate`, `respu4_mate`, `valor_pregu`, `respu_corre`) VALUES
(1, 1, 'RESPONDA LA PREGUNTA 1 DE ACUERDO CON LA SIGUIENTE INFORMACIÃ“N', 'El primer gran filÃ³sofo del siglo diecisiete (si exceptuamos a Bacon y Galileo) fue Descartes, y si alguna vez se dijo de alguien que estuvo a punto de ser asesinado habrÃ¡ que decirlo de Ã©l. La historia es la siguiente, segÃºn la cuenta Baillet en su Vie de M. Descartes, tomo I, pÃ¡ginas 102-103. En 1621, Descartes, que tenÃ­a unos veintisÃ©is aÃ±os, se hallaba como siempre viajando (pues era inquieto como una hiena) y, al llegar al Elba, tomÃ³ una embarcaciÃ³n para Friezland oriental. Nadie se ha enterado nunca de lo que podÃ­a buscar en Friezland oriental y tal vez Ã©l se hiciera la misma pregunta, ya que, al llegar a Embden, decidiÃ³ dirigirse al instante a Friezland occidental, y siendo demasiado impaciente para tolerar cualquier demora, alquilÃ³ una barca y contratÃ³ a unos cuantos marineros. Tan pronto habÃ­an salido al mar cuando hizo un agradable descubrimiento, al saber que se habÃ­a encerrado en una guarida de asesinos. Se dio cuenta, dice M. Baillet, de que su tripulaciÃ³n estaba formada por criminales, no aficionados, seÃ±ores, como lo somos nosotros, sino profesionales cuya mÃ¡xima ambiciÃ³n, por el momento, era degollarlo. La historia es demasiado amena para resumirla y a continuaciÃ³n la traduzco cuidadosamente del original francÃ©s de la biografÃ­a: â€œM. Descartes no tenÃ­a mÃ¡s compaÃ±Ã­a que su criado, con quien conversaba en francÃ©s. Los marineros, creyendo que se trataba de un comerciante y no de un caballero, pensaron que llevarÃ­a dinero consigo y pronto llegaron a una decisiÃ³n que no era en modo alguno ventajosa para su bolsa. Entre los ladrones de mar y los ladrones de bosques, hay esta diferencia, que los Ãºltimos pueden perdonar la vida a sus vÃ­ctimas sin peligro para ellos, en tanto que si los otros llevan a sus pasajeros a la costa, corren grave peligro de ir a parar a la cÃ¡rcel. La tripulaciÃ³n de M. Descartes tomÃ³ sus precauciones para evitar todo riesgo de esta naturaleza. Lo suponÃ­an un extranjero venido de lejos, sin relaciones en el paÃ­s, y se dijeron que nadie se darÃ­a el trabajo de averiguar su paradero cuando desaparecieraâ€. Piensen, seÃ±ores, en estos perros de Friezland que hablan de un filÃ³sofo como si fuese una barrica de ron consignada a un barco de carga. â€œNotaron que era de carÃ¡cter manso y paciente y, juzgÃ¡ndolo por la gentileza de su comportamiento y la cortesÃ­a de su trato, se imaginaron que debÃ­a ser un joven in experimentado, sin situaciÃ³n ni raÃ­ces en la vida, y concluyeron que les serÃ­a fÃ¡cil quitarle la vida. No tuvieron empacho en discutir la cuestiÃ³n en presencia suya pues no creÃ­an que entendiese otro idioma ademÃ¡s del que empleaba para hablar con su criado; como resultado de sus deliberaciones decidieron asesinarlo, arrojar sus restos al mar y dividirse el botÃ­nâ€. Perdonen que me rÃ­a, caballeros, pero a decir verdad me rÃ­o siempre que recuerdo esta historia, en la que hay dos cosas que me parecen muy cÃ³micas. Una de ellas es el pÃ¡nico de Descartes, a quien se le debieron poner los pelos de punta, ante el pequeÃ±o drama de su propia muerte, funeral, herencia y administraciÃ³n de bienes. Pero hay otro aspecto que me parece aÃºn mÃ¡s gracioso, y es que si los mastines de Friezland hubieran estado â€œa la alturaâ€, no tendrÃ­amos filosofÃ­a cartesiana.', '', 'Tomado y adaptado de: De Quincey, T. (1999). Del asesinato considerado como una de las bellas artes. Alianza Editorial', '1. A juzgar por su estilo, tema y estructura, Â¿en cuÃ¡l de los siguientes contextos estarÃ­a inscrito mÃ¡s apropiadamente el pasaje anterior?', 'En una revista acadÃ©mica, como parte de un artÃ­culo sobre los orÃ­genes y la importancia de la filosofÃ­a cartesiana.', 'En un discurso ofrecido a un grupo conformado por aficionados al estudio de asesinatos en la historia de la filosofÃ­a.', 'En una crÃ³nica periodÃ­stica, con motivo de un especial acerca de las muertes mÃ¡s curiosas de la historia.', 'En un seminario dirigido a historiadores especialistas en la vida de los personajes insignes del siglo XX.', 5, 3),
(2, 4, 'RESPONDA LA PREGUNTA 1 DE ACUERDO CON EL SIGUIENTE TEXTO', 'James Salter was a pilot in the United States Air Force. He abandoned the military profession in 1957 after the publication of his first novel, The Hunters. He is best known as a novelist, but during the sixties and seventies, he worked in film making. Salter made documentaries, wrote texts for films, and even was the director of a film called Three, starring Charlotte Rampling and Sam Waterston. In Passionate Falsehoods, which was adapted from Salterâ€™s book Burning the Days, published in The New Yorker in 1997, Salter tells the story of his life in film. Salterâ€™s time in the film world is both good and bad. In Rome, he met directors and stars. In New York, he explored the city with Robert Redford and enjoyed being famous. Deborah Treisman and Michael Agger have talked about Salter. Nick Paumgarten in The Last Book, describes Salterâ€™s opinion about his film career: â€œOf sixteen texts for movies, only four were popular. There was money, attractive women, and entrance into rooms where there were stories more for the dinner table than for the page.â€ Salter thought he was wasting his time. Perhaps he wasted his time in a larger artistic way, but it still makes for attractive reading. The Last Book is available to everyone in online stores.', '../image/enu_img/', '', '1. James Salter played an important part in the making of movies from', '1960 to 1979', '1960 to 1970', '1960 to 1985', ' 1970 to 1980', 5, 0),
(3, 2, 'A continuaciÃ³n se muestran los resultados de una encuesta que indagÃ³ sobre el parque automotor del transporte intermunicipal en Colombia.', '', '../image/enu_img/pregunta.PNG', 'Tomado de: Superintendencia de Puertos y Transporte (2009).', 'SegÃºn la informaciÃ³n anterior, es correcto afirmar que:', ' La mayor parte del parque automotor son automÃ³viles, camionetas y camperos.', 'La mitad del parque automotor corresponde a automÃ³viles, camionetas y camperos.', 'La mayor parte del parque automotor son buses, microbuses y busetas.', 'La mitad del parque automotor corresponde a buses, microbuses y busetas.', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respu` int(10) NOT NULL,
  `id_pregu` int(10) NOT NULL,
  `di_apre` int(10) NOT NULL,
  `respu_marcada` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `valor_pregu` int(3) NOT NULL,
  `respu_corre` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `id_resultado` int(10) NOT NULL,
  `di_apre` int(10) DEFAULT NULL,
  `total_respu` int(10) DEFAULT NULL,
  `correctas` int(10) DEFAULT NULL,
  `incorrectas` int(10) DEFAULT NULL,
  `puntaje` int(10) DEFAULT NULL,
  `total_puntaje` int(10) DEFAULT NULL,
  `fecha_prueba` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_doc` int(11) NOT NULL,
  `tipo_doc` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_doc`, `tipo_doc`) VALUES
(1, 'C&eacute;dula de ciudadan&iacute;a'),
(2, 'Tarjeta de identidad'),
(3, 'C&eacute;dula de extranjer&iacute;a'),
(4, 'N&uacute;mero ciego SENA'),
(5, 'Pasaporte'),
(6, 'Documento nacional de identificaci&oacute;n'),
(7, 'N&uacute;mero de identificaci&oacute;n tributaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento_admin`
--

CREATE TABLE `tipo_documento_admin` (
  `id_tipo_doc_admin` int(11) NOT NULL,
  `tipo_doc_admin` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento_admin`
--

INSERT INTO `tipo_documento_admin` (`id_tipo_doc_admin`, `tipo_doc_admin`) VALUES
(1, 'C&eacute;dula de ciudadan&iacute;a'),
(2, 'Tarjeta de identidad'),
(3, 'C&eacutedula de extranjer&iacute;a'),
(4, 'N&uacute;mero ciego SENA '),
(5, 'Pasaporte'),
(6, 'Documento nacional de identificaci&oacute:n'),
(7, 'N&uacute;mero de identificaci&oacute;n tributaria ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`di_admin`),
  ADD KEY `fk_id_tipo_doc_admin` (`id_tipo_doc_admin`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`di_apre`),
  ADD KEY `fk_id_tipo_doc` (`id_tipo_doc`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_mate`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregu`),
  ADD KEY `pk_id_mate` (`id_mate`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respu`),
  ADD KEY `id_pregu` (`id_pregu`),
  ADD KEY `fk_di_apre` (`di_apre`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `fk_di_apre_2` (`di_apre`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indices de la tabla `tipo_documento_admin`
--
ALTER TABLE `tipo_documento_admin`
  ADD PRIMARY KEY (`id_tipo_doc_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_mate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id_resultado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_documento_admin`
--
ALTER TABLE `tipo_documento_admin`
  MODIFY `id_tipo_doc_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_id_tipo_doc_admin` FOREIGN KEY (`id_tipo_doc_admin`) REFERENCES `tipo_documento_admin` (`id_tipo_doc_admin`);

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `fk_id_tipo_doc` FOREIGN KEY (`id_tipo_doc`) REFERENCES `tipo_documento` (`id_tipo_doc`);

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pk_id_mate` FOREIGN KEY (`id_mate`) REFERENCES `materia` (`id_mate`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_di_apre` FOREIGN KEY (`di_apre`) REFERENCES `aprendiz` (`di_apre`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_pregu`) REFERENCES `pregunta` (`id_pregu`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `fk_di_apre_2` FOREIGN KEY (`di_apre`) REFERENCES `aprendiz` (`di_apre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
