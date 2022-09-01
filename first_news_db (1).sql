-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 05:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `a_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`, `a_name`) VALUES
(1, 'nrm555', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', 'Nərmin'),
(2, 'rza_dev', 'fcacf366e100ec0f419f6a2c3999047df8328a4c', 'Rza');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_descr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_img_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_create_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_creater_id` int(255) NOT NULL,
  `n_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_updater_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_descr`, `n_date`, `n_category`, `n_status`, `n_img`, `n_img_format`, `n_create_date`, `n_creater_id`, `n_update_date`, `n_updater_id`) VALUES
(35, '\"Qarabağ\"ın zədəlilərindən biri sıraya dönüb, digəri Portuqaliyadadır', 'Klubun mətbuat xidmətindən \"Report\"a verilən məlumata görə, artıq kollektiv məşqlərdə iştirak edən kapitanın vəziyyəti yaxşıdır. 33 yaşlı müdafiəçi bu gün Qəbələ şəhər stadionunda \"Kəpəz\"ə qarşı Azərbaycan Premyer Liqasının V tur matçının 23 nəfərlik iştirak ərizəsində yer alacaq.', '2022-09-01', 'Sport', 'Active', 'ac681d0e61417209c6c84124c6c5a96e.jpg', '.jpg', '2022-09-01 15:33:58', 0, '', 0),
(36, '\"Sevilya\" iki transferi açıqlayıb', 'Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib. Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib.  Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib.Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib. Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib.Yanuzayın müqaviləsinin müddəti 2026-cı ilin yayınadək nəzərdə tutulub. Ötən mövsümü \"Real Sosyedad\"da oynamış 27 yaşlı cinah futbolçusu olan Yanuzay sərbəst futbolçu kimi \"Sevilya\"ya keçib.', '2022-09-01', 'Sport', 'Active', '531accc982f27d96e0fea776a7b1a888.jpg', '.jpg', '2022-09-01 15:35:10', 0, '', 0),
(37, 'AFFA I Divizion komandasına texniki məğlubiyyət verib', 'AFFA İntizam Komitəsi I Divizionda çıxış edən \"İmişli\" komandasına texniki məğlubiyyət verib.\r\n\r\n\"Report\"un məlumatına görə, II turda \"Araz Naxçıvan\"la matça İmişli təmsilçisinin heyətində adı protokolda olmayan futbolçu iştirak edib.\r\n\r\nBuna baxmayaraq hesab olduğu kimi saxlanılıb. Klub 400 manat məbləğində cərimələnib.\r\n\r\nQeyd edək ki, qarşılaşma \"Araz Naxçıvan\"ın 3:0 hesablı qələbəsi ilə bitib.', '2022-09-01', 'Sport', 'Active', '7565e713065eb7806ff76419fe7ab94c.jpg', '.jpg', '2022-09-01 15:35:42', 0, '', 0),
(38, '\"Fənərbağça\"nın istədiyi futbolçu \"Trabzonspor\"a keçib', 'Türkiyənin \"Trabzonspor\" klubu növbəti futbolçu transferini açıqlayıb.\r\n\r\n\"Report\" Qara dəniz təmsilçisinin rəsmi tviter hesabına istinadən xəbər verir ki, ölkə çempionu İspaniya \"Valensiya\"sından Maksi Qomesi heyətinə qatıb.\r\n\r\nKlub paylaşımda \"Maksi Qomesdən böyük \"Trabzonspor\" azarkeşlərinə mesaj var, o da gəlir\" yazıb.\r\n\r\n26 yaşlı hücumçu ilə imzalanacaq müqavilənin detalları hələlik bəlli deyil.\r\n\r\nQeyd edək ki, Maksi Qomes 2019-cu ildən \"Valensiya\"da çıxış edib. Uruqvaylı forvardla Türkiyənin digər təmsilçisi \"Fənərbağça\" da maraqlanırdı.\r\n\r\nMaxi Gomez’den büyük Trabzonspor taraftarına mesaj var.', '2022-09-02', 'Sport', 'Active', 'caf537d34828849f850fb2739ab23be1.jpg', '.jpg', '2022-09-01 15:37:17', 0, '', 0),
(39, '“Instagram”ın fəaliyyətində nasazlıq yaranıb', 'Dünyanın bir sıra ölkələrində “Instagram” sosial şəbəkəsinin fəaliyyətində problemlər müşahidə olunur.\r\n\r\nAnons.az xəbər verir ki, bu barədə məşhur internet resursların işini izləyən “Downdetector” xidmətinin səhifəsində bildirilib.\r\n\r\n“Instagram”ın işindəki nasazlıqlardan ən çox ABŞ, Böyük Britaniya, Kanada, Rusiya və Ukraynanın sosial şəbəkə istifadəçiləri şikayət edirlər.\r\n\r\nXidmətin məlumatına görə, istifadəçilərin 61 %-I saytın fəaliyyətindəki nasazlıqdan, 27 %-I tətbiqdəki problemdən, 11 % isə öz hesablarına daxil ola bilmədiyindən şikayətlənib.', '2022-09-01', 'Technology', 'Active', 'e7e31f7b3a6b2c8c28590cc29f352309.jpg', '.jpg', '2022-09-01 15:38:44', 0, '', 0),
(40, 'İnstaqramda yeni funksiya yaradılıb', 'İnstaqram sosial şəbəkəsində avatarlarla bağlı yeni funksiya yaradılıb.\r\n\r\nAnons.az xəbər verir ki, report-un xarici mətbuata istinadən məlumatına görə, əvvəllər avatarlar yalnız platformanın bəzi istifadəçiləri üçün əlçatan idi.\r\n\r\nYeni funksiya “Apple” telefonlarında “memoji” kimi fərdiləşdirilmiş avatar yaratmağa imkan verir. Avatarı aktivləşdirmək və fərdiləşdirmək üçün profil bölümünə keçməli, parametrləri seçməli, akkaunta keçib \"avatarlar\"ı seçmək lazımdır. Bundan sonra personajın xarici görkəmini, gözlərin, saçın, paltarın rəngini seçmək tələb olunur.\r\n\r\nQuraşdırma tamamlandıqdan sonra hekayələri yükləyərkən istifadəçi stikerlər bölməsində onu seçərək öz avatarını əlavə edə biləcək.', '2022-09-01', 'Technology', 'Active', '8c9563462e230d457232c96242740057.jpg', '.jpg', '2022-09-01 15:39:29', 0, '', 0),
(41, 'Bu il dronların və radioqəbuledicilərin ölkəyə gətirilməsi asanlaşa bilər', 'Rəqəmsal İnkişaf və Nəqliyyat Nazirliyi bu il dronların ölkəyə gətirilməsi və radioelektron vasitələrin qeydiyyatı prosedurlarını sadələşdirməyi planlaşdırır.\r\n\r\nAnons.az xəbər verir ki, bunu rəqəmsal inkişaf və nəqliyyat nazirinin müavini Rövşən Rüstəmov Bakıda keçirilən \"Azərbaycanda rəqəmsal inkişaf və nəqliyyat sahəsi üzrə prioritetlər\" mövzusunda seminarda bildirib.\r\n\r\n“Bürokratik əngəllər bu gün yeni texnologiyanın qarşısını alır, ona mane olur. Bu il hədəf kimi qarşımıza dronların ölkəyə gətirilməsi kimi məsələlərin sadələşdirilməsini qoymuşuq\", - R. Rüstəmov qeyd edb.', '2022-09-01', 'Technology', 'Active', 'a7d57a0ffdb02662d77b6bb902bab6a7.jpg', '.jpg', '2022-09-01 15:40:03', 0, '', 0),
(42, 'Azərbaycan iki ölkədən skumbriya balığının idxalını bərpa edib', 'Report İnformasiya Agentliyinin dərc etdiyi xəbərlərə abunə olmaq, fotoları əldə etmək üçün agentliyin kommersiya bölməsinə müraciət edə bilərsiz: Report İnformasiya Agentliyinin dərc etdiyi xəbərlərə abunə olmaq, fotoları əldə etmək üçün agentliyin kommersiya bölməsinə müraciət edə bilərsiz: Report İnformasiya Agentliyinin dərc etdiyi xəbərlərə abunə olmaq, fotoları əldə etmək üçün agentliyin kommersiya bölməsinə müraciət edə bilərsiz:', '2022-09-01T18:53', 'Finance', 'Active', 'c30fd419976fe20f016c4eb973e038f8.jpg', '.jpg', '2022-09-01 15:51:30', 0, '', 0),
(43, 'Peyvənd olunanların sayı açıqlanıb', 'Azərbaycanda son sutkada 1290 nəfər vaksinasiya olunub.\r\n\r\n“Report” xəbər verir ki, bu barədə Nazirlər Kabineti yanında Operativ Qərargah məlumat yayıb.', '2022-09-01T18:48', 'Finance', 'Active', '90e104bb744384abf407d35f96f50f8d.jpg', '.jpg', '2022-09-01 15:47:38', 0, '', 0),
(44, 'Koronavirusla mübarizədə iştirak edənlərə 4,3 milyon manatdan çox əlavə pul ödənilib', 'Azərbaycan Prezidentinin müvafiq sərəncamına və Nazirlər Kabinetinin müvafiq qərar və sərəncamlarına uyğun olaraq İcbari Tibbi Sığorta üzrə Dövlət Agentliyi (Agentlik) tərəfindən 2022-ci ilin mart və aprel ayları ərzində yeni növ koronavirus infeksiyası ilə mübarizə tədbirlərində iştirak edən tibb işçilərinə iş vaxtına/saatına mütənasib olaraq təxminən 3,8 milyon manatdan artıq, qeyri-tibb işçilərinə isə 0,5 milyon manatdan çox müddətli əlavə ödənilib.', '2022-09-01T17:52', 'Finance', 'Active', 'bef6ea5eaf6c2e4dca5407021bc90f43.jpg', '.jpg', '2022-09-01 15:52:26', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
