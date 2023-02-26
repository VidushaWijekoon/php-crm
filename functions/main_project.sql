-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 06:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodywork_tasks`
--

CREATE TABLE `bodywork_tasks` (
  `bodywork_id` int(11) NOT NULL,
  `production_id` int(11) NOT NULL,
  `a_scratch` int(11) NOT NULL,
  `a_broken` int(11) NOT NULL,
  `a_dent` int(11) NOT NULL,
  `b_scratch` int(11) NOT NULL,
  `b_logo` int(11) NOT NULL,
  `b_color` int(11) NOT NULL,
  `c_scratch` int(11) NOT NULL,
  `c_broken` int(11) NOT NULL,
  `c_dent` int(11) NOT NULL,
  `d_scratch` int(11) NOT NULL,
  `d_broken` int(11) NOT NULL,
  `d_dent` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `b_broken` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clean_sticker_tasks`
--

CREATE TABLE `clean_sticker_tasks` (
  `clean_sticker_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `combine_requests`
--

CREATE TABLE `combine_requests` (
  `com_id` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `keyboard` int(11) DEFAULT 2,
  `speakers` int(11) DEFAULT 2,
  `camera` int(11) DEFAULT 2,
  `bazel` int(11) DEFAULT 2,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `keyboard_keys` int(11) DEFAULT 2,
  `mousepad` int(11) DEFAULT 2,
  `mouse_pad_button` int(11) DEFAULT 2,
  `camera_cable` int(11) DEFAULT 2,
  `back_cover` int(11) DEFAULT 2,
  `wifi_card` int(11) DEFAULT 2,
  `lcd_cable` int(11) DEFAULT 2,
  `battery` int(11) DEFAULT 2,
  `battery_cable` int(11) DEFAULT 2,
  `dvd_rom` int(11) DEFAULT 2,
  `dvd_caddy` int(11) DEFAULT 2,
  `hdd_caddy` int(11) DEFAULT 2,
  `hdd_cable_connector` int(11) DEFAULT 2,
  `c_panel_palm_rest` int(11) DEFAULT 2,
  `mb_base` int(11) DEFAULT 2,
  `hings_cover` int(11) DEFAULT 2,
  `lan_cover` int(11) DEFAULT 2,
  `combined_id` int(11) DEFAULT 2,
  `heat_sink` int(11) DEFAULT 2,
  `fan` int(11) DEFAULT 2,
  `cpu` int(11) DEFAULT 2,
  `status` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `phone_code` int(11) NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `phone_code`, `country_code`, `country_name`) VALUES
(1, 93, 'AF', 'Afghanistan'),
(2, 358, 'AX', 'Aland Islands'),
(3, 355, 'AL', 'Albania'),
(4, 213, 'DZ', 'Algeria'),
(5, 1684, 'AS', 'American Samoa'),
(6, 376, 'AD', 'Andorra'),
(7, 244, 'AO', 'Angola'),
(8, 1264, 'AI', 'Anguilla'),
(9, 672, 'AQ', 'Antarctica'),
(10, 1268, 'AG', 'Antigua and Barbuda'),
(11, 54, 'AR', 'Argentina'),
(12, 374, 'AM', 'Armenia'),
(13, 297, 'AW', 'Aruba'),
(14, 61, 'AU', 'Australia'),
(15, 43, 'AT', 'Austria'),
(16, 994, 'AZ', 'Azerbaijan'),
(17, 1242, 'BS', 'Bahamas'),
(18, 973, 'BH', 'Bahrain'),
(19, 880, 'BD', 'Bangladesh'),
(20, 1246, 'BB', 'Barbados'),
(21, 375, 'BY', 'Belarus'),
(22, 32, 'BE', 'Belgium'),
(23, 501, 'BZ', 'Belize'),
(24, 229, 'BJ', 'Benin'),
(25, 1441, 'BM', 'Bermuda'),
(26, 975, 'BT', 'Bhutan'),
(27, 591, 'BO', 'Bolivia'),
(28, 599, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 387, 'BA', 'Bosnia and Herzegovina'),
(30, 267, 'BW', 'Botswana'),
(31, 55, 'BV', 'Bouvet Island'),
(32, 55, 'BR', 'Brazil'),
(33, 246, 'IO', 'British Indian Ocean Territory'),
(34, 673, 'BN', 'Brunei Darussalam'),
(35, 359, 'BG', 'Bulgaria'),
(36, 226, 'BF', 'Burkina Faso'),
(37, 257, 'BI', 'Burundi'),
(38, 855, 'KH', 'Cambodia'),
(39, 237, 'CM', 'Cameroon'),
(40, 1, 'CA', 'Canada'),
(41, 238, 'CV', 'Cape Verde'),
(42, 1345, 'KY', 'Cayman Islands'),
(43, 236, 'CF', 'Central African Republic'),
(44, 235, 'TD', 'Chad'),
(45, 56, 'CL', 'Chile'),
(46, 86, 'CN', 'China'),
(47, 61, 'CX', 'Christmas Island'),
(48, 672, 'CC', 'Cocos (Keeling) Islands'),
(49, 57, 'CO', 'Colombia'),
(50, 269, 'KM', 'Comoros'),
(51, 242, 'CG', 'Congo'),
(52, 242, 'CD', 'Congo, Democratic Republic of the Congo'),
(53, 682, 'CK', 'Cook Islands'),
(54, 506, 'CR', 'Costa Rica'),
(55, 225, 'CI', 'Cote D\'Ivoire'),
(56, 385, 'HR', 'Croatia'),
(57, 53, 'CU', 'Cuba'),
(58, 599, 'CW', 'Curacao'),
(59, 357, 'CY', 'Cyprus'),
(60, 420, 'CZ', 'Czech Republic'),
(61, 45, 'DK', 'Denmark'),
(62, 253, 'DJ', 'Djibouti'),
(63, 1767, 'DM', 'Dominica'),
(64, 1809, 'DO', 'Dominican Republic'),
(65, 593, 'EC', 'Ecuador'),
(66, 20, 'EG', 'Egypt'),
(67, 503, 'SV', 'El Salvador'),
(68, 240, 'GQ', 'Equatorial Guinea'),
(69, 291, 'ER', 'Eritrea'),
(70, 372, 'EE', 'Estonia'),
(71, 251, 'ET', 'Ethiopia'),
(72, 500, 'FK', 'Falkland Islands (Malvinas)'),
(73, 298, 'FO', 'Faroe Islands'),
(74, 679, 'FJ', 'Fiji'),
(75, 358, 'FI', 'Finland'),
(76, 33, 'FR', 'France'),
(77, 594, 'GF', 'French Guiana'),
(78, 689, 'PF', 'French Polynesia'),
(79, 262, 'TF', 'French Southern Territories'),
(80, 241, 'GA', 'Gabon'),
(81, 220, 'GM', 'Gambia'),
(82, 995, 'GE', 'Georgia'),
(83, 49, 'DE', 'Germany'),
(84, 233, 'GH', 'Ghana'),
(85, 350, 'GI', 'Gibraltar'),
(86, 30, 'GR', 'Greece'),
(87, 299, 'GL', 'Greenland'),
(88, 1473, 'GD', 'Grenada'),
(89, 590, 'GP', 'Guadeloupe'),
(90, 1671, 'GU', 'Guam'),
(91, 502, 'GT', 'Guatemala'),
(92, 44, 'GG', 'Guernsey'),
(93, 224, 'GN', 'Guinea'),
(94, 245, 'GW', 'Guinea-Bissau'),
(95, 592, 'GY', 'Guyana'),
(96, 509, 'HT', 'Haiti'),
(97, 0, 'HM', 'Heard Island and Mcdonald Islands'),
(98, 39, 'VA', 'Holy See (Vatican City State)'),
(99, 504, 'HN', 'Honduras'),
(100, 852, 'HK', 'Hong Kong'),
(101, 36, 'HU', 'Hungary'),
(102, 354, 'IS', 'Iceland'),
(103, 91, 'IN', 'India'),
(104, 62, 'ID', 'Indonesia'),
(105, 98, 'IR', 'Iran, Islamic Republic of'),
(106, 964, 'IQ', 'Iraq'),
(107, 353, 'IE', 'Ireland'),
(108, 44, 'IM', 'Isle of Man'),
(109, 972, 'IL', 'Israel'),
(110, 39, 'IT', 'Italy'),
(111, 1876, 'JM', 'Jamaica'),
(112, 81, 'JP', 'Japan'),
(113, 44, 'JE', 'Jersey'),
(114, 962, 'JO', 'Jordan'),
(115, 7, 'KZ', 'Kazakhstan'),
(116, 254, 'KE', 'Kenya'),
(117, 686, 'KI', 'Kiribati'),
(118, 850, 'KP', 'Korea, Democratic People\'s Republic of'),
(119, 82, 'KR', 'Korea, Republic of'),
(120, 381, 'XK', 'Kosovo'),
(121, 965, 'KW', 'Kuwait'),
(122, 996, 'KG', 'Kyrgyzstan'),
(123, 856, 'LA', 'Lao People\'s Democratic Republic'),
(124, 371, 'LV', 'Latvia'),
(125, 961, 'LB', 'Lebanon'),
(126, 266, 'LS', 'Lesotho'),
(127, 231, 'LR', 'Liberia'),
(128, 218, 'LY', 'Libyan Arab Jamahiriya'),
(129, 423, 'LI', 'Liechtenstein'),
(130, 370, 'LT', 'Lithuania'),
(131, 352, 'LU', 'Luxembourg'),
(132, 853, 'MO', 'Macao'),
(133, 389, 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(134, 261, 'MG', 'Madagascar'),
(135, 265, 'MW', 'Malawi'),
(136, 60, 'MY', 'Malaysia'),
(137, 960, 'MV', 'Maldives'),
(138, 223, 'ML', 'Mali'),
(139, 356, 'MT', 'Malta'),
(140, 692, 'MH', 'Marshall Islands'),
(141, 596, 'MQ', 'Martinique'),
(142, 222, 'MR', 'Mauritania'),
(143, 230, 'MU', 'Mauritius'),
(144, 269, 'YT', 'Mayotte'),
(145, 52, 'MX', 'Mexico'),
(146, 691, 'FM', 'Micronesia, Federated States of'),
(147, 373, 'MD', 'Moldova, Republic of'),
(148, 377, 'MC', 'Monaco'),
(149, 976, 'MN', 'Mongolia'),
(150, 382, 'ME', 'Montenegro'),
(151, 1664, 'MS', 'Montserrat'),
(152, 212, 'MA', 'Morocco'),
(153, 258, 'MZ', 'Mozambique'),
(154, 95, 'MM', 'Myanmar'),
(155, 264, 'NA', 'Namibia'),
(156, 674, 'NR', 'Nauru'),
(157, 977, 'NP', 'Nepal'),
(158, 31, 'NL', 'Netherlands'),
(159, 599, 'AN', 'Netherlands Antilles'),
(160, 687, 'NC', 'New Caledonia'),
(161, 64, 'NZ', 'New Zealand'),
(162, 505, 'NI', 'Nicaragua'),
(163, 227, 'NE', 'Niger'),
(164, 234, 'NG', 'Nigeria'),
(165, 683, 'NU', 'Niue'),
(166, 672, 'NF', 'Norfolk Island'),
(167, 1670, 'MP', 'Northern Mariana Islands'),
(168, 47, 'NO', 'Norway'),
(169, 968, 'OM', 'Oman'),
(170, 92, 'PK', 'Pakistan'),
(171, 680, 'PW', 'Palau'),
(172, 970, 'PS', 'Palestinian Territory, Occupied'),
(173, 507, 'PA', 'Panama'),
(174, 675, 'PG', 'Papua New Guinea'),
(175, 595, 'PY', 'Paraguay'),
(176, 51, 'PE', 'Peru'),
(177, 63, 'PH', 'Philippines'),
(178, 64, 'PN', 'Pitcairn'),
(179, 48, 'PL', 'Poland'),
(180, 351, 'PT', 'Portugal'),
(181, 1787, 'PR', 'Puerto Rico'),
(182, 974, 'QA', 'Qatar'),
(183, 262, 'RE', 'Reunion'),
(184, 40, 'RO', 'Romania'),
(185, 70, 'RU', 'Russian Federation'),
(186, 250, 'RW', 'Rwanda'),
(187, 590, 'BL', 'Saint Barthelemy'),
(188, 290, 'SH', 'Saint Helena'),
(189, 1869, 'KN', 'Saint Kitts and Nevis'),
(190, 1758, 'LC', 'Saint Lucia'),
(191, 590, 'MF', 'Saint Martin'),
(192, 508, 'PM', 'Saint Pierre and Miquelon'),
(193, 1784, 'VC', 'Saint Vincent and the Grenadines'),
(194, 684, 'WS', 'Samoa'),
(195, 378, 'SM', 'San Marino'),
(196, 239, 'ST', 'Sao Tome and Principe'),
(197, 966, 'SA', 'Saudi Arabia'),
(198, 221, 'SN', 'Senegal'),
(199, 381, 'RS', 'Serbia'),
(200, 381, 'CS', 'Serbia and Montenegro'),
(201, 248, 'SC', 'Seychelles'),
(202, 232, 'SL', 'Sierra Leone'),
(203, 65, 'SG', 'Singapore'),
(204, 1, 'SX', 'Sint Maarten'),
(205, 421, 'SK', 'Slovakia'),
(206, 386, 'SI', 'Slovenia'),
(207, 677, 'SB', 'Solomon Islands'),
(208, 252, 'SO', 'Somalia'),
(209, 27, 'ZA', 'South Africa'),
(210, 500, 'GS', 'South Georgia and the South Sandwich Islands'),
(211, 211, 'SS', 'South Sudan'),
(212, 34, 'ES', 'Spain'),
(213, 94, 'LK', 'Sri Lanka'),
(214, 249, 'SD', 'Sudan'),
(215, 597, 'SR', 'Suriname'),
(216, 47, 'SJ', 'Svalbard and Jan Mayen'),
(217, 268, 'SZ', 'Swaziland'),
(218, 46, 'SE', 'Sweden'),
(219, 41, 'CH', 'Switzerland'),
(220, 963, 'SY', 'Syrian Arab Republic'),
(221, 886, 'TW', 'Taiwan, Province of China'),
(222, 992, 'TJ', 'Tajikistan'),
(223, 255, 'TZ', 'Tanzania, United Republic of'),
(224, 66, 'TH', 'Thailand'),
(225, 670, 'TL', 'Timor-Leste'),
(226, 228, 'TG', 'Togo'),
(227, 690, 'TK', 'Tokelau'),
(228, 676, 'TO', 'Tonga'),
(229, 1868, 'TT', 'Trinidad and Tobago'),
(230, 216, 'TN', 'Tunisia'),
(231, 90, 'TR', 'Turkey'),
(232, 7370, 'TM', 'Turkmenistan'),
(233, 1649, 'TC', 'Turks and Caicos Islands'),
(234, 688, 'TV', 'Tuvalu'),
(235, 256, 'UG', 'Uganda'),
(236, 380, 'UA', 'Ukraine'),
(237, 971, 'AE', 'United Arab Emirates'),
(238, 44, 'GB', 'United Kingdom'),
(239, 1, 'US', 'United States'),
(240, 1, 'UM', 'United States Minor Outlying Islands'),
(241, 598, 'UY', 'Uruguay'),
(242, 998, 'UZ', 'Uzbekistan'),
(243, 678, 'VU', 'Vanuatu'),
(244, 58, 'VE', 'Venezuela'),
(245, 84, 'VN', 'Viet Nam'),
(246, 1284, 'VG', 'Virgin Islands, British'),
(247, 1340, 'VI', 'Virgin Islands, U.s.'),
(248, 681, 'WF', 'Wallis and Futuna'),
(249, 212, 'EH', 'Western Sahara'),
(250, 967, 'YE', 'Yemen'),
(251, 260, 'ZM', 'Zambia'),
(252, 263, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `customer_informations`
--

CREATE TABLE `customer_informations` (
  `cus_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `sales_member` varchar(100) NOT NULL,
  `search_keyword_1` varchar(100) NOT NULL,
  `search_keyword_2` varchar(100) NOT NULL,
  `search_keyword_3` varchar(100) NOT NULL,
  `search_keyword_4` varchar(100) NOT NULL,
  `search_keyword_5` varchar(100) NOT NULL,
  `customer_target_qty` varchar(100) NOT NULL,
  `facebook` int(1) DEFAULT 0,
  `instagram` int(1) DEFAULT 0,
  `lazada` int(1) DEFAULT 0,
  `shoppe` int(1) DEFAULT 0,
  `tokopedia` int(1) DEFAULT 0,
  `amazon.com` int(1) DEFAULT 0,
  `amazon.uk` int(1) DEFAULT 0,
  `tiktok` int(1) DEFAULT 0,
  `jiji.ng` int(1) DEFAULT 0,
  `jiji.co.ke` int(1) DEFAULT 0,
  `google` int(1) DEFAULT 0,
  `pcexporters` int(1) DEFAULT 0,
  `jumia` int(11) DEFAULT 0,
  `thebrokersite` int(1) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(3) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'software'),
(2, 'hr'),
(3, 'e-commerce'),
(4, 'sales'),
(5, 'accounts'),
(6, 'inventory'),
(7, 'production'),
(8, 'motherboard'),
(9, 'lcd'),
(10, 'bodywork'),
(11, 'painting'),
(12, 'cleaning'),
(13, 'sticker'),
(14, 'battery'),
(15, 'qc'),
(16, 'packing'),
(17, 'distributor'),
(18, 'managment');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_tasks`
--

CREATE TABLE `distributor_tasks` (
  `distributor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `production_id` int(11) DEFAULT NULL,
  `mb_id` int(11) DEFAULT NULL,
  `lcd_id` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date DEFAULT NULL,
  `old_passport` varchar(20) DEFAULT NULL,
  `current_passport` varchar(20) NOT NULL,
  `passport_expiring_date` date NOT NULL,
  `visa_type` int(15) NOT NULL COMMENT '1=visit, 2=own, 3=company, 4=cancel, 5=student',
  `visa_expiring_date` date NOT NULL,
  `contact_number` varchar(25) DEFAULT NULL,
  `current_address` varchar(50) DEFAULT NULL,
  `permanent_address` varchar(50) DEFAULT NULL,
  `resident_country` varchar(25) NOT NULL,
  `emergency_contact` varchar(25) DEFAULT NULL,
  `profile_photo` varchar(200) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `note` text DEFAULT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `full_name`, `email`, `gender`, `birthday`, `old_passport`, `current_passport`, `passport_expiring_date`, `visa_type`, `visa_expiring_date`, `contact_number`, `current_address`, `permanent_address`, `resident_country`, `emergency_contact`, `profile_photo`, `department_id`, `role_id`, `join_date`, `note`, `created_by`, `created_time`) VALUES
(1, '', '', '', NULL, '', NULL, NULL, '', '0000-00-00', 3, '0000-00-00', NULL, NULL, NULL, '', NULL, NULL, 1, 1, '0000-00-00', NULL, '', '2023-02-23 19:31:57'),
(18, 'vidusha', 'wijekoon', 'athapaththu wijekoon mudiyasenlage vidusha pulasht', '', 'male', '1990-05-11', '', '2313123', '2030-02-06', 0, '2024-09-14', '00971588250962', 'abu shagara', '52/a, mariyawaththe, gampola', 'Sri Lanka', '0094812353489', 'approved.png', 11, 10, '2022-07-21', '', 'admin', '2023-02-23 19:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `e_com_inventory_informations`
--

CREATE TABLE `e_com_inventory_informations` (
  `e_com_id` int(11) NOT NULL,
  ` status` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  ` created_date` date DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `e_com_listing`
--

CREATE TABLE `e_com_listing` (
  `listing_id` int(11) NOT NULL,
  `promo_type` varchar(20) NOT NULL,
  `catelog_sku` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `size` int(11) NOT NULL,
  `generation` int(11) NOT NULL,
  `cpu` varchar(10) NOT NULL,
  `ram` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `our_wholesale_price` int(11) NOT NULL,
  `our_current_noon_price` int(11) NOT NULL,
  `other_noon_price` int(11) NOT NULL,
  `amazon_price` int(11) NOT NULL,
  `cartlow_price` int(11) NOT NULL,
  `cost_with_windows_ac` int(11) NOT NULL,
  `gross_profit` int(11) NOT NULL,
  `noon_charges` int(11) NOT NULL,
  `noon_sale_price` int(11) NOT NULL,
  `noon_paid` int(11) NOT NULL,
  `noon_net_profit` int(11) NOT NULL,
  `profit_percentage` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL,
  `exp_date` datetime NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laptop_unit_prices`
--

CREATE TABLE `laptop_unit_prices` (
  `unit_id` int(11) NOT NULL,
  ` device` varchar(10) DEFAULT NULL,
  ` brand` varchar(100) DEFAULT NULL,
  ` model` varchar(100) DEFAULT NULL,
  ` core` varchar(100) DEFAULT NULL,
  ` generation` varchar(10) DEFAULT NULL,
  ` ram` varchar(10) DEFAULT NULL,
  ` hdd` varchar(10) DEFAULT NULL,
  ` touch_wholesale_price` varchar(10) DEFAULT NULL,
  ` none_touch_wholesale_price` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  ` created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lcd_tasks`
--

CREATE TABLE `lcd_tasks` (
  `lcd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `production_number` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `machine_from_suppliers`
--

CREATE TABLE `machine_from_suppliers` (
  `machine_id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `cci_number` varchar(30) DEFAULT NULL,
  `alsakb_qr_number` varchar(30) DEFAULT NULL,
  `serial_number` varchar(100) DEFAULT NULL,
  `mfg` varchar(100) DEFAULT NULL,
  `device` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `series` date DEFAULT NULL,
  `processor` varchar(20) DEFAULT NULL,
  `core` varchar(20) DEFAULT NULL,
  `generation` varchar(20) DEFAULT NULL,
  `speed` varchar(20) DEFAULT NULL,
  `lcd_size` varchar(100) DEFAULT NULL,
  `resolution` varchar(20) DEFAULT NULL,
  `optical` varchar(20) DEFAULT NULL,
  `battery` varchar(20) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `touch_none_touch` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `fingerprint` varchar(20) DEFAULT NULL,
  `bluetooth` varchar(20) DEFAULT NULL,
  `camera` varchar(20) DEFAULT NULL,
  `bios_lock` varchar(20) DEFAULT NULL,
  `ram` varchar(20) DEFAULT NULL,
  `hdd_capacity` varchar(20) DEFAULT NULL,
  `hard_disk_type` varchar(20) DEFAULT NULL,
  `graphic_brand` varchar(20) DEFAULT NULL,
  `graphic_capacity` varchar(20) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `wholesale_price` double(5,2) DEFAULT NULL,
  `discount_price` double(5,2) DEFAULT NULL,
  `ecommerce_price` double(5,2) DEFAULT NULL,
  `add_to_inventory` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `main_inventory_informations`
--

CREATE TABLE `main_inventory_informations` (
  `inventory_id` int(11) NOT NULL,
  `machine_id` int(11) DEFAULT NULL,
  `device` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `series` varchar(100) NOT NULL,
  `core` varchar(50) NOT NULL,
  `generation` varchar(50) NOT NULL,
  `create_date` date DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `create_by_inventory_id` varchar(20) NOT NULL,
  `send_to_production` int(11) NOT NULL,
  `send_time_to_production` date DEFAULT NULL,
  `sales_order_id` int(11) DEFAULT NULL,
  `dispatch` int(11) DEFAULT NULL,
  `mfg` varchar(100) NOT NULL,
  `speed` varchar(50) NOT NULL,
  `battery` varchar(20) NOT NULL,
  `lcd_size` varchar(20) NOT NULL,
  `touch_or_none_touch` varchar(20) NOT NULL,
  `bios_lock` varchar(20) NOT NULL,
  `optical` varchar(20) NOT NULL,
  `screen_resolution` varchar(20) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `hdd_capacity` varchar(20) NOT NULL,
  `touch_wholesale_price` double(5,2) DEFAULT NULL,
  `non_touch_wholesale_price` double(5,2) DEFAULT NULL,
  `sale_set_ram` varchar(20) NOT NULL,
  `sale_set_hdd` varchar(20) NOT NULL,
  `price_set_time` date DEFAULT NULL,
  `price_set_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motherboard_tasks`
--

CREATE TABLE `motherboard_tasks` (
  `mb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `issue` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packing_tasks`
--

CREATE TABLE `packing_tasks` (
  `packing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `painting_tasks`
--

CREATE TABLE `painting_tasks` (
  `paint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `part_lists`
--

CREATE TABLE `part_lists` (
  `part_id` int(11) NOT NULL,
  ` part_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `part_stocks`
--

CREATE TABLE `part_stocks` (
  `part_stock_id` int(11) NOT NULL,
  ` part_model` varchar(10) DEFAULT NULL,
  ` part_brand` varchar(10) DEFAULT NULL,
  ` part_capacity` varchar(10) DEFAULT NULL,
  ` qty` varchar(10) DEFAULT NULL,
  ` location` varchar(10) DEFAULT NULL,
  `part_id` int(11) DEFAULT NULL,
  `rack_id` int(11) DEFAULT NULL,
  `rack_slot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `performance_records`
--

CREATE TABLE `performance_records` (
  `performance_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `qr_number` int(11) DEFAULT NULL,
  `mfg_code` varchar(100) NOT NULL,
  `model` varchar(30) NOT NULL,
  `job_description` varchar(200) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `spend_time` time NOT NULL,
  `target` decimal(11,2) NOT NULL,
  `production` varchar(20) NOT NULL,
  `technician_id` varchar(20) NOT NULL,
  `charger` varchar(20) NOT NULL,
  `model_pack` varchar(20) NOT NULL,
  `charger_pack` varchar(20) NOT NULL,
  `sales_order` varchar(20) NOT NULL,
  `previous_work` datetime NOT NULL,
  `lcd_p_n_code` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productions`
--

CREATE TABLE `productions` (
  `production_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sales_order_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `production_part_requests`
--

CREATE TABLE `production_part_requests` (
  `part_request_id` int(11) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `generation` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `location` varchar(40) NOT NULL,
  `keyboard` int(11) NOT NULL,
  `speakers` int(11) NOT NULL,
  `camera` int(11) NOT NULL,
  `bazel` int(11) NOT NULL,
  `lan_cover` int(11) NOT NULL,
  `mousepad` int(11) NOT NULL,
  `mouse_pad_button` int(11) NOT NULL,
  `camera_cable` int(11) NOT NULL,
  `back_cover` int(11) NOT NULL,
  `wifi_card` int(11) NOT NULL,
  `lcd_cable` int(11) NOT NULL,
  `battery` int(11) NOT NULL,
  `battery_cable` int(11) NOT NULL,
  `dvd_rom` int(11) NOT NULL,
  `dvd_caddy` int(11) NOT NULL,
  `hdd_caddy` int(11) NOT NULL,
  `hdd_cable_connector` int(11) NOT NULL,
  `c_panel_palm_rest` int(11) NOT NULL,
  `mb_base` int(11) NOT NULL,
  `hings_cover` int(11) NOT NULL,
  `switch` int(11) NOT NULL,
  `switch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qc_forms`
--

CREATE TABLE `qc_forms` (
  `qc_form_id` int(11) NOT NULL,
  `qr_number` int(11) DEFAULT NULL,
  `bios_lock_hp` varchar(10) DEFAULT NULL,
  `bios_lock_dell` varchar(10) DEFAULT NULL,
  `bios_lock_lenovo` varchar(10) DEFAULT NULL,
  `bios_lock_other` varchar(10) DEFAULT NULL,
  `computrace_hp` varchar(10) DEFAULT NULL,
  `computrace_dell` varchar(10) DEFAULT NULL,
  `computrace_lenovo` varchar(10) DEFAULT NULL,
  `computrace_other` varchar(10) DEFAULT NULL,
  `me_region_lock_hp` varchar(10) DEFAULT NULL,
  `tpm_lock_dell` varchar(10) DEFAULT NULL,
  `other_error_lenovo` varchar(10) DEFAULT NULL,
  `other_error_other_brand` varchar(10) DEFAULT NULL,
  `a_top` varchar(10) DEFAULT NULL,
  `b_bazel` varchar(10) DEFAULT NULL,
  `c_palmrest` varchar(10) DEFAULT NULL,
  `d_back_cover` varchar(10) DEFAULT NULL,
  `keyboard` varchar(10) DEFAULT NULL,
  `lcd` varchar(10) DEFAULT NULL,
  `webcam` varchar(10) DEFAULT NULL,
  `mousepad_button` varchar(10) DEFAULT NULL,
  `mic` varchar(10) DEFAULT NULL,
  `speaker` varchar(10) DEFAULT NULL,
  `wi_fi_connection` varchar(10) DEFAULT NULL,
  `usb` varchar(10) DEFAULT NULL,
  `battery` varchar(10) DEFAULT NULL,
  `hinges_cover` varchar(10) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_department` int(11) NOT NULL,
  `rejection_department` int(11) DEFAULT NULL,
  `reject_person` int(11) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0,
  `performance_id` int(10) NOT NULL,
  `power` varchar(20) NOT NULL,
  `mb_display` varchar(20) NOT NULL,
  `mb_other_issue` varchar(20) NOT NULL,
  `bodywork` varchar(10) NOT NULL DEFAULT '0',
  `sanding` varchar(10) NOT NULL DEFAULT '0',
  `ram` varchar(15) NOT NULL,
  `hard_disk_boot` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qc_tasks`
--

CREATE TABLE `qc_tasks` (
  `qc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `created_date` date DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `task` varchar(200) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `racks`
--

CREATE TABLE `racks` (
  `rack_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `rack_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rack_slots`
--

CREATE TABLE `rack_slots` (
  `rack_slot_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `rack_slot_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_marketing_informations`
--

CREATE TABLE `sales_marketing_informations` (
  `marketing_id` int(11) NOT NULL,
  `customer_create_model_1` varchar(25) NOT NULL,
  `customer_create_model_2` varchar(25) NOT NULL,
  `customer_create_model_3` varchar(25) NOT NULL,
  `customer_create_model_4` varchar(25) NOT NULL,
  `customer_create_model_5` varchar(25) NOT NULL,
  `customer_create_model_6` varchar(25) NOT NULL,
  `customer_create_model_7` varchar(25) NOT NULL,
  `customer_create_model_8` varchar(25) NOT NULL,
  `customer_create_model_9` varchar(25) NOT NULL,
  `customer_create_model_10` varchar(25) NOT NULL,
  `thebrokersite1` int(1) NOT NULL DEFAULT 0,
  `pcexporters1` int(1) NOT NULL DEFAULT 0,
  `facebook1` int(1) NOT NULL DEFAULT 0,
  `platform_create_model_1` varchar(25) NOT NULL,
  `platform_create_model_2` varchar(25) NOT NULL,
  `platform_create_model_3` varchar(25) NOT NULL,
  `platform_create_model_4` varchar(25) NOT NULL,
  `platform_create_model_5` varchar(25) NOT NULL,
  `platform_create_model_6` varchar(25) NOT NULL,
  `platform_create_model_7` varchar(25) NOT NULL,
  `platform_create_model_8` varchar(25) NOT NULL,
  `platform_create_model_9` varchar(25) NOT NULL,
  `platform_create_model_110` varchar(25) NOT NULL,
  `sales_member` varchar(100) NOT NULL,
  `day` varchar(15) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_infomations`
--

CREATE TABLE `sales_order_infomations` (
  `sales_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` varchar(100) DEFAULT NULL,
  `customer_city` varchar(100) DEFAULT NULL,
  `resident_country` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `shipping_country` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `contact_number` int(30) DEFAULT NULL,
  `created_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_items`
--

CREATE TABLE `sales_order_items` (
  `sales_order_item_id` int(11) NOT NULL,
  `sales_order_id` int(11) NOT NULL,
  `item_generation` varchar(100) DEFAULT NULL,
  `item_ram` varchar(100) DEFAULT NULL,
  `item_hdd` varchar(100) DEFAULT NULL,
  `item_condition` varchar(100) DEFAULT NULL,
  `item_quantity` varchar(100) DEFAULT NULL,
  `item_price` varchar(100) DEFAULT NULL,
  `item_total_price` varchar(100) DEFAULT NULL,
  `item_delivery_date` date DEFAULT NULL,
  `sales_order_created_date` date DEFAULT NULL,
  `item_display` varchar(100) DEFAULT NULL,
  `item_graphic` varchar(100) DEFAULT NULL,
  `item_screen` varchar(100) DEFAULT NULL,
  `item_bulk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_location` varchar(100) DEFAULT NULL,
  `user_last_login` varchar(100) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `user_created_date` date NOT NULL,
  `created_by` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_id`, `user_name`, `user_password`, `user_location`, `user_last_login`, `is_active`, `user_created_date`, `created_by`) VALUES
(11, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, '2023-02-25 19:54:09', 1, '2023-02-25', 'admin'),
(13, 18, 'asdasd', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', NULL, NULL, 0, '2023-02-25', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users_logged_in_time`
--

CREATE TABLE `users_logged_in_time` (
  `id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `log_in_time` datetime NOT NULL,
  `log_out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_logged_in_time`
--

INSERT INTO `users_logged_in_time` (`id`, `user_id`, `emp_id`, `log_in_time`, `log_out_time`) VALUES
(2, 11, 1, '2023-02-25 18:04:03', '0000-00-00 00:00:00'),
(3, 11, 1, '2023-02-25 18:05:08', '0000-00-00 00:00:00'),
(4, 11, 1, '2023-02-25 18:05:10', '0000-00-00 00:00:00'),
(5, 11, 1, '2023-02-25 18:05:12', '0000-00-00 00:00:00'),
(6, 11, 1, '2023-02-25 18:14:13', '0000-00-00 00:00:00'),
(7, 11, 1, '2023-02-25 19:12:38', '0000-00-00 00:00:00'),
(8, 11, 1, '2023-02-25 19:23:12', '0000-00-00 00:00:00'),
(9, 11, 1, '2023-02-25 19:23:43', '2023-02-25 19:24:56'),
(10, 11, 1, '2023-02-25 19:32:01', '2023-02-25 19:46:39'),
(11, 11, 1, '2023-02-25 19:49:12', '2023-02-25 19:49:12'),
(12, 11, 1, '2023-02-25 19:49:21', '2023-02-25 19:49:21'),
(13, 11, 1, '2023-02-25 19:49:30', '2023-02-25 19:49:30'),
(14, 11, 1, '2023-02-25 19:49:43', '2023-02-25 19:51:26'),
(15, 11, 1, '2023-02-25 19:51:27', NULL),
(16, 11, 1, '2023-02-25 19:53:42', '2023-02-25 19:53:53'),
(17, 11, 1, '2023-02-25 19:54:09', '2023-02-25 19:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`) VALUES
(1, 'superuser'),
(2, 'management '),
(3, 'team leader'),
(4, 'assistant'),
(5, 'technician'),
(6, 'general worker'),
(7, 'cleaning'),
(8, 'security'),
(9, 'distributor'),
(10, 'helper'),
(11, 'development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bodywork_tasks`
--
ALTER TABLE `bodywork_tasks`
  ADD PRIMARY KEY (`bodywork_id`),
  ADD KEY `fk_productions_bodywork_tasks` (`production_id`);

--
-- Indexes for table `clean_sticker_tasks`
--
ALTER TABLE `clean_sticker_tasks`
  ADD PRIMARY KEY (`clean_sticker_id`),
  ADD KEY `fk_usersclean_sticker_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_clean_sticker_tasks` (`inventory_id`);

--
-- Indexes for table `combine_requests`
--
ALTER TABLE `combine_requests`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fk_com_req_production` (`p_id`),
  ADD KEY `fk_com_req_sales_order` (`sales_order_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `country_name` (`country_name`),
  ADD KEY `country_code` (`country_code`),
  ADD KEY `phone_code` (`phone_code`);

--
-- Indexes for table `customer_informations`
--
ALTER TABLE `customer_informations`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `fk_customer_information_users` (`created_by`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `distributor_tasks`
--
ALTER TABLE `distributor_tasks`
  ADD PRIMARY KEY (`distributor_id`),
  ADD KEY `fk_usersclean_distributor_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_distributor_tasks` (`inventory_id`),
  ADD KEY `fk_motherboard_distributor_tasks` (`mb_id`),
  ADD KEY `fk_lcd_clean_distributor_tasks` (`lcd_id`),
  ADD KEY `fk_production_distributor_tasks` (`production_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `FK_employee_department` (`department_id`),
  ADD KEY `FK_employee_user_role` (`role_id`),
  ADD KEY `resident_country` (`resident_country`);

--
-- Indexes for table `e_com_inventory_informations`
--
ALTER TABLE `e_com_inventory_informations`
  ADD PRIMARY KEY (`e_com_id`),
  ADD KEY `fk_e_com_inventory_informations_users` (`user_id`),
  ADD KEY `fk_e_com_inventory_informations_main_inventory` (`inventory_id`);

--
-- Indexes for table `e_com_listing`
--
ALTER TABLE `e_com_listing`
  ADD PRIMARY KEY (`listing_id`),
  ADD KEY `fk_e_com_listing_informations_users` (`created_by`);

--
-- Indexes for table `laptop_unit_prices`
--
ALTER TABLE `laptop_unit_prices`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `fk_unit_price_users` (`user_id`);

--
-- Indexes for table `lcd_tasks`
--
ALTER TABLE `lcd_tasks`
  ADD PRIMARY KEY (`lcd_id`),
  ADD KEY `fk_users_lcd_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_lcd_tasks` (`inventory_id`);

--
-- Indexes for table `machine_from_suppliers`
--
ALTER TABLE `machine_from_suppliers`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `main_inventory_informations`
--
ALTER TABLE `main_inventory_informations`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `fk_inventory_machine` (`machine_id`);

--
-- Indexes for table `motherboard_tasks`
--
ALTER TABLE `motherboard_tasks`
  ADD PRIMARY KEY (`mb_id`),
  ADD KEY `fk_users_motherboard_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_motherboard_tasks` (`inventory_id`);

--
-- Indexes for table `packing_tasks`
--
ALTER TABLE `packing_tasks`
  ADD PRIMARY KEY (`packing_id`),
  ADD KEY `fk_users_packing_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_packing_tasks` (`inventory_id`);

--
-- Indexes for table `painting_tasks`
--
ALTER TABLE `painting_tasks`
  ADD PRIMARY KEY (`paint_id`),
  ADD KEY `fk_users_paint_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_paint_tasks` (`inventory_id`);

--
-- Indexes for table `part_lists`
--
ALTER TABLE `part_lists`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `part_stocks`
--
ALTER TABLE `part_stocks`
  ADD PRIMARY KEY (`part_stock_id`),
  ADD KEY `fk_parts_partstock` (`part_id`),
  ADD KEY `fk_racks_partstock` (`rack_id`),
  ADD KEY `fk_rack_slots_partstock` (`rack_slot_id`);

--
-- Indexes for table `performance_records`
--
ALTER TABLE `performance_records`
  ADD PRIMARY KEY (`performance_id`),
  ADD KEY `fk_users_performance_rec` (`user_id`),
  ADD KEY `fk_inventory_performance_rec` (`qr_number`);

--
-- Indexes for table `productions`
--
ALTER TABLE `productions`
  ADD PRIMARY KEY (`production_id`),
  ADD KEY `fk_user_production` (`user_id`),
  ADD KEY `fk_prod_sales_order` (`sales_order_id`),
  ADD KEY `fk_inventory_sales_order` (`inventory_id`);

--
-- Indexes for table `production_part_requests`
--
ALTER TABLE `production_part_requests`
  ADD PRIMARY KEY (`part_request_id`),
  ADD KEY `fk_req_production` (`p_id`),
  ADD KEY `fk_req_sales_order` (`sales_order_id`);

--
-- Indexes for table `qc_forms`
--
ALTER TABLE `qc_forms`
  ADD PRIMARY KEY (`qc_form_id`),
  ADD KEY `fk_users_qc_forms` (`user_id`),
  ADD KEY `fk_main_inventory_qc_forms` (`qr_number`);

--
-- Indexes for table `qc_tasks`
--
ALTER TABLE `qc_tasks`
  ADD PRIMARY KEY (`qc_id`),
  ADD KEY `fk_users_qc_tasks` (`user_id`),
  ADD KEY `fk_main_inventory_qc_tasks` (`inventory_id`);

--
-- Indexes for table `racks`
--
ALTER TABLE `racks`
  ADD PRIMARY KEY (`rack_id`);

--
-- Indexes for table `rack_slots`
--
ALTER TABLE `rack_slots`
  ADD PRIMARY KEY (`rack_slot_id`);

--
-- Indexes for table `sales_marketing_informations`
--
ALTER TABLE `sales_marketing_informations`
  ADD PRIMARY KEY (`marketing_id`),
  ADD KEY `fk_marketing_information_users` (`created_by`);

--
-- Indexes for table `sales_order_infomations`
--
ALTER TABLE `sales_order_infomations`
  ADD PRIMARY KEY (`sales_order_id`),
  ADD KEY `FK_sales_order_info_users` (`user_id`);

--
-- Indexes for table `sales_order_items`
--
ALTER TABLE `sales_order_items`
  ADD PRIMARY KEY (`sales_order_item_id`),
  ADD KEY `FK_sales_order_info_sales_order_item` (`sales_order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_users_employee` (`emp_id`);

--
-- Indexes for table `users_logged_in_time`
--
ALTER TABLE `users_logged_in_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`emp_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bodywork_tasks`
--
ALTER TABLE `bodywork_tasks`
  MODIFY `bodywork_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clean_sticker_tasks`
--
ALTER TABLE `clean_sticker_tasks`
  MODIFY `clean_sticker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combine_requests`
--
ALTER TABLE `combine_requests`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `customer_informations`
--
ALTER TABLE `customer_informations`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `distributor_tasks`
--
ALTER TABLE `distributor_tasks`
  MODIFY `distributor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `e_com_inventory_informations`
--
ALTER TABLE `e_com_inventory_informations`
  MODIFY `e_com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_com_listing`
--
ALTER TABLE `e_com_listing`
  MODIFY `listing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop_unit_prices`
--
ALTER TABLE `laptop_unit_prices`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lcd_tasks`
--
ALTER TABLE `lcd_tasks`
  MODIFY `lcd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machine_from_suppliers`
--
ALTER TABLE `machine_from_suppliers`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_inventory_informations`
--
ALTER TABLE `main_inventory_informations`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motherboard_tasks`
--
ALTER TABLE `motherboard_tasks`
  MODIFY `mb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packing_tasks`
--
ALTER TABLE `packing_tasks`
  MODIFY `packing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `painting_tasks`
--
ALTER TABLE `painting_tasks`
  MODIFY `paint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `part_lists`
--
ALTER TABLE `part_lists`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `part_stocks`
--
ALTER TABLE `part_stocks`
  MODIFY `part_stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `performance_records`
--
ALTER TABLE `performance_records`
  MODIFY `performance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productions`
--
ALTER TABLE `productions`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `production_part_requests`
--
ALTER TABLE `production_part_requests`
  MODIFY `part_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qc_forms`
--
ALTER TABLE `qc_forms`
  MODIFY `qc_form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qc_tasks`
--
ALTER TABLE `qc_tasks`
  MODIFY `qc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `racks`
--
ALTER TABLE `racks`
  MODIFY `rack_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rack_slots`
--
ALTER TABLE `rack_slots`
  MODIFY `rack_slot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_marketing_informations`
--
ALTER TABLE `sales_marketing_informations`
  MODIFY `marketing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_order_infomations`
--
ALTER TABLE `sales_order_infomations`
  MODIFY `sales_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_order_items`
--
ALTER TABLE `sales_order_items`
  MODIFY `sales_order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_logged_in_time`
--
ALTER TABLE `users_logged_in_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2013;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bodywork_tasks`
--
ALTER TABLE `bodywork_tasks`
  ADD CONSTRAINT `fk_productions_bodywork_tasks` FOREIGN KEY (`production_id`) REFERENCES `productions` (`production_id`);

--
-- Constraints for table `clean_sticker_tasks`
--
ALTER TABLE `clean_sticker_tasks`
  ADD CONSTRAINT `fk_main_inventory_clean_sticker_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_usersclean_sticker_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `combine_requests`
--
ALTER TABLE `combine_requests`
  ADD CONSTRAINT `fk_com_req_production` FOREIGN KEY (`p_id`) REFERENCES `productions` (`production_id`),
  ADD CONSTRAINT `fk_com_req_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order_infomations` (`sales_order_id`);

--
-- Constraints for table `customer_informations`
--
ALTER TABLE `customer_informations`
  ADD CONSTRAINT `fk_customer_information_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `distributor_tasks`
--
ALTER TABLE `distributor_tasks`
  ADD CONSTRAINT `fk_lcd_clean_distributor_tasks` FOREIGN KEY (`lcd_id`) REFERENCES `lcd_tasks` (`lcd_id`),
  ADD CONSTRAINT `fk_main_inventory_distributor_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_motherboard_distributor_tasks` FOREIGN KEY (`mb_id`) REFERENCES `motherboard_tasks` (`mb_id`),
  ADD CONSTRAINT `fk_production_distributor_tasks` FOREIGN KEY (`production_id`) REFERENCES `productions` (`production_id`),
  ADD CONSTRAINT `fk_usersclean_distributor_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `FK_employee_department` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
  ADD CONSTRAINT `FK_employee_user_role` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`);

--
-- Constraints for table `e_com_inventory_informations`
--
ALTER TABLE `e_com_inventory_informations`
  ADD CONSTRAINT `fk_e_com_inventory_informations_main_inventory` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_e_com_inventory_informations_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `e_com_listing`
--
ALTER TABLE `e_com_listing`
  ADD CONSTRAINT `fk_e_com_listing_informations_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `laptop_unit_prices`
--
ALTER TABLE `laptop_unit_prices`
  ADD CONSTRAINT `fk_unit_price_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `lcd_tasks`
--
ALTER TABLE `lcd_tasks`
  ADD CONSTRAINT `fk_main_inventory_lcd_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_lcd_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `main_inventory_informations`
--
ALTER TABLE `main_inventory_informations`
  ADD CONSTRAINT `fk_inventory_machine` FOREIGN KEY (`machine_id`) REFERENCES `machine_from_suppliers` (`machine_id`);

--
-- Constraints for table `motherboard_tasks`
--
ALTER TABLE `motherboard_tasks`
  ADD CONSTRAINT `fk_main_inventory_motherboard_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_motherboard_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `packing_tasks`
--
ALTER TABLE `packing_tasks`
  ADD CONSTRAINT `fk_main_inventory_packing_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_packing_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `painting_tasks`
--
ALTER TABLE `painting_tasks`
  ADD CONSTRAINT `fk_main_inventory_paint_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_paint_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `part_stocks`
--
ALTER TABLE `part_stocks`
  ADD CONSTRAINT `fk_parts_partstock` FOREIGN KEY (`part_id`) REFERENCES `part_lists` (`part_id`),
  ADD CONSTRAINT `fk_rack_slots_partstock` FOREIGN KEY (`rack_slot_id`) REFERENCES `rack_slots` (`rack_slot_id`),
  ADD CONSTRAINT `fk_racks_partstock` FOREIGN KEY (`rack_id`) REFERENCES `racks` (`rack_id`);

--
-- Constraints for table `performance_records`
--
ALTER TABLE `performance_records`
  ADD CONSTRAINT `fk_inventory_performance_rec` FOREIGN KEY (`qr_number`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_performance_rec` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `productions`
--
ALTER TABLE `productions`
  ADD CONSTRAINT `fk_inventory_sales_order` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_prod_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order_infomations` (`sales_order_id`),
  ADD CONSTRAINT `fk_user_production` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `production_part_requests`
--
ALTER TABLE `production_part_requests`
  ADD CONSTRAINT `fk_req_production` FOREIGN KEY (`p_id`) REFERENCES `productions` (`production_id`),
  ADD CONSTRAINT `fk_req_sales_order` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order_infomations` (`sales_order_id`);

--
-- Constraints for table `qc_forms`
--
ALTER TABLE `qc_forms`
  ADD CONSTRAINT `fk_main_inventory_qc_forms` FOREIGN KEY (`qr_number`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_qc_forms` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `qc_tasks`
--
ALTER TABLE `qc_tasks`
  ADD CONSTRAINT `fk_main_inventory_qc_tasks` FOREIGN KEY (`inventory_id`) REFERENCES `main_inventory_informations` (`inventory_id`),
  ADD CONSTRAINT `fk_users_qc_tasks` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sales_marketing_informations`
--
ALTER TABLE `sales_marketing_informations`
  ADD CONSTRAINT `fk_marketing_information_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sales_order_infomations`
--
ALTER TABLE `sales_order_infomations`
  ADD CONSTRAINT `FK_sales_order_info_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sales_order_items`
--
ALTER TABLE `sales_order_items`
  ADD CONSTRAINT `FK_sales_order_info_sales_order_item` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order_infomations` (`sales_order_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_employee` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`);

--
-- Constraints for table `users_logged_in_time`
--
ALTER TABLE `users_logged_in_time`
  ADD CONSTRAINT `users_logged_in_time_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `users` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_logged_in_time_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
