CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `quand` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
