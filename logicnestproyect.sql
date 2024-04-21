-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-04-2024 a las 12:20:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logicnestproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingchairs`
--

CREATE TABLE `gamingchairs` (
  `id_chair` int(50) NOT NULL,
  `model_chair` varchar(200) DEFAULT NULL,
  `color_chair` varchar(200) DEFAULT NULL,
  `filling_material_chair` varchar(200) DEFAULT NULL,
  `maximum_capacity_chair` varchar(200) DEFAULT NULL,
  `brand_chair` varchar(200) DEFAULT NULL,
  `armrest_chair` varchar(200) DEFAULT NULL,
  `price_chair` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingchairs`
--

INSERT INTO `gamingchairs` (`id_chair`, `model_chair`, `color_chair`, `filling_material_chair`, `maximum_capacity_chair`, `brand_chair`, `armrest_chair`, `price_chair`) VALUES
(1, 'Primus PCH102BL Metal Azul', 'Negro/azul', 'Esponja', '220 lbs', 'Primus', 'Si', '180'),
(2, 'Silla Gamer 2606032', 'Azul', 'Metal', '120 kg', 'RadioShack', 'Si', '100'),
(3, 'Silla Gaming con Luces', 'Negro/Gris', 'Cuero', '150 kg', 'RadioShack', 'Si', '277'),
(4, 'Silla Gaming con Luces 2606038', 'Celeste/Negro', 'Pvc', '160 kg', 'RadioShack', 'Si', '346'),
(5, 'Silla Gaming con Luces 2606039', 'Negro/Rojo', 'Esponja', '330 lbs', 'RadioShack', 'Si', '400'),
(6, 'Silla Gaming RadioShack Top Racer ABS', 'Negro', 'ABS', '120 kg', 'RadioShack', 'Si', '200'),
(7, 'Silla Gamer RadioShack 2606035 ABS Negro y rojo', 'Rojo/Negro', 'ABS', '275 lbs', 'RadioShack', 'Si', '500'),
(8, 'Silla Gaming Camo Acero Reforzado', 'Negro/Verde', 'Pvc', '150 kg', 'RadioShack', 'Si', '302'),
(9, 'Silla gamer RadioShack MID1 Acero Reforzado', 'Gris/Rosado', 'Tejido de Malla', '150 kg', 'RadioShack', 'Si', '302');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingconsoles`
--

CREATE TABLE `gamingconsoles` (
  `id_console` int(50) NOT NULL,
  `name_console` varchar(200) DEFAULT NULL,
  `model_console` varchar(200) DEFAULT NULL,
  `dimensions_console` varchar(200) DEFAULT NULL,
  `connectivity_console` varchar(200) DEFAULT NULL,
  `powersource_console` varchar(200) DEFAULT NULL,
  `price_console` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingconsoles`
--

INSERT INTO `gamingconsoles` (`id_console`, `name_console`, `model_console`, `dimensions_console`, `connectivity_console`, `powersource_console`, `price_console`) VALUES
(1, 'Nintendo Switch OLED Pokémon Escarlata y Violeta', 'HAC-001', 'Alto 8.27 x Ancho 10.24 x Profundidad 3.32 cm', ' Bluetooh y Wifi', 'Electrico/Bateria', '543'),
(2, 'Nintendo OLED Switch Legend of Zelda', 'HEG-S-KAAAA', 'Alto 10.16 x Ancho 24.13 x Profundidad 1.4 cm', 'Bluetooh y Wifi', 'Electrico/Bateria', '476'),
(3, 'Nintendo Switch OLED', 'HEG-S-KAAAA', 'Alto 8.27 x Ancho 10.24 x Profundidad 3.32 cm', 'Bluetooh y Wifi', 'Electrico/Bateria', '412'),
(4, 'Consola Steam Deck', 'Vapor-64', '2.76 x 7.8 x 7.09', 'Bluetooh y Wifi', 'Electrico/Bateria', '325'),
(5, 'Nintendo Switch Switch Lite', 'Switch Lite - Turquesa', '2.76 x 7.8 x 7.09', 'Bluetooh y Wifi', 'Electrico/Bateria', '230'),
(6, 'Nintendo Switch', 'HAC-001(-01)', '1x2 x2 pulgadas; 1,54 Libras', 'Bluetooh y Wifi', 'Electrico/Bateria', '239'),
(7, 'One Virtual Reality Headset', '899-00187-02', '360', 'Wifi', 'Elctrico', '569'),
(8, 'PlayStation 4', 'Slim 1TB', '18,9x4,33 x13,39 pulgadas; 7,41 Onzas', 'Wifi', 'ADP-240CR', '329'),
(9, 'PlayStation 5', 'Digital Edition (slim)', '17x15 x6 pulgadas; 8,9 Libras', 'Wifi', 'ADP‑400DR', '1,200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingheadsets`
--

CREATE TABLE `gamingheadsets` (
  `id_headset` int(50) NOT NULL,
  `name_headset` varchar(200) DEFAULT NULL,
  `brand_headset` varchar(200) DEFAULT NULL,
  `wireless_interface_headset` varchar(200) DEFAULT NULL,
  `form_factor_headset` varchar(200) DEFAULT NULL,
  `price_headset` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingheadsets`
--

INSERT INTO `gamingheadsets` (`id_headset`, `name_headset`, `brand_headset`, `wireless_interface_headset`, `form_factor_headset`, `price_headset`) VALUES
(1, 'Logitech G', 'Astro', 'Jack 3.5mm', 'En el cable', '182'),
(2, 'JBL Quantum 100', 'JBL', 'Jack 3.5mm', 'Por Arriba de la Oreja', '35'),
(3, 'JBL Quantum 400', 'JBL', 'Inalámbrica', 'Over Ear', '100'),
(4, 'Logitech G pro X', 'Logitech G', 'Inalambrica', 'Over Ear', '100'),
(5, 'Logitech G335', 'Logictech G', 'Jack 3.5mm', 'Over Ear', '50'),
(6, 'Logitech', 'Logitech G', 'Inalámbrica / Jack 3.5mm', 'Bluetooth', '71');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingkeyboards`
--

CREATE TABLE `gamingkeyboards` (
  `id_keyboard` int(50) NOT NULL,
  `name_keyboard` varchar(200) DEFAULT NULL,
  `brand_keyboard` varchar(200) DEFAULT NULL,
  `compatible_devices_keyboard` varchar(200) DEFAULT NULL,
  `color_keyboard` varchar(200) DEFAULT NULL,
  `connectivity_keyboard` varchar(200) DEFAULT NULL,
  `price_keyboard` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingkeyboards`
--

INSERT INTO `gamingkeyboards` (`id_keyboard`, `name_keyboard`, `brand_keyboard`, `compatible_devices_keyboard`, `color_keyboard`, `connectivity_keyboard`, `price_keyboard`) VALUES
(1, 'HyperX Alloy Elite 2', 'Razer', 'Pc', 'Negro Clasico', 'USB-A', '46'),
(2, 'Logitech G Pro', 'Logitch', 'Consola de VideoJuegos', 'Negro', 'Bluetooth', '79'),
(3, 'Mini Teclado Inalambrico', 'Pc Sensor', 'Portatil/Pc/Tablet', 'Negro', 'Bluetooth', '38'),
(4, 'Razer Ornata V3 X', 'Razer G', 'Pc', 'Negro', 'USB', '39'),
(5, 'HORI Tactical Assault Commander', 'HORI', 'PS4/PS5', 'Negro', 'USB', '129'),
(6, 'Razer Orbweaver Chroma comander', 'HyperX', 'All Xbox', 'Negro', 'USB', '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gaminglaptops`
--

CREATE TABLE `gaminglaptops` (
  `id_laptops` int(50) NOT NULL,
  `model_laptops` varchar(200) DEFAULT NULL,
  `processor_laptops` varchar(200) DEFAULT NULL,
  `storage_laptops` varchar(200) DEFAULT NULL,
  `dimensions_laptops` varchar(200) DEFAULT NULL,
  `screen_resolutions_laptops` varchar(200) DEFAULT NULL,
  `ram_laptops` varchar(200) DEFAULT NULL,
  `graphics_cards_laptops` varchar(200) DEFAULT NULL,
  `price_laptops` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gaminglaptops`
--

INSERT INTO `gaminglaptops` (`id_laptops`, `model_laptops`, `processor_laptops`, `storage_laptops`, `dimensions_laptops`, `screen_resolutions_laptops`, `ram_laptops`, `graphics_cards_laptops`, `price_laptops`) VALUES
(1, 'Laptop gaming Acer PH3155574LG ', 'Intel CoreTM i7-12700H', '512 SSD', '2.59cm * 35.9cm', '1920 * 1080 px', '16 GB', 'NVIDIA geForce RTX 3060', '2,055'),
(2, 'Laptop gaming Acer AN51558740H', 'Intel CoreTM i7-12700H', '512GB', '2.59cm * 36.04cm', '1920*1080 px', '16 GB', 'NVIDIA GeForce RTX 3060', '2,340'),
(3, 'Laptop gaming Dell 5CFYD', 'AMD Ryzen 5 6600H', '512 SSD', '2.7cm * 35.7cm', '1920 * 1080 px', '8 GB', 'NVIDIA geForce RTX 3050, 4GB GDDR6', '1,111'),
(4, 'Laptop gaming Dell Alienware m15 R7', 'AMD Ryzen 7 6800H', '512 SSD', '0.94 * 14,02', '1920 * 1080 px', '16 GB', '4GB NVIDIA geForce RTX 3060 Ti', '1,944'),
(5, 'Laptop gaming Lenovo 82K1015EUS', 'Intel Core i5-11300H 3.1 GHz', '256 SSD', '2.42cm * 35.96cm', '1920 * 1080 px', '8 GB', 'NVIDIA geForce RTX 3060', '833'),
(6, 'Laptop Gaming HP 15FA0000LA', 'Intel CoreTM i7-12700H', '512 SSD', '2.35cm * 25.5cm', '1920 * 1080 px', '16 GB', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU (4 GB GDDR6 dedicated)', '1,166'),
(7, 'Laptop gaming HP 16D0510LA', 'AMD Ryzen 7 6800H', '512 SSD', '2.35cm * 37cm', '1920 * 1080 px', '16 GB DDR4', 'NVIDIA geForce RTX 3060', '1,805'),
(8, 'Laptop gaming Dell G5', 'Core i7-10750H de 10ª generación', '512 SSD + 1TB HDD', '24.5mm * 365.5mm', '1920 * 1080 px', '16 GB DDR4', 'Nvidia RTX2060', '2,483'),
(9, 'Laptop gaming HP Pavilion', 'Intel Core i5-9300H', '1TB HDD', '2.34cm * 36cm', '1920 * 1080 px', '8 GB DDR4', 'Nvidia GeForce GTX 1050', '1,638');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingmicrophones`
--

CREATE TABLE `gamingmicrophones` (
  `id_microphone` int(50) NOT NULL,
  `name_microphone` varchar(200) DEFAULT NULL,
  `brand_microphone` varchar(200) DEFAULT NULL,
  `color_microphone` varchar(200) DEFAULT NULL,
  `special_feature_microphone` varchar(200) DEFAULT NULL,
  `price_microphone` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingmicrophones`
--

INSERT INTO `gamingmicrophones` (`id_microphone`, `name_microphone`, `brand_microphone`, `color_microphone`, `special_feature_microphone`, `price_microphone`) VALUES
(1, 'Blue Yeti USB', 'Logitech', 'Negro Clasico', 'Retroiluminado, Ergonómico', '59'),
(2, 'HyperX DuoCast', 'HyperX', 'Negro', 'Función de Silencio, Pedestal', '150'),
(3, 'HyperX QuadCast S RGB', 'HyperX', 'Negro Clasico RGB', 'Función de Silencio', '159'),
(4, 'HyperX QuadCast', 'HyperX', 'Negro', '4 Patrones Polares', '139'),
(5, 'HyperX SoloCast', 'HyperX', 'Negro Clasico', 'Pedestal', '59'),
(6, 'NZXT Cápsula AP-WUMIC-W1', 'NZXT', 'Blanco', 'Pedestal', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingmonitors`
--

CREATE TABLE `gamingmonitors` (
  `id_monitors` int(50) NOT NULL,
  `model` varchar(200) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `resolution` varchar(200) DEFAULT NULL,
  `brand` varchar(200) DEFAULT NULL,
  `update_speed` varchar(200) DEFAULT NULL,
  `price_monitors` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingmonitors`
--

INSERT INTO `gamingmonitors` (`id_monitors`, `model`, `size`, `resolution`, `brand`, `update_speed`, `price_monitors`) VALUES
(1, 'SAMSUNG Odyssey G55C Series QHD 1000R', '27 Pulgadas', '2,560 x 1,440 Pixels', 'SAMSUNG', '165 Hz', '180'),
(2, 'Acer Nitro XZ270 Xbmiipx 1500R', '27 Pulgadas', '1920 x 1080', 'ACER', '240 Hz\n', '250'),
(3, 'AOC C32G2ZE Monitor curvo para juegos sin marco', '31,5 Pulgadas', '3840 x 2160', 'AOC', '240 Hz', '350'),
(4, 'ASUS ROG Swift Monitor OLED DSC', '27 Pulgadas', '2560 x 1440 Pixels', 'ASUS', '240 Hz', '250'),
(5, 'LG Ultragear 4K UHD', '32 pulgadas', '3840 x 2160', 'LG', '144 Hz', '330'),
(6, 'SAMSUNG Odyssey G32A', '24 pulgadas', '1,920 x 1,080 Píxeles', 'SAMSUNG', '165 Hz', '120'),
(7, 'Acer Nitro KG241Y Sbiip', '23,8 Pulgadas', '1920 x 1080', 'ACER', '165 Hz', '110'),
(8, 'Acer EI322QUR Pbmiippx', '31,5 Pulgada', '2560 x 1440 Píxeles', 'ACER', '165 Hz', '270'),
(9, 'LG 48GQ900-B', '48 pulgadas', '3840 x 2160', 'LG', '120 Hz', '200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingmouses`
--

CREATE TABLE `gamingmouses` (
  `id_mouse` int(50) NOT NULL,
  `name_mouse` varchar(200) DEFAULT NULL,
  `brand_mouse` varchar(200) DEFAULT NULL,
  `color_mouse` varchar(200) DEFAULT NULL,
  `connectivity_mouse` varchar(200) DEFAULT NULL,
  `price_mouse` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingmouses`
--

INSERT INTO `gamingmouses` (`id_mouse`, `name_mouse`, `brand_mouse`, `color_mouse`, `connectivity_mouse`, `price_mouse`) VALUES
(1, 'G703 Lightspeed con sensor Hero', 'Logitech G', 'Negro', 'Bluetooth', '71'),
(2, 'HyperX Pulsefire Haste gaming mouse', 'HyperX', 'Negro', 'USB', '55'),
(3, 'Logitech G 305 LIGHTSPEED mouse', 'Logitech G', 'Negro', 'Bluetooth', '87'),
(4, 'Logitech G 502 Lightspeed', 'Logitech G', 'Negro', 'LIGHTSPEED Wireless', '91'),
(5, 'Razer Basilisk V3', 'Razer', 'Negro/Blanco', 'USB', '60'),
(6, 'Razer Viper V2 Pro', 'Razer', 'Blanco/Negro', 'Inalámbrico', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gamingpc`
--

CREATE TABLE `gamingpc` (
  `id_pc` int(50) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `processor` varchar(200) DEFAULT NULL,
  `ram` varchar(200) DEFAULT NULL,
  `motherboard` varchar(200) DEFAULT NULL,
  `graphics_card` varchar(200) DEFAULT NULL,
  `solid_disk` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gamingpc`
--

INSERT INTO `gamingpc` (`id_pc`, `name`, `processor`, `ram`, `motherboard`, `graphics_card`, `solid_disk`, `price`) VALUES
(1, 'PC Gamer Draco Blue', 'INTEL CORE I5 11400F 2.6GHz/4.4GHz', '16GB DDR4 3200MHz', 'Tarjeta Madre H510', 'GTX1650 4GB', 'SSD M.2 500GB NVMe', '2,899'),
(2, 'PC Gamer Haku Blue', 'AMD Ryzen 5 8500G, 3.5GHz/5.0GHz', '16GB DDR5 5200MHz', 'Tarjeta Madre A620', 'Radeon™ Graphics', 'SSD M.2 500GB NVMe', '2,699'),
(3, 'PC Gamer Haku Green', 'AMD Ryzen, 5 5600G 3.9GHz/4.4GHz', '16GB DDR4 3200MHz', 'Tarjeta Madre A520', 'Radeon™ Graphics', 'SSD M.2 500GB NVMe', '2,199'),
(4, 'PC Gamer Haku Red', 'Intel Core i5 6th 2.xGHz', '16GB DDR4', 'Mainboard Chipset H110', 'GTX1050Ti 4GB', 'SSD M.2 500GB NVMe', '2,299'),
(5, 'PC Gamer Haku Red', 'AMD Ryzen 5 8600G, 4.3GHz/5.0GHz', '16GB DDR5 5200MHz', 'Tarjeta Madre A620', 'Radeon™ Graphics', 'SSD M.2 500GB NVMe', '2,899'),
(6, 'PC Gamer Haku Red', 'AMD Ryzen 5 4600G, 3.7GHz/4.2GHz', '16GB DDR4 3200MHz', 'Tarjeta Madre A520', 'Radeon™ Graphics', 'SSD M.2 500GB NVMe', '1,699'),
(7, 'PC Gamer Haku RGB', 'AMD A12 8870 3.7GHz/4.2GHz', '16GB DDR4', 'Mainboard Chipset A320', 'GTX650 2GB DDR5', 'SSD M.2 512GB NVMe', '1,499'),
(8, 'PC Gamer Haku RGB', 'Intel Core i5 6th 2.xGHz', '16GB DDR4', 'Mainboard Chipset H110', 'GTX750Ti 4GB', 'SSD M.2 500GB NVMe', '1,899'),
(9, 'PC Gamer Draco Green', 'Intel Core i5 12400F 2.5GHz/4.4GHz', '16GB DDR4 2666MHz', 'Tarjeta Madre H610', 'GTX1650 4GB', 'SSD M.2 de 1TB NVMe', '2,999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playstationcontrols`
--

CREATE TABLE `playstationcontrols` (
  `id_play` int(50) NOT NULL,
  `name_play` varchar(200) DEFAULT NULL,
  `brand_play` varchar(200) DEFAULT NULL,
  `color_play` varchar(200) DEFAULT NULL,
  `technology_connectivit_play` varchar(200) DEFAULT NULL,
  `connectivity_play` varchar(200) DEFAULT NULL,
  `price_play` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `playstationcontrols`
--

INSERT INTO `playstationcontrols` (`id_play`, `name_play`, `brand_play`, `color_play`, `technology_connectivit_play`, `connectivity_play`, `price_play`) VALUES
(1, 'DualShock 4', 'Sony', 'Gris', 'inalambrico', 'Playstation 4', '109'),
(2, 'DualShock 4', 'Sony', 'Azabache', 'inalambrico', 'Playstation 4/Televisión', '37'),
(3, 'YCCTEAM Wireless Game', 'YCCTEAM', 'Negro', 'Inalambrico', 'Playstation 4', '26'),
(4, 'PlayStation DualSense', 'Sony', 'Gris', 'Inalambrico', 'PlayStation 5', '72'),
(5, 'PlayStation DualSense', 'Sony', 'Rojo', 'Inalambrico', 'PlayStation 5', '72'),
(6, 'PlayStation Portal Remote Player', 'YCCTEAM', 'Gris', 'Cable', 'PS5/Smartphone', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `id_register` int(50) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`id_register`, `name`, `last_name`, `address`, `phone`, `email`, `username`, `password`) VALUES
(1, '', '', '', '', '', 'admin', 'admin123'),
(4, 'Carlos', 'Ulloa', 'Bo. Altagracia Centro De Salud 1c A. 1/2 Al Sur', '123456789', 'udem@udem.edu.ni', 'jade', 'jade123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gamingchairs`
--
ALTER TABLE `gamingchairs`
  ADD PRIMARY KEY (`id_chair`);

--
-- Indices de la tabla `gamingconsoles`
--
ALTER TABLE `gamingconsoles`
  ADD PRIMARY KEY (`id_console`);

--
-- Indices de la tabla `gamingheadsets`
--
ALTER TABLE `gamingheadsets`
  ADD PRIMARY KEY (`id_headset`);

--
-- Indices de la tabla `gamingkeyboards`
--
ALTER TABLE `gamingkeyboards`
  ADD PRIMARY KEY (`id_keyboard`);

--
-- Indices de la tabla `gaminglaptops`
--
ALTER TABLE `gaminglaptops`
  ADD PRIMARY KEY (`id_laptops`);

--
-- Indices de la tabla `gamingmicrophones`
--
ALTER TABLE `gamingmicrophones`
  ADD PRIMARY KEY (`id_microphone`);

--
-- Indices de la tabla `gamingmonitors`
--
ALTER TABLE `gamingmonitors`
  ADD PRIMARY KEY (`id_monitors`);

--
-- Indices de la tabla `gamingmouses`
--
ALTER TABLE `gamingmouses`
  ADD PRIMARY KEY (`id_mouse`);

--
-- Indices de la tabla `gamingpc`
--
ALTER TABLE `gamingpc`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indices de la tabla `playstationcontrols`
--
ALTER TABLE `playstationcontrols`
  ADD PRIMARY KEY (`id_play`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gamingchairs`
--
ALTER TABLE `gamingchairs`
  MODIFY `id_chair` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gamingconsoles`
--
ALTER TABLE `gamingconsoles`
  MODIFY `id_console` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gamingheadsets`
--
ALTER TABLE `gamingheadsets`
  MODIFY `id_headset` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gamingkeyboards`
--
ALTER TABLE `gamingkeyboards`
  MODIFY `id_keyboard` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gaminglaptops`
--
ALTER TABLE `gaminglaptops`
  MODIFY `id_laptops` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gamingmicrophones`
--
ALTER TABLE `gamingmicrophones`
  MODIFY `id_microphone` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gamingmonitors`
--
ALTER TABLE `gamingmonitors`
  MODIFY `id_monitors` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gamingmouses`
--
ALTER TABLE `gamingmouses`
  MODIFY `id_mouse` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gamingpc`
--
ALTER TABLE `gamingpc`
  MODIFY `id_pc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `playstationcontrols`
--
ALTER TABLE `playstationcontrols`
  MODIFY `id_play` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
