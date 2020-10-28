-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2020 a las 03:48:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `krazygames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `estilo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `ruta`, `img`, `titulo1`, `titulo2`, `titulo3`, `estilo`, `fecha`) VALUES
(1, 'sin-categoria', '/vistas/img/banner/web.jpg', '{\r\n\"texto\": \"Consulta de alimentación\",\r\n  \"color\": \"#fff\"\r\n}', '{\r\n\r\n\r\n\r\n\"texto\": \" 50%Off\",\r\n\r\n\r\n\r\n  \"color\": \"#fff\"\r\n\r\n\r\n\r\n}', '{\r\n\"texto\": \"Para más información : 3128828602\",\r\n  \"color\": \"#fff\"\r\n}', 'textoCentro', '2020-10-02 07:25:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `ruta`, `fecha`) VALUES
(1, 'JUEGOS', 'juegos', '2020-06-01 00:45:39'),
(2, 'HOBBIES', 'hobbies', '2020-06-01 00:45:39'),
(3, 'PRODUCTOS', 'productos-empresariales', '2020-06-04 22:54:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercio`
--

CREATE TABLE `comercio` (
  `id` int(11) NOT NULL,
  `impuesto` float NOT NULL,
  `envioNacional` float NOT NULL,
  `envioInternacional` float NOT NULL,
  `tasaMinimaNal` float NOT NULL,
  `tasaMinimaInt` float NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `clienteIdPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `llaveSecretaPaypal` text COLLATE utf8_spanish_ci NOT NULL,
  `modoPayu` text COLLATE utf8_spanish_ci NOT NULL,
  `merchantIdPayu` int(11) NOT NULL,
  `accountIdPayu` int(11) NOT NULL,
  `apiKeyPayu` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comercio`
--

INSERT INTO `comercio` (`id`, `impuesto`, `envioNacional`, `envioInternacional`, `tasaMinimaNal`, `tasaMinimaInt`, `pais`, `modoPaypal`, `clienteIdPaypal`, `llaveSecretaPaypal`, `modoPayu`, `merchantIdPayu`, `accountIdPayu`, `apiKeyPayu`) VALUES
(1, 19, 1, 2, 10, 15, 'CO', 'sandbox', 'AecffvSZfOgj6g1MkrVmz12ACMES2-InggmWCpU5CblR-z5WwkYBYjmLsh9yPRLuRape1ahjqpcJet4N', 'EAx1SVMHGV6MJKwl-pnOSzaJASlAINZdYRdS--wkgaPYLevcGw88V0PU_W_rg00xLkBknybCjsO_xzA0', 'sandbox', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `envio` int(11) NOT NULL,
  `metodo` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `pais` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_usuario`, `id_producto`, `envio`, `metodo`, `direccion`, `pais`, `fecha`) VALUES
(2, 68, 3, 2, 'pypal', '1234', '', '2020-10-27 19:51:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deseos`
--

CREATE TABLE `deseos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `barraSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `textoSuperior` text COLLATE utf8_spanish_ci NOT NULL,
  `colorFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `colorTexto` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` text COLLATE utf8_spanish_ci NOT NULL,
  `icono` text COLLATE utf8_spanish_ci NOT NULL,
  `redesSociales` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `barraSuperior`, `textoSuperior`, `colorFondo`, `colorTexto`, `logo`, `icono`, `redesSociales`, `fecha`) VALUES
(1, '#000000', '#ffffff', ' #238E23', '#ffffff', 'vistas/img/plantilla/logo1.png', 'vista/assets/img/plantilla/icono1.png', '[\r\n	{\"red\":\"fa-facebook\",\"estilo\":\"facebookColor\",\"url\":\"http://facebook.com/\"},\r\n	{\"red\":\"fa-youtube\",\"estilo\":\"youtubeColor\",\"url\":\"http://youtube.com/\"},\r\n	{\"red\":\"fa-twitter\",\"estilo\":\"twitterColor\",\"url\":\"http://twitter.com/\"},\r\n	{\"red\":\"fa-google-plus\",\"estilo\":\"googleColor\",\"url\":\"http://google.com/\"},\r\n	{\"red\":\"fa-instagram\",\"estilo\":\"instagramColor\",\"url\":\"http://instagram.com/\"},\r\n        {\"red\":\"fas fa-share\",\"estilo\":\"compartirColor\",\"url\":\"https://mail.google.com/mail/\"}\r\n]', '2020-10-02 07:25:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categorias` int(11) NOT NULL,
  `id_subCategoria` int(11) NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `titular` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `detalles` text COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `portada` text COLLATE utf8_spanish_ci NOT NULL,
  `vistas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `vistasGratis` int(11) NOT NULL,
  `ventasGratis` int(11) NOT NULL,
  `ofertaPorCartegorias` int(11) NOT NULL,
  `ofertaPorSubcategorias` int(11) NOT NULL,
  `oferta` int(11) NOT NULL,
  `precioOferta` decimal(10,0) NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `imgOferta` text COLLATE utf8_spanish_ci NOT NULL,
  `finOferta` datetime NOT NULL,
  `nuevo` int(11) NOT NULL,
  `peso` float NOT NULL,
  `entrega` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categorias`, `id_subCategoria`, `tipo`, `ruta`, `titulo`, `titular`, `descripcion`, `detalles`, `multimedia`, `precio`, `portada`, `vistas`, `ventas`, `vistasGratis`, `ventasGratis`, `ofertaPorCartegorias`, `ofertaPorSubcategorias`, `oferta`, `precioOferta`, `descuentoOferta`, `imgOferta`, `finOferta`, `nuevo`, `peso`, `entrega`, `fecha`) VALUES
(1, 1, 1, 'fisico', 'tarjetas-locas', 'Tarjetas Locas', 'Tablero de juego de mesa donde se usan baterías y se enfoca en perder peso', 'Tablero de juego de mesa donde se usan baterías y se enfoca en perder peso', '{\"Talla\": [40cmX50cm],\"Color\":[\"establecido\"],\"Marca\":null}', '[ 	 	{\"foto\":\"vistas/img/multimedia/tarjetaLocas/tablero.png\"}    ]', 29.999, 'vistas/img/productos/tarjetalocas/tablero.png', 4, 0, 0, 0, 0, 1, 1, '18990', 100, 'vistas/img/ofertas/tableroMuestas.png', '2020-06-09 13:00:15', 0, 1, 10, '2020-06-09 18:41:36'),
(2, 2, 2, 'fisico', 'hidroearth', 'HidroEarth', 'Es un hobby enfocado en personas que están interesadas en el cultivo y cuidado de peces en donde se vinculan  ', 'Es un hobby enfocado en persona que este interesado en cultivo y pezes en donde se binculan cada uno ', '{\"Talla\": [60cmX120cm]],\"Marca\":null}', '[ 	 	{\"foto\":\"vistas/img/multimedia/cultiboHidroponico/cultivo.png\"}    ]', 999.999, 'vistas/img/productos/cultiboHidroponico/cultivo.png', 5, 0, 0, 0, 0, 0, 0, '0', 0, '', '0000-00-00 00:00:00', 1, 1, 10, '2020-06-09 18:36:48'),
(3, 3, 3, 'fisico', 'buso', 'Buso', 'Buso o playera en donde esta el logo de la empresa', 'Buso o playera en donde esta el logo de la empresa', '{\"Talla\": [S,L,M],\"Color\": [\"blanco\"],\"Marca\":\"Krazy Games\"}', '[ 	 	{\"foto\":\"vistas/img/multimedia/camisas/buso.png\"}    ]', 0, 'vistas/img/productos/camisas/buso.png', 0, 0, 4, 0, 0, 0, 0, '0', 0, '', '0000-00-00 00:00:00', 0, 1, 10, '2020-06-09 02:41:30'),
(4, 3, 3, 'fisico', 'saco', 'Saco', 'Saco en donde esta el logo de la empresa', 'Saco en donde esta el logo de la empresa', '{\"Talla\": [S,L,M],\"Color\": [\"blanco\"],\"Marca\":\"Krazy Games\"}', '[ 	 	{\"foto\":\"vistas/img/multimedia/camisas/saco.png\"},  	{\"foto\":\"vistas/img/multimedia/saco/saco1.png\"}, 	 	{\"foto\":\"vistas/img/multimedia/saco/saco2.png\"}  ]', 0, 'vistas/img/productos/camisas/saco.png', 0, 0, 34, 0, 0, 0, 0, '0', 0, '', '0000-00-00 00:00:00', 0, 1, 10, '2020-06-09 02:41:43'),
(5, 3, 3, 'fisico', 'pocillo', 'Pocillo', 'Pocillo o vaso en donde esta el logo de la empresa', 'Pocillo o vaso en donde esta el logo de la empresa', '{\"Talla\": [estandar],\"Color\": [\"blanco\"],\"Marca\":\"Krazy Games\"', '[ 	 	{\"foto\":\"vistas/img/multimedia/pocillo/pocilloBlanco.png\"}    ]', 0, 'vistas/img/productos/pocillo/pocilloBlanco.png', 0, 0, 1, 0, 0, 0, 0, '0', 0, '', '0000-00-00 00:00:00', 0, 1, 10, '2020-06-09 02:41:51'),
(6, 3, 3, 'fisico', 'bolso', 'Bolso', 'Bolso pequeño o tula  en donde esta el logo de la empresa', 'Bolso pequeño o tula  en donde esta el logo de la empresa', '{\"Talla\": [mediana],\"Color\": [\"blanco\"],\"Marca\":\"Krazy Games\"}', '[ 	 	{\"foto\":\"vistas/img/multimedia/bolso/bolsoBlanco.png\"}    ]', 0, 'vistas/img/productos/bolso/bolsoBlanco.png', 0, 0, 0, 0, 0, 0, 0, '0', 0, '', '0000-00-00 00:00:00', 0, 1, 10, '2020-06-09 02:42:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `imgFondo` text COLLATE utf8_spanish_ci NOT NULL,
  `tipoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `imgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloImgProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `estiloTextoSlide` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo3` text COLLATE utf8_spanish_ci NOT NULL,
  `descuentoOferta` int(11) NOT NULL,
  `botonVerProducto` text COLLATE utf8_spanish_ci NOT NULL,
  `url` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `descuentoOferta`, `botonVerProducto`, `url`, `fecha`) VALUES
(1, 'vistas/img/slide/default/fondo1.png', 'slideOpcion1', 'vistas/img/slide/slide1/tarjetasLocas.png', '{\"top\": \"5%\",\"left\": \"15%\", \"width\": \"25%\"}', '{\"top\":\"25%\",\"width\":\"40%\",\"left\":\"\", \"right\" : \"4%\"}', '{\"color\":\"#ffe\",\"font-size\":\"23px\",\"texto\":\"tarjetas locas\"}', '{\"texto\":\"para todas las edades \",\"color\":\"#999\",\"font-size\":\"24px\"}', '{\"texto\":\"\",\"color\":\"#888\",\"font-size\":\"35px\"}', 40, '<button class=\"btn btn-default backColor text-uppercase\"data-toggle=\"tooltip\" title=\"saber mas \">\r\n\r\n							VER PRODUCTO <span class=\"fa fa-chevron-right\"></span>\r\n\r\n					 </button>\r\n', 'tarjetas-locas', '2020-10-02 07:28:50'),
(2, 'vistas/img/slide/default/fondo1.png', 'slideOpcion2', 'vistas/img/slide/slide2/riego.png', '{\"top\": \"5%\",\"left\": \"15%\", \"width\": \"35%\"}', '{\"top\":\"25%\",\"width\":\"40%\",\"left\" : \"\",\"right\":\"5%\"}', '{\"texto\":\"hidroEarth\",\"color\":\"#ffe\",\"font-size\":\"23px\"}', '{\"texto\":\" para pasar un buen rato\",\"color\":\"#999\",\"font-size\":\"26px\"}', '{\"texto\":\"\",\"color\":\"#888\",\"font-size\":\"35px\"}', 0, '<button class=\"btn btn-default backColor text-uppercase\" data-toggle=\"tooltip\" title=\"saber mas\">\r\n\r\n							VER PRODUCTO <span class=\"fa fa-chevron-right\"></span>\r\n\r\n					 </button>\r\n', 'hidroearth', '2020-10-02 07:28:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `subcategoria` text COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `subcategoria`, `id_categoria`, `ruta`, `fecha`) VALUES
(1, 'Juegos de mesa', 1, 'juegos-de-mesa', '2020-09-16 18:32:45'),
(2, 'Pasatiempos', 2, 'pasatiempos', '2020-09-16 18:32:52'),
(3, 'Productos empresariales', 3, 'productos-gratis', '2020-09-16 18:32:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `emailIncripter` text COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` text COLLATE utf8_spanish_ci NOT NULL,
  `modo` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `email`, `emailIncripter`, `ubicacion`, `modo`, `foto`, `verificacion`, `fecha`) VALUES
(39, 'pase', 'dbcff85b4ad32c7ee6e56b33f9c687e6', 'luci@gmail.com', 'daf260a772918dcbceaf746b7c7617a5', '4ba36d23a78c7393b4900ef38019d8ff', 'directo', '', 1, '2020-10-04 03:11:34'),
(40, 'paso', 'e10adc3949ba59abbe56e057f20f883e', 'alirayopuches@gmail.com', 'fbcb39e466310924e1e60a9f7e0a4750', '1bbd886460827015e5d605ed44252251', 'directo', '', 0, '2020-10-06 21:02:15'),
(42, 'pedro', '81dc9bdb52d04dc20036dbd8313ed055', 'pedro12@gmail.com', '17e95f8a134f994bacfcf5da2859ebaf', '7fa8282ad93047a4d6fe6111c93b308a', 'directo', '', 1, '2020-10-13 21:31:02'),
(43, 'pedro', '81dc9bdb52d04dc20036dbd8313ed055', 'pedro12@gmail.com', '17e95f8a134f994bacfcf5da2859ebaf', '7fa8282ad93047a4d6fe6111c93b308a', 'directo', '', 1, '2020-10-13 21:32:30'),
(44, 'pedro', '81dc9bdb52d04dc20036dbd8313ed055', 'pedro12@gmail.com', '17e95f8a134f994bacfcf5da2859ebaf', '7fa8282ad93047a4d6fe6111c93b308a', 'directo', '', 1, '2020-10-13 21:32:40'),
(45, 'pee', '81dc9bdb52d04dc20036dbd8313ed055', 'paro@gmail.com', 'fbe4af98fba0a392228f91045c6cdf93', 'b2ca678b4c936f905fb82f2733f5297f', 'directo', '', 1, '2020-10-15 20:21:02'),
(46, 'pee', '202cb962ac59075b964b07152d234b70', 'paro1@gmail.com', '961b68826143a2ac2b45dfe8ce222f7e', 'b2ca678b4c936f905fb82f2733f5297f', 'directo', '', 1, '2020-10-15 20:26:49'),
(47, 'pee', '81dc9bdb52d04dc20036dbd8313ed055', 'paro2@gmail.com', 'adf596c440ea9dcd164aabd235f57660', 'b2ca678b4c936f905fb82f2733f5297f', 'directo', '', 1, '2020-10-15 20:37:11'),
(48, 'per', '38b3eff8baf56627478ec76a704e9b52', 'per3@gmail.com', '20b12b3afafd81757f329b6c35f15ad2', '698d51a19d8a121ce581499d7b701668', 'directo', '', 1, '2020-10-15 21:46:12'),
(49, 'per', 'b59c67bf196a4758191e42f76670ceba', 'per4@gmail.com', 'af552b69f9792a7c32906c99c64aba6f', '698d51a19d8a121ce581499d7b701668', 'directo', '', 1, '2020-10-15 21:46:38'),
(51, 'SHELDON', '827ccb0eea8a706c4c34a16891f84e7b', 'sheldoncuper@gmail.com', '7b329bf98bf8437963eb20e7881068ce', '1111', 'directo', '', 0, '2020-10-26 01:01:05'),
(53, 'ruth', '81dc9bdb52d04dc20036dbd8313ed055', 'ruth@gmail.com', '93c53ce21582507d7cb97a308feab5c3', '1234', 'directo', '', 0, '2020-10-26 01:35:15'),
(56, 'ruth', '81dc9bdb52d04dc20036dbd8313ed055', 'ruth1@gmail.com', '7134a3caf2bde2e5b0d44df11e32b0e8', '', 'directo', 'vista/assets/img/usuarios/56/881.jpg', 0, '2020-10-26 19:04:18'),
(57, 'peres', '81dc9bdb52d04dc20036dbd8313ed055', 'peres1@gmail.com', 'fa02eab7fb7a41ddb1d55eaad33a1ac7', '1234', 'directo', '', 1, '2020-10-26 02:15:54'),
(58, 'julian', '81dc9bdb52d04dc20036dbd8313ed055', 'juli@gmail.com', 'f7c6fac0a0d33cf9d6d46c9ffa214ff3', '1234', 'directo', '', 1, '2020-10-26 02:20:54'),
(59, 'SOL', '827ccb0eea8a706c4c34a16891f84e7b', 'sol@gmail.com', 'ac4a856191e7e18b51c9e2dd152f1bb9', '12345', 'directo', '', 0, '2020-10-26 16:55:33'),
(60, 'ali', '827ccb0eea8a706c4c34a16891f84e7b', 'ali@gmail.com', 'd4384c2e7aab2c22eb805c0f48852f23', '12345', 'directo', '', 1, '2020-10-26 18:37:44'),
(61, 'snau', '827ccb0eea8a706c4c34a16891f84e7b', 'sana@gmail.com', '4a4380ebe098ca0c3c105deac90cd0cf', '12345', 'directo', '', 1, '2020-10-26 18:38:50'),
(62, 'alexander', '827ccb0eea8a706c4c34a16891f84e7b', 'alex@gmail.com', '0312d0d39585741666c19c217ed769f7', '12345', 'directo', '', 0, '2020-10-26 20:25:07'),
(63, 'pato', '827ccb0eea8a706c4c34a16891f84e7b', 'ganzo@gmail.com', '219d83049cd4c3c7ab7671606fb1618f', '12345', 'directo', '', 1, '2020-10-27 10:32:56'),
(64, 'paso', '827ccb0eea8a706c4c34a16891f84e7b', 'pasa@gmail.com', '39e2c8cea220e1ddb102bd399fe4b0f1', '12345', 'directo', '', 1, '2020-10-27 10:37:33'),
(65, 'qwq', '827ccb0eea8a706c4c34a16891f84e7b', 'qwq@gmail.com', '00026cb3b296a45b0bbcb943bd0d2b72', '12345', 'directo', '', 1, '2020-10-27 10:59:11'),
(66, 'petro', '827ccb0eea8a706c4c34a16891f84e7b', 'qw@gmail.com', '22d609327c246a141a3879bbaead7562', '12345', 'directo', '', 1, '2020-10-27 11:13:58'),
(67, 'qwe', '827ccb0eea8a706c4c34a16891f84e7b', 'qwe@gmail.com', 'd4685fa5b1645e8cd17b4c558e1465c4', '12345', 'directo', '', 1, '2020-10-27 11:19:22'),
(68, 'alexa', '827ccb0eea8a706c4c34a16891f84e7b', 'alexa@gmail.com', '6a3de0c8ea8e88bcdd4428e0a7984145', '12345', 'directo', '', 0, '2020-10-27 19:49:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `deseos`
--
ALTER TABLE `deseos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comercio`
--
ALTER TABLE `comercio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `deseos`
--
ALTER TABLE `deseos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=982;

--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
