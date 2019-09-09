-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2018 at 05:30 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triptoearth`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) DEFAULT NULL,
  `short_description` varchar(1000) DEFAULT NULL,
  `long_description` varchar(10000) DEFAULT NULL,
  `user_id` int(15) DEFAULT NULL,
  `post_type` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(15) DEFAULT '0',
  `updated_by` int(15) DEFAULT '0',
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `short_description`, `long_description`, `user_id`, `post_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '4 Reasons to Add Marsa Al Seef to Your Travel Bucket List Next Year\r\n4 Reasons to Add Marsa Al Seef to Your Travel Bucket List Next Year', 'Thanks to projects such as the 163-floor Burj Khalifa, the Palm Jumeirah, Burj Al Arab and JW Marriott Marquis.', 'If you are an adventurous and fearless traveler, Then you appreciate the fact that when you get tired from touring all the fascinating historical sites, cannot think of any museum that you haven’t visited, when you have explored all the exciting open air markets, heading underwater is the only other exhilarating activity that you can engage in.\r\n\r\n \r\n\r\nWhereas scuba divers have the greatest liberty of exploring underwater, snorkeling is something that can be done by children. There’s no doubt that you will also find the activity thrilling, the level of your exhaustion notwithstanding. It doesn\'t matter if you are accompanying an up-and-coming marine biologist in the exploration of an impressive undersea spots ecosystem, or you feel like interacting with friendly sharks and dolphins, snorkeling can offer an exceptional opportunity of immersing yourself in amazing nature.\r\n\r\n \r\n\r\nTo help in planning your next venture, we have compiled a list of ten awesome snorkeling spots around the world, ranging from national parks in the USA to the Maldives- places that you\'ve probably read about or heard of, but never been to. If you choose to visit one or more of the excellent undersea world spots, you’ll come across jaw-dropping and extraordinary sights.\r\n\r\n \r\n\r\n1. Ambergris Caye- Belize\r\n \r\n\r\n\r\n\r\n \r\n\r\nBelize offers outstanding opportunities for closely interacting with eels, various species of beautiful fish and rays. Are you aware that the biggest barrier reef (except the one in Australia) is found in Belize?\r\n\r\n \r\n\r\nIf you go on a snorkeling expedition in this area, you’ll come across hundreds of atolls, cays and other features and creatures dotting the beautiful Caribbean coastline. The atolls and cays comprise of brightly colored coral sunken under the turquoise waters.\r\n\r\n \r\n\r\nWhen you get to Belize, don’t fail to visit the shark-ray alley that’s full of nurse sharks and the Hole-Chan Marine Reserve. The former is one of the few places around the world where you can comfortably swim alongside sharks.\r\n\r\n \r\n\r\n2. Galapagos Islands- Ecuador\r\n \r\n\r\nEcuador’s Galapagos Islands comprise of 19 volcanic islands that offer incredible sights into a world of finches, tortoises, iguanas and other fascinating creatures.\r\n\r\n \r\n\r\nGorgeous waters surrounding the islands. When you snorkel underneath these waters, you’ll come across sea creatures that are equally enthralling.\r\n\r\n \r\n\r\nIf you’ve always dreamt of swimming alongside sea turtles, sea lions, dolphins, fur seals, orcas, Galapagos penguins and the rare humpback whales, just pack your bags and head to Galapagos Islands.\r\n\r\n \r\n\r\n3. Ilha Grande- Brazil\r\n \r\n\r\n\r\n\r\n \r\n\r\nThe incredible Ilha Grande is found off the Brazilian coast, halfway between Rio de Janeiro and the renowned Sao Paolo. Even though the Island boasts of several hotels, the monkey-infested jungles and blue waters full of brightly colored fish make the area look deserted.\r\n\r\n \r\n\r\nYou can dive into the Blue Lagoon waters and get a chance of swimming next to seahorses, follow angelfishes and turtles and admire the awesome undersea spots coves as well. You may also come across tens of shipwrecks- what the Portuguese left behind during their usual battles with pirates many years ago.\r\n\r\n \r\n\r\n4. Great Barrier Reef- Australia\r\n \r\n\r\n\r\n\r\n \r\n\r\nAustralia’s Great Barrier Reef is among the top ten snorkeling spots around the world. It is the world’s most extensive coral reef ecosystems. It comprises of about two thousand, nine hundred small reefs that extend for more than 1,400 miles adjacent to the Australian shoreline.\r\n\r\n \r\n\r\nIt is a must-visit spot for snorkeling enthusiasts, courtesy of the beautiful coral, remnants of water vessels that sunk years ago, breathtaking marine undersea life, manta rays and fascinating barracuda.\r\n\r\n \r\n\r\n5. The Big Island- Hawaii\r\n \r\n\r\nIncredible snorkeling spots surround the whole Hawaiian archipelago. However, The Big Island contains an unbelievable number of snorkeling spots. It is important to note that the island above is larger than all the other Hawaiian Islands put together.\r\n\r\n \r\n\r\nKealakekua Bay’s underwater state park boasts of Technicolor coral, incredible history, and colorful fish. According to historians, various renowned people landed on the Big Island, including the famous Captain James Cook.\r\n\r\n \r\n\r\nIf you’ve always dreamt of interacting with sea creatures such as turtles and dolphins, you’ll only need to snorkel near the well-known Captain Cook Monument.\r\n\r\n \r\n\r\n6. Palau\r\n \r\n\r\n\r\n\r\n \r\n\r\nWhen you set foot in Palau, you’ll learn that snorkelers are prohibited from venturing into all the marine lakes, except one. You can only explore Jellyfish Lake. Just as the name suggests, it boasts of an uncountable number of goldfish.\r\n\r\n \r\n\r\nThe Lake is found in Eil Malk Island. Given that the island has remained uninhabited for thousands of years, the fish have found a home where they can reproduce and thrive without any inhibitions. Even though most of the Jellyfish species sting enemies, those found in Palau are harmless to human beings since they primarily feed on algae.\r\n\r\n \r\n\r\n7. Palawan- The Philippines\r\n \r\n\r\n\r\n\r\n \r\n\r\nEven though it may seem like an unpopular snorkeling destination, waters that surround the seven thousand islands in the Philippian\'s archipelago boast of an assorted ecosystem full of great undersea life. There are numerous snorkeling opportunities, ranging from diving into the world-renowned Donsol Bay to visiting coral reefs off the Noa Noa Island and swimming in the midst of whale sharks.\r\n\r\n \r\n\r\nEvery undersea spots explorer must find something to do and see in the dazzling Palawan Island. If visiting the lagoons teeming with fish is not exciting enough, you can swim in Honda Bay, interact with underwater creatures found in Cowrie Island and Starfish Island or explore the Tubbataha Reef.\r\n\r\n \r\n\r\n8. Buck Island- Saint Croix (USVI)\r\n \r\n\r\nVisiting national parks often brings up visions of roaming wildlife and grand mountains. However, when you visit Buck Island, you may not come across bears that would steal your picnic basket. Instead, you’ll most probably run into a sociable octopus.\r\n\r\n \r\n\r\nYou can go snorkeling in the elkhorn coral barrier-reefs found underneath the brilliant blue waters of Buck Island. Additionally, you’ll have the option of swimming with colorful parrot fishes along underwater trails via one of the United State’s most incredible national treasures.\r\n\r\n \r\n\r\nDuring the snorkeling expeditions, you may get to interact with different sea turtle species, the endangered brown pelicans, and brain coral.\r\n\r\n \r\n\r\n9. The Maldives\r\n \r\n\r\n\r\n\r\n \r\n\r\nOne of the world’s most popular world spots for tourists is the Maldives. Are you aware that the most beautiful sites are found underneath the waves?\r\n\r\n \r\n\r\nThe archipelago comprises of tiny islands. The aquamarine water that surrounds these islands is home to an unbelievable 700 fish species. When you snorkel in the Maldives, you’ll get to see sharks, coral, turtles, endangered anemones and many other marine wonders as well. The island boasts of crystal-clear waters, so you can enjoy looking at the underwater gardens.\r\n\r\n \r\n\r\n10. Komodo Island- Indonesia\r\n \r\n\r\nFor thousands of years, giant lizards have found a comfortable home in Indonesia’s Komodo Island. Tourists who visit this island are usually attracted by the giant lizards. However, it doesn’t mean that there are no other activities that you can engage in apart from watching the reptiles.\r\n\r\n \r\n\r\nIf you snorkel underneath Komodo Island’s waters, you’ll hardly believe your eyes. For instance, when you go swimming in Pink Beach, you’ll get to see rays, hawksbill turtles, groupers and other fascinating sea creatures in the underwater garden.\r\n\r\n \r\n\r\nAlternatively, you can explore Komodo National Park, a popular tourist destination that offers consummate underwater exploration comprising of more than 1,000 fish species, about 300 types of coral and different kinds of whales, turtles, and dolphins that are on the verge of extinction.\r\n\r\n \r\n\r\nVerdict\r\n \r\n\r\nThe panorama in these islands, reefs, and atolls is unrivaled. However, the watery wonderland is increasingly getting endangered by rapid climate change. The effects of coral bleaching, for instance, can be seen in most of the coral reefs around the world. Coral is rapidly disappearing, and according to some renowned scientists, it could completely disappear by the year 2050. For these reasons, you should seriously start making plans for that snorkeling adventure that you have been fantasizing about since you were a kid.', NULL, NULL, '2018-04-16 18:00:00', '2018-04-17 18:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `division_id` int(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `full_name`, `short_name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '01', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(2, 'Rajshahi', '02', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(3, 'Khulna', '03', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(4, 'Chittagong', '04', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(5, 'Barisal', '05', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(6, 'Sylhet', '06', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(7, 'Rangpur', '07', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(8, 'Manikgonj', '08', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(9, 'Gazipur', '09', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(10, 'Mymensingh', '10', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(11, 'Narayanganj', '11', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(12, 'Tangail', '12', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(13, 'Madaripur', '13', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(14, 'Jamalpur', '14', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(15, 'Munshiganj', '15', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(16, 'Gopalganj', '16', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(17, 'Sherpur', '17', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(18, 'Kishoreganj', '18', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(19, 'Narsingdi', '19', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(20, 'Shariatpur', '20', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(21, 'Netrokona', '21', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(22, 'Rajbari', '22', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(23, 'Faridpur', '23', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(24, 'Bogra', '24', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(25, 'Joypurhat', '25', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(26, 'Naogaon', '26', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(27, 'Natore', '27', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(28, 'Chapai Nawabganj', '28', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(29, 'Pabna', '29', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(30, 'Sirajganj', '30', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(31, 'Shatkhira', '31', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(32, 'Bagerhat', '32', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(33, 'Jessore', '33', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(34, 'Narail', '34', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(35, 'Magura', '35', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(36, 'Jhenaidah', '36', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(37, 'Chuadanga', '37', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(38, 'Kushtia', '38', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(39, 'Meherpur', '39', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(40, 'Bandarban', '40', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(41, 'Rangamati', '41', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(42, 'Khagrachari', '42', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(43, 'Cox\'s Bazar', '43', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(44, 'Feni', '44', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(45, 'Noakhali', '45', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(46, 'Lakshmipur', '46', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(47, 'Comilla', '47', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(48, 'Brahmanbaria', '48', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(49, 'Chandpur', '49', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(50, 'Barguna', '50', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(51, 'Bhola', '51', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(52, 'Jhalokati', '52', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(53, 'Patuakhali', '53', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(54, 'Pirojpur', '54', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(55, 'Maulvi Bazar', '55', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(56, 'Habiganj', '56', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(57, 'Sunamgonj', '57', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(58, 'Dinajpur', '58', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(59, 'Gaibandha', '59', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(60, 'Kurigram', '60', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(61, 'Lalmonirhat', '61', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(62, 'Nilphamari', '62', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(63, 'Panchagarh', '63', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(64, 'Thakurgaon', '64', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ratul794@gmail.com', '$2y$10$EN5YPdbu0aCwmMmFSjX/methQ.HDyRYcsaMweSYMpVxoy2Iw8MREu', '2018-04-12 14:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `trip_id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
  `trip_title` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `find_gender` varchar(100) DEFAULT NULL,
  `first_time_visit` varchar(255) DEFAULT NULL,
  `room_sharing` varchar(255) DEFAULT NULL,
  `Itinerary` varchar(255) DEFAULT NULL,
  `work_and_travel` tinyint(1) NOT NULL DEFAULT '0',
  `short_description` varchar(255) DEFAULT NULL,
  `place_want_to_see` varchar(2000) DEFAULT NULL,
  `things_want_to_do` varchar(1000) DEFAULT NULL,
  `accomodation` varchar(255) DEFAULT NULL,
  `type_of_journey` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(16) DEFAULT '0',
  `updated_by` int(16) DEFAULT '0',
  PRIMARY KEY (`trip_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `trip_title`, `budget`, `find_gender`, `first_time_visit`, `room_sharing`, `Itinerary`, `work_and_travel`, `short_description`, `place_want_to_see`, `things_want_to_do`, `accomodation`, `type_of_journey`, `destination`, `from_date`, `to_date`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(7, 'visit', '3', '5', '0', '1', '2', 0, 'first', 'aa', 'aa', '3', '2', 'Sylhet', '2018-04-15', '2018-04-20', '2018-04-15 08:22:48', '2018-04-15 08:22:48', 0, 0),
(6, 'beach', '4', '3', '0', '1', '2', 0, 'asdfjkafn', 'vbxbvjkd', 'lgjdkflgh', '1', '3', 'Cox\'s Bazar', '2018-04-15', '2018-04-19', '2018-04-15 04:52:29', '2018-04-15 04:52:29', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `date_of_birth` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` int(20) DEFAULT NULL,
  `wants_to_meet_up` tinyint(1) NOT NULL DEFAULT '0',
  `user_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_me` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interests` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `my_travel_style` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `email`, `password`, `age`, `date_of_birth`, `district`, `city`, `sex`, `wants_to_meet_up`, `user_image`, `relationship_status`, `about_me`, `interests`, `my_travel_style`, `remember_token`, `created_at`, `updated_at`, `user_type`) VALUES
(15, 'Ratul', 'ratul', 'ratul794@gmail.com', '$2y$10$Jx4As9YcjJ.Ykq92l2RHNONyBci7j.EbsA8zmO7WETwuSw7MOMcMe', NULL, NULL, NULL, NULL, 1, 0, NULL, '1', NULL, NULL, NULL, 'cfHNOY4C3KX6CJXYMwLQAEQDDaESp4sjRXT8Djs64dzMEIgJ09Qr31FZ7uRR', '2018-04-21 10:27:41', '2018-04-21 11:27:30', '0'),
(16, 'admin', 'admin', 'admin@gmail.com', '$2y$10$auxFV5M2hc3j8JG8FnKf0.lA9hStXwT/jYi7Pw..00JE74joArh0e', '25', NULL, 'Dhaka', 'dhaka', 1, 0, '152432933329693829_1922424014498112_1059543289_o.jpg', NULL, NULL, NULL, NULL, 'r4KknLLaD18MwmSpFnpxKvTQ5THYdvOOCsbal1f9bgFmJ98eO2VYilzEmveE', '2018-04-21 10:28:21', '2018-04-21 10:48:53', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
