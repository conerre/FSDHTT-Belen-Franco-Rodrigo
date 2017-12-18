-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2017 a las 00:42:14
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asienta_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sillas', '2017-12-11 21:42:30', '2017-12-11 21:42:30'),
(2, 'Mesas', '2017-12-11 21:42:32', '2017-12-11 21:42:32'),
(4, 'Reposeras', '2017-12-11 21:42:41', '2017-12-11 21:42:41'),
(5, 'Accesorios', '2017-12-11 21:42:44', '2017-12-11 21:42:44'),
(6, 'Sillones', '2017-12-15 17:32:13', '2017-12-15 17:32:13');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_30_180618_create_products_table', 1),
(4, '2017_11_30_180632_create_categories_table', 1),
(5, '2017_11_30_180650_create_orders_table', 1),
(6, '2017_11_30_180727_create_order_details_table', 1),
(7, '2017_12_05_182402_add_columns_to_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `ship_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `articleCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `stock`, `description`, `article_code`, `thumbnail`, `created_at`, `updated_at`, `articleCode`) VALUES
(13, 1, 'Anna', 1872.00, 19, 'Silla monobloque de policarbonato 250 veces más resistente que el vidrio.\r\nApilable, liviana, resistente. Diseño diferenciado \r\nResistente hasta 182 kg.', '423974/4', 0x7075626c69632f7468756d626e61696c732f5372425173566d6743766d444e697542696c356e526c6b4c564f59644e5239576e4c4157373175702e6a706567, '2017-12-15 17:15:52', '2017-12-15 17:33:23', ''),
(14, 1, 'Maja', 4060.00, 20, 'Silla con asiento fabricado con tecnología \r\nde doble inyección, dos colores en la misma pieza. \r\nPatas de madera pulida. Diseño italiano. \r\nApilable hasta 6 unidades. Resistente hasta 120 kg', '12234/7', 0x7075626c69632f7468756d626e61696c732f7238347a677365457246374753766d6c52527650547863694738537267644c3649354672735538442e6a706567, '2017-12-15 17:18:14', '2017-12-15 17:18:14', ''),
(16, 1, 'Sofia Horizontal', 1094.00, 20, 'Silla monobloque de polipropileno y fibra de vidrio. \r\nRobusta, bonita y moderna con un diseño diferenciado. Apilable y liviana. \r\nResistente hasta 182 kg.', '78654/53', 0x7075626c69632f7468756d626e61696c732f6d704b424a4b6d596a57594d30594e4531707544634b6a327055616574423142585758796f4277452e6a706567, '2017-12-15 17:22:48', '2017-12-15 17:22:48', ''),
(17, 6, 'Sidera', 5184.00, 10, 'Silla con asiento de poliamida \r\nBase de acero pintado con patas de madera pulida \r\nDiseño italiano innovador. No apilable. \r\nResistente hasta 120 kg.', '897544/78', 0x7075626c69632f7468756d626e61696c732f7a387946626a6f614d75396950357a6a5a7579796272704c4567535638704e4a354b676c65426e7a2e6a706567, '2017-12-15 17:32:51', '2017-12-15 17:32:51', ''),
(18, 2, 'Acapulco', 3500.00, 25, 'Mesa Acapulco\r\nDescripción del producto\r\nMesa con patas reforzadas encajadas con tornillos. \r\nAbertura con tapa para sombrilla. No apilable. \r\nIdeal para ambientes externos.', '57835/9', 0x7075626c69632f7468756d626e61696c732f717275594a617753377376574f473666396935693270576a69353443485a75354d4c646b615745612e6a706567, '2017-12-15 21:28:57', '2017-12-15 21:28:57', ''),
(19, 2, 'Diana', 7695.00, 24, 'Descripción del producto\r\nMesa de plástico con patas de madera Tauarí. \r\nResistente, moderna y práctica. \r\nIdeal para lugares residenciales o públicos. \r\nBares, hoteles, restaurantes, clubes, escuelas, et', '3434778/5', 0x7075626c69632f7468756d626e61696c732f4548726d356c4176433243594c66696b74386e3542666d6d625a766b6d5744674268375a4a79496d2e6a706567, '2017-12-15 21:30:53', '2017-12-15 21:30:53', ''),
(20, 5, 'Banco Hudson Urban', 16473.00, 1, 'Banco de madera maciza de grapia de alta densidad \r\nAcabado Ecoblindaje, resistencia a la intemperie \r\nBase de acero al carbono para fijarlo al piso. \r\nIdeal halls de entrada. Peso: 84 kgs.', '8409023/4', 0x7075626c69632f7468756d626e61696c732f364452364d7756396932795244774a47513938526f4767534746777030786635655a67324d5653582e6a706567, '2017-12-15 21:35:24', '2017-12-15 21:35:24', ''),
(21, 1, 'Laura', 1455.00, 1, 'Descripción del producto\r\nSilla monobloque de polipropileno y \r\nfibra de vidrio. Textura simil ratan. \r\nApilable, liviana y resistente hasta 182 kg. \r\nUnidades de venta: 1', '234850/8', 0x7075626c69632f7468756d626e61696c732f56667976304f4e6c5741554e774a355663425675744638516c574a57593241684f6669323862504d2e6a706567, '2017-12-15 21:36:21', '2017-12-15 21:36:21', ''),
(22, 2, 'Fitt Ecoblindage', 19223.00, 1, 'Descripción del producto\r\nMesa fabricada en madera de algarrobo con terminac \r\nión de ecoblindaje. Resistente a los rayos solares \r\n. Ideal para ambientes con gran agresividad y hume \r\ndad. Acción insecticida y fungicida.', '789303', 0x7075626c69632f7468756d626e61696c732f3275386c4c4d6b4a6157593743684831487a6341686f6867616250787434545551534d6d4e4548392e6a706567, '2017-12-15 21:38:05', '2017-12-15 21:38:05', ''),
(23, 2, 'Mesa London', 8976.00, 9, 'Mesa cuadrada de madera Tauarí \r\nTerminación de barniz con tinte almendra o tabaco \r\nDiseño italiano de Edi & Paolo Ciani. \r\nMedidas: 70 y 80 cm.', '3753199', 0x7075626c69632f7468756d626e61696c732f7239634573376f634132774654593258757a31556d6f63704c486a4f55574c656f674944364e4f782e6a706567, '2017-12-15 21:39:30', '2017-12-15 21:39:30', ''),
(24, 1, 'Nadia', 1500.00, 23, 'Silla monobloque de polipropileno y fibra de \r\nvidrio \r\nApilable, liviana, resistente. Resiste una carga \r\nestática de hasta 182 kg.', '645209', 0x7075626c69632f7468756d626e61696c732f646a4b7449745831435876636c356b3952473530614c37414a746235754a4a6442785462346b5a502e6a706567, '2017-12-15 21:40:45', '2017-12-15 21:40:45', ''),
(25, 1, 'Potenza', 1300.00, 12, 'Silla fabricada en madera Tauari. \r\nTerminación barnizada. \r\nAsiento y respaldo de polipropileno \r\nde distintos colores. Plegable, compacta y liviana', '90230', 0x7075626c69632f7468756d626e61696c732f704e796943677a4e6d666874357232573552534e6a693561356247564571766471417763415030782e6a706567, '2017-12-15 21:41:39', '2017-12-15 21:41:39', ''),
(26, 6, 'Safira', 1236.00, 23, 'Silla con apoyabrazos monobloque de polipropileno \r\ny fibra de vidrio. Apilable, liviana, resistente \r\ncon un diseño diferenciado. \r\nResistente hasta 182 kg.', '23436', 0x7075626c69632f7468756d626e61696c732f356b70786b33587833696f47596f74305067534c354a54786f4a64643075446e54394761497847742e6a706567, '2017-12-15 21:44:46', '2017-12-15 21:44:46', ''),
(27, 6, 'Sissi', 1367.00, 7, 'Descripción del producto\r\nSillón monobloque de polipropileno y fibra \r\nde vidrio \r\nApilable, liviana, resistente a una carga estática \r\nde hasta 182 kg.', '90283', 0x7075626c69632f7468756d626e61696c732f5a4962417569356331576c7370666a433141754273524f6543726b72466131584f3361496231614b2e6a706567, '2017-12-15 21:45:41', '2017-12-15 21:45:41', ''),
(28, 1, 'Sofia Vertical', 1567.00, 90, 'Descripción del producto\r\nSilla monobloque de polipropileno y \r\nfibra de vidrio. Robusta, bonita y moderna con un \r\ndiseño diferenciado. Apilable y liviana. \r\nResistente hasta 182 kg.', '694389', 0x7075626c69632f7468756d626e61696c732f6f6b6253574244574d7152756b77586f63577a71456f34304e3359686a6f67785a6e545262394a432e6a706567, '2017-12-15 21:47:53', '2017-12-15 21:47:53', ''),
(29, 5, 'Sombrilla', 1238.00, 12, 'Sombrilla con manivela con estructura de madera \r\nCobertura resistente de poliëster 270 grs \r\nTratamiento impermeabilizante y protección UV \r\nFácil de abrir y cerrar. Traba de seguridad', '67931', 0x7075626c69632f7468756d626e61696c732f7833504d503259376c654475325030744f5a614b3236434b6e704a67424c6c58745a5033625550792e6a706567, '2017-12-15 21:49:10', '2017-12-15 21:49:10', ''),
(30, 4, 'Terrazo Fibra', 5438.00, 12, 'Reposera de madera maciza jatobá con terminación \r\necoblindaje. Con fibra sintética simil ratán de \r\npolietileno. Resistente a los rayos solares y \r\nhumedad. Acción insecticida y funguicida.', '89372', 0x7075626c69632f7468756d626e61696c732f6d3366434c6a725a57594e476364695447444f5467657a4f554b66466a687665326a4964654738782e6a706567, '2017-12-15 21:50:08', '2017-12-15 21:50:08', ''),
(31, 1, 'Toscana', 8765.00, 1, 'Descripción del producto\r\nSilla de madera muiracatiara. \r\nTerminación Eco clear: protege y resalta \r\nlas fibras de la madera. Belleza y funcionalidad \r\nen ambientes internos y externos. Apilable', '462929', 0x7075626c69632f7468756d626e61696c732f7142774e5271797764354e486e464e4663426170565245653775616d3058314a79366935506c71562e6a706567, '2017-12-15 21:50:55', '2017-12-15 22:44:08', ''),
(32, 4, 'Baranda tropical', 4678.00, 34, 'Reposera fabricada en madera de Tauari con \r\nterminación Stain. \r\nIdeal para ambientes acogedores, rústicos y \r\ngourmets', '6784', 0x7075626c69632f7468756d626e61696c732f347447486e535a4b416a637772544d6c7958713357525a3656304c546b727a6a6a4f627536715a662e6a706567, '2017-12-15 21:51:29', '2017-12-15 21:51:29', ''),
(33, 1, 'Viena', 1345.00, 23, 'Silla de madera Tauarí \r\nTerminación de barniz con tinte almendra o tabaco \r\nInspirada en los cafës vieneses. \r\nSimples, con piezas curvas y detalles delicados.', '23456', 0x7075626c69632f7468756d626e61696c732f346231623734504d77644b547a4a384f4c6c56674b63537157426c4b707434327a4d4154534e4d782e6a706567, '2017-12-15 21:52:06', '2017-12-15 21:52:06', ''),
(34, 1, 'test', 43.00, 3423, 'kj', '234', 0x7075626c69632f7468756d626e61696c732f794e6e4f44476150584558354a68744b465a6f4f5a714b5a6c43544a555131736b4542533076414e2e6a706567, '2017-12-15 22:11:38', '2017-12-15 22:11:38', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `type` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `adress`, `phone`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Digital House', 'admin-dh@hotmail.com', '$2y$10$DygyN23zg2Sbbp3loxXnGuc386.KGH08ZE33YuI09XvvGmR89JOgW', NULL, NULL, 2, 'sK2EaXzTSct57H8019hPbc1cnQdIZ5q9ysYW8T33NXulJsFCCFlC5V3myI9h', '2017-12-11 21:42:16', '2017-12-11 21:42:16'),
(2, 'Franco', 'Caputo', 'franco@gmail.com', '$2y$10$WwSsXFtbS.8uxhSoVr0u1e4EQo0b0LKcFvqx.44h840mP7sqTOAOq', NULL, NULL, 1, 'mnYWKssmQSC8IjZtBsVGw9dIwPTnpDsFpgkt82zMgeitQaJ7kH59QpRwEjUG', '2017-12-15 22:39:22', '2017-12-15 22:39:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
