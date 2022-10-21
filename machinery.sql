-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2022 at 08:53 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machinery`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_it` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_it` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_it` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `title_it`, `title_en`, `subtitle_it`, `subtitle_en`, `description_it`, `description_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/about/90141666338883.webp', '70', '4', 'anno di esperienza', 'year of experience', 'The purpose of the company as the main activity carried out by the company: - Production Industrial machinery and/or ingredients for food and agriculture, Steel, mechanical, automatic, marine, hydraulic, winding, windows, furniture, smoke and premises; - block A Standardization and testing of new and used industrial machinery; - being processed mechanics in general; Manufacture of numerically controlled machine tools; - Converting industrial machinery, new and used, on its own project Technical project or client; All the above activities will be able to be borne both on your own or on behalf of third parties; The company may also As a secondary activity, make artificial representation of people Third parties and foreigners as well. With a complete exclusion of all booked activities\r\n\r\nOur Team', 'Scopo dell\'azienda è l\'attività principale svolta dall\'azienda: - Produzione di macchinari e/o ingredienti industriali per l\'alimentazione e l\'agricoltura, siderurgici, meccanici, automatici, navali, idraulici, avvolgitori, serramenti, mobili, fumi e locali; - blocco A Standardizzazione e collaudo di macchinari industriali nuovi e usati; - essendo elaborata meccanica in genere; Fabbricazione di macchine utensili a controllo numerico; - Conversione di macchinari industriali, nuovi e usati, su proprio progetto Progetto tecnico o cliente; Tutte le attività di cui sopra potranno essere sostenute sia in proprio che per conto di terzi; La società può altresì, quale attività secondaria, fare rappresentazione artificiale di persone Terze e anche straniere. Con la totale esclusione di tutte le attività prenotate\r\n\r\nLa nostra squadra', NULL, '2022-10-21 08:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abdallah Mahmoud', 'admin@admin.com', '$2y$10$UN2xp3UZdCkP.32o4Yik5u2E5uFOrp9U6WK6EXdlboF9QIQSxDO3y', 'assets/uploads/admins/97361666014330.webp', '2022-10-10 13:34:24', NULL),
(3, 'عبدالله محمود', 'lord@admin.com', '$2y$10$.eKZgjZljPuFHifGnL78iefwSUt1ePQVh3FM0ymLVZqN/VT6gqgAK', NULL, '2022-10-21 07:21:16', '2022-10-21 07:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `whatsapp`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'التجمع الخامس', 'admin@admin.com', '01098604983', '2342342', NULL, 'dasdasdasdasd', '2022-10-19 17:03:18', '2022-10-19 17:03:18'),
(3, 'التجمع الخامس', 'admin@admin.com', '01098604983', '24534556', NULL, 'ffgatygnghfgsdg', '2022-10-19 17:03:46', '2022-10-19 17:03:46'),
(4, 'عبدالله محمود', 'admin@admin.com', '01098604983', '11', NULL, '42553426556', '2022-10-19 17:04:35', '2022-10-19 17:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_20_123415_create_admins_table', 1),
(3, '2022_03_20_134518_create_settings_table', 1),
(4, '2022_07_21_143846_create_users_table', 1),
(5, '2022_09_25_205512_create_setting_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(2) DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `rate`, `product_id`, `created_at`) VALUES
(56, 2, 5, 7, '2022-10-21 08:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` text COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `image3` text COLLATE utf8_unicode_ci NOT NULL,
  `image4` text COLLATE utf8_unicode_ci NOT NULL,
  `image5` text COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `title_it` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `desc_en` text COLLATE utf8_unicode_ci NOT NULL,
  `desc_it` text COLLATE utf8_unicode_ci NOT NULL,
  `product_type` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `vendor` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image1`, `image2`, `image3`, `image4`, `image5`, `title_en`, `title_it`, `price`, `discount`, `desc_en`, `desc_it`, `product_type`, `vendor`, `tag`, `rate`, `created_at`, `updated_at`) VALUES
(5, 'assets/uploads/products/34191666339301.webp', 'assets/uploads/products/37971666339301.webp', 'assets/uploads/products/91081666339301.webp', 'assets/uploads/products/5001666339301.webp', 'assets/uploads/products/54261666339301.webp', 'Plastic chair made of the finest types of plastic', 'Sedia in plastica realizzata con i migliori tipi di plastica', 122.00, 200.00, 'A meno che non siano accecati dalla concupiscenza, non escono; sono colpevoli coloro che abbandonano i loro doveri e addolciscono il loro cuore, questa è fatica. Ma affinché tu possa vedere da dove viene tutto questo errore nato da coloro che accusano il piacere e lodano il dolore, aprirò l\'intera questione', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'Plastic chair', 'plastic', 'chair', 0, '2022-10-21 08:00:30', '2022-10-21 08:01:41'),
(6, 'assets/uploads/products/94081666339534.webp', 'assets/uploads/products/57851666339536.webp', 'assets/uploads/products/73891666339538.webp', 'assets/uploads/products/56371666339540.webp', 'assets/uploads/products/4651666339541.webp', 'Plastic chair made of the finest types of plastic', 'Sedia in plastica realizzata con i migliori tipi di plastica', 100.00, 200.00, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'Plastic chair', 'plastic', 'chair', 0, '2022-10-21 08:05:43', '2022-10-21 08:38:21'),
(7, 'assets/uploads/products/94081666339534.webp', 'assets/uploads/products/57851666339536.webp', 'assets/uploads/products/73891666339538.webp', 'assets/uploads/products/56371666339540.webp', 'assets/uploads/products/4651666339541.webp', 'Plastic chair made of the finest types of plastic', 'Sedia in plastica realizzata con i migliori tipi di plastica', 100.00, 200.00, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'Plastic chair', 'plastic', 'chair', 0, '2022-10-21 08:05:43', '2022-10-21 08:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `quantity` bigint(20) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_it` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_it` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` date DEFAULT NULL,
  `salary` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title_it`, `title_en`, `description_it`, `description_en`, `machine`, `address`, `year`, `salary`, `created_at`, `updated_at`) VALUES
(8, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(9, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(10, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(11, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(12, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(13, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35'),
(14, 'assets/uploads/project/84351666340735.webp', 'Fabbrica di plastica dell\'Unione', 'Union Plastic Factory', 'È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dove e quale gioia della verità ci conduce al loro dolore? Verrà seguito, e, o a, si dice che le funzioni del corpo sono spiegate spesso non si conosce, la più piccola flessibilità, la più antica con l\'opzione. E dove il minimo discernimento interferisce con il piacere, nessuno va fuori di testa! Sbrigati, non lusingare mai nulla! Il dolore in sé è molto importante e il grasso dello sviluppatore seguirà. Modalità quando si scappa dal dolore della scelta, cosa. Per alcuni è come se impedisse loro di vedere i loro anziani nella verità, senza mai provare dolore, perché così sono stati accecati dal tempo! È molto importante che il cliente presti attenzione al processo di derivazione dei grassi. Dolore, perché riceverai il dolore del loro lavoro. Da qui quando, poiché non consideriamo altro, il disturbo del lodato, ma il dolore della vita, con gli stessi doveri. Nessuno ottiene nulla con l\'avidità, e il saggio sceglie il dolore, ma lo accetta, e la fermezza di chi non è lodato lo respinge molto, e perché lui! Oppure, ti perdonerò. La nostra prossima scelta facile, chi è lei?', 'It is very important for the customer to pay attention to the fat derivation process. Where and what joy of truth leads us to their pain? It will be followed, and, or a, it is said that the functions of the body are explained often do not know, the smallest flexibility, the oldest with the option. And where the slightest discernment interferes with pleasure, no one freaks out! Hurry up, never flatter anything! The pain in itself is very important, and the fat of the developer will follow. Modes when running away from the pain of choice, thing. To some, it is as if it hinders them from seeing their elders in truth, never experiencing pain, because they have thus been blinded by time! It is very important for the customer to pay attention to the fat derivation process. Pain, for you will receive the pain of their labor. From here when, since we consider nothing else, the trouble of the praised, but the pain of life, with the same duties. No one achieves anything by greed, and the wise chooses pain, but accepts it, and the steadfastness of he who is not praised repels him much, and because he! Or, I will forgive you. Our next easy choice, who is she?', '6', 'In Dubai UAE', '2022-10-12', 100000.00, '2022-10-21 08:25:35', '2022-10-21 08:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_it` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_it` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_en` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_police_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `return_police_it` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_content_it` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_content_en` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_en`, `title_it`, `subtitle_it`, `subtitle_en`, `phone`, `phone2`, `email`, `address`, `address_map`, `return_police_en`, `return_police_it`, `footer_content_it`, `footer_content_en`, `logo`, `facebook`, `insta`, `youtube`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Make dreams come alive', 'Dai vita ai sogni', 'È un fatto assodato che i contenuti che possono essere letti distraggono il lettore.', 'It is an established fact that content that can be read will distract the reader.', '20 23 74 83 265', '20 23 33 78 217', 'hexportmachinery@pec.it', 'MILAN (MI) VIA PAOLO\r\nLOMAZZO 47 CAP 20154', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12341913.4079428!2d21.71056940167188!3d40.95601988109683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2z2KXZiti32KfZhNmK2Kc!5e0!3m2!1sar!2seg!4v1666341037979!5m2!1sar!2seg', 'You may return most new, unopened items within 30 days of delivery for a full refund. We\'ll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).\r\n\r\nYou should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).\r\n\r\nIf you need to return an item, simply login to your account, view the order using the \'Complete Orders\' link under the My Account menu and click the Return Item(s) button. We\'ll notify you via e-mail of your refund once we\'ve received and processed the returned item.', 'Puoi restituire la maggior parte degli articoli nuovi e non aperti entro 30 giorni dalla consegna per un rimborso completo. Pagheremo anche le spese di spedizione del reso se il reso è il risultato di un nostro errore (hai ricevuto un articolo errato o difettoso, ecc.).\r\n\r\nDovresti aspettarti di ricevere il rimborso entro quattro settimane dalla consegna del pacco al mittente, tuttavia, in molti casi riceverai un rimborso più rapidamente. Questo periodo di tempo include il tempo di transito per ricevere il tuo reso dallo spedizioniere (da 5 a 10 giorni lavorativi), il tempo necessario per elaborare il tuo reso una volta ricevuto (da 3 a 5 giorni lavorativi) e il tempo necessario la tua banca per elaborare la nostra richiesta di rimborso (da 5 a 10 giorni lavorativi).\r\n\r\nSe devi restituire un articolo, accedi semplicemente al tuo account, visualizza l\'ordine utilizzando il link \"Completa gli ordini\" nel menu Il mio account e fai clic sul pulsante Restituisci articolo/i. Ti avviseremo via e-mail del tuo rimborso una volta ricevuto ed elaborato l\'articolo restituito.', 'Oggi possiamo dirti che, grazie alla tua passione, creatività, duro lavoro ed esperienza, ci hai regalato i più bei look per la casa.', 'Today we can tell you, thanks to your passion, creativity, hard work and experience, you have given us the most beautiful home looks.', NULL, 'https://www.com', 'https://www.com', 'https://www.wam.me', 'https://www.com', NULL, '2022-10-21 08:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_it` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_it` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `name_it`, `name_en`, `title_it`, `title_en`, `facebook`, `whatsapp`, `instagram`, `created_at`, `updated_at`) VALUES
(3, 'assets/uploads/team/35161666195454.webp', 'Direttore generale', 'ِGeneral manager', 'Direttore generale', 'General manager', 'https://www.facebook.com/', 'https://wa.me/', 'https://www.instagram.com/', '2022-10-18 12:05:59', '2022-10-21 07:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdallah Mahmoud', 'user@user.com', '$2y$10$UN2xp3UZdCkP.32o4Yik5u2E5uFOrp9U6WK6EXdlboF9QIQSxDO3y', 'assets/uploads/admins/97361666014330.webp', NULL, '2022-10-19 12:45:03', NULL),
(2, 'lord', 'lord@gmail.com', '$2y$10$j7JSm37VrOCMbQ4yR0rLDezIHFPqcCvs07Hb4G52EAAmYLGVs2pEe', NULL, 'CCOqYEm0MGdvrInmFctPZmjWn7zl8u00blUwjSM7h2nkIb0DoAfKNq08s2Cf', '2022-10-19 14:24:10', '2022-10-19 14:24:10'),
(3, 'ahmed', 'abdo@admin.com', '$2y$10$IaXDfEsm8oxPzSaL8fN8eOXbZ2E7D8WSNBuEzFgP94EFlTf/UVOxq', NULL, 'euDQdSejGiZfdcp7jefjA56wKxy3mlChUyVVnXLog1tylbwG5BVQHNnLOF4a', '2022-10-19 14:58:58', '2022-10-19 14:58:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
