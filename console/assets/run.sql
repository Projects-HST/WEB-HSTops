INSERT INTO `news_category` (`id`, `category_name`, `status`) VALUES (NULL, 'Stories', 'Active'), (NULL, 'Posts', 'Active'), (NULL, 'Events', 'Active');

ALTER TABLE `user_master` CHANGE `otp` `otp` VARCHAR(6) NOT NULL;

ALTER TABLE nf_comments ADD nf_id INT NOT NULL AFTER user_id;
ALTER TABLE `news_feed` CHANGE `news_date` `news_date` DATE NOT NULL;


INSERT INTO `intro_video` (`id`, `video_title`, `video_details`, `video_url`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES ('1', '', '', '', '', '', '', '', '');
INSERT INTO `ops_personal_life` (`id`, `personal_life_text_ta`, `personal_life_text_en`, `updated_at`, `updated_by`) VALUES ('1', '', '', '', '');
INSERT INTO `about_party` (`id`, `party_text_ta`, `party_text_en`, `updated_at`, `updated_by`) VALUES ('1', '', '', '', '');
ALTER TABLE `about_party` CHANGE `updated_at` `updated_at` DATETIME NOT NULL;
ALTER TABLE `about_party` CHANGE `updated_by` `updated_by` INT NOT NULL;
