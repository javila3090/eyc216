-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-01-2019 a las 02:57:49
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eyc216`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agreements`
--

CREATE TABLE `agreements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `agreements`
--

INSERT INTO `agreements` (`id`, `name`, `email`, `phone`, `commune`, `address`, `company`, `comments`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Julio César Avila', 'javila3090@gmail.com', '972374655', 'Quinta Normal', 'Cordova y Figueroa 1144', 'Cargofive', 'Testing', '2018-08-08 20:34:40', '2018-08-07 00:08:57', '2018-08-09 00:34:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_target` int(11) UNSIGNED DEFAULT NULL,
  `banner_type_id` int(10) UNSIGNED NOT NULL,
  `icon_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `image`, `caption`, `title`, `subtitle`, `button`, `button_target`, `banner_type_id`, `icon_id`, `created_at`, `updated_at`) VALUES
(35, 'uploads/banners/lm_vinatamm.jpg', '<p>&nbsp;</p>', 'Viña Tamm', NULL, NULL, NULL, 4, NULL, '2018-07-23 21:33:20', '2018-07-23 21:33:20'),
(37, 'uploads/banners/lm_lipocero.png', '<p>&nbsp;</p>', 'Lipocero', NULL, NULL, NULL, 4, NULL, '2018-07-23 21:33:51', '2018-07-23 21:33:51'),
(38, 'uploads/banners/lm_vitamedica.png', '<p>&nbsp;</p>', 'Vitamedica', NULL, NULL, NULL, 4, NULL, '2018-07-23 21:34:03', '2018-07-23 21:34:03'),
(39, 'uploads/banners/lm_tamm_fruit.jpg', '<p>&nbsp;</p>', 'Tamm Fruit', NULL, NULL, NULL, 4, NULL, '2018-07-23 21:34:29', '2018-07-23 21:34:29'),
(40, 'uploads/banners/masoneria-inglesa-chile.jpg', '<p>Para obtener más información sobre la masonería, haga clic en el enlace a continuación.</p>', 'Sobre nosotros', NULL, 'Saber más', 1, 6, 18, '2018-07-23 22:06:02', '2019-01-25 23:38:08'),
(41, 'uploads/banners/salon-mason.jpg', '<p>Acceda a las últimas noticias relacionadas a nuestra respetada logia y a la masonería en Chile.</p>', 'Noticias', NULL, 'Noticias', 1, 6, 17, '2018-07-23 22:09:42', '2019-01-25 23:41:00'),
(43, 'uploads/banners/masoneria-inglesa.jpg', '<p>Si usted es miembro de la logia, puede ir al área de acceso haciendo clic en el siguiente botón.</p>', 'Miembros', NULL, 'Ingresar', 1, 6, 21, '2018-07-23 22:10:29', '2019-01-25 23:37:40'),
(44, NULL, '<p><strong>LM CONSULTING</strong> &nbsp;ofrece servicios tributarios para ayudar a los clientes a crecer, analizando con detenimiento sus necesidades, organizando sus recursos y aportando nuestra experiencia y conocimiento al desarrollo de su negocio, proporcionando un apoyo real a las empresas para que están puedan cumplir exitosamente lo exigido por la normativa tributaria. &nbsp;</p><p>Estos son algunos de los servicios en los cuales nuestra experiencia en impuestos puede agregar valor a su organización, mediante el trabajo de un equipo multidisciplinario de profesionales con amplia visión, conocimiento y experiencia.</p><ol><li>Asesoramiento Tributario</li><li>Declaración de Impuestos Mensuales</li><li>Planificación Tributaria</li><li>Diagnostico de Cumplimiento Tributario</li><li>Defensas Tributarias</li><li>Auditoría</li></ol><p>Asesoría sobre regímenes tributarios Atribuido (14A), Parcialmente Integrado (14B), Renta Presunta y Tributación Simplificada (14 Ter).&nbsp;</p>', 'Servicios tributarios', NULL, NULL, NULL, 2, 4, '2018-07-24 02:04:29', '2018-07-24 02:35:12'),
(45, NULL, '<p>La contabilidad se convierte en una herramienta básica que permite al empresario tomar decisiones sobre su negocio.</p><ol><li>Asesoría Contable</li><li>Inicio de actividades</li><li>Contabilidad de flujos financieros</li><li>Calculo de impuestos mensuales (F/29 y F/50)</li><li>Informes financieros</li><li>Determinación de Renta Liquida Imponible</li><li>Calculo y declaración de impuestos (F/22)</li></ol>', 'Servicios contables', NULL, NULL, NULL, 2, 10, '2018-07-24 02:44:18', '2018-07-24 02:44:18'),
(49, NULL, '<p>&nbsp;</p>', 'Prueba', NULL, NULL, NULL, 3, 15, '2018-07-26 06:27:35', '2018-07-26 06:27:44'),
(50, NULL, '<p>Todo nuestro personal tiene el mas alto nivel de competencia y calidad de servicio.</p>', 'Porque somos especialistas acreditados', NULL, NULL, NULL, 7, NULL, '2018-08-02 19:37:03', '2018-08-02 19:37:03'),
(51, NULL, '<p>El costo para el paciente es más bajo que los niveles 2 y 3 de atención.</p>', 'Porque somos nivel 1 de atención', NULL, NULL, NULL, 7, NULL, '2018-08-02 19:37:51', '2018-08-02 19:37:51'),
(52, NULL, '<p>Nuestros profesionales son comprometidos, serios y responsables.</p>', 'Porque estamos preocupados por rehabilitar al paciente', NULL, NULL, NULL, 7, NULL, '2018-08-02 19:38:47', '2018-08-02 19:38:47'),
(54, 'uploads/banners/vitametica_areas_k_1.jpg', '<p>Kinesiterapia en Traumatología, Ortopedia y Ergonomía</p>', 'Área 1', NULL, NULL, NULL, 11, NULL, '2018-08-07 02:32:58', '2018-08-07 02:32:58'),
(55, 'uploads/banners/vitametica_areas_k_2.jpg', '<p>Kinesiterapia en el área deportiva</p>', 'Área 2', NULL, NULL, NULL, 11, NULL, '2018-08-07 02:33:24', '2018-08-07 02:33:24'),
(56, 'uploads/banners/vitametica_areas_k_4.jpg', '<p>Kinesoterapia Respiratoria</p>', 'Área 3', NULL, NULL, NULL, 11, NULL, '2018-08-07 03:03:03', '2018-08-07 03:03:20'),
(57, 'uploads/banners/vitametica_areas_k_5.jpg', '<p>Kinesoterapia en enfermedades neurológicas</p>', 'Área 4', NULL, NULL, NULL, 11, NULL, '2018-08-07 03:03:50', '2018-08-07 03:03:50'),
(58, 'uploads/banners/vitametica_areas_k_6.jpg', '<p>Kinesoterapia en el adulto mayor y geriátrico</p>', 'Área 5', NULL, NULL, NULL, 11, NULL, '2018-08-07 03:04:33', '2018-08-07 03:04:33'),
(59, 'uploads/banners/vitametica_areas_k_7.jpg', '<p>Kinesoterapia de la mujer</p>', 'Área 6', NULL, NULL, NULL, 11, NULL, '2018-08-07 03:05:02', '2018-08-07 03:05:02'),
(60, 'uploads/banners/vitametica_areas_k_8.jpg', '<p>Kinesoterapia en unidad de paciente crítico</p>', 'Área 7', NULL, NULL, NULL, 11, NULL, '2018-08-07 03:05:36', '2018-08-07 03:05:36'),
(63, 'uploads/banners/vitamedica_tips_3.jpg', '<p><strong>Como tratar y prevenir los dolores de espalda</strong></p><p>En la mayoría de los casos, el dolor de espalda se origina por contractura muscular, traumatismo o deformidad de la columna. Las personas que padecen dolor de espalda lo describen con frecuencia como una sensación lenta y continua o aguda y punzante que causa rigidez y dificultad al estar quieto o al moverse.</p>', 'Consejo 3', NULL, NULL, NULL, 10, NULL, '2018-08-07 03:19:54', '2018-08-07 03:19:54'),
(64, 'uploads/banners/vitamedica_tips_4.jpg', '<p><strong>Cervicalgia o Dolor Cervical</strong></p><p>Cervicalgia significa simplemente “dolor en la zona cervical de la columna”. Generalmente el dolor proviene de problemas mecánicos de las articulaciones y músculos de las vértebras cervicales. Cuales son las causas que producen el dolor cervical? Malas posturas, traumatismos, estrés y tensión nerviosa, esfuerzos, etc.</p>', 'Consejo 4', NULL, NULL, NULL, 10, NULL, '2018-08-07 03:20:18', '2018-08-07 03:20:18'),
(65, 'uploads/banners/vitamedica_tips_5.jpg', '<p><strong>Lumbagia en el embarazo</strong></p><p>La Lumbalgia en el embarazo se debe al cambio de la postura corporal. Se altera el centro de gravedad del cuerpo a consecuencia del embarazo.El cuerpo ha de adaptarse al embarazo y surgen mecanismos articulares y musculares compensatorios de la columna vertebral, el centro de gravedad que el cuerpo tenía antes del embarazo cambia.</p>', 'Consejo 5', NULL, NULL, NULL, 10, NULL, '2018-08-07 03:20:44', '2018-08-07 03:20:44'),
(66, NULL, '<p><strong>Cuello y cabeza</strong></p><ul><li>Dolor de cabeza asociado con dolor o rigidez de cuello</li><li>El dolor normalmente se sitúa en la parte posterior de la cabeza y puede sentirse en la frente o detrás de los ojos</li><li>Normalmente es unilateral y es constante, sordo, con tensión o punzadas</li><li>Se puede agravar o presentarse después de ciertos movimientos del cuello o de haber mantenido en una posición el cuello durante cierto tiempo</li><li>El dolor de cabeza puede durar desde horas a días</li><li>Puede asociarse al estrés</li></ul>', 'Síntoma 1', NULL, NULL, NULL, 9, NULL, '2018-08-07 03:31:04', '2018-08-07 03:36:50'),
(67, NULL, '<p><strong>Espalda</strong></p><ul><li>El malestar que se localiza en la parte baja de la espalda o cintura.</li><li>Normalmente aparece a partir de los cuarenta años, aunque puede surgir en cualquier etapa de la vida.</li><li>un dolor persistente en la zona lumbar baja, identificada como la parte posterior de la cintura, que se desencadena cuando se permanece de pie y mejora notablemente estando acostado en la cama</li><li>Este malestar también puede percibirse en la zona inguinal incluso en los genitales, la parte de atrás del glúteo, en la cara posterior y lateral del muslo y menos frecuentemente, en la pantorrilla y talón.</li></ul>', 'Síntoma 2', NULL, NULL, NULL, 9, NULL, '2018-08-07 03:32:05', '2018-08-07 03:32:05'),
(68, NULL, '<p><strong>Piernas</strong></p><ul><li>Dolor, inestabilidad de la rodilla e inflamación de esta.</li><li>Problemas para flectar la rodilla</li><li>Incapacidad para estar apoyado sobre la rodilla lesionada</li><li>Molestias al iniciar una caminata, al pararse después de mucho tiempo sentado</li><li>Molestias al realizar nuestras actividades diaria</li></ul>', 'Síntoma 3', NULL, NULL, NULL, 9, NULL, '2018-08-07 03:32:52', '2018-08-07 03:32:52'),
(69, NULL, '<p><strong>Pies</strong></p><ul><li>Doloral caminar y al mover el tobillo (especialmente hacia los lados)</li><li>Hinchazón y equimosis (moretones)</li><li>Dolor al dar sus primeros pasos después de levantarse de la cama o sentado durante mucho tiempo</li><li>Dolor más agudo a medida que avanza el día</li><li>Dolor y dificultad para apoyar con normalidad el talón</li></ul>', 'Síntoma 4', NULL, NULL, NULL, 9, NULL, '2018-08-07 03:33:37', '2018-08-07 03:33:37'),
(70, NULL, '<p><strong>Manos</strong></p><ul><li>Molestias en la palma y mano durante el movimiento de los dedos:&nbsp;ardor, picazón, comezón,&nbsp;frío, hormigueo, pinchazo como de alfileres</li></ul>', 'Síntoma 5', NULL, NULL, NULL, 9, NULL, '2018-08-07 03:34:05', '2018-08-07 03:37:24'),
(71, 'uploads/banners/masones-srs.jpg', '<p>&nbsp;</p>', 'Cotiza tu programa', NULL, NULL, NULL, 1, NULL, '2018-08-07 23:33:27', '2019-01-25 03:04:15'),
(72, 'uploads/banners/masones.jpeg', '<p>&nbsp;</p>', '¿Necesitas un Kinesiólogo?', NULL, NULL, NULL, 1, NULL, NULL, '2019-01-25 03:02:36'),
(73, 'uploads/banners/sede_logia.jpg', '<p>&nbsp;</p>', 'Masonería Inglesa en el mundo', NULL, NULL, NULL, 1, NULL, NULL, '2019-01-25 03:02:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_types`
--

CREATE TABLE `banner_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banner_types`
--

INSERT INTO `banner_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Principal', NULL, NULL),
(2, 'Servicios', NULL, NULL),
(3, 'Galería', NULL, NULL),
(4, 'Clientes', NULL, NULL),
(5, 'Socios', NULL, NULL),
(6, 'Secundario', NULL, NULL),
(7, '¿Por qué elegirnos?', NULL, NULL),
(9, 'Síntomas', NULL, NULL),
(10, 'Consejos', NULL, NULL),
(11, 'Áreas kinesiología', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company_infos`
--

CREATE TABLE `company_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `company_infos`
--

INSERT INTO `company_infos` (`id`, `name`, `phone_1`, `phone_2`, `email_1`, `email_2`, `address`, `review`, `mission`, `vision`, `facebook`, `instagram`, `twitter`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Escuadra y Compás 216', '56223358970', NULL, 'contacto@escuadraycompas216.cl', 'contacto@escuadraycompas216.cl', 'Av. Nueva Providencia 2160 (Ex 11 de Septiembre), tercer piso, oficina 02. Galería Interprovidencia', '<p>Fundada el 18 de septiembre de 1926 bajo la jurisdicción de la Gran Logia Unida de Inglaterra.</p>', NULL, NULL, NULL, NULL, 'jcesaravila', 'img/logo.png', '2018-07-03 10:31:00', '2018-08-08 02:06:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `icons`
--

CREATE TABLE `icons` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `icons`
--

INSERT INTO `icons` (`id`, `name`, `display_name`) VALUES
(1, 'icon-point-of-service', 'Punto de venta'),
(2, 'icon-check', 'Cheque'),
(3, 'icon-safebox', 'Caja Fuerte'),
(4, 'icon-tax', 'Impuestos'),
(5, 'icon-diamond', 'Diamantes'),
(6, 'icon-idea', 'Idea'),
(7, 'icon-smartphone', 'Teléfono'),
(8, 'icon-dollar', 'Dolar'),
(9, 'icon-exchange', 'Intercambio'),
(10, 'icon-coin-1', 'Moneda'),
(11, 'icon-bank', 'Banco'),
(12, 'icon-money-bag', 'Bolso de dinero'),
(13, 'icon-wallet', 'Billetera'),
(14, 'icon-credit-card', 'Tarjeta de crédito'),
(15, 'icon-balance', 'Balance monetario'),
(16, 'icon-profits-1', 'Ganancia'),
(17, 'fa fa-calendar', 'Calendario'),
(18, 'fa fa-check', 'Check'),
(19, 'fa fa-edit', 'Editar'),
(20, 'fa fa-plus', 'Suma'),
(21, 'fa fa-phone', 'Teléfono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julio', 'javila3090@gmail.com', '$2y$10$5qTGQIJZYPWL8g5D5vAfa..dIrepqZI7wPZLhp9jIqcG2pqJ/E36e', NULL, '2019-01-25 03:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_date` date DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `contact_date`, `message`, `open`, `created_at`, `updated_at`) VALUES
(1, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:26:46', '2018-07-25 04:35:26'),
(2, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:27:09', '2018-07-25 04:35:30'),
(3, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:27:54', '2018-08-08 02:45:08'),
(4, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:29:12', '2018-07-25 04:35:35'),
(5, 'Test', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 0, '2018-07-25 04:29:51', '2018-07-25 04:29:51'),
(6, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:32:09', '2018-08-08 23:38:45'),
(7, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 1, '2018-07-25 04:34:22', '2018-08-08 23:53:01'),
(8, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'testing again', 0, '2018-07-25 04:34:57', '2018-07-25 04:34:57'),
(9, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 0, '2018-08-08 01:07:01', '2018-08-08 01:07:01'),
(10, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 0, '2018-08-08 01:07:47', '2018-08-08 01:07:47'),
(11, 'Julio César Avila', 'javila3090@gmail.com', 'Test', NULL, 'Testing', 0, '2018-08-08 01:09:17', '2018-08-08 01:09:17'),
(12, 'Julio César Avila', 'javila3090@gmail.com', 'Test', '2018-08-07', 'TEst', 1, '2018-08-08 02:39:02', '2018-08-08 02:41:06'),
(13, 'Julio César Avila', 'javila3090@gmail.com', 'Test', '2018-08-15', 'Testing', 1, '2018-08-08 02:46:16', '2018-08-08 02:46:32'),
(14, 'Julio Avila', 'javila3090@gmail.com', 'Testing', '2019-01-09', 'Test', 0, '2019-01-02 21:27:27', '2019-01-02 21:27:27'),
(15, 'Julio Avila', 'javila3090@gmail.com', 'Testing', '2019-01-09', 'Test', 0, '2019-01-02 21:29:20', '2019-01-02 21:29:20'),
(16, 'Julio Avila', 'julioavilore@hotmail.com', 'Testing', '2019-01-09', 'Test', 0, '2019-01-02 21:30:04', '2019-01-02 21:30:04'),
(17, 'Julio Avila', 'javila3090@gmail.com', 'Testing', '2019-01-09', 'Test', 0, '2019-01-02 21:35:17', '2019-01-02 21:35:17'),
(18, 'Julio Avila', 'javila3090@gmail.com', 'Testing', '2019-01-09', 'Testing', 0, '2019-01-02 21:37:15', '2019-01-02 21:37:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_03_184520_create_banner_types_table', 1),
(4, '2018_07_03_184522_create_banners_table', 1),
(5, '2018_07_03_194736_create_section_types_table', 1),
(6, '2018_07_03_201807_create_sections_table', 1),
(7, '2018_07_03_232957_create_company_infos_table', 2),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2018_07_06_054203_create_messages_table', 3),
(10, '2018_07_23_225528_create_tags_table', 4),
(11, '2018_07_24_225502_create_posts_table', 4),
(12, '2018_08_02_190912_create_quotes_table', 5),
(13, '2018_08_02_191203_create_therapy_types_table', 5),
(14, '2018_08_02_191440_create_therapies_table', 5),
(15, '2018_08_06_200300_create_agreements_table', 6),
(16, '2019_01_25_214635_create_members_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>Testing</p>', 'uploads/blog/lm_farmacias_ahumada.jpg', 1, '2018-07-25 03:18:28', '2018-07-25 03:18:28'),
(2, 'Test 2', '<p><strong>El pasaje estándar Lorem Ipsum, usado desde el año 1500.</strong></p><p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>', 'uploads/blog/lm_autana.jpg', 1, '2018-07-25 03:21:34', '2018-07-25 03:31:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quotes`
--

CREATE TABLE `quotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `start_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_way` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `email`, `phone`, `start_date`, `start_hour`, `pay_way`, `image`, `comments`, `read_at`, `created_at`, `updated_at`) VALUES
(2, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-31', '16:00', 2, NULL, NULL, '2018-08-08 23:34:03', '2018-08-04 03:53:41', '2018-08-08 23:34:03'),
(3, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-31', '16:00', 2, NULL, NULL, '2018-08-08 23:35:38', '2018-08-04 03:53:50', '2018-08-08 23:35:38'),
(5, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-31', '18:00', 1, NULL, 'Test', '2018-08-08 23:39:53', '2018-08-04 04:05:00', '2018-08-08 23:39:53'),
(6, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-17', '09:00', 1, NULL, NULL, '2018-08-08 23:40:27', '2018-08-04 04:08:56', '2018-08-08 23:40:27'),
(7, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-17', '09:00', 1, NULL, NULL, '2018-08-08 23:53:16', '2018-08-04 04:09:25', '2018-08-08 23:53:16'),
(8, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-17', '09:00', 1, NULL, NULL, '2019-01-07 15:20:30', '2018-08-04 04:09:32', '2019-01-07 15:20:30'),
(9, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-17', '09:00', 1, NULL, NULL, NULL, '2018-08-04 04:10:14', '2018-08-04 04:10:14'),
(10, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-17', '09:00', 1, NULL, NULL, NULL, '2018-08-04 04:10:22', '2018-08-04 04:10:22'),
(11, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-09-30', '11:00', 1, NULL, NULL, '2018-08-08 23:35:30', '2018-08-04 04:18:27', '2018-08-08 23:35:30'),
(12, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-10-18', '09:00', 1, NULL, NULL, NULL, '2018-08-04 04:20:05', '2018-08-04 04:20:05'),
(13, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-10-31', '09:00', 1, 'uploads/quotes/unas.jpg', NULL, NULL, '2018-08-04 04:25:45', '2018-08-04 04:25:45'),
(14, 'Julio César Avila', 'javila3090@gmail.com', '972374655', '2018-08-23', '16:00', 3, 'uploads/quotes/video-btn.png', NULL, NULL, '2018-08-14 04:26:54', '2018-08-14 04:26:54'),
(15, 'Ajman', 'javila3090@gmail.com', '972374655', '2019-01-16', '09:00', 1, 'uploads/quotes/caerse_con_kilos.jpg', NULL, '2019-01-08 17:43:29', '2019-01-02 17:28:17', '2019-01-08 17:43:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `title`, `subtitle`, `content`, `image`, `section_type_id`, `created_at`, `updated_at`) VALUES
(2, '¿Qué es la Masonería?', NULL, '<p>\"La Francmasonería es una institución universal, esencialmente ética, filosófica e iniciática, cuya estructura fundamental la constituye un sistema educativo, tradicional y simbólico . Se ingresa a ella por medio de la iniciación . Fundada en el sentimiento de la fraternidad, constituye el centro de unión para los hombres de espíritu libre de todas las razas, nacionalidades y credos\". Fragmento: \"De los Principios\". Constitución Gran Logia de Chile</p>', 'uploads/paginas/escuadra-y-compas-mason.jpg', 1, NULL, '2019-01-25 23:46:14'),
(3, 'Organización Gran Logia de Inglaterra', NULL, '<p>No se sabe exactamente cuántas logias existieron en Londres en ciertos periodos y si solo las unieron otros lazos que sus costumbres y secretos esotéricos, ya que las actas de la Gran Logia no comienzan hasta el 24 de junio de 1723 y la única historia de aquellos acontecimientos, se encuentran en el Libro de Constituciones del Dr. James Anderson editado en 1738. James Anderson fue solamente testigo de los sucesos, pero tiene el valor de que su Constitución fue aprobada por la Gran Logia de Inglaterra y que dice textualmente: “El rey Jorge I entro en Londres el día 20 de Septiembre de 1714 y cuando termino la rebelión en el año 1716, las pocas logias existentes en Londres creyeron conveniente, en vista de la negligencia de SIR CRISTIOBAL WREN, de unirse a las Ordenes de un Gran Maestro que había de ser el centro de Unión y Armonía.</p><p>Las cuatro logias originales que participaron en la formación de la primera Gran Logia, son conocidas como “<i>Las Cuatro Antiguas Logias</i>”.</p><p>Se conocen por los nombres de las tabernas donde se reunían. La distinción entre Ale-house (cervecería) y Tavern (taberna) seguramente carece de consecuencia.</p><p>El Dr. Anderson lista a las cuatro logias así:</p><p>1.- En la cervecería del “Ganso y de la Parilla” del cementerio de la Parroquia de San Pablo.</p><p>2.- En la Cervecería de la “Corona”, situada en el callejón de Parker, cerca del callejón de Drury.</p><p>3.- En la taberna del “Manzano” situada en la calle Charles en CONVENT GARDEN.</p><p>4.- En la taberna de la “Copa y de las Uvas” situada en CHANNEL ROW WESTMINSTER.</p><p>Estos y otros antiguos hermanos se reunieron un día en la Taberna del Manzano y colocando de Presidente al Maestro Mason más antiguo (llamado en ese entonces Maestro de la logia), se constituyeron en Gran Logia Pro Tempore y en “Debida Forma” …” reanudando en el acto, las relaciones trimestrales, entre los oficiales de las logias y resolviendo celebrar una asamblea anual y un banquete, y nombrar de entre ellos un Gran Maestro, hasta que tuvieron el honor de tener por jefe a algún hermano noble.</p><p>De acuerdo con esta relación se celebró la Asamblea y el banquete de los masones libres y aceptados, en la Cervecería del Ganso y de la Parilla, el día de San Juan Bautista del tercer año del reinado de Jorge I, es decir en 1717.</p><p>Antes del ágape el Maestro Mason más antiguo (ahora Maestro de la Logia) que ocupaba la presidencia,&nbsp; propuso una lista de candidatos y los hermanos eligieron por “ mayoría de manos”, Caballero Gran Maestro de los Masones al Señor Don ANTHONY SAYER y Vigilantes al carpintero JACOB LAMBALL y al capitán JOSEPH&nbsp; ELLIOT.</p><p>El Maestro SAYER fue investido en el acto con las insignias correspondientes a su cargo, por el maestro más antiguo, siendo instalado y felicitado por la Asamblea que le rindió homenaje.</p><p>El Gran Maestro SAYER ordeno a los Maestros y Vigilantes de las Logias que se reunieran con los Grandes Oficiales, todos los trimestres, en el lugar que el determinaría en las citaciones enviadas por mediación del Guarda templo.</p><p>Tal es la única acta que se conserva de la fundación de la Gran Logia de Inglaterra. Todas las investigaciones posteriores han fracasado, excepto que en un libro antiguo que fue descubierto, llamado MULTA PAUCIS, asegura que fueron seis y no cuatro las Logias representadas en la reunión previa.</p><p>De aquí se deduce que la organización de la Gran Logia, no fue una revolución, sino un renacimiento de las Asambleas anuales y trimestrales por las necesidades de un bien común.</p><p>La Logia de la Copa y de las Uvas era la que tenía el mayor número de masones aceptados y que fueron la mayor parte de los jefes del movimiento, a la cual también pertenecían, además del Dr. Anderson, Jorge Pavone y el Dr. Dasaguilliers, un clérigo protestante francés, cuya familia había emigrado a Inglaterra, y tercer Gran Maestro de la Gran Logia.</p><p>En 1721 fue elegido presidente el duque MONTAGU, hasta que se estableció la costumbre de nombrar Gran Maestro de los masones de Inglaterra, al príncipe de Gales. Actualmente este cargo lo ostenta el duque de Kent, ya que el actual Príncipe de Gales no es masón.</p><p>¿Por qué la masonería fue la única que conservo sus emblemas, tradiciones y costumbres? Porque la Orden no fue tan solo una obra de arquitectos dedicados a erigir iglesias, sino una fraternidad moral y espiritual cuya misión consistía en guardar los grandes símbolos y enseñar las verdades inmortales.</p><p>En 1719 los masones empezaron a coleccionar y cotejar las Antiguas Obligaciones o Constituciones Góticas, destruyendo algunas, para que no cayeran en manos extrañas.</p><p>En 1721 el Gran Maestro MUNTAGU creyó que las Antiguas Obligaciones eran inadecuadas y ordeno al Dr. Anderson que las recopilara para formular un Reglamento, el cual después de algunas revisiones apareció como tal, y que rige hasta nuestros días, como un hecho histórico de la masonería.</p><p>El Dr. Anderson nació en Escocia y durante muchos años fue ministro de la iglesia Presbiteriana de SWALLOW STREET PICADILLY. Falleció en 1739: fue llamado por sus amigos el Obispo Anderson.</p><p>Tal es QQ: HH: en forma más o menos sucinta una breve de la historia de la Masonería de acuerdo a los antecedentes que existen.</p><p>Por ultimo podemos agregar que fueron doce las que acudieron a la reunión trimestral de la Gran Logia, celebrada en el mes de junio de 1721, dieciséis&nbsp; a la de Septiembre, veinte a la de Diciembre y treinta a la de Abril de 1723. Todas estas Logias se radicaban en Londres lo que explica el optimismo del Dr. Anderson en el último párrafo del Libro de las Constituciones publicado aquel año.</p><p>Hasta entonces la Gran logia no había extendido su influencia más allá de Londres Westminster, pero en el año siguiente de 1724, nueve Logias de provincias reconocieron su obediencia, siendo la primera la de QUEEN´S HEAD de la ciudad de BATH. Al cabo de unos años la Masonería extendió su influencia por toda Inglaterra y por el extranjero.</p><p>La primera logia extranjera fue fundada en el año 1728 por el Duque de WHARTON en Madrid, regularizándose al año siguiente, en la cual se fundaron también dos más, una en Bengala( India) y otra en Gibraltar. Poco después se fundaron logias en todos los países, debido a la actividad desplegada por los miembros Ingleses o por las iniciadas en Inglaterra, las que cuando eran bastante numerosas se unían, constituyendo Grandes Logias.</p><p>La antigua Logia de York fue considerada la Meca de la Masonería, se llamaba ya Gran Logia el año 1725. Hago el siguiente paréntesis.</p><p>La ciudad de York había sido desde tiempos inmemorables la sede de la Masonería, remontándose&nbsp; su tradición hasta los días de ATHELSTAN, en el año 926 D.C., año en que ya existe una constitución sobre deberes masónicos.</p><p>Las Actas de York son las más antiguas del país, mereciendo esta ciudad por sus reliquias, y como ya se dijo que se le llamara La Meca de la Masonería. No se sabe con seguridad si esta antigua sociedad era una Logia privada o Gran Logia, pero lo cierto es que desde 1725 adopto el nombre de “Gran Logia de Inglaterra” afirmando que la Gran Logia de Londres le había usurpado un derecho que le correspondía por antigüedad. Durante diez o quince años dejaron de escribir Actas, pero en el año 1761, los supervivientes de esta Gran Logia la revivieron con éxito hasta la extinción final en el año 1791. Esta Logia quería ser independiente y consiguió que la reconocieran como ortodoxa dejando para la prosperidad el orgullo de haber sido durante siglos, el lugar donde se reunían los masones.</p><p>Posteriormente a estos acontecimientos y otros,&nbsp; con el correr del tiempo, la Orden se extendió por toda América destacándose hombres como O’Higgins, Bolívar, San Martin y otros, para expandir la espiritualidad, la tolerancia y&nbsp; la fraternidad que siempre ha inspirado a todos los miembros de la Orden Masónica esparcidos a través de la tierra, hasta que&nbsp; llegaron&nbsp; a nuestro país ciudadanos ingleses que nos trajeron sus tradiciones masónicas.</p><p>En el contexto histórico nacional, fecha de fundación de nuestra Respetable Logia, nuestro país era gobernado en 1926 por Don. Emiliano Figueroa Larraín, como Presidente de la Republica, y las autoridades políticas de esa época estaban enfrascadas en diferentes estrategias para ejercer el poder, las reformas sociales prometidas aún no se concretaban.</p><p>En el contexto histórico de la Gran Logia de Chile, la Maestría era ejercida por el Gran Maestro V:. H:. Héctor Boccardo Benvenuto, nació en Valparaíso y se tituló como abogado de la Universidad de Chile a los 23 años de edad. Fue diputado por San Carlos y ministro de Bienestar Social. Tras la renuncia del Gran Maestro García Valenzuela, fue elegido el hermano Luis Navarrete y López, quien resignó su elección y nombró como adjunto a Héctor Boccardo, quien asumió esas funciones y reelegido en 1927. El Gran Maestro llamó a la cordura y dejar fuera de los templos la contingencia política. Además llamó a mejorar las condiciones políticas, con el apoyo de la Orden a la nueva Constitución de 1925, luego del retorno de Alessandri. Fue &nbsp;creador del Fondo de Beneficencia de la Gran Logia.</p>', 'uploads/paginas/salon-mason.jpg', 2, NULL, '2019-01-26 00:16:38'),
(4, 'Contacto', '¿Cómo encontrarnos?', '<p>&nbsp;</p>', '', 3, NULL, '2018-07-06 05:13:00'),
(7, 'Galería', '', '', '', 4, NULL, NULL),
(21, 'Nuestros profesionales', NULL, '<p>Contamos con Traumatologos, Kinesiologos y personal administrativo de la mas alta calidad para asegurar una atención del mejor nivel.</p>', 'uploads/paginas/vitamedica_medicos.jpg', 10, '2018-07-07 05:55:07', '2018-08-02 01:42:55'),
(24, 'Visión', NULL, '<p>Ser la empresa líder en consultoría empresarial y tributaria, con representación a nivel nacional e internacional, que asesora y acompaña de manera total a sus clientes en el desarrollo de estrategias de negocios que apoyen en todo minuto su desarrollo.</p>', 'uploads/paginas/lm_consulting_1.jpg', 9, '2018-07-25 00:17:19', '2018-07-25 01:58:32'),
(27, 'Escuadra y Compás 216', NULL, '<p>Nace por la necesidad que tenían algunos masones de habla inglesa de tener en Santiago un taller de esta tradición que trabajará según el Rito de York. Así fue fundada por los integrantes de “Harmony” Lodge Nº 1411, bajo la jurisdicción de la Gran Logia Unida de Inglaterra, Distrito de América del Sur, División Sur. Esta Logia actualmente, todavía se reúne en Valparaíso.</p>', NULL, 7, '2018-07-26 18:03:52', '2018-08-01 23:56:24'),
(29, '¿Por qué escogernos?', NULL, '', NULL, 11, '2018-08-02 02:07:14', '2018-08-02 02:07:14'),
(30, 'Sede Londres GL Unidad de Inglaterra', NULL, '<p>Con la fundación de la Gran Logia de Londres en 1717, fecha &nbsp;la cual marcó un antes y un después en la historia de la Masonería. A partir de dicha fecha podemos afirmar que nació la Masonería moderna, la que hoy en día conocemos.</p><p>Sir Christopher Wren nació el 20 de octubre de 1632 y fue científico y arquitecto formando posteriormente parte también de la Royal Society, en cuya fundación tuvo gran importancia Sir Robert Moray (también Masón). Sir Isaac Newton reconoció la importancia de Wren como científico.</p><p>Tras el gran incendio de Londres de 1666 fue escogido para ser el arquitecto de la Catedral de San Pablo al haber sido destruido el anterior edificio. El diseño y la construcción de la nueva catedral empezó en 1975 y no terminó hasta 1710; al mismo tiempo diseñó numerosos edificios, incluyendo 51 iglesias para sustituir a las 87 destruidas.</p><p>Además, también colaboró en el diseño del Monumento al Gran Incendio de Londres, el Observatorio de Greenwich, el Hospital de Chelsea, el Hospital de Greenwich, Marlborough House y otros muchos edificios destacados. Por lo que no nos puede quedar duda de que fuera un auténtico masón operativo.</p><p>Christopher Wren fue nombrado caballero en 1673. El 25 de febrero de 1723 falleció y fue enterrado en la catedral de San Pablo. ¿Cabe mayor honor para un masón que ser enterrado en su propia obra?</p><p>cada Logia era independiente, se formaban y reconocían siguiendo viejas costumbres y sin nadie que pusiera un orden en todo aquello. Un día de febrero de 1717 se reúnen en la “Apple Tree” cuatro Logias de la ciudad: “Goose and Gridiron (El ganso y la parrilla), “Queen`s Head (La cabeza de la Reina), “Apple tree” (el manzano) y “Rummer and Grapes” (El Cubilete y las uvas), y deciden constituir una Gran Logia pro-tempore, iniciando los preparativos para una reunión decisiva que tendría lugar en el día de San Juan, día de gran importancia para los masones. El día combinado las cuatro logias vuelven a reunirse en “El ganso y la parrilla” y &nbsp;dan origen a la Gran Logia de Inglaterra o de Londres. Si tenemos en cuenta que solo cuatro de las más de una docena de Logias existentes entonces formaron parte de dicha creación no sería muy apropiado el nombre elegido; sin embargo, el paso del tiempo acabó por darles la razón.</p><p>El primer Gran Maestro fue Anthony Sayer y sus &nbsp;Grandes Vigilantes al carpintero Jacob Lamball (1º Vig.·.) y al capitán Joseph Elliot (2º Vig.·.).</p><p>Sin embargo, la historia real podemos decir que comienza en las asambleas de 1718 y 1719 cuando fueron elegidos como Grandes Maestros Payne y Desaguliers a quienes la masonería que nacía su gran impulso y las líneas ideológicas. Sin embargo, no todo fue fácil. Muchas logias no se unieron a esta naciente Gran Logia, sobre todo las de Irlanda que se adhirieron a la Gran Logia de York. Durante muchos años existieron básicamente dos Grandes Logias en Inglaterra que se diferenciaban entre ellas denominándose unos de antiguos y otros de modernos. No fue hasta el año 1813 que realmente se unieron y podemos hablar de una Gran Logia Unida de Inglaterra.</p><p>Durante todo este tiempo, Payne y Desaguliers fueron conformando todo el entramado ideológico. Siguiendo las ideas de mantener el secreto, Desaguliers ordenó en 1720 que se quemasen los documentos masónicos para que no cayesen en manos profanas. Este mismo año es elegido nuevamente como Gran Maestro George Payne por segunda vez y ordena a James Anderson que recopile todos los documentos antiguos y forme unas constituciones.</p>', 'uploads/paginas/sede-gl.jpg', 12, '2018-08-06 21:46:37', '2019-01-22 22:15:45'),
(32, 'Programa Ergonomía Empresas', NULL, '<p><strong>Programa ergonomía empresas:</strong></p><p>Les enseñamos a sus trabajadores las correctas técnicas para evitar el ausentismo laboral y ayudar a prevenir dolencias.</p>', 'uploads/banners/vitamedica_empresas.jpg', 14, '2018-08-06 22:26:34', '2018-08-06 22:26:34'),
(34, 'Fundadores Gran Logia de Inglaterra', NULL, '<p>No cabe duda de que la Masonería Operativa y la Masonería especulativa convivieron durante algunos años. De lo que tampoco cabe duda alguna es de la reunión que cuatro Logias de Londres celebraron un día de 1717 y de donde surgió el germen de la futura Gran Logia Unida de Inglaterra.&nbsp;Tratar de conocer la vida y obra de todos los fundadores de la Gran Logia daría para escribir todo un libro.</p><p><strong>Anthony Sayer</strong></p><p>Elegido como primer Gran Maestro de la Logia de Londres en 1717, pertenecía a la Logia Rummer and Grapes. No se conocen muchos datos de su persona, nació el año 1672 y murió 1742. Era esquirre, es decir paje o escudero, lo cual equivalía al nivelmás bajo de la nobleza inglesa, lo cual, para la época ya no estaba nada mal.</p><p>Se sabe que era un gentleman pero poco más sobre su vida excepto que pasó por periodos difíciles y solicitó ayuda o caridad el 21 de noviembre de 1724, el 21 de abril de 1730 y el 17 de abril de 1741 y recibiendo la ayuda de Arms Lodge el 2 de febrero de 1736 y el 3 de marzo de 1740. Se ha escrito que el día de su muerte su cortejo fue acompañado por masones “del más alto grado e importancia” y que fue enterrado “como Dios manda”.</p><p><strong>Joseph Elliot y Jacob Lamball</strong></p><p>Si poco se sabe de Anthony Sayer, mucho menos de los dos Vigilantes. Se conoce que Joseph Elliot era Capitán, por lo que probablemente fue iniciado en una de las muchas Logias militares que eran comunes en el ejército Británico. Jacob&nbsp; Lamball era carpintero por lo que quizás fuera uno de los pocos operativos que aún quedaban en las Logias inglesas.</p><p><strong>George Payne</strong></p><p>Nacido el 1685, murió el 23 de Enero de 1757 sin descendencia pues todos los hijos que tuvo con su mujer Anne Martha Batson no les sobrevivieron. Parece ser que vivió en New Palace Yard, Westminster.</p><p>Era anticuario de profesión y desde el momento de su elección dio un impulso vigoroso a todos los trabajos y mostró un celo y una actividad extraordinaria. Amplió las Columnas, se dedicó a reunir y compilar documentos y manuscritos referidos a la historia, usos y reglamentos de la antigua masonería Operativa&nbsp; y redactó las treinta y nueve Ordenanzas Generales. El fue quien le encomendó a Jaime Anderson la revisión de sus trabajos con el fin de que aquellas Antiguas Ordenanzas se adecuaran a la nueva organización, lo que daría lugar finalmente a las Constituciones de Anderson.</p><p>Payne propuso con su sucesor en el cargo&nbsp; John duque de Montague, aunque el duque no parecía haber mostrado gran interés anteriormente por la Orden. Esta elección fue muy fructífera ya que mucha gente ilustre se acercó a la Orden gracias a la presencia del Duque como Gran Maestro, contribuyendo de esta forma al crecimiento de las Columnas y del prestigio ante la sociedad de la masonería.</p><p>Los trabajos de Payne sirvieron como base para la redacción de los reglamentos de la Masonería Moderna, dando una cohesión y uniformidad a la Orden.</p><p><strong>Desaguliers</strong></p><p>John Theophilus Desaguliers nació en la Rochelle el 13 de Marzo de 1683 y murió en&nbsp; Londres el&nbsp; 29 de Febrero de 1744).</p><p>Su familia era hugonota (protestante) y tuvo que escapar a Inglaterra cuando el tenía 11 años como consecuencia de la revocación del Edicto de Nantes. No debemos olvidar que Francia era Católica; pero el Edicto de Nantes, ahora revocado, permitía a los protestantes practicar su fe sin ser perseguidos por el Estado.</p><p>El año 1718 terminó sus estudios en Oxford como doctor en leyes. Miembro da Royal Society desde 1714 como filósofo natural, asistió a Sir Isaac Newton en sus experimentos. Fue el único miembro de la Royal Society que recibió la medalla Copley, máximo reconocimiento emitido por la Royal Society,&nbsp; tres veces: 1734: “Por los diferentes experimentos presentados a la Sociedad ” en 1736: “Por los experimentos realizados durante el año” y en 1741: “Por los experimentos dedicados a descubrir las propiedades de la electricidad “</p><p><i><strong>Para hacerse una idea de su importancia baste decir que otros grandes científicos como Stephen Hawkings, Niels Bohr o Albert Einstein recibieron la medalla Copley.</strong></i></p><p>La reputación de Desaguliers como científico no se debió solo a la concesión de las tres&nbsp; medallas citadas sino también a su obra publicada, siendo la más reconocida “A Course of Experimental Philosophy”, obra en dos volúmenes, el primero de los cuales vio la luz el mismo año en que se le concedió la primera medalla (1734). El segundo volumen vería la luz 10 años más tarde. Es esta inmensa obra trata temas como la teoría y practica mecánica bajo las bases de la física de Newton.</p><p>Como miembro de la Masonería podemos decir que fue elegido como tercero Gran Maestro de la Gran Logia de Inglaterra en 1719 y fue Diputado Gran Maestro en 1723 y 1725. Desaguliers, al igual que George Payne fue un celoso coleccionista de manuscritos masónicos antiguos. Aunque fue el Dr. James Anderson quien presentó los primeros Reglamentos Generales, estes fueron realizados durante el mandato de Desaguliers y de Payne y fueron finalmente compilados bajo la supervisión de Desaguliers.</p><p><strong>James Anderson</strong></p><p>El reverendo presbiteriano James Anderson (1678-1739),&nbsp; nació casi con toda seguridad en Aberdeen, Escocia y se traslado a Londres en algún momento antes de asumir el control de una capilla presbiteriana en la calle Swallow, Picadilly, hacia 1709-1710 donde trabajó hasta 1734. Fue capellán del conde de Buchan.</p><p>El 29 de septiembre de 1721 el Gran Maestro de la Gran Logia de Londres le ordenó “digerir las viejas constituciones góticas en un nuevo y mejor método”. La primera edición de las constituciones, incluyendo las cargas de un francmasón, fue publicada en 1723, teniendo una primera modificación en 1738. En otros textos aparece que el encargo de las “Constituciones” tenía por objeto modificar el Reglamento&nbsp; en base a lo recopilado por Payne y Desaguliers en los&nbsp; años anteriores. Pero no entraremos ahora en detalles sobre la Constitución de Anderson ya que eso se tratará en el tema siguiente de este pequeño trabajo.</p><p>No se conoce con exactitud la fecha en que se inició, pero lo más probable es que esta tuviese lugar en la Logia de Aberdeen. Existen varias similitudes entre su nombre y ciertas entradas en los libros de la Logia que hacen pensar que se trata de la misma persona. Lo que sí se sabe es que fue Maestro de una Logia en 1722, justo un año antes de que sus Constituciones viesen la luz por primera vez y que fue Gran Oficial de la Logia de Londres en Westminster.</p>', 'uploads/paginas/grandes-maestros-logia.jpg', 5, '2019-01-22 22:26:12', '2019-01-22 22:27:11'),
(35, 'Masonería Inglesa en el mundo', NULL, '<p>La Primera Gran Logia se constituyó el 24 de junio de 1717, cuando cuatro logias de Londres se reunieron en la taberna Goose and Gridiron y formaron la que denominaron Gran Logia de Londres y Westminster. En 1723 se publicaron las Constituciones de Anderson conteniendo sus reglas de organización y principios.</p><p>En 1751 un grupo de francmasones formó una Gran Logia rival, la Gran Logia de Masones Libres y Aceptados de Inglaterra, argumentando que la Gran Logia creada en Londres había introducido innovaciones y se había apartado de los antiguos linderos de la Masonería, mientras que ellos trabajaban de acuerdo con las antiguas reglas dadas por el Príncipe Eduardo en York en el año 926 d. C. Por este motivo, terminará siendo informalmente denominada como la Gran Logia de los antiguos, en contraposición a la Primera Gran Logia que, paradójicamente, será conocida como la de los modernos.</p><p>La Constitución de la Segunda Gran Logia, compilada por su Gran Secretario Laurence Dermott, se denomina Ahiman Rezon, nombre hebraico que aproximadamente viene a significar Una ayuda a un Hermano.</p><p>Henry Sadler, en su libro Hechos y ficciones masónicas (1887), contradice el discurso de Dermott, según el cual los miembros de la segunda Gran Logia habrían sido unos escindidos por causa de los usos tradicionales. Según Sadler, en realidad, los \"antiguos\" eran, sobre todo, inmigrantes irlandeses en Londres que, al ser recibidos con cierta hostilidad por las logias inglesas, decidieron constituir su propia organización.</p><p>Las diferencias rituales entre una y otra tradición no provendrían de ninguna \"innovación\" de la Gran Logia de Londres, sino que se deberían a la diferente manera en que, tanto en Irlanda como en Inglaterra, se llevaría a cabo la adopción y reorganización del patrimonio ritual de la vieja masonería escocesa. Si bien una parte de la historiografía ha tendido a exagerar las divergencias entre \"modernos\" y \"antiguos\", éstas no afectan en realidad más que a ciertas particularidades sobre la disposición de la logia y del ritual. En lo esencial, los ritos y las ceremonias masónicas son comunes en las dos tradiciones. Sin embargo, conocer las diferencias entre ellas, por irrelevantes que parezcan, resulta indispensable para comprender la génesis de los diferentes ritos masónicos, pues todos provienen de una de estas dos familias.</p><p>Las rivalidades entre ambas se mantuvieron durante 63 años, constituyendo el primer cisma de la francmasonería. En 1809, las dos Grandes Logias rivales iniciaron negociaciones para llegar a una unión equitativa, que se produjo el 27 de diciembre de 1813 de la mano de sus respectivos Grandes Maestros, los duques de Sussex y de Kent, hijos ambos del rey Jorge III. La nueva organización se denominó Gran Logia Unida de Inglaterra y es la que pervive en la actualidad. El duque de Sussex fue su primer Gran Maestro.</p><p>Actualmente, es el Principe Eduardo, Duque de Kent, quien ejerce como Gran Maestro de la Gran logia Unida de Inglaterra.</p>', 'uploads/banners/masoneria-inglesa.jpg', 13, '2019-01-22 22:29:56', '2019-01-22 22:29:56'),
(36, 'Masonería Inglesa en Chile', NULL, '<p>Los estudios sobre la francmasonería o masonería en Chile son bastante escasos, debido en gran parte a la naturaleza reservada de la institución y su manifiesta reticencia a abrir sus archivos al denominado «mundo profano». La obra clásica del escritor Benjamín Oviedo entrega una historia institucional que alcanza hasta finales del siglo XIX. Por otro lado, Manuel Sepúlveda Chavarría 1​ escribió una crónica de la masonería chilena cuyo primer tomo cubre el mismo período que la obra cita, y un segundo tomo, que hasta hoy no se ha podido verificar, aunque se cree que llega hasta 1944.</p><p>Existe otro libro escrito por Fernando Pino Lagarrigue, que tuvo alguna difusión, orientado a ponderar la importancia de la masonería en la secularización de la sociedad chilena, y es bastante parca la información sobre su desarrollo interno. Günter Böhm 2​ se introdujo en el tema para aportar algunos documentos interesantes sobre la primera logia chilena como parte de la biografía de Manuel de Lima, quien era un judío de Curaçao, avecindado en Chile y que fuera fundador de la misma. Por último, se debe mencionar la investigación de Cristián Gazmuri quien en este contexto destaca los movimientos liberales europeos de 1848 en Chile y, el papel de la masonería como instancia de sociabilidad y mecanismo de difusión de las ideas libertarias y laicas. 3​ Por lo anterior, se cree que la masonería en Chile comienzaría a gestarse desde los albores de la guerra independentista donde organizaciones paramasónicas como la Logia Lautarina formada por destacados próceres como Bernardo O Higgins y José de San Martín llevaron adelante las ideas masónicas de Libertad e Igualdad.</p>', 'uploads/banners/masoneria-inglesa-chile.jpg', 15, '2019-01-22 22:39:58', '2019-01-22 22:39:58'),
(37, 'Diferencias rito inglés y escocés', NULL, '<p>Hay dos tipos de organizaciones (Grandes Logias, Grandes Orientes, Obediencias, de los tres modos se llaman) que dicen ser masónicas: 1ª) La Masonería Regular, que conserva la totalidad de los requisitos (\"landmarks\") para ser Masonería y 2ª) Las que se autodenominan Masonerías Liberales, que ha prescindido de uno o más de los landmarks en su evolución, nacida de escisiones.</p><p>Los puntos que nos diferencian y que los Masones Regulares mantenemos en su integridad son:&nbsp;</p><p>1. Regularidad de origen. Toda Gran Logia deberá ser regularmente establecida por una Gran Logia reconocida o por tres o más Logias regularmente constituidas.&nbsp;</p><p>2. La creencia en el Gran Arquitecto del Universo y de su voluntad revelada, debe constituir una obligación esencial para todos sus miembros.&nbsp;</p><p>3. Todos los iniciados deberán jurar su Obligación sobre el Volumen de la Ley Sagrada, debidamente abierto, donde esté la revelación de lo anteriormente citado, de conformidad con la conciencia particular de la persona que sea iniciada (En mi Logia una Biblia ocupa ese lugar de forma habitual, pero tenemos preparados y a mano un Corán, una Toráh, unos Upanishads...)&nbsp;</p><p>4. Que solo pueden ser miembros de la Gran Logia, así como de las Logias en particular, exclusivamente varones y que la Gran Logia no tenga relaciones masónicas de ninguna clase, con cualquier tipo de Logias o cuerpos que admitan, como miembros, a personas de sexo femenino.&nbsp;</p><p>5. Que la Gran Logia debe tener jurisdicción soberana sobre las Logias bajo su obediencia; que por lo tanto debe de ser responsable, independiente y con gobierno propio, con la sola e indiscutible autoridad sobre los tres grados de aprendiz, compañero y Maestro Masón en toda su jurisdicción y no debe, en ningún caso, estar sujeta a compartir dicha autoridad con un Supremo Consejo o con cualquier otro poder que reclame algún control o supervisión sobre estos grados.</p><p>6. Que las Tres Grandes Luces de la Masonería (el Volumen de la Ley Sagrada, la Escuadra y el Compás) deben siempre estar presentes cuando la Gran Logia o sus Logias subordinadas estén trabajando, siendo el principal de ellas el Volumen de la Ley Sagrada.&nbsp;</p><p>7. Que las discusiones sobre religión o política en las Logias deben de ser estrictamente prohibidas.&nbsp;</p><p>8. Que los Antiguos Principios, Usos y Costumbres, así como los Landmark de la Orden deben ser estrictamente observados.</p><p>Otro asunto: Las masonerías mixtas son aquellas que no respetan el punto 4 de los anteriores. Entre las Obediencias que admiten mujeres las hay de varias clases: 1) las que son exclusivamente femeninas 2) las que admiten mujeres y hombres (Obediencias mixtas). Las Obediencias mixtas pueden estar formadas por logias mixtas, en las que hombres y mujeres comparten el rito, o separadamente por logias femeninas y logias masculinas, y aún hay un matiz más: hay logias con miembros afiliados (titulares) de un género y que admiten a los del otro sólo como visitantes.&nbsp;</p><p>El Rito de Menphis (también llamado Rito Egípcio) y el Rito de Menphis-Mizraím son variantes del filosofismo (grados 4º y superiores del Rito Escocés Antiguo y Aceptado), casi inexistentes en España.&nbsp;</p><p>El Rito de York (RY) es la versión americana del Rito de Emulación y Reconciliación (RE) inglés.&nbsp;Una diferencia significativa entre estos dos últimos citados y los escoceses es la metodología: mucho más discutidora en las logias escocesas y más circunspecta en RE y RY. En los escoceses se lee el ritual, pero en RE y RY hay que saberlo de memoria, en RE y RY la cena fraternal forma parte del Rito y está muy formalizada, en los escoceses la cena es de asistencia voluntaria.</p>', 'uploads/paginas/masoneria-inglesa-chile.jpg', 8, '2019-01-22 23:33:47', '2019-01-22 23:34:10'),
(38, 'Grados masónicos rito de york', NULL, '<p>El Rito de York o El Rito York, o más correctamente, el Rito Americano, se basa en los restos de la Masonería Simbólica que se practicaban a principio del año 1700. La formación de la primera Gran Logia de Inglaterra en 1717 especificaba que las logias sólo podían conferir los grados de Aprendiz, Compañero y Maestro Masón, todos los otros grados se consideran falsos. Sin embargo, muchas logias habían conferido otros grados que consideran parte integrante de la masonería, en particular, el del Arco Real, y formaron su propia Gran Logia en 1751, denominando a sí mismos los “Antiguos” y los miembros de la otra Gran Logia “Modernos”. . Incluye, en América Latina, el Rito de York y el llamado Rito de York, en los Estados Unidos.1​ El primero es más bien el Rito de Emulación Inglés, el cual difiere del Rito de York Norteamericano, basado este último en el Rito de los Antiguos, mientras que el Rito de Emulación es una variación creada en Inglaterra. En su conjunto, ambos son variaciones del más antiguo de todos los ritos de la francmasonería, el Rito de York escocés, y, a diferencia de otros ritos masónicos, alberga, además de la masonería simbólica (es decir, los tres primeros grados: aprendiz, compañero y maestro, correspondientes a la llamada masonería simbólica o masonería azul; véase logias de San Juan), a la masonería capitular o masonería del Real Arco, así como a la masonería templaria o masonería de caballería, por lo que cuenta con numerosos grados.</p><p>El Rito de Emulación del Reino Unido es el que, en algunos países de América Latina, se denomina Rito de York. En el Reino Unido se practican también otros ritos: por ejemplo, el Rito de York practicado en Gales es prácticamente igual al Rito de York Nortemericano, ya que también se basa en el Rito de los Antiguos. Es el más popular de los ritos que se practica en el Reino Unido (Emulación - York), y también es el más popular en los Estados Unidos, aunque con algunas variantes fundamentales. En países como Perú, el Rito de York (practicado en Escocia) es el predominante. En Bolivia si bien el Rito Escocés Antiguo y Aceptado es el predominante con un 85% de las Logias, se practica también el Ritual de Emulación y una variante de esta conocida como el Rito de York Boliviano muy similar al practicado en Perú. El Rito de York norteamericano también se practica en otros países fuera de los Estados Unidos, como México y Perú.</p><h3>Masonería simbólica</h3><ul><li>Logias de San Juan o logias azules</li><li>Aprendiz Masón (primer grado)</li><li>Compañero Francmasón (segundo grado)</li><li>Maestro Masón (tercer grado)</li></ul><h3>Masonería capitular</h3><ul><li>Capítulo de masones del&nbsp;Real Arco de Escocia:</li><li>Maestro Marca</li><li>Maestro Excelente</li><li>Masón del Real Arco</li><li>En los Estados Unidos, existen también los grados capitulares o del Capítulo, y son cuatro:</li><li>Maestro de la Marca</li><li>Venerable Maestro Virtual (Virtual Past Master)</li><li>Muy Excelente Maestro</li><li>Real Arco</li><li>Serie de Logia o Consejo del Real Arco de Escocia:</li><li>Marinero de la Real Arca</li><li>Paso de Babilonia o Grados de la Cruz Roja (Caballero de la Espada, Caballero del Este y Caballero del Este y Oeste)</li><li>Crípticos (Maestro Real, Maestro Selecto y Maestro Super Excelente)</li><li>En los Estados Unidos, el Consejo también se denomina masonería críptica, y son sus grados:</li><li>Maestro Real</li><li>Maestro Selecto</li><li>Super Excelente Maestro</li></ul><h3>Masonería templaria de Escocia</h3><ul><li>Gran Priorato de Escocia:</li><li>Escudero</li><li>Caballero</li><li>Orden de Malta de Escocia:</li><li>Caballero de San Pablo</li><li>Caballero de San Juan de Jerusalén y Malta</li></ul><p>Es importante mencionar que los grados simbólicos (o de San Juan) son otorgados por las&nbsp;Grandes Logias Regulares&nbsp;de cada país, en tanto que los Grados del Real Arco y de la Masonería Templaria son otorgados única y exclusivamente por el&nbsp;Supremo Gran Capítulo del Real Arco de Masones de Escocia&nbsp;y el&nbsp;Priorato de Escocia, respectivamente. Exceptuando los grados dictados por la masonería de las Comandancias del Rito de York Norteamericano.</p>', 'uploads/banners/grados-masonicos.jpg', 6, '2019-01-22 23:35:47', '2019-01-22 23:40:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_types`
--

CREATE TABLE `section_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `section_types`
--

INSERT INTO `section_types` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Nosotros', 'aboutUs', NULL, NULL),
(2, 'Historia 1', 'history_1', NULL, NULL),
(3, 'Contacto', 'contact', NULL, NULL),
(4, 'Galería', 'gallery', NULL, NULL),
(5, 'Historia 3', 'history_3', NULL, NULL),
(6, 'Rito 2', 'rito_2', NULL, NULL),
(7, 'Secundario', 'secondary', NULL, NULL),
(8, 'Rito 1', 'rito_1', NULL, NULL),
(9, 'Vision', 'vision', NULL, NULL),
(10, 'Equipo', 'team', NULL, NULL),
(11, 'Historia 7', 'history_7', NULL, NULL),
(12, 'Historia 2', 'history_2', NULL, NULL),
(13, 'Historia 4', 'history_4', NULL, NULL),
(14, 'Programa empresas', 'companies', NULL, NULL),
(15, 'Historia 5', 'history_5', NULL, NULL),
(16, 'Historia 6', 'history_6', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Noticias', NULL, NULL),
(2, 'Eventos', NULL, NULL),
(3, 'Curiosidades', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `therapies`
--

CREATE TABLE `therapies` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `therapy_type_id` int(10) UNSIGNED NOT NULL,
  `quote_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `therapies`
--

INSERT INTO `therapies` (`id`, `quantity`, `therapy_type_id`, `quote_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '2018-08-04 03:53:41', '2018-08-04 03:53:41'),
(2, 2, 1, 3, '2018-08-04 03:53:50', '2018-08-04 03:53:50'),
(7, 2, 1, 5, '2018-08-04 04:05:01', '2018-08-04 04:05:01'),
(8, 2, 2, 5, '2018-08-04 04:05:01', '2018-08-04 04:05:01'),
(9, 2, 1, 7, '2018-08-04 04:09:25', '2018-08-04 04:09:25'),
(10, 2, 1, 10, '2018-08-04 04:10:22', '2018-08-04 04:10:22'),
(11, 4, 9, 10, '2018-08-04 04:10:22', '2018-08-04 04:10:22'),
(12, 2, 1, 11, '2018-08-04 04:18:27', '2018-08-04 04:18:27'),
(13, 10, 12, 11, '2018-08-04 04:18:27', '2018-08-04 04:18:27'),
(14, 2, 1, 12, '2018-08-04 04:20:05', '2018-08-04 04:20:05'),
(15, 1, 12, 12, '2018-08-04 04:20:05', '2018-08-04 04:20:05'),
(16, 2, 1, 13, '2018-08-04 04:25:45', '2018-08-04 04:25:45'),
(17, 1, 15, 13, '2018-08-04 04:25:45', '2018-08-04 04:25:45'),
(18, 2, 1, 14, '2018-08-14 04:26:54', '2018-08-14 04:26:54'),
(19, 2, 1, 15, '2019-01-02 17:28:17', '2019-01-02 17:28:17'),
(20, 1, 2, 15, '2019-01-02 17:28:17', '2019-01-02 17:28:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `therapy_types`
--

CREATE TABLE `therapy_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `therapy_types`
--

INSERT INTO `therapy_types` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '060-1001', 'EV KNT', NULL, NULL),
(2, '060-1005', 'INFRA-ROJO', NULL, NULL),
(3, '060-1009', 'ULTRATERMIA', NULL, NULL),
(4, '060-1011', 'ULTRASONIDO', NULL, NULL),
(5, '060-1012', 'TENS', NULL, NULL),
(6, '060-1013', 'ESTIMULACIÓN ELÉCTRICA', NULL, NULL),
(7, '060-1013', 'CORRIENTES INTERFERENCIALES', NULL, NULL),
(8, '060-1017', 'EJERCICIOS RESPIRATORIOS', NULL, NULL),
(9, '060-1021', 'LIBERACION ARTICULAR', NULL, NULL),
(10, '060-1022', 'MASOTERAPIA', NULL, NULL),
(11, '060-1024', 'REED. MOTRIZ-EJERC. TERAPEUTICO', NULL, NULL),
(12, '060-1025', 'TÉCNICA DE FACILITACIÓN - INHIBICIÓN', NULL, NULL),
(13, '060-1026', 'TÉCNICAS DE RELAJACIÓN', NULL, NULL),
(14, '060-1027', 'TRACCIÓN CERVICAL - LUMBAR', NULL, NULL),
(15, '060-1030', 'DRENAJE POSTURAL - BRONQUIAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julio César Avila Loreto', 'javila3090@gmail.com', '$2y$10$5qTGQIJZYPWL8g5D5vAfa..dIrepqZI7wPZLhp9jIqcG2pqJ/E36e', 'DpY6pJiS6R2GmFfPFUCFRT6HTIdo01WXz5F4smnCcRPjXkJ5vx7mxdTUAjhJ', NULL, '2018-07-07 04:21:58'),
(3, 'Gabriela Laine', 'gdlv91@gmail.com', '$2y$10$vJiTmDzBnCcsxNxPmb6l.eKeE9efOAbR261BwApqY8d.Lzswg2vWi', NULL, '2018-07-09 21:54:30', '2018-07-09 21:54:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agreements`
--
ALTER TABLE `agreements`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_banner_type_id_foreign` (`banner_type_id`),
  ADD KEY `button_target` (`button_target`),
  ADD KEY `icon_id` (`icon_id`);

--
-- Indices de la tabla `banner_types`
--
ALTER TABLE `banner_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `company_infos`
--
ALTER TABLE `company_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_section_type_id_foreign` (`section_type_id`);

--
-- Indices de la tabla `section_types`
--
ALTER TABLE `section_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `therapies`
--
ALTER TABLE `therapies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `therapies_quote_id_foreign` (`quote_id`),
  ADD KEY `therapies_therapy_type_id_foreign` (`therapy_type_id`);

--
-- Indices de la tabla `therapy_types`
--
ALTER TABLE `therapy_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agreements`
--
ALTER TABLE `agreements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `banner_types`
--
ALTER TABLE `banner_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `company_infos`
--
ALTER TABLE `company_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `section_types`
--
ALTER TABLE `section_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `therapies`
--
ALTER TABLE `therapies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `therapy_types`
--
ALTER TABLE `therapy_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_banner_type_id_foreign` FOREIGN KEY (`banner_type_id`) REFERENCES `banner_types` (`id`),
  ADD CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`button_target`) REFERENCES `section_types` (`id`),
  ADD CONSTRAINT `banners_ibfk_2` FOREIGN KEY (`icon_id`) REFERENCES `icons` (`id`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Filtros para la tabla `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_section_type_id_foreign` FOREIGN KEY (`section_type_id`) REFERENCES `section_types` (`id`);

--
-- Filtros para la tabla `therapies`
--
ALTER TABLE `therapies`
  ADD CONSTRAINT `therapies_quote_id_foreign` FOREIGN KEY (`quote_id`) REFERENCES `quotes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `therapies_therapy_type_id_foreign` FOREIGN KEY (`therapy_type_id`) REFERENCES `therapy_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
