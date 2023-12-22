
INSERT INTO `user` ( `user_name`, `email`, `pwd`, `fname`, `lname`, `billing_address_id`, `shipping_address_id`, `token`, `role_id`) VALUES
('euuejsjd', 'elielbjean@gmail.com', 'azertiokn', 'Jean Eliel', 'Brou', 0, 0, '4420cf843f3e8d2b479cf5ccc82b8014e7114cec289dc65aedd0e7078ab58724', 3),
('pegase', 'elielbjean@gmail.com', 'azrrrrrs', 'Jean Eliel', 'Brou', 0, 0, '07453240d5aae2d28af9b82e3468e1893bb4db6234d7d57fa716f2f5cb15f007', 3),
('junior', 'junior@gmail.ca', 'junior', 'junior', 'junior', 1, 1, 'ce420c6c966c58598fd21e95ecf29a6625ce4e382ca27c4c36e9bb8c3242bb59', 3),
('ivine', 'ivine@gmail.ca', 'ad7a606acb401d541312eb90c9d5846d9b0dc966', 'junior', 'junior', 1, 1, 'c68008889916505cdd174d696f16bb3238e3f3f92494ba57c0c604a54bc7e2b6', 3),
( 'eliel', 'eliel@gmail.ca', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Brou', 'eliel', 1, 1, '5c3427307ecdca38cd42c2fc3a3f91c10d10d80e5c5a3f0c8c1f99c22624fdec', 2),
( 'superadmin', 'superadmin@admin.ca', '8ad42594f3204a89a383f51c7f505980b8201da8', 'superadmin', 'superadmin', 1, 1, '23516371f7bbd036a961ffd883058f8db24390940f74e91480b70d055a1c02d3', 1),
( 'allo', 'allo@test.ca', '01acb791f3fdbaff13fd057a6e5c91890042986f', 'allyn', 'mishka', 1, 1, '67e6dcea584035a5b3e0e43f2a38566430d6929c0d5d4dd23ab71629f3ba169b', 3),
( 'jean', 'elielbjean@gmail.com', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Jean Eliel', 'Brou', 1, 1, 'cb0f79b0079f420481687cfb5e29b8446b4ada55b9b987585f3e965eef6747e3', 3),
( 'manu', 'manu@gmail.com', '8ad42594f3204a89a383f51c7f505980b8201da8', 'manu', 'manus', 1, 1, '5afa8f34e9916bf4c559df5475d29bacb58264aeed1978664923cc0bbed4cfd0', 3),
( 'manuella', 'manu@gmail.com', '8ad42594f3204a89a383f51c7f505980b8201da8', 'manu', 'manus', 1, 1, '702c0f58304b3abef4c76855bb3420c23a209d7235ceac2433dc23843dcb8469', 3),
( 'cipher', 'cipher@gmail.com', '8ad42594f3204a89a383f51c7f505980b8201da8', 'Jean Eliel', 'Brou', 1, 1, 'f86c5dc5fcaa9dcd4b792c5a0dbef486934b7e846352a39614585b3617fb6ed3', 3);


-
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `role_id` (`role_id`);


ALTER TABLE `user`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `user`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;


