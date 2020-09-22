-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2020 at 04:45 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `album_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Edin Vupros', 'images/lGlFOhn9sOPQ9SLJ8j6ve6V6oHFk4MiuwbLoJAHL.jpeg', '2020-09-22 01:00:14', '2020-09-22 01:00:14'),
(2, 'Bez Vaprosi', 'images/Jm7BrQMl0elBGtfzkkPq4RgMpZYjhf9s46SXTCDm.jpeg', '2020-09-22 01:01:10', '2020-09-22 01:01:10'),
(4, 'Missing you', 'images/mDUMreJK6nauPwCPmUb3Ss89YBGHvU8Bqp6fkUb7.jpeg', '2020-09-22 01:03:30', '2020-09-22 01:03:30'),
(5, 'Future Hils', 'images/8ZQ76BiSiLLTgvqzVqYu6fEwhTglSRFa2ed5bUwp.jpeg', '2020-09-22 01:04:11', '2020-09-22 01:04:11'),
(6, 'Your Area', 'images/fVDKcuDDjHdzG4eSO206SLZi886V1hABqNR0srIb.jpeg', '2020-09-22 01:05:42', '2020-09-22 01:05:42'),
(7, 'Người từng yêu anh', 'images/jcuCB8Th7JzsxkPY7P8P4frOkNfZ63u6WuS7SM2M.jpeg', '2020-09-22 01:06:33', '2020-09-22 01:06:33'),
(8, 'Ngốc', 'images/vgDtYcyG5NMW4sVR2xILSWKFaS17nIVUd53XzW8H.jpeg', '2020-09-22 01:06:54', '2020-09-22 01:06:54'),
(9, 'Hơn cả yêu', 'images/SVG0CJ9oIfv667yfxapRgBKJ8IpD18oWjdlkblXk.jpeg', '2020-09-22 01:07:54', '2020-09-22 01:07:54'),
(12, 'Như phút ban đầu', 'images/vibIcaPxYLO0DQss7TLCO1P3qWG0NGiscampNlVa.jpeg', '2020-09-22 01:09:18', '2020-09-22 01:09:18'),
(13, 'Việt Nam ơi', 'images/WaCkMD7tkvvZoUoyVSviRtlNkLYjI5QqNOGasDlS.jpeg', '2020-09-22 01:09:52', '2020-09-22 01:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'K-pop', 'images/kaIDOWQbmm2XBW4OVTAUcSzikUuy1ANVA0GUKk4j.webp', '2020-09-22 00:54:15', '2020-09-22 00:54:15'),
(2, 'Youth music', 'images/4ERPB0jC2tcyXF3SgXVgZs9cZipK5lDNwAKCg948.jpeg', '2020-09-22 00:55:30', '2020-09-22 00:55:30'),
(3, 'Trance music', 'images/VbTL9EJ7IOouwiC5qHBLD26LvM9NPrND4hVJKR86.jpeg', '2020-09-22 00:57:00', '2020-09-22 00:57:00'),
(4, 'Soul Music', 'images/SjSyoSPDNNOqXL5ppdnlTgiiWyy9ewMp9LCTsP72.jpeg', '2020-09-22 00:57:11', '2020-09-22 00:57:11'),
(5, 'Romantic Music', 'images/dLQVNoCe9esMgNbmwXOgKeles1UGgWejMEfEJfFr.jpeg', '2020-09-22 00:57:22', '2020-09-22 00:57:22'),
(6, 'Hip Hop', 'images/TH3l4pgJ1LZVw5qZKqglhVTVuBv0wPSp3HsR4FaM.jpeg', '2020-09-22 00:57:36', '2020-09-22 00:57:36'),
(7, 'Rock Music', 'images/M40LVe5y9UaJXYYnomdDSgSoatlV53zb2nqKIMfz.jpeg', '2020-09-22 00:57:49', '2020-09-22 00:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2020_09_17_083343_create_categories_table', 1),
(35, '2020_09_17_083406_create_singers_table', 1),
(36, '2020_09_17_083415_create_albums_table', 1),
(37, '2020_09_17_085916_create_songs_table', 1),
(38, '2020_09_18_005439_create_customers_table', 1),
(39, '2020_09_20_100903_create_musics_table', 1),
(40, '2020_09_21_011549_add_user_id_column_to_musics_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` bigint UNSIGNED NOT NULL,
  `music_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `singer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `id` bigint UNSIGNED NOT NULL,
  `singer_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`id`, `singer_name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Phương Ly', 'images/ratrxjPK3fUYSC7K9JcKYAQEKQuir2EsiCXQbBYB.jpeg', 'Phương Ly tham gia các cuộc thi âm nhạc từ sớm, đạt giải nhì nhạc nhẹ của Sao Mai năm 2005, lọt vào top 30 cuộc thi Vietnam Idol 2007 sau đó là bán kết 3 của Vietnam Idol 2010. Cô được đông đảo khán giả yêu thích nhưng bất ngờ biến mất khỏi showbiz Việt.\r\nĐầu năm 2015, Phương Ly xuất hiện trở lại. Cô đầu quân công ty OnOn Entertainment rồi ra mắt ca khúc \"Crush On You\" vào năm 2016.\r\nNăm 2017, sự kết hợp giữa Phương Ly và JustaTee trong \"Mặt Trời Của Em\" đạt thành công lớn, năm 2018 ca khúc \"Thằng Điên\" của bộ đôi cũng giành nhiều giải thưởng.\r\nCái tên Phương Ly trở nên nổi tiếng trong làng V-pop, cô liên tiếp có các ca khúc hit như \"Anh Là Ai\" hay \"Đâu Chịu Ngồi Yên\" (cùng Rhymastic và Touliver) trong năm 2019.', '2020-09-22 00:46:15', '2020-09-22 00:46:15'),
(2, 'Jack', 'images/WqcMvCizY6wbTkCoJMDLaChpNWrAx2OUKcchlHUz.jpeg', 'Với niềm đam mê ca hát, Jack từ bỏ con đường sư phạm và gia nhập nhóm hiphop G5R.\r\nNăm 2019, Jack ra mắt ca khúc \"Hồng Nhan\". Bài hát nhanh chóng trở thành một hiện tượng trong giới trẻ Việt Nam.\r\nThừa thắng xông lên, Jack kết hợp cùng K-ICM ra mắt \"Bạc Phận\", và cũng như trước đó, hài hát nhanh chóng dẫn đầu các bảng xếp hạng âm nhạc trong nước.\r\nCũng trong thời gian này, Jack quyết định đầu quân về công ty ICM, chung một nhà với K-ICM. Bộ đôi liên tiếp ra mắt những ca khúc \"khủng\" như: \"Sóng Gió\", \"Em Gì Ơi\"...\r\nCuối năm 2019, sau những lùm xùm với K-ICM và công ty quản lý, Jack rời khỏi ICM.\r\nĐầu năm 2020, Jack ra mắt ca khúc \"Là Một Thằng Con Trai\" đánh dấu điểm khởi đầu cho sự nghiệp solo của anh.', '2020-09-22 00:46:47', '2020-09-22 00:46:47'),
(3, 'Noo Phước Thịnh', 'images/3f6c8FZIq9fgfIQQLTDYscNyw2OW08ZUqrIqFlEg.jpeg', 'Ca khúc “Xin Đừng Buông Tay” một lần nữa được Noo Phước Thịnh thể hiện lại với giọng ca ngọt ngào và tình cảm sẽ làm các fan đừng ngồi không yên đây!\r\nBấm ngay vào Zing MP3 để thưởng thức giọng ca của Noo Phước Thịnh với ca khúc “Xin Đừng Buông Tay” thôi nào!', '2020-09-22 00:47:35', '2020-09-22 00:47:35'),
(4, 'Hương Tràm', 'images/NIFoqlZgsTT5foYO4iImeowVqq7w4wmSiIuY0JMP.jpeg', 'Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của The Voice 2012 khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình.', '2020-09-22 00:48:20', '2020-09-22 00:48:20'),
(5, 'Hà Anh Tuấn', 'images/CpuaXHacOvOjT86Z6n26xqXTMn5XYh57xgJn3qyK.jpeg', 'Năm 2006, Hà Anh Tuấn tham gia cuộc thi Sao Mai Điểm Hẹn và vào được top 3 chung cuộc.\r\nSau cuộc thi, anh chọn dòng nhạc R&B để theo đuổi với album đầu tay \"Cafe Sáng\" (2007) sau đó là \"Saigon Radio\" (2009), \"Acous\'84\" (2010), \"Lava\" (2014), \"Street Rhythm\" (2015)... mang lại cho anh nhiều giải thưởng.\r\nNgoài R&B, anh còn thành công ở thể loại Pop với nhiều ca khúc được khán giả yêu thích, nổi bật là những bản tình ca song ca cùng Phương Linh trong album \"Ngày Hát Đôi\" (2007) hay \"Anh Yêu Em\" (2011)\r\nMột trong những thành công lớn của Hà Anh Tuấn là những chương trình âm nhạc đầy tính nghệ thuật, có thể kể đến liveshow \"Fragile\" (2017), chuỗi liveshow \"See Sing Share\" (2018) và live concert \"Truyện Ngắn\" (2019).', '2020-09-22 00:48:58', '2020-09-22 00:48:58'),
(6, 'Đức Phúc', 'images/2TYIV3iWpU1QEGGyKitPYQKd9Q16XXlbavbdNUfB.jpeg', 'Đức Phúc đã trở lại với một ca khúc siêu ngọt ngào cho mùa Valentine này. Hơn Cả Yêu sẽ khiến các bạn tan chảy với giai điệu và lời bài hát chỉ cần nghe xong là muốn yêu ngay. Cùng Zing MP3 thưởng thức ngay nào!', '2020-09-22 00:49:34', '2020-09-22 00:49:34'),
(7, 'ERIK', 'images/jmCOg6oeidBGR8kGulHrkzF93wCP3EdeB0PQvZY6.jpeg', 'ERIK tham gia Giọng Hát Việt Nhí năm 2013 và dừng lại ở vị trí top 15.\r\nNăm 2014, anh tham gia cuộc thi của St.319 Entertainment và trở thành thực tập sinh.\r\nNăm 2016, ERIK debut với ca khúc Pop ballad \"Sau Tất Cả\". Ca khúc nhanh chóng trở thành cơn sốt đối với giới trẻ.\r\nNăm 2017, ERIK rời công ty. Anh kết hợp với MIN trong ca khúc \"Ghen\". Bài hát là bước tiến nổi bật trong sự nghiệp ca hát của anh.\r\nTừ 2018 đến nay, ERIK đều đặn ra mắt các bản hit: \"Chạm Đáy Nỗi Đau\" (2018), \"Đừng Có Mơ\" (2018), \"Anh Ta Là Sao\" (2019), \"Có Tất Cả Nhưng Thiếu Anh\" (2019)...\r\nĐầu năm 2020, phiên bản mới của \"Ghen\" là \"Ghen Cô Vy\" ra mắt trong thời điểm dịch COVID-19 được đón nhận, không chỉ trong nước mà cả trên thế giới.', '2020-09-22 00:50:15', '2020-09-22 00:52:16'),
(8, 'BlackPink', 'images/TBIUcWY2oDt2CuDUbQ3YAgNIPzvfQD5DN71bSgK1.jpeg', 'BLACKPINK (Hangul: 블랙핑크; Romaja quốc ngữ: Beullaek Pingkeu, thường được viết cách điệu thành BLACK PINK, BLACKPINK hay BLΛƆKPIИK)\r\n\r\nVào ngày 29/06/2016, YG Entertainment đã chính thức tiết lộ girlgroup mới của họ sẽ chỉ gồm bốn thành viên đã công bố từ trước, đồng thời nhóm sẽ có tên là Black Pink.\r\n\r\nĐại diện YG Entertainment cho biết: \"Ý nghĩa của tên gọi Black Pink là để phản bác lại cách nhìn nhận phổ biến về màu hồng. Hồng thường được sử dụng để thể hiện vẻ xinh đẹp nhưng BLACKPINK mang ý nghĩa \"Xinh đẹp không phải là tất cả\". Nó còn mang nghĩa biểu tượng rằng họ là một nhóm không chỉ sở hữu ngoại hình xinh đẹp mà còn cực kỳ tài năng và cá tính\".\r\n\r\nNhóm được thành lập vào năm 2016 và quản lý bởi công ty YG Entertainment bao gồm 4 thành viên: Jisoo sinh ngày 03/01/1995.\r\nJennie sinh ngày 16/01/1996.\r\nRosé sinh ngày 11/02/1997.\r\nLisa sinh ngày 27/03/1997.\r\nYG thông báo rằng Black Pink sẽ không có trưởng nhóm vì công ty muốn cả bốn thành viên cùng hỗ trợ lẫn nhau.\r\n\r\nNhóm chính thức ra mắt vào lúc 8:00PM (KST) ngày 08/08/2016 với hai đĩa đơn \"BOOMBAYAH\" và \"Whistle\", nằm trong album đĩa đơn đầu tay \"SQUARE ONE\". Black Pink lập kỉ lục là nhóm nhạc nữ được đề cử và giành chiến thắng trên các show âm nhạc nhanh nhất kể từ khi ra mắt và bắt đầu quảng bá. Nhóm được no.1 trên Inkigayo chỉ sau 13 ngày debut.\r\n\r\nTrước khi ra mắt: Ngày 01/06/2016, YG Entertainment bắt đầu giới thiệu hình ảnh teaser cho sự ra mắt của nhóm nhạc nữ mới, thành viên đầu tiên được tiết lộ là Jennie Kim, thực tập sinh khá nổi tiếng của YG, người trước đây đã hợp tác với các nghệ sĩ cùng công ty, trong đó có G-Dragon qua ca khúc \"Black\" (2012).\r\n\r\nNgày 08/06, hình ảnh của thành viên Lisa, một cô nàng bí ẩn gây nhiều ấn tượng với những video được đăng tải trên kênh Youtube của công ty. Lisa là thành viên ngoại quốc đầu tiên trong lịch sử nhà YG và được biết đến là người duy nhất dành chiến thắng trong cuộc thi YG Audition tại Thái Lan vào năm 2010.\r\n\r\nNgày 15/06, YG tiết lộ hình ảnh của thành viên Jisoo, thành viên lớn tuổi nhất, là người mẫu cho nhiều nhãn hiệu quảng cáo và diễn xuất trong nhiều video âm nhạc.\r\nNgày 22/06, tiết lộ thành viên cuối cùng: Rosé. Người đã từng góp giọng trong ca khúc \"Without You\" (2012) của G-Dragon.\r\nCuối cùng, vào ngày 29/06, YG Entertainment cho ra mắt những hình ảnh teaser của cả bốn thành viên đã tiết lộ trước đó và xác nhận nhóm sẽ mang tên BLACKPINK.\r\nNgày 15/01/2017, Black Pink tiết lộ BLINK sẽ là tên fanclub chính thức của nhóm bằng một hình ảnh đăng tải lên Instagram. YG giải thích rằng họ đã lấy “BL” trong Black và “INK” trong “pink” để hợp thành từ Blink (nhấp nháy), mang ý nghĩa là cách mà Black Pink nhìn thấy người hâm mộ của họ.\r\nSáng ngày 17/05, YGEX Entertainment (công ty hợp tác giữa YG và AVEX, chuyên phụ trách hoạt động của nghệ sĩ YG tại Nhật) đã thông báo rằng nhóm nhạc nữ Black Pink sẽ ra mắt tại thị trường Nhật Bản vào tháng 07. Để quảng bá cho nhóm, kể từ ngày 17/05, YVEX đã đăng tải hồ sơ của 4 thành viên Jennie, Jisoo, Rosé và Lisa lên website chính thức.', '2020-09-22 00:51:36', '2020-09-22 00:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint UNSIGNED NOT NULL,
  `song_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `singer_id` bigint UNSIGNED NOT NULL,
  `album_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `audio`, `image`, `author`, `views`, `singer_id`, `album_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Vì anh', 'audios/GnX062RZ4WJGFHDWBuB0Z67tcJi3Uxj6SVeRyAY9.mp3', 'images/nmMKWiFrTjsiZxzAipfbE723IukXZxYXPW4j8xdO.jpeg', 'Đan Trường', '1', 4, 7, 5, '2020-09-22 01:40:49', '2020-09-22 01:40:49'),
(4, 'Sóng Gió', 'audios/ohOifbSMnnjI5UyCGpeQzAfc9vu23YOhfvauWS8a.mp3', 'images/uSIBpz1ueg4fqvnpAtdqsMQMdRgVspq4gANdGwkl.jpeg', 'Đặng Thế Phong', '1', 2, 13, 2, '2020-09-22 01:42:06', '2020-09-22 01:42:06'),
(5, 'Người từng yêu anh', 'audios/gntsXMlzg44SJpf8iHegI5idISllE7noN9staX5r.mp3', 'images/VLb0itbHJhCCkjEvZn5vBjVt7gMe42y0en6Z9Kg2.png', 'Đỗ Nhuận', '1', 4, 7, 4, '2020-09-22 01:44:47', '2020-09-22 01:44:47'),
(6, 'Năm ấy', 'audios/xQ61lvVrVgCmMYFcC3IAnvLlei1NYJv9pNZGsT4M.mp3', 'images/pPc0JNuM7FTHj6rbxd5qVKjExkptcfVQbz3HRwDM.jpeg', 'Đức Quỳnh', '1', 6, 1, 3, '2020-09-22 01:45:42', '2020-09-22 01:45:42'),
(7, 'Mình chia tay đi', 'audios/M63uO2i2sBzU3bg69yq0aWjRLZK0GxAPGSOb9nZ9.mp3', 'images/APbs4Frltmx0kJieLH2jE5t6fnkdxtHeRe1hebdn.jpeg', 'Hiếu Nghĩa', '1', 7, 5, 1, '2020-09-22 01:46:41', '2020-09-22 01:46:41'),
(8, 'Mẹ ơi', 'audios/ttpHCAlj0yHmHAbBsKSKhPwRlgx5gg64vME2vzrq.mp3', 'images/ug48A9ecGBUIb2zGguNomLs5fqaMIBqi2LCIrd53.jpeg', 'Hoàng Quý', '1', 2, 4, 7, '2020-09-22 01:47:55', '2020-09-22 01:47:55'),
(9, 'Màu nước mắt', 'audios/sGTMWNEJ9A7ppDtFgK86AhWIeFomiF5wS6JOz0qa.mp3', 'images/UjRbdGK5RLOrfNgeNdoSjFNULEqopgKEln4SWYX0.jpeg', 'Hoàng Quý', '1', 7, 1, 5, '2020-09-22 01:48:51', '2020-09-22 01:48:51'),
(10, 'Là một thằng con trai', 'audios/dpSIudcTvZHyMLf82QRft9mq52tgwOm4Ury8aIQT.mp3', 'images/2TA3M9gRpyUdzD4UJRIkYka3Wn3ckFcwjWwGTtpW.jpeg', 'Đan Trường', '1', 2, 2, 7, '2020-09-22 01:51:13', '2020-09-22 01:51:13'),
(12, 'Kill this love', 'audios/ZHfw8F9vxh8k3iO4veY1kPRXUeYpbP303fGWjd3R.mp3', 'images/tqy13YuC9bXDpOaVkjGl84DzEPPoybasmYUhHU1P.jpeg', 'Đan Trường', '1', 1, 6, 1, '2020-09-22 01:54:40', '2020-09-22 01:54:40'),
(13, 'Hạ nhớ', 'audios/12NQ5ckQmvB76jJCTNCLTBqPtoDMPm16g0VtxOPv.mp3', 'images/zDk3aNHspB7JeMO2nA3fDSYfgC9cfE9Q2idvEyZy.jpeg', 'Hoàng Trọng', '1', 2, 13, 4, '2020-09-22 01:56:06', '2020-09-22 01:56:06'),
(14, 'Hai thế giới giấc mơ', 'audios/CMWoBlUMYloBFXVtToVznvkANC4wb0Qo3dp3IXxW.mp3', 'images/lkCIhkRpo5OKImktINM3jG0JPrmoGyX0F4N4Q2Zo.jpeg', 'Hoàng Trọng', '1', 4, 8, 2, '2020-09-22 01:57:58', '2020-09-22 01:57:58'),
(15, 'Em không sai, chúng ta sai', 'audios/eBYH0yczjrjr5SvkPvzjyx2d37fksODop2yOWcDU.mp3', 'images/tCsrNmQINOSn1yyAj3VksHr8nt53J8EEkWLlMv98.jpeg', 'Hoàng Trọng', '1', 7, 2, 3, '2020-09-22 01:59:26', '2020-09-22 01:59:26'),
(16, 'Em gì ơi', 'audios/CXPSknfce4lEGgOh16fwityxbcyLxzXFlyw0E4mT.mp3', 'images/UEQxligos0GA4K02yXOycVQttozQibFyD1OdLsFj.jpeg', 'Hoàng Trọng', '1', 2, 13, 3, '2020-09-22 02:00:07', '2020-09-22 02:00:07'),
(17, 'Chẳng để em xa anh', 'audios/tZQ9SztrZPNZJaDuUGjIvBQdstib6sq1spUT0DY3.mp3', 'images/tN4cSFHKilNNe3hZ1f0tyk5lzOidez0dbSfxAINT.jpeg', 'Hoàng Trọng', '1', 6, 9, 4, '2020-09-22 02:02:24', '2020-09-22 02:02:24'),
(18, 'Ánh nắng của em cho anh đến ngày mai', 'audios/29qiLyD4eVJXWTTSbwUPcrsMRocP612G0RqEjw3j.mp3', 'images/OpuSd4Qzus8p7laLAyXBLFNpB1IdjmknZl7yoGVn.jpeg', 'Hoàng Trọng', '1', 6, 9, 5, '2020-09-22 02:05:23', '2020-09-22 02:05:23'),
(19, 'Sài gòn anh yêu em', 'audios/PcXwL1XNDBIn3l8S13PkXizuPyNWN0s1v19MEBfO.mp3', 'images/6zKOauBrFlzaGdSZP24Uh4QoaCqyFijAz3lo8DU5.jpeg', 'Hoàng Trọng', '1', 5, 12, 6, '2020-09-22 02:10:05', '2020-09-22 02:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dương Mạnh Cường', 'cuong@gmail.com', NULL, '$2y$10$bqTVuHDjtijFZuhn6QI5M.LTOJ810kg20oWNVUgzvTYUBXA8lj8WG', NULL, '2020-09-22 02:42:51', '2020-09-22 02:42:51'),
(2, 'Lê Đức Mạnh', 'manh@gmail.com', NULL, '$2y$10$z27LvYQG4w7VL/8zbNDOnuKeZPeV.mc495jhTULqF1RkQHSIokPuW', NULL, '2020-09-22 02:43:32', '2020-09-22 02:43:32'),
(3, 'Bùi Xuân Dưỡng', 'duong@gmail.com', NULL, '$2y$10$7Og9SeNH1xL5eXNlQD.DZuL4xfrMEUmsiw3vL2yFqJCt9qmgdhjjy', NULL, '2020-09-22 02:43:59', '2020-09-22 02:43:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `musics_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songs_singer_id_foreign` (`singer_id`),
  ADD KEY `songs_album_id_foreign` (`album_id`),
  ADD KEY `songs_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singers`
--
ALTER TABLE `singers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `musics`
--
ALTER TABLE `musics`
  ADD CONSTRAINT `musics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `songs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `songs_singer_id_foreign` FOREIGN KEY (`singer_id`) REFERENCES `singers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
