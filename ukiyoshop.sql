-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2017 a las 00:07:34
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ukiyoshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_adm` varchar(10) NOT NULL,
  `Nombre_adm` varchar(10) NOT NULL,
  `Apellido_adm` varchar(10) NOT NULL,
  `Contrasena_adm` varchar(20) NOT NULL,
  `Direc` varchar(20) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` varchar(25) NOT NULL,
  PRIMARY KEY (`ID_adm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_adm`, `Nombre_adm`, `Apellido_adm`, `Contrasena_adm`, `Direc`, `Telefono`, `Correo`) VALUES
('1024\r\n', 'dl', 'gf', 'yolo', 'calle13', 32223, 'da@hotmail.es'),
('1024594815', 'dl', 'gf', 'yolo', 'calle13', 2147483647, 'da@hotmail.es'),
('9087765', 'Andrea', 'Perez', '0%7u8', 'calle 3', 321566, 'anam@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canjedepuntos`
--

CREATE TABLE IF NOT EXISTS `canjedepuntos` (
  `Id_canje` varchar(10) NOT NULL,
  `Producto_Canjear` varchar(50) DEFAULT NULL,
  `ID_puntos` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_canje`),
  KEY `ID_puntos` (`ID_puntos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_cliente` varchar(20) NOT NULL,
  `Nombre_cliente` varchar(20) NOT NULL,
  `Apellido_cliente` varchar(20) NOT NULL,
  `Contrasena_cli` char(200) NOT NULL,
  `Direccion` varchar(20) DEFAULT NULL,
  `Telefono` int(15) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `Nombre_cliente`, `Apellido_cliente`, `Contrasena_cli`, `Direccion`, `Telefono`, `Correo`) VALUES
('1020811756', 'Carlos', 'Jimenez', 'los123b1', 'calle 4', 1543672, 'cales@gmail.com'),
('1024594815', 'Dilo', 'casas', 'yolo', 'carrera 70g', 2147483647, 'das@gmail.com'),
('1024596266', 'Didier', 'Cancelado', '123456', 'calle19', 542542761, 'didier@gmail.com'),
('123456', 'Diego', 'Cardenas', '123456', 'Calle 34', 2342321, 'dalejo@gmail.com'),
('193715', 'Andres', 'Torres', '1234', 'Calle 22', 2343324, 'carlos@gmail.com'),
('3456', 'Carlos', 'Puello', '12345', 'calle 9', 4563421, 'caj@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroventa` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` double NOT NULL,
  `cantidad` text NOT NULL,
  `subtotal` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) VALUES
(1, 1, 'Goku', '2.jpg', 150000, '1', 150000),
(2, 1, 'shenglong', '7.jpg', 100000, '3', 300000),
(3, 2, 'Goku', '2.jpg', 150000, '1', 150000),
(4, 3, 'Buso de batman', 'eee.jpg', 40000, '1', 40000),
(5, 4, 'Buso de batman', 'eee.jpg', 40000, '1', 40000),
(6, 5, 'Goku', '2.jpg', 150000, '1', 150000),
(7, 5, 'Hyoga', '5.jpg', 20000, '1', 20000),
(8, 6, 'Peluche de gabumon', 'gab.jpg', 15000, '1', 15000),
(9, 6, 'Frezeer', '1.jpg', 35000, '1', 35000),
(10, 6, 'Orochimaru ', '13.jpg', 70000, '1', 70000),
(11, 7, 'shenglong', '7.jpg', 100000, '1', 100000),
(12, 8, 'bryan diego', '8.png', 50000, '1', 50000),
(13, 8, 'esfera de 4 estrellas', '4.jpg', 16000, '1', 16000),
(14, 8, 'Maleta de BMO', 'hora.jpg', 20000, '1', 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `ID_Detalle` varchar(10) NOT NULL,
  `Fecha_Compra_Producto` date NOT NULL,
  `Valor_Costo` decimal(10,0) NOT NULL,
  `Valor_Venta` decimal(10,0) NOT NULL,
  `Cantidad_Producto_Ingresado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `ID Factura` varchar(10) NOT NULL,
  `Impuestos` decimal(10,0) NOT NULL,
  `Fecha_Compra` date NOT NULL,
  `Monto` decimal(10,0) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`ID Factura`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giro`
--

CREATE TABLE IF NOT EXISTS `giro` (
  `ID_Giro` varchar(10) NOT NULL,
  `Numero_transferencia` varchar(10) NOT NULL,
  `Cantidad_abono` decimal(10,0) NOT NULL,
  `Precio_producto` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `Mensaje_correo` char(50) DEFAULT NULL,
  `Fecha_Vencimiento` date DEFAULT NULL,
  `Monto` decimal(10,0) DEFAULT NULL,
  `Codigo_producto` varchar(10) NOT NULL,
  `ID_oferta` varchar(10) NOT NULL,
  `ID_cliente` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_oferta`),
  KEY `ID_cliente` (`ID_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
(1, 'Goku', 'Goku normal de traje ermitaño naranja y azul oscuro', '2.jpg', 150000),
(2, 'Frezeer', 'frezzer primera transformacion fondo namekusein', '1.jpg', 35000),
(3, 'esfera de 4 estrellas', 'esfera del dragon de 4 cuatro estrellas con caja base blanca ', '4.jpg', 16000),
(4, 'shenglong', 'shenglong de la tierra con las 7 esferas del dragon', '7.jpg', 100000),
(5, 'Frezeer', 'Freezer pop tercera transformacion', '9.jpg', 65000),
(6, 'shun', 'shun con armadura rosada', '3.jpg', 20000),
(7, 'Hyoga', 'Hyoga con armadura del cisne ', '5.jpg', 20000),
(8, 'Seiya', 'Seiya con armadura de pegaso', '6.jpg', 20000),
(9, 'Luffy y Trafalgar', 'Luffy y Trafalgar con base redonda', '15.jpg', 140000),
(10, 'Luffy', 'Luffy de camisa roja con pantaloneta azul y sombrero de paja', '12.jpg', 110000),
(11, 'Gabumon & Yamato', 'Gabumon & Yamato de traje del anime con base azul', '10.jpg', 50000),
(12, 'Agumon & Taichi', 'Agumon & Taichi con trajes del anime y base azul', '11.jpg', 50000),
(13, 'Angemon & T.K', 'Angemon & T.K con trajes del anime y con una base azul', '15.jpg', 50000),
(14, 'Orochimaru ', 'Orochimaru  con serpiente alrededor y espada', '13.jpg', 70000),
(15, 'Naruto', 'Naruto con rollo abierto y kunay', '14.jpg', 170000),
(16, 'Hatsune Miku', 'Hatsune Miku con traje de corbata y minifada', '16.jpg', 120000),
(17, 'Buso de one punch man', 'chaqueta negra con stampado de one punch man y capota', 'bbb.png', 33000),
(18, 'Buso de bleach', 'Buso negro con estampado de bleach blanco y capota', 'ccc.jpg', 40000),
(19, 'Buso de batman', 'Buso negro con el logo de batman y capota', 'eee.jpg', 40000),
(20, 'Buso de dragon ball z', 'Buso de color naranja con simbolo de el ermitaño', 'fff.jpg', 50000),
(21, 'Buso de tokio ghoul', 'Buso de negro con rojo capota y estampado de kaneki', 'ggg.jpg', 43500),
(22, 'Buso de luffy', 'Buso negro con capota y estampado de luffy', 'hhh.jpg', 38000),
(23, 'Buso de dead pool', 'Buso rojo con capota y estampdo de dead pool', 'iii.jpg', 42000),
(24, 'Buso de kaneky', 'Buso negro con estampado de kaneky', 'jjj.jpg', 46000),
(25, 'Buso de clan uchiha', 'Buso negro con gris capota y con los simbolos del clan uchija y amateraksu', 'kkk.jpg', 53000),
(26, 'Buso de marca de la muerte', 'Buso negro con gris con estampdo del simbolo de la marca de la muerte', 'lll.jpg', 45000),
(27, 'Buso de barba blanca', 'Buso gris con estampado de barba blanca de one piece', 'mmm.jpg', 52400),
(28, 'Buso de ataque de titanes', 'Buso verde con simbolo de ataque de titanes', 'nnn.jpg', 44000),
(29, 'Buso de tokio ghoul', 'Buso blanco y negro con estampado de tokio ghoul', 'ooo.jpg', 50000),
(30, 'Buso de amateraksu', 'Buso de  clor negro y gris con simbolos de amaterasu de color rojo', 'uuu.jpg', 43000),
(31, 'Buso de fair tails', 'Buso naranja y negro con capota y capota con estampado del logo de fairs tails', 'xD.jpg', 45000),
(32, 'Buso de panda', 'Buso blanco y negro con capota y estampado de cara de un panda', 'xxx.jpg', 65000),
(33, 'Maleta de ataque de titanes', 'Maleta beige de taque de titanes', 'aot.jpg', 25000),
(34, 'Maleta de one piece ', 'Maleta beige con azul y estampado de luffy', 'mochila.jpg', 25000),
(35, 'Maleta de de dead pool', 'Maleta roja con negro de con cara de dead pool', 'dead.jpg', 24000),
(36, 'Maleta de trafalgar', 'Maleta color azul con estampado de trafalgar', 'trafal.jpg', 25000),
(37, 'Maleta de naruto', 'Maleta beige con azul y estampado de naruto', 'naru.jpg', 24000),
(38, 'Maleta de sword art online', 'Maleta azul con gris con stampado de kirito y asuna', 'sao.jpg', 27000),
(39, 'Maleta de BMO', 'Maleta de el personaje bmo', 'hora.jpg', 20000),
(40, 'maleta de one piece', 'Maleta azul con el simbolo de los piratatas del sombrero de paja', 'piece.jpg', 26000),
(41, 'Maleta de code geas', 'Maleta negra con estampado blanco de code geas', 'code.jpg', 30000),
(42, 'Maleta de yu-gi-oh', 'Maleta con estampado de los personajes principales de yu-gi-oh', 'stf.jpg', 35000),
(43, 'Maleta de tokio ghoul', 'Maleta negra con estampado de kaneki de tokio ghoul', 'yugi.jpg', 24000),
(44, 'Maleta de dragon ball z', 'Maleta naranja con el simbolo de la tortuga', 'poke.jpg', 28000),
(45, 'Maleta de pandora hearts', 'Maleta negra con estampado de pandora hearts', 'dra.jpg', 35000),
(46, 'Maleta de doraemon', 'Maleta azul clarito con cara de doraemon', 'dora.jpg', 35000),
(47, 'Maleta de naruto', 'Maleta de color auroro borial con estampado de  sharingan', 'naru2.jpg', 26000),
(48, 'Maleta de bleach', 'Maleta negra con estampado de la mascar de blaech ', 'ble.jpg', 26000),
(49, 'Peluche de mew', 'Peluche rosa del pokemon legendario mew', 'me.jpg', 30000),
(50, 'Peluche de cindaquil', 'Peluche de cindaquil normal', 'ci.jpg', 25000),
(51, 'Peluche de alakazam', 'Peluche de lakazam normal', 'al.jpg', 20000),
(52, 'Peluche de umbrion', 'Peluche de umbrion normal', 'um.jpg', 22000),
(53, 'Peluche de mega venasaur', 'Peluche de mega venasaur normal', 'ven.jpg', 40000),
(54, 'Peluche de togepi', 'Peluche de togepi normal', 'to.jpg', 18000),
(55, 'Peluche de pikachu', 'Peluche de pikachu dormido', 'pi.jpg', 32000),
(56, 'Peluche de inuyasha', 'Peluche de inuyasha con saco de pelo de las ratas de fuego', 'inuyasha.jpg', 50000),
(57, 'Peluche de biyomon', 'Peluche de biyomon normal', 'yo.jpg', 15000),
(58, 'Peluche de gomamon', 'Peluche de gomamon normal', 'm.jpg', 15000),
(59, 'Peluche de agumon ', 'Peluche de agumon normal', 'ag.jpg', 15000),
(60, 'Peluche de gabumon', 'Peluche de gabumon normal', 'gab.jpg', 15000),
(61, 'Peluche de rocket racoon', 'Peluche de rocket racoon con armadura narnja', 'ro.jpg', 15000),
(62, 'Peluche de chooper', 'Peluche de chooper con sombrero azul', 'ch.jpg', 35000),
(63, 'peluche de donatello', 'Peluche de la tortuga ninja donatello', 'don.jpg', 45000),
(64, 'Peluche de kirby', 'Peluche de kirby rosa', 'kir.jpg', 35000),
(65, 'Billetera Thw Walking Dead', 'Billetera con cadena saga The Walking Dead', 'walk.jpg', 40000),
(66, 'Billetera de goku ss4', 'Billetera de goku ss4 y de color negro', 'gokuf4.jpg', 24000),
(67, 'Billetera de jake', 'Billetera de jake el perro magico', 'hora1.jpg', 24000),
(68, 'Billetera de fin el humano', 'Billetera de fin el humano con fondo del mundo ooo', 'hora2.jpg', 35000),
(69, 'Billetra de batman', 'Billetera de batman planeando', 'batman.jpg', 24000),
(70, 'Billetera de luffy', 'Billetera de luffy con fondo azul', 'luf.jpg', 26000),
(71, 'Biletera de minecraft', 'Billetera de stive con un paisaje de fondo', 'mine.jpg', 20000),
(72, 'Billetera de one punch man', 'Billetera de saitam con un fondo amarillo', 'onepun.jpg', 26000),
(73, 'Billetera de anime raro', 'Billetera de anime raro con fondo negro', 'nose.jpg', 20000),
(74, 'Billetera de naruto', 'Billetera de naruto modo senin con fondo azul', 'naru1.jpg', 30000),
(75, 'Billetera de pikachu', 'Billetera de pikachu con gorra y fondo de poke balls y pokemons', 'Pika.jpg', 24000),
(76, 'Billetera de goku ss dios azul', 'Billetera de goku ss dios azul con fondo de l unforme de la tortuga', 'gokuazul.jpg', 24000),
(77, 'Billetera de pikachu y raichu', 'Billetera de pikachu y raichu con fondo amarillo', 'pika2.jpg', 35000),
(78, 'Billetera de jack', 'Billetera de jack con fondo de calaveras', 'jack2.jpg', 35000),
(79, 'Billetera de roronoa zoro', 'Billetera de fondo ver con roronoa zoro', 'zor.jpg', 26000),
(80, 'Billetera de goku nino', 'Billetera de goku en la nube voladora de fondo naranja', 'chikis.jpg', 26000),
(82, 'bryan diego', 'amarillo', '8.png', 50000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE IF NOT EXISTS `puntos` (
  `ID_puntos` varchar(10) NOT NULL,
  `Fecha_Vencimiento` date NOT NULL,
  `Cantidad_puntos` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`ID_puntos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canjedepuntos`
--
ALTER TABLE `canjedepuntos`
  ADD CONSTRAINT `canjedepuntos_ibfk_1` FOREIGN KEY (`ID_puntos`) REFERENCES `puntos` (`ID_puntos`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
