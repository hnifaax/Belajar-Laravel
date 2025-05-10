-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Bulan Mei 2025 pada 08.04
-- Versi server: 8.0.31
-- Versi PHP: 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasanumum` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarahnama` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gayaTema` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `museum` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `penjelasanumum`, `sejarah`, `sejarahnama`, `gayaTema`, `museum`, `created_at`, `updated_at`) VALUES
(1, '', 'Studio Ghibli Inc. (Japanese: 株式会社スタジオジブリ, Hepburn: Kabushiki-gaisha Sutajio Jiburi) is a Japanese animation studio headquartered in Koganei, Tokyo. It is best known for its animated feature films, and has also produced several short subjects, television commercials, and two television films. Its mascot and most recognizable symbol is a character named Totoro, a giant spirit inspired by raccoon dogs (tanuki) and cats from the 1988 anime film My Neighbor Totoro. Among the studio\'s highest-grossing films are Spirited Away (2001), Howl\'s Moving Castle (2004) and Ponyo (2008). The studio was founded on June 15, 1985, by directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki, after acquiring Topcraft\'s assets. It has also collaborated with video game studios on the visual development of several games.\r\n\r\nFive of the studio\'s films are among the ten highest-grossing anime feature films made in Japan. Spirited Away is second, grossing 31.68 billion yen in Japan and over US$380 million worldwide; and Princess Mononoke is fourth, grossing 20.18 billion yen. Many of their works have won the Animage Grand Prix award. Four have won the Japan Academy Prize for Animation of the Year. Five of their films have received Academy Award nominations. Spirited Away won the 2002 Golden Bear and the 2003 Academy Award for Best Animated Feature.\r\n\r\nOn August 3, 2014, Studio Ghibli temporarily suspended production following Miyazaki\'s retirement. In February 2017, Suzuki announced that Miyazaki had come out of retirement to direct a new feature film, How Do You Live? (2023), which he intends to be his last film.', 'Founded on June 15, 1985, Studio Ghibli was headed by directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki. Miyazaki and Takahata had already had long careers in Japanese film and television animation and had worked together on The Great Adventure of Horus, Prince of the Sun in 1968 and the Panda! Go, Panda! films in 1972 and 1973. In 1978, Suzuki became an editor at Tokuma Shoten\'s Animage manga magazine, where the first film he chose was Horus. A year after his phone call with Takahata and his first encounter with Miyazaki, both about Horus, he made a phone call about the first film Miyazaki ever directed: The Castle of Cagliostro.\r\n\r\nThe studio was founded after the success of the 1984 film Nausicaä of the Valley of the Wind. Suzuki was part of the film\'s production team, and founded Studio Ghibli with Miyazaki, who also invited Takahata to join them.\r\n\r\nThe trio’s first feature film was Nausicaä of the Valley of the Wind, a post-apocalyptic fantasy adventure based on a manga of the same name published by Miyazaki. Released under the Tokuma Shoten name, it was a success, and prompted the small team to begin their next production. In 1986, Studio Ghibli released Laputa: Castle in the Sky, the story of a young orphan boy and a farm girl who embark on a journey to explore the mystical floating city of Laputa.\r\n\r\nThe studio has mainly produced films by Miyazaki, with the second most prolific director being Takahata (most notably with Grave of the Fireflies). Other directors who have worked with Studio Ghibli include Yoshifumi Kondō, Hiroyuki Morita, Gorō Miyazaki, and Hiromasa Yonebayashi. Composer Joe Hisaishi has provided the soundtracks for most of Miyazaki\'s Studio Ghibli films. In their book Anime Classics Zettai!, Brian Camp and Julie Davis made note of Michiyo Yasuda as \"a mainstay of Studio Ghibli\'s extraordinary design and production team\". At one time the studio was based in Kichijōji, Musashino, Tokyo.\r\nIn August 1996, The Walt Disney Company and Tokuma Shoten formed a partnership wherein Walt Disney Studios would be the sole international distributor for Tokuma Shoten\'s Studio Ghibli animated films. Under this agreement, Disney also agreed to finance 10% of the studio\'s production costs.Since then, all three of the aforementioned films by Miyazaki at Studio Ghibli that were previously dubbed by Streamline Pictures have been re-dubbed by Disney. On June 1, 1997, Tokuma Shoten Publishing consolidated its media operations by merging Studio Ghibli, Tokuma Shoten Intermedia software and Tokuma International under one location.\r\nOver the years, there has been a close relationship between Studio Ghibli and the magazine Animage, which regularly runs exclusive articles on the studio and its members in a section titled \"Ghibli Notes.\" Artwork from Ghibli\'s films and other works are frequently featured on the cover of the magazine. ', 'The name \"Ghibli\" was chosen by Miyazaki from the Italian noun ghibli (also used in English), based on the Libyan Arabic name for hot desert wind (قبلي, \'ghiblī\'), the idea being that the studio would \"blow a new wind through the anime industry\".[9][10] It also refers to an Italian aircraft, the Caproni Ca.309. Although the Italian word would be more accurately transliterated as \"Giburi\" (ギブリ), with a hard g sound, the studio is romanised in Japanese as Jiburi (ジブリ, [dʑiꜜbɯɾi] ', 'Whether the stories have been adapted from manga comics or written from scratch, they all have the tendency to connect with the audience on a human level. Studio Ghibli films are mostly hand-drawn using rich water and acrylic colors and the films have less that ten percent use of modern technology such as CAD. Even today, with the technological advancement in the field of filmmaking, the studio still believes in using the old and traditional method of making animated films. All the Studio Ghibli films are rich in color, and they tend to use intricate watercolor and acrylic 2D animation with vivid colors (particularly greens), and have a \"whimsical and joyful aesthetic\".\r\n\r\nThe main focus of the films is emotions and character strengths and flaws. The stories of Studio Ghibli films usually focus on the lives of youth, especially school children. The characters are young and restless, eager to prove themselves to the world. The signature style and recurrent themes of the studio reflect those of Miyazaki and the other directors and creatives. Common themes include the risks posed by progress to tradition, environmentalism and the natural world,[122][121] independent female protagonists, the cost of war, and youth.', '\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `paint_id` bigint UNSIGNED NOT NULL,
  `artis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `belajars`
--

DROP TABLE IF EXISTS `belajars`;
CREATE TABLE IF NOT EXISTS `belajars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalHarga` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `name`, `totalHarga`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 100000, '0', '2023-01-09 21:09:09', '2023-01-09 21:09:09'),
(2, NULL, 450000, '0', '2023-01-09 21:09:27', '2023-01-09 21:09:27'),
(3, NULL, 200000, '0', '2023-01-09 21:11:34', '2023-01-09 21:11:34'),
(4, NULL, 1050000, '0', '2023-01-09 21:11:40', '2023-01-09 21:11:40'),
(5, NULL, 600000, '0', '2023-01-09 21:46:46', '2023-01-09 21:46:46'),
(6, NULL, 600000, '0', '2023-01-09 23:32:29', '2023-01-09 23:32:29'),
(7, NULL, 450000, '0', '2023-01-09 23:32:59', '2023-01-09 23:32:59'),
(8, NULL, 600000, '0', '2023-01-10 00:58:37', '2023-01-10 00:58:37'),
(9, NULL, 300000, '0', '2023-01-10 02:23:45', '2023-01-10 02:23:45'),
(10, NULL, 300000, '0', '2023-01-10 02:23:59', '2023-01-10 02:23:59'),
(11, NULL, 350000, '0', '2023-01-10 02:24:45', '2023-01-10 02:24:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_details`
--

DROP TABLE IF EXISTS `cart_details`;
CREATE TABLE IF NOT EXISTS `cart_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `merch_id` bigint UNSIGNED NOT NULL,
  `carts_id` bigint UNSIGNED NOT NULL,
  `jumlah` int NOT NULL,
  `jumlahHarga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_details_merch_id_foreign` (`merch_id`),
  KEY `cart_details_carts_id_foreign` (`carts_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cart_details`
--

INSERT INTO `cart_details` (`id`, `merch_id`, `carts_id`, `jumlah`, `jumlahHarga`, `created_at`, `updated_at`) VALUES
(5, 1, 5, 3, 600000, '2023-01-09 21:46:46', '2023-01-10 01:47:32'),
(4, 3, 4, 3, 1050000, '2023-01-09 21:11:40', '2023-01-10 01:58:58'),
(6, 6, 6, 4, 600000, '2023-01-09 23:32:29', '2023-01-09 23:33:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `size` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchandises_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `details_merchandises_id_foreign` (`merchandises_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `paint_id` bigint UNSIGNED NOT NULL,
  `director` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `directors`
--

INSERT INTO `directors` (`id`, `paint_id`, `director`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hayao Miyazaki', NULL, NULL),
(2, 0, 'Isao Takahata', NULL, NULL),
(3, 0, 'Hiromasa Yonebayashi', NULL, NULL),
(4, 0, 'Yoshifumi Kondo', NULL, NULL),
(5, 0, 'Goro Miyazaki', NULL, NULL),
(6, 0, 'Hiroyuki Morita', NULL, NULL),
(7, 0, 'Tomomi Mochizuki', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `rating` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `directors_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paints_artists_id_foreign` (`directors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `films`
--

INSERT INTO `films` (`id`, `judul`, `sinopsis`, `tahun`, `rating`, `image`, `link`, `created_at`, `updated_at`, `directors_id`) VALUES
(11, 'Nausicaä of the Valley of the Wind', 'Nausicaä of the Valley of the Wind (Japanese: 風の谷のナウシカ, Hepburn: Kaze no Tani no Naushika) is a 1984 Japanese post-apocalyptic anime film written and directed by Hayao Miyazaki, based on his 1982 manga. It was animated by Topcraft for Tokuma Shoten and Hakuhodo, and distributed by the Toei Company. Joe Hisaishi, in his first collaboration with Miyazaki, composed the score. The film stars the voices of Sumi Shimamoto, Gorō Naya, Yōji Matsuda, Yoshiko Sakakibara and Iemasa Kayumi.[1] Taking place in a post-nuclear futuristic world, the film tells the story of Nausicaä (Shimamoto), the young teenage princess of the Valley of the Wind. She becomes embroiled in a struggle with Tolmekia, a kingdom that tries to use an ancient weapon to eradicate a jungle full of giant mutant insects.\r\n\r\nNausicaä of the Valley of the Wind was released in Japan on 11 March 1984. A heavily edited adaptation of the film created by Manson International, Warriors of the Wind, was released in the United States and other markets throughout the mid-to-late 1980s.\r\n', 1984, '8/10', 'nausicaa-poster.jpg', 'https://www.youtube.com/embed/6zhLBe319KE', NULL, NULL, 1),
(12, 'Castle In The Sky', 'Castle in the Sky (Japanese: 天空の城ラピュタ, Hepburn: Tenkuu no Shiro Laputa), titled Laputa: Castle in the Sky for release in the United Kingdom, Ireland, Australia and New Zealand, is a 1986 Japanese animated fantasy adventure film written and directed by Hayao Miyazaki.[1][2] The first film produced by Studio Ghibli, it was produced for Tokuma Shoten. Set in a fictional late 19th century, it follows the adventures of a boy and girl who are trying to keep a powerful crystal from the army, a group of secret agents, and a family of pirates, while searching for a legendary floating castle. The film was distributed by Toei Company.[3]\r\n\r\nThe film won the Animage Anime Grand Prix in 1986. The film received positive reviews and grossed over $16 million at the box office. It went on to gross a total of approximately $157 million in box office, home video and soundtrack sales, as of 2021.[4] In Japanese polls asking about the greatest animations, it was voted the second-best animated film at the 2006 Japan Media Arts Festival and was voted first place in a 2008 Oricon audience poll. Castle in the Sky has had a strong influence on Japanese popular culture, and has inspired numerous films, media and games, in Japan and internationally.[5][6] It has been cited as an influential classic in the steampunk and dieselpunk genres.', 1986, '8/10', 'castle-poster.jpg', 'https://www.youtube.com/embed/8ykEy-yPBFc', NULL, NULL, 2),
(13, 'Grave Of The FireFlies', 'Grave of the Fireflies (Japanese: 火垂るの墓, Hepburn: Hotaru no Haka) is a 1988 Japanese animated war tragedy film[4][5] based on a 1967 short story by Akiyuki Nosaka. It was written and directed by Isao Takahata, and animated by Studio Ghibli for Shinchosha Publishing.[6]\r\n\r\nThe film stars Tsutomu Tatsumi [ja], Ayano Shiraishi [ja], Yoshiko Shinohara [ja] and Akemi Yamaguchi [ja]. Set in the city of Kobe, Japan in June 1945, it tells the story of two siblings and war orphans, Seita and Setsuko, and their desperate struggle to survive during the final months of the Second World War. Grave of the Fireflies has been ranked as one of the greatest war films of all time and is recognized as a major work of Japanese animation.', 1988, '8/10', 'grave-poster-.jpg', 'https://www.youtube.com/embed/4vPeTSRd580', NULL, NULL, 1),
(16, 'My Neighbor Totoro', 'My Neighbor Totoro (Japanese: となりのトトロ, Hepburn: Tonari no Totoro) is a 1988 Japanese animated fantasy film written and directed by Hayao Miyazaki and animated by Studio Ghibli for Tokuma Shoten. The film—which stars the voice actors Noriko Hidaka, Chika Sakamoto, and Hitoshi Takagi—tells the story of a professor\'s two young daughters (Satsuki and Mei) and their interactions with friendly wood spirits in postwar rural Japan.\r\n\r\nIn 1989, Streamline Pictures produced an English-language dub for exclusive use on transpacific flights by Japan Airlines. Troma Films, under their 50th St. Films banner, distributed the dub of the film co-produced by Jerry Beck. This dub was released to United States theaters in 1993, on VHS and LaserDisc in the United States by Fox Video in 1994, and on DVD in 2002. The rights to this dub expired in 2004, so the film was re-released by Walt Disney Home Entertainment on March 7, 2006[1] with a new dub cast. This version was also released in Australia by Madman on March 15, 2006[2] and in the UK by Optimum Releasing on March 27, 2006. This DVD release is the first version of the film in the United States to include both Japanese and English language tracks.', 1988, '8.5/10', 'toto-poster.jpg', 'https://www.youtube.com/embed/92a7Hj0ijLs', NULL, NULL, 1),
(17, 'Kiki\'s Delivery Service', 'Kiki\'s Delivery Service (Japanese: 魔女の宅急便, Hepburn: Majo no Takkyūbin, lit. \'Witch\'s Express Home Delivery\') is a 1989 Japanese animated fantasy film written, produced, and directed by Hayao Miyazaki, adapted from the 1985 novel by Eiko Kadono. It was animated by Studio Ghibli for Tokuma Shoten, Yamato Transport (which licensed the trademark Takkyūbin (宅急便) for the film) and the Nippon Television Network. It stars the voices of Minami Takayama, Rei Sakuma and Kappei Yamaguchi. The story follows Kiki (Takayama), a young witch who moves to a new town and uses her flying ability to earn a living. According to Miyazaki, the movie portrays the gulf between independence and reliance in teenage Japanese girls.', 1988, '7/10', 'kiki-poster.jpg', 'https://www.youtube.com/embed/4bG17OYs-GA', NULL, NULL, 1),
(18, 'Only Yesterday', 'Only Yesterday (Japanese: おもひでぽろぽろ, Hepburn: Omoide Poro Poro, \"Memories Come Tumbling Down\") is a 1991 Japanese animated drama film written and directed by Isao Takahata, based on the 1982 manga of the same title by Hotaru Okamoto and Yuko Tone.It was animated by Studio Ghibli[6] for Tokuma Shoten, Nippon Television Network and Hakuhodo, and distributed by Toho. It was released on July 20, 1991. The ending theme song \"Ai wa Hana, Kimi wa sono Tane\" (愛は花、君はその種子, \"Love is a flower, you are the seed\") is a Japanese translation of Amanda McBroom\'s composition \"The Rose\".\r\n\r\nOnly Yesterday explores a genre traditionally thought to be outside the realm of animated subjects: a realistic drama written for adults, particularly women. The film was a surprise box office success, attracting a large adult audience and becoming the highest-grossing Japanese film of 1991 in the country. It has also been well received by critics outside of Japan—it has a 100% rating on Rotten Tomatoes', 1991, '7.5/10', 'yesterday-poster.jpg', 'https://www.youtube.com/embed/OfkQlZArxw0', NULL, NULL, 2),
(19, 'Porco Rosso', 'Porco Rosso (Japanese: 紅の豚, Hepburn: Kurenai no Buta, lit. \'Crimson Pig\') is a 1992 Japanese animated adventure-fantasy film[1] written and directed by Hayao Miyazaki. It is based on Hikōtei Jidai (\"The Age of the Flying Boat\"), a three-part 1989 watercolor manga by Miyazaki.[2] It stars the voices of Shūichirō Moriyama, Tokiko Kato, Akemi Okamura and Akio Ōtsuka. Animated by Studio Ghibli for Tokuma Shoten, Japan Airlines and the Nippon Television Network, it was produced by Toshio Suzuki and distributed by Toho. Its score is by Japanese composer Joe Hisaishi.\r\n\r\nThe plot revolves around an Italian World War I ex-fighter ace, now living as a freelance bounty hunter chasing \"air pirates\" in the Adriatic Sea. However, an unusual curse has transformed him into an anthropomorphic pig. Once called Marco Pagot (Marco Rossolini in the American version), he is now known to the world as \"Porco Rosso\", Italian for \"Red Pig\" or \"Red Pork\".', 1992, '7.6/10', 'porsco-poster.jpg', 'https://www.youtube.com/embed/awEC-aLDzjs', NULL, NULL, 1),
(20, 'Ocean Waves', 'Ocean Waves, known in Japan as I Can Hear the Sea (Japanese: 海がきこえる, Hepburn: Umi ga Kikoeru), is a 1993 Japanese anime television film directed by Tomomi Mochizuki and written by Kaori Nakamura based on the 1990–1992 novel of the same name by Saeko Himuro. Animated by Studio Ghibli for Tokuma Shoten and the Nippon Television Network, Ocean Waves first aired on May 5, 1993 on Nippon TV. The film is set in the city of Kōchi, and follows a love triangle that develops between two good friends and a new girl who transfers to their high school from Tokyo.\r\n\r\nOcean Waves was an attempt by Studio Ghibli to allow their younger staff members to make a film reasonably cheaply. However, it ended up going both over budget and over schedule. In 1995, a sequel to the novel, I Can Hear the Sea II: Because There Is Love, was published. In the same year, a TV drama was produced mainly based on this work starring Shinji Takeda and Hitomi Satō.', 1993, '6.6/10', 'ocean-poster.jpg', 'https://www.youtube.com/embed/tfkHiHjrqa8', NULL, NULL, 7),
(21, 'PomPoko', 'Pom Poko (Japanese: 平成狸合戦ぽんぽこ, Hepburn: Heisei Tanuki Gassen Ponpoko, lit. \"Heisei-era Raccoon Dog War Ponpoko\") is a 1994 Japanese animated fantasy film written and directed by Isao Takahata, animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network and Hakuhodo, and distributed by Toho.\r\n\r\nAn environmental allegory, the story features tanuki, or Japanese raccoon dogs (incorrectly referred to as \"raccoons\" in the English dialog). In Japanese folklore, tanuki are considered to be magical creatures, capable of shape-shifting into people or other objects. They are a highly sociable, mischievous species, too fun-loving and fond of tasty treats to be a real threat – unlike kitsune (foxes) and other shape-shifters.\r\n\r\nThe phrase \"Pom Poko\" in the title refers to the sound of tanuki drumming their bellies, from a 1919 poem by Ujō Noguchi which became a popular children\'s song when it was set to music in 1925.', 1994, '7/10', 'pompoko-poster.jpg', 'https://www.youtube.com/embed/_7cowIHjCD4', NULL, NULL, 2),
(22, 'Whisper Of The Heart', 'Whisper of the Heart (Japanese: 耳をすませば, Hepburn: Mimi o Sumaseba, literally \"If You Listen Closely\") is a 1995 Japanese animated romantic drama film directed by Yoshifumi Kondō and written by Hayao Miyazaki based on the 1989 manga of the same name by Aoi Hiiragi. It was animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network and Hakuhodo. The film stars Yoko Honna, Issei Takahashi, Takashi Tachibana, Shigeru Muroi, Shigeru Tsuyuguchi and Keiju Kobayashi.\r\n\r\nWhisper of the Heart was Kondō\'s only film as director before his death in 1998. Studio Ghibli had hoped that Kondō would become the successor to Miyazaki and Isao Takahata.', 1995, '7.9/10', 'whisper-poster.jpg', 'https://www.youtube.com/embed/0pVkiod6V0U', NULL, NULL, 4),
(23, 'Princess Mononoke\r\n', 'Princess Mononoke (Japanese: もののけ姫, Hepburn: Mononoke-hime) is a 1997 Japanese animated epic historical fantasy film written and directed by Hayao Miyazaki and animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network and Dentsu. The film stars the voices of Yōji Matsuda, Yuriko Ishida, Yūko Tanaka, Kaoru Kobayashi, Masahiko Nishimura, Tsunehiko Kamijo, Akihiro Miwa, Mitsuko Mori and Hisaya Morishige.\r\n\r\nPrincess Mononoke is set in the late Muromachi period of Japan (approximately 1336 to 1573 AD), but it includes fantasy elements. The story follows a young Emishi prince named Ashitaka, and his involvement in a struggle between the gods (kami) of a forest and the humans who consume its resources. The term mononoke (物の怪), or もののけ, is not a name, but a Japanese word for supernatural, shape-shifting beings that possess people and cause suffering, disease, or death.', 1997, '8.9/10', 'princess-poster.jpg', 'https://www.youtube.com/embed/4OiMOHRDs14', NULL, NULL, 1),
(24, 'My Neighbor The Yamadas', 'My Neighbors the Yamadas (Japanese: ホーホケキョとなりの山田くん, Hepburn: Hōhokekyo Tonari no Yamada-kun) is a 1999 Japanese animated comedy film written and directed by Isao Takahata, animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network, Hakuhodo and Buena Vista Home Entertainment, and distributed by Shochiku.[4] It is based on the yonkoma manga Nono-chan by Hisaichi Ishii. A slice of life comedy-drama, the film stars Hayato Isobata, Masako Araki, Naomi Uno, Touru Masuoka, Yukiji Asaoka, Akiko Yano, and Kosanji Yanagiya. Unlike the other films of Studio Ghibli, the film is presented in a stylized comic strip aesthetic, a departure from the traditional anime style of the studio\'s other works.', 1999, '7.2/10', 'yamada-poster.jpg', 'https://www.youtube.com/embed/1C9ujuCPlnY', NULL, NULL, 2),
(25, 'Spirited Away', 'Spirited Away (Japanese: 千と千尋の神隠し, Hepburn: Sen to Chihiro no Kamikakushi, lit. \'Sen and Chihiro\'s Spiriting Away\') is a 2001 Japanese animated fantasy film written and directed by Hayao Miyazaki, animated by Studio Ghibli for Tokuma Shoten, Nippon Television Network, Dentsu, Buena Vista Home Entertainment, Tohokushinsha Film, and Mitsubishi and distributed by Toho.[7] The film features the voices of Rumi Hiiragi, Miyu Irino, Mari Natsuki, Takeshi Naito, Yasuko Sawaguchi, Tsunehiko Kamijō, Takehiko Ono, and Bunta Sugawara. Spirited Away tells the story of Chihiro Ogino (Hiiragi), a ten-year-old girl who, while moving to a new neighborhood, enters the world of Kami (spirits of Japanese Shinto folklore).[8] After her parents are turned into pigs by the witch Yubaba (Natsuki), Chihiro takes a job working in Yubaba\'s bathhouse to find a way to free herself and her parents and return to the human world.\r\n\r\nMiyazaki wrote the screenplay after he decided the film would be based on the ten-year-old daughter of his friend Seiji Okuda, the film\'s associate producer, who came to visit his house each summer.[9] At the time, Miyazaki was developing two personal projects, but they were rejected. With a budget of US$19 million, production of Spirited Away began in 2000. Pixar animator John Lasseter, a fan and friend of Miyazaki, convinced Walt Disney Pictures to buy the film\'s North American distribution rights, and served as executive producer of its English-dubbed version.[10] Lasseter then hired Kirk Wise as director and Donald W. Ernst as producer, while screenwriters Cindy and Donald Hewitt wrote the English-language dialogue to match the characters\' original Japanese-language lip movements', 2001, '9/10', 'sa-poster.jpg', 'https://www.youtube.com/embed/ByXuk9QqQkk', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `homes`
--

DROP TABLE IF EXISTS `homes`;
CREATE TABLE IF NOT EXISTS `homes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homes`
--

INSERT INTO `homes` (`id`, `judul`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Spirited Away', 'During her family\'s move to the suburbs, a sullen 10-year-old girl wanders into a world ruled by gods, witches, and spirits, and where humans are changed into beasts.', 'sa-poster.jpg', NULL, NULL),
(2, 'My Neighbor Totoro', 'Two young girls, 10-year-old Satsuki and her 4-year-old sister Mei move to the country to be near their ailing mother, they have adventures with the wondrous forest spirits who live nearby.', 'totoro-poster.jpg', NULL, NULL),
(3, 'Grave Of The Fireflies', 'A young boy and his little sister struggle to survive in Japan during World War II.When an American firebombing separates the two children from their parents.', 'grave-poster.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandises`
--

DROP TABLE IF EXISTS `merchandises`;
CREATE TABLE IF NOT EXISTS `merchandises` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `merchandises`
--

INSERT INTO `merchandises` (`id`, `name`, `image`, `created_at`, `updated_at`, `harga`) VALUES
(1, 'Hoodie Spirited Away', 'spirited-hoodie-.png', NULL, NULL, 300000),
(2, 'Tote-Bag Ponyo', 'totebag-ponyo-.png', NULL, NULL, 100000),
(3, 'Paint Princess Mononoke', 'mononoke-paint-.png', NULL, NULL, 350000),
(4, 'T-Shirt Howl\'s Moving Castle', 'howl-shirt.png', NULL, NULL, 200000),
(5, 'Mug Kiki\'s Delivery Service', 'kiki-mug.png', NULL, NULL, 150000),
(6, 'Sweater Ghibli', 'ghibli-sweater-.png', NULL, NULL, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_20_033513_create_belajars_table', 1),
(6, '2022_12_20_044059_add_jenis-kelamin_column_to_belajars_table', 1),
(7, '2022_12_20_071541_change_nama_attributes_in_belajars_table', 1),
(8, '2022_12_20_090533_create_paints_table', 1),
(9, '2022_12_20_090904_create_artists_table', 1),
(10, '2022_12_20_091142_add_artists_id_column_to_paints_table', 1),
(11, '2022_12_22_080432_create_merchandises_table', 1),
(12, '2022_12_22_083535_create_artist_merchandise_table', 1),
(13, '2022_12_23_075631_add_sinopsis_column_to_paints_table', 1),
(14, '2022_12_23_081146_change_artis_attributes_in_paints_table', 1),
(15, '2022_12_23_095901_add_image_column_to_paints_table', 1),
(16, '2022_12_25_113611_add_link_column_to_paints_table', 1),
(17, '2022_12_27_073205_add_image_to_merchandises_table', 1),
(18, '2022_12_27_091206_create_abouts_table', 1),
(19, '2022_12_28_013902_create_homes_table', 1),
(20, '2022_12_28_050225_add_genre_column_to_paints_table', 1),
(21, '2022_12_28_065255_add_image_column_to_abouts_table', 1),
(22, '2023_01_04_031929_create_details_table', 1),
(23, '2023_01_04_034949_create_watcheds_table', 1),
(24, '2023_01_04_050422_create_artist_paint_table', 1),
(25, '2023_01_05_031723_create_roles_table', 2),
(26, '2023_01_07_112549_create_cart_details_table', 2),
(27, '2023_01_10_040705_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paints`
--

DROP TABLE IF EXISTS `paints`;
CREATE TABLE IF NOT EXISTS `paints` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `artists_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `paints_artists_id_foreign` (`artists_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hanifa', 'hanifa@gmail.com', NULL, '$2y$10$nVFmvAdgzvvpnkrkJAKQZ.SVfrPuP5xd27a5g7hVyuMO0YdeEw3.q', NULL, '2023-01-09 20:58:38', '2023-01-09 20:58:38'),
(2, 'hanifa', 'hanifa123@gmail.com', NULL, '$2y$10$Tw2u71EWASn3VfVCB.j/i.wvph90gr8FqiOJGpGgh58G/ARmcczBu', NULL, '2023-01-10 02:06:18', '2023-01-10 02:06:18');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_merchandises_id_foreign` FOREIGN KEY (`merchandises_id`) REFERENCES `merchandises` (`id`);

--
-- Ketidakleluasaan untuk tabel `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `paints_artists_id_foreign` FOREIGN KEY (`directors_id`) REFERENCES `directors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
