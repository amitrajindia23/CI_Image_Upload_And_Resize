# CI_Image_Upload_And_Resize
Image Upload in CodeIgniter and Resize with custom helper

//Dump of ci_images table

--
-- Table structure for table `ci_images`
--

CREATE TABLE IF NOT EXISTS `ci_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_file_name` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ci_images`
--

INSERT INTO `ci_images` (`id`, `image_name`, `image_path`, `image_file_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amit Ranjan', 'assets/uploaded_image/fdfb247e9a4589ca31711d33baf2592f.jpg', 'fdfb247e9a4589ca31711d33baf2592f.jpg', '1', '2015-04-30 13:18:07', '2015-04-30 13:18:07'),
(2, '', 'assets/uploaded_image/d0a473d8233b3a55785ab1ebe572023c.jpg', 'd0a473d8233b3a55785ab1ebe572023c.jpg', '1', '2015-04-30 13:19:36', '2015-04-30 13:19:36'),
(3, 'Amit Ranjan', 'assets/uploaded_image/351842409375c6a68d920090d7be97a5.jpg', '351842409375c6a68d920090d7be97a5.jpg', '1', '2015-04-30 13:27:23', '2015-04-30 13:27:23'),
(4, 'Amit', 'assets/uploaded_image/4c6b76208518a4dbfb3ce7615830752e.jpg', '4c6b76208518a4dbfb3ce7615830752e.jpg', '1', '2015-04-30 13:29:15', '2015-04-30 13:29:15');
