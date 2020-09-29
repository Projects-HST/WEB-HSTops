INSERT INTO `news_category` (`id`, `category_name`, `status`) VALUES (NULL, 'Stories', 'Active'), (NULL, 'Posts', 'Active'), (NULL, 'Events', 'Active');

ALTER TABLE `user_master` CHANGE `otp` `otp` VARCHAR(6) NOT NULL;

ALTER TABLE nf_comments ADD nf_id INT NOT NULL AFTER user_id;
