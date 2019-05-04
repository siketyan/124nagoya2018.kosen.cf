--
-- Table structure for table `participants`
--

DROP TABLE IF EXISTS `participants`;
CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(512) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `icon` varchar(32) DEFAULT NULL,
  `is_student` tinyint(1) NOT NULL,
  `is_canceled` tinyint(1) NOT NULL,
  `is_received` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
