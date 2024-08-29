-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 10:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stevannet`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tanggal_muat` varchar(20) NOT NULL,
  `tanggal_terjadi` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `isi` text,
  `gambar` varchar(200) DEFAULT NULL,
  `sumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `tanggal_muat`, `tanggal_terjadi`, `id_jenis`, `id_topik`, `isi`, `gambar`, `sumber`) VALUES
(3, 'Rosberg Juara GP Monaco', '26 May 2015', '22 Mei 2015', 1, 2, 'Driver Mercedes, Nico Rosberg, memastikan diri finis terdepan di Grand Prix Formula One Monaco di Sirkuit Monte Carlo, Minggu (24/5/2015). Hasil ini membuat Rosberg mencetak hattrick kemenangan di GP Monaco.\r\n\r\nNasib kurang bagus dialami rekan setim Rosberg, Lewis Hamilton, yang melakukan blunder saat pitstop. Padahal, Hamilton sesungguhnya memimpin balapan sejak awal, tapi karena blunder itu, Rosberg merampok kemenangannya di GP Monaco.\r\n\r\nHamilton sendiri harus puas menyelesaikan balapan di urutan ketiga. Pembalap Ferrari, Sebastian Vettel, mampu finis di peringkat kedua.\r\n\r\nRekan setim Vettel, Kimi Raikkonen, hanya sanggup finis di posisi keenam. Duo Red Bull Renault, Daniil Kvyat dan Daniel Ricciardo berurutan finis di peringkat keempat dan kelima.\r\n\r\nPembalap McLaren Honda, Jenson Button, menempati peringkat kedelapan di GP Monaco. Sementara driver McLaren lainnya, Fernando Alonso, gagal finis setelah melahap 41 lap.\r\n\r\nBerikut hasil balapan Grand Prix Formula One Monaco:\r\n\r\nPos Driver Car \r\n1 Nico Rosberg Mercedes \r\n2 Sebastian Vettel Ferrari \r\n3 Lewis Hamilton Mercedes \r\n4 Daniil Kvyat Red Bull/Renault  ', 'C:xampphtdocsstevannetImagesF1Title.jpg', 'Liputan6.com'),
(4, '24 Heures du Mans 2015', '26 May 2015', '13 - 14 Juni 2015', 2, 2, '																											Puluhan mobil dari 4 kelas berbeda siap bertarung seharian demi gelar dari sebuah balapan legendaris. Mampukah Porsche dan mobil bensin lainnya memutuskan dominasi mesin diesel yang telah berlangsung selama 1 dekade ini?\r\n\r\nSaksikan 24 Heures du Mans 2015 musim ke-83 yang berlangsung di sirkuit de la Sarthe mulai tanggal 13 Juni jam 8 malam WIB. Akan disiarkan langsung oleh Eurosport dan FOX Sports (untuk wilayah Amerika)																														', 'C:xampphtdocsstevannetImagesendurance.jpg', 'http://www.24h-lemans.com/'),
(5, 'Komentator Bola Paling Nyentrik', '30 May 2015', '19 Maret 2015', 3, 7, 'Menonton pertandingan olahraga tidaklah lengkap tanpa suara komentator ketika menceritakan apa yang sedang terjadi di arena. Namun tidak jarang pula sang komentator melakukan tindakan nyentrik untuk menambah suasana menghibur bagi para penontonnya, baik di stadion atau melalui media massa, seperti mengomentari jalannya pertandingan dengan gaya yang tidak biasa.<br><br>\r\n\r\nAksi nyentrik komentator tersebut biasanya disebabkan karena komentator tersebut sebenarnya merupakan fans atau suporter dari salah satu tim yang bertanding. Berikut inilah profil komentator paling nyentrik yang sempat tertangkap kenyentrikannya.<br><br>\r\n\r\n<b>Carlo Zampa</b>\r\n\r\nCarlo Zampa lahir pada tanggal 4 November 1959 di Roma, Italia dan memulai kariernya sebagai asisten senat pada tahun 1984. Lalu pada tahun 1985, dia mulai menjadi pembicara di Rete Oro selama 6 tahun. Kemudian pada tahun 1998 sampai 2005, dia menjadi announcer di Stadion Olimpico Roma pada setiap pertandingan yang di-tuan rumahi oleh AS Roma yang merupakan tim idolanya. Setelah tahun 2005, dia dikenal sebagai penyiar radio lokal.<br><br>\r\n\r\nZampa memiliki kebiasaan berteriak "gol" dengan suara tinggi dan diikuti dengan menyebut nama pencetak golnya secara berulang ulang setiap kali AS Roma berhasil mencetak gol. Aksi nyentrik komentator ini sempat tertangkap lewat video ketika John Arne Riise berhasil membobol gawang Juventus pada sebuah pertandingan ini.<br><br>\r\n\r\n<div class="separator" style="clear: both; text-align: center;">\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/qM7JJUZHbUQ/0.jpg" frameborder="0" height="266" src="http://www.youtube.com/embed/qM7JJUZHbUQ?feature=player_embedded" width="320"></iframe></div>\r\n\r\n<b>Pablo Ramirez</b>\r\n\r\nPablo Ramirez bekerja sebagai presenter di stasiiun TV Univision, dan terbiasa membawakan komentator Spanyol pada pertandingan sepak bola yang tayang di Amerika Serikat. Komentator kelahiran Jalisco ini memiliki tinggi badan 196 cm, sehingga sering dijuluki dengan sebutan "Menara Jalisco", Dia juga sempat menjadi pemain sepak bola di salah satu tim papan bawah Meksiko pada tahun 1980.<br><br>\r\n\r\nKomentator ini terkenal dengan kebiasaannya berteriak "Gol" sepanjang mungkin setiap kali terjadi gol, sebuah hal yang menjadi budaya bagi para komentator sepak bola di Amerika Latin, terutama Meksiko. Tidak jarang pula berteriak gol berkali-kali dalam waktu yang lebih sebentar. Apalagi jika gol tersebut dinilainya sebagai gol spektakuler, "Golaso.. golaso.. golaso! Aso-aso asooo..." itulah bunyinya, seperti yang tertangkap lewat video ini.<br><br>\r\n\r\n<div class="separator" style="clear: both; text-align: center;">\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/Oz3tIWFdrG4/0.jpg" frameborder="0" height="266" src="http://www.youtube.com/embed/Oz3tIWFdrG4?feature=player_embedded" width="320"></iframe></div>\r\n\r\n<b>Bambino Pons</b>\r\n\r\nJuan Manuel "El Bambino" Pons memiliki kebiasaan bernyanyi setiap kali terjadi gol, entah dibantu dengan musik pengiring atau tidak. Nyanyian komentator asal Argentina ini mulai terkenal pada tahun 2000an lewat jaringan Fox Sports untuk wilayah Amerika Latin.<br><br>\r\n\r\n<div class="separator" style="clear: both; text-align: center;">\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/Ch1myTyyZZA/0.jpg" frameborder="0" height="266" src="http://www.youtube.com/embed/Ch1myTyyZZA?feature=player_embedded" width="320"></iframe></div>\r\n\r\n<b>Sven Rene Nygård</b>\r\nKomentator emosional asal Norwegia ini biasanya membawakan jalannya pertandingan secara langsung di arena pertandingan tim Sarpsborg 08 yang merupakan tim idolanya di Norwegia. Jika terjadi gol, maka komentator ini langsung bereaksi dengan berbagai teriakan histerisnya, seperti ketika Sarpsborg menang melawan Fredrikstad ini.<br><br>\r\n\r\n<div class="separator" style="clear: both; text-align: center;">\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/KXlQwk4Qe-Q/0.jpg" frameborder="0" height="266" src="http://www.youtube.com/embed/KXlQwk4Qe-Q?feature=player_embedded" width="320"></iframe></div>\r\n\r\n<b>Nuno Matos</b>\r\n\r\nNuno Matos dalam kesehariannya bekerja sebagai penyiar radio Antena 1. Ketika Portugal sedang bertanding, komentator ini akan berteriak kegirangan setiap kali tim Portugal mencetak gol. Teriakannya ini bahkan terdengar tidak biasa dibandingkan cara teriak ala komentator radio pada umumnya. Suara Matos mulai dikenal ketika ia memimpin pertandingan Portugal vs Swedia yang merupakan partai penentu lolosnya Portugal ke Piala Dunia 2014.<br><br>\r\n\r\n<div class="separator" style="clear: both; text-align: center;">\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/iB1CCbmwhlk/0.jpg" frameborder="0" height="266" src="http://www.youtube.com/embed/iB1CCbmwhlk?feature=player_embedded" width="320"></iframe></div>																																																', 'komentator.jpg', 'blog pribadi'),
(6, 'Ketika Sepak Bola Berhasil Mengalahkan Segalanya', '26 May 2015', '6 Mei 2015', 4, 11, 'Di Indonesia, sepak bola seolah-olah menjadi sebuah cabang olahraga yang tidak hanya sekedar memainkan bola, tetapi juga memainkan kegemaran bangsanya. Memang, cabang olahraga ini menjadi cabang paling disukai dan digemari oleh bangsa Indonesia hingga cabang lainnya pun luput dari pandangan mata dan media. Namun satu hal yang disayangkan adalah tingkat fanatisme rakyatnya yang tidak sebanding dengan prestasinya. Tercatat sejak tahun 1938, Indonesia tidak pernah bisa bermain di Piala Dunia karena kekacauan politik yang melanda negeri ini semasa orde lama. Kemudian setelah orde lama selesai, prestasi sepakbola Indonesia tidak mengalami perkembangan berarti sementara tim Asia lainnya bisa mengembangkan sepak bola mereka. Bahkan memasuki tahun 2000, sepak bola Indonesia benar-benar menuju akhir riwayatnya akibat berulang kalinya kisruh para pengurus PSSI, termasuk peristiwa pembekuan PSSI oleh menpora yang berujung pada dihentikannya Liga Indonesia pada tahun 2015 ini.\r\n\r\nSejarah Singkat Sepak Bola di Indonesia\r\n\r\nSebelum kekacauan sepak bola masa kini, sejarah pernah mencatat bahwa Indonesia pernah mencetak prestasi membanggakan pada abad ke-20, seperti:\r\n\r\n1938, lolos pertama kalinya ke Piala Dunia dengan menyandang nama "Hindia-Belanda" \r\n1956, menahan imbang Uni Soviet - yang saat itu menjadi unggulan utama di sepak bola - pada babak perempat final Olimpiade (walau akhirnya menyerah 4-0 pada pertandingan ulang)\r\n1958, peringkat ketiga Asian Games\r\n1974, mengalahkan Uruguay 2-1\r\nDan ada 8 turnamen persahabatan yang bisa dimenangkan oleh Indonesia pada abad tersebut, seperti Piala Merdeka, Kings Cup, Jakarta Anniversary Tournament dan Pestabola Merdeka\r\n\r\nNamun hal tersebut kelihatannya hanya menjadi kenangan biasa yang tidak sebanding dengan media yang sangat sering memberitakan masalah yang pernah menimpa sepak bola Indonesia masa ini:\r\n\r\n2007, Nurdin Halid yang merupakan ketua PSSI saat itu terjerat kasus korupsi sehingga didesak turun dari jabatannya. Bahkan PSSI terancam sanksi FIFA jika tidak melakukan pemilihan ulang, karena menurut aturan FIFA, seorang pelaku kejahatan tidak boleh menjabat menjadi ketua organisasi sepakbola nasional.\r\n2010, Liga Premier Indonesia (LPI) yang seharusnya bermaksud meningkatkan kualitas sepak bola Indonesia tidak diakui legal oleh PSSI. Liga ini hanya dianggap sekedar liga tarkam.\r\n2011, untuk menganani kisruh PSSI yang terus berlanjut ketika kongres diadakan, Komite Normalisasi dibentuk. Setelah itu, diadakanlah Konger Luar Biasa pada tanggal 2011 dan Djohar Arifin pun diangkat menjadi ketua PSSI periode 2011-2015\r\n2011, LPI yang berubah nama menjadi "Indonesia Premier League" untuk mengatasi perselisihan antara LSI-LPI mendapat pengakuan sebagai liga yang lebih profesional di Indonesia. Peserta IPL ini sebagian besar merupakan tim pindahan Liga Super Indonesia. Sayangnya penggemar sepak bola tanah air tidak bisa menerima profesionalitas peserta tim di liga ini karena terbukti memberikan pengaruh buruk bagi tim nasional.\r\n2015, PSSI dibekukan oleh Menpora yang bermula dari keikutsertaan Arema dan Persebaya di Liga Indonesia. Arema dan Persebaya sendiri tidak diijinkan keikutsertaannya oleh Badan Olahraga Profesional Indonesia. Karena pembekuan tersebut, Liga Indonesia pun dinyatakan berakhir, dan Timnas Indonesia diambil alih oleh KONI.\r\n\r\nMengapa Sepak Bola Sangat Populer?\r\n\r\nTidak hanya masyarakat yang menjadi korban popularitas sepak bola. Media massa juga menjadi korbannya. Ini terbukti dengan banyaknya media yang lupa memberitakan bulu tangkis, catur, bridge dan cabang olahraga non-mainstream lainnya yang meraih prestasi gemilang karena banyaknya berita sepak bola yang menghiasi halaman utama. Korban paling utama adalah stasiun TV. Mereka memiliki banyak alasan yang harus bisa kita terima soal jarangnya menayangkan olahraga lain, seperti:\r\nLama pertandingannya yang tidak menentu, sehingga tidak bisa menyesuaikan jadwal tayangnya bagi acara selanjutnya. Dalam hal ini adalah tenis dan bulu tangkis yang selesai setelah meraih poin tertentu\r\nPopularitas yang tidak sebanding dengan jenis acara yang diminati sebagian besar pemirsanya\r\nPrestasi olahraga yang tidak menanjak, sehingga pemirsa mudah bosan menontonnya. Hal ini berakibat pada penurunan rating setelah beberapa menit pertandingan berlangsung\r\nSelain alasan media, ada beberapa alasan dan opini lain yang menyebabkan kenapa sepak bola menjadi olahraga yang terlampau populer di Indonesia, yaitu:\r\nAturan yang tergolong lebih sederhana karena tidak mengenal aturan pembatasan waktu seperti pada bola basket, dimana tim hanya punya waktu 24 detik untuk berada di daerah pertahanan lawan.\r\nLebih mudah dimainkan, karena permainan ini hanya memusatkan kekuatan kaki. Sedangkan pada cabang lain, pemain dituntut untuk memusatkan kekuatan pada hampir semua alat gerak seperti tangan dan kaki.\r\nAdegan yang seru, seperti gol indah, kemampuan melewati lawan, kerja sama tim dan kemampuan penyelamatan gawangnya dari kejebolan menjadi atraksi tersendiri.\r\nTantangan yang lebih banyak diberikan untuk memenangkan pertandingan, bukan hanya skill. Sepak bola modern juga harus mengenal kemampuan menyediakan taktik permainan yang tidak mudah untuk memenangkan pertandingan.\r\nPengaruh krisis ekonomi. Sebelum krisis 1997, rakyat Indonesia bisa menikmati hampir semua cabang olahraga seperti tenis, bulu tangkis, basket, balap dan cabang lainnya. Hal ini menyebabkan popularitas sepak bola (yang saat itu menjadi cabang paling populer) cenderung sejajar dengan cabang olahraga lainnya. Namun setelah krisis, perlahan lahan tontonan olahraga di Indonesia semakin berkurang sehingga popularitasnya tidak bertambah. Saat itu, sepak bola mendapatkan popularitas lebih daripada cabang lain, terlebih sejak Piala Dunia 1998 yang menurut pemirsa dikenang sebagai "Obat untuk melupakan krismon". Dengan demikian, popularitas sepak bola pun menjadi unggul telak atas cabang lainnya.\r\nTradisi sepak bola Indonesia yang sangat panjang, bahkan lebih panjang daripada tradisi sepak bola negara lain yang mengungguli kita, seperti Jepang. Tercatat Jepang pernah belajar pada Indonesia tentang bagaimana cara mengembangkan sepak bolanya, seperti Liga Indonesia tahun 80-90an yang dianggap sebagai cikal bakal J-League.\r\nCatatan manis sepak bola Indonesia (seperti yang telah dijelaskan sebelumnya) pada abad ke-20 yang masih bisa menjadi kenangan dan refrensi bagi harapan kemajuan sepak bola masa kini.\r\n\r\nObat Penyembuh Kekacauan Sepak Bola Indonesia\r\n\r\nUntungnya rakyat Indonesia masih bisa mensyukuri tim U-12 Indonesia yang berjasa membela negaranya di Danone Nations Cup, sebuah kompetisi sejenis Piala Dunia yang diadakan untuk anak seusia SD. Di kompetisi tersebut, Indonesia hampir selalu masuk ke 8 besar, bahkan 4 besar pada tahun 2006 dan mampu bersaing dengan tim Eropa walaupun mereka selalu tidak berkutik menghadapi wakil Amerika Latin. U-14 juga tampil menawan di Gothia Cup dengan prestasi paling tinggi terjadi pada tahun 2013 sebagai finalis.\r\n\r\nBagaimanakah dengan olahraga lain?\r\n\r\nPrestasi membanggakan olahraga Indonesia tidak hanya terjadi pada sepak bola saja, tetapi juga dalam cabang lain seperti bulu tangkis, tenis, angkat besi, bahkan di ajang balap mobil pun Indonesia sudah menunjukkan kehebatannya.\r\n\r\nBulu tangkis menjadi cabang olahraga yang paing membanggakan Indonesia karena meskipun saat ini prestasinya turun jauh, Indonesia memiliki riwayat prestasi terbaik dalam bidang bulu tangkis jika dibandingkan dengan olahraga lainnya. Ini dibuktikan dengan lebih seringnya atlet cabang tersebut meraih gelar juara di cabang bulu tangkis daripada di cabang lain.\r\n\r\nAngkat besi juga menjadi cabang langganan medali Olimpiade sejak tahun 2004 karena keberhasilannya meraih minimal 1 medali perak dalam 3 ajang terakhir. Tenis juga pernah menjadi andalan Indonesia pada Asian Games abad ke-20 dengan raihan 14 emas, terbanyak kedua setelah bulu tangkis. Di tinju, Indonesia pernah mengenal Ellyas Pical, Muhammad Rachman dan Chris John yang pernah meraih gelar tinju internasional. \r\n\r\nSementara di balap mobil, Rio Haryanto muncul sebagai calon pendatang baru pada balap mobil formula. Rio sendiri juga menunjukkan kelayakannya untuk menjadi pembalap F1 pertama Indonesia dengan keberhasilannya menjadi juara 2 kali pada balap GP3 tahun 2011, dan mulai naik kelas ke GP2 (setingkat dibawah F1) tahun berikutnya. Kemunculan Rio juga turut memunculkan calon pembalap masa depan Indonesia lainnya seperti Sean Gelael, Philo Paz Patric Armand dan Senna Noor.\r\n\r\n\r\nKetika Sepak Bola Berhasil Mengalahkan Segalanya\r\n\r\nDi Indonesia, sepak bola seolah-olah menjadi sebuah cabang olahraga yang tidak hanya sekedar memainkan bola, tetapi juga memainkan kegemaran bangsanya. Memang, cabang olahraga ini menjadi cabang paling disukai dan digemari oleh bangsa Indonesia hingga cabang lainnya pun luput dari pandangan mata dan media. Namun satu hal yang disayangkan adalah tingkat fanatisme rakyatnya yang tidak sebanding dengan prestasinya. Tercatat sejak tahun 1938, Indonesia tidak pernah bisa bermain di Piala Dunia karena kekacauan politik yang melanda negeri ini semasa orde lama. Kemudian setelah orde lama selesai, prestasi sepakbola Indonesia tidak mengalami perkembangan berarti sementara tim Asia lainnya bisa mengembangkan sepak bola mereka. Bahkan memasuki tahun 2000, sepak bola Indonesia benar-benar menuju akhir riwayatnya akibat berulang kalinya kisruh para pengurus PSSI, termasuk peristiwa pembekuan PSSI oleh menpora yang berujung pada dihentikannya Liga Indonesia pada tahun 2015 ini.\r\n\r\nSejarah Singkat Sepak Bola di Indonesia\r\n\r\nSebelum kekacauan sepak bola masa kini, sejarah pernah mencatat bahwa Indonesia pernah mencetak prestasi membanggakan pada abad ke-20, seperti:\r\n1938, lolos pertama kalinya ke Piala Dunia dengan menyandang nama "Hindia-Belanda" \r\n1956, menahan imbang Uni Soviet - yang saat itu menjadi unggulan utama di sepak bola - pada babak perempat final Olimpiade (walau akhirnya menyerah 4-0 pada pertandingan ulang)\r\n1958, peringkat ketiga Asian Games\r\n1974, mengalahkan Uruguay 2-1\r\nDan ada 8 turnamen persahabatan yang bisa dimenangkan oleh Indonesia pada abad tersebut, seperti Piala Merdeka, Kings Cup, Jakarta Anniversary Tournament dan Pestabola Merdeka\r\nNamun hal tersebut kelihatannya hanya menjadi kenangan biasa yang tidak sebanding dengan media yang sangat sering memberitakan masalah yang pernah menimpa sepak bola Indonesia masa ini:\r\n2007, Nurdin Halid yang merupakan ketua PSSI saat itu terjerat kasus korupsi sehingga didesak turun dari jabatannya. Bahkan PSSI terancam sanksi FIFA jika tidak melakukan pemilihan ulang, karena menurut aturan FIFA, seorang pelaku kejahatan tidak boleh menjabat menjadi ketua organisasi sepakbola nasional.\r\n2010, Liga Premier Indonesia (LPI) yang seharusnya bermaksud meningkatkan kualitas sepak bola Indonesia tidak diakui legal oleh PSSI. Liga ini hanya dianggap sekedar liga tarkam.\r\n2011, untuk menganani kisruh PSSI yang terus berlanjut ketika kongres diadakan, Komite Normalisasi dibentuk. Setelah itu, diadakanlah Konger Luar Biasa pada tanggal 2011 dan Djohar Arifin pun diangkat menjadi ketua PSSI periode 2011-2015\r\n2011, LPI yang berubah nama menjadi "Indonesia Premier League" untuk mengatasi perselisihan antara LSI-LPI mendapat pengakuan sebagai liga yang lebih profesional di Indonesia. Peserta IPL ini sebagian besar merupakan tim pindahan Liga Super Indonesia. Sayangnya penggemar sepak bola tanah air tidak bisa menerima profesionalitas peserta tim di liga ini karena terbukti memberikan pengaruh buruk bagi tim nasional.\r\n2015, PSSI dibekukan oleh Menpora yang bermula dari keikutsertaan Arema dan Persebaya di Liga Indonesia. Arema dan Persebaya sendiri tidak diijinkan keikutsertaannya oleh Badan Olahraga Profesional Indonesia. Karena pembekuan tersebut, Liga Indonesia pun dinyatakan berakhir, dan Timnas Indonesia diambil alih oleh KONI.\r\n\r\nMengapa Sepak Bola Sangat Populer?\r\n\r\n\r\nTidak hanya masyarakat yang menjadi korban popularitas sepak bola. Media massa juga menjadi korbannya. Ini terbukti dengan banyaknya media yang lupa memberitakan bulu tangkis, catur, bridge dan cabang olahraga non-mainstream lainnya yang meraih prestasi gemilang karena banyaknya berita sepak bola yang menghiasi halaman utama. Korban paling utama adalah stasiun TV. Mereka memiliki banyak alasan yang harus bisa kita terima soal jarangnya menayangkan olahraga lain, seperti:\r\nLama pertandingannya yang tidak menentu, sehingga tidak bisa menyesuaikan jadwal tayangnya bagi acara selanjutnya. Dalam hal ini adalah tenis dan bulu tangkis yang selesai setelah meraih poin tertentu\r\nPopularitas yang tidak sebanding dengan jenis acara yang diminati sebagian besar pemirsanya\r\nPrestasi olahraga yang tidak menanjak, sehingga pemirsa mudah bosan menontonnya. Hal ini berakibat pada penurunan rating setelah beberapa menit pertandingan berlangsung\r\nSelain alasan media, ada beberapa alasan dan opini lain yang menyebabkan kenapa sepak bola menjadi olahraga yang terlampau populer di Indonesia, yaitu:\r\nAturan yang tergolong lebih sederhana karena tidak mengenal aturan pembatasan waktu seperti pada bola basket, dimana tim hanya punya waktu 24 detik untuk berada di daerah pertahanan lawan.\r\nLebih mudah dimainkan, karena permainan ini hanya memusatkan kekuatan kaki. Sedangkan pada cabang lain, pemain dituntut untuk memusatkan kekuatan pada hampir semua alat gerak seperti tangan dan kaki.\r\nAdegan yang seru, seperti gol indah, kemampuan melewati lawan, kerja sama tim dan kemampuan penyelamatan gawangnya dari kejebolan menjadi atraksi tersendiri.\r\nTantangan yang lebih banyak diberikan untuk memenangkan pertandingan, bukan hanya skill. Sepak bola modern juga harus mengenal kemampuan menyediakan taktik permainan yang tidak mudah untuk memenangkan pertandingan.\r\nPengaruh krisis ekonomi. Sebelum krisis 1997, rakyat Indonesia bisa menikmati hampir semua cabang olahraga seperti tenis, bulu tangkis, basket, balap dan cabang lainnya. Hal ini menyebabkan popularitas sepak bola (yang saat itu menjadi cabang paling populer) cenderung sejajar dengan cabang olahraga lainnya. Namun setelah krisis, perlahan lahan tontonan olahraga di Indonesia semakin berkurang sehingga popularitasnya tidak bertambah. Saat itu, sepak bola mendapatkan popularitas lebih daripada cabang lain, terlebih sejak Piala Dunia 1998 yang menurut pemirsa dikenang sebagai "Obat untuk melupakan krismon". Dengan demikian, popularitas sepak bola pun menjadi unggul telak atas cabang lainnya.\r\nTradisi sepak bola Indonesia yang sangat panjang, bahkan lebih panjang daripada tradisi sepak bola negara lain yang mengungguli kita, seperti Jepang. Tercatat Jepang pernah belajar pada Indonesia tentang bagaimana cara mengembangkan sepak bolanya, seperti Liga Indonesia tahun 80-90an yang dianggap sebagai cikal bakal J-League.\r\nCatatan manis sepak bola Indonesia (seperti yang telah dijelaskan sebelumnya) pada abad ke-20 yang masih bisa menjadi kenangan dan refrensi bagi harapan kemajuan sepak bola masa kini.\r\n\r\nObat Penyembuh Kekacauan Sepak Bola Indonesia\r\n\r\nUntungnya rakyat Indonesia masih bisa mensyukuri tim U-12 Indonesia yang berjasa membela negaranya di Danone Nations Cup, sebuah kompetisi sejenis Piala Dunia yang diadakan untuk anak seusia SD. Di kompetisi tersebut, Indonesia hampir selalu masuk ke 8 besar, bahkan 4 besar pada tahun 2006 dan mampu bersaing dengan tim Eropa walaupun mereka selalu tidak berkutik menghadapi wakil Amerika Latin. U-14 juga tampil menawan di Gothia Cup dengan prestasi paling tinggi terjadi pada tahun 2013 sebagai finalis.\r\n\r\nBagaimanakah dengan olahraga lain?\r\n\r\nPrestasi membanggakan olahraga Indonesia tidak hanya terjadi pada sepak bola saja, tetapi juga dalam cabang lain seperti bulu tangkis, tenis, angkat besi, bahkan di ajang balap mobil pun Indonesia sudah menunjukkan kehebatannya.\r\n\r\nBulu tangkis menjadi cabang olahraga yang paing membanggakan Indonesia karena meskipun saat ini prestasinya turun jauh, Indonesia memiliki riwayat prestasi terbaik dalam bidang bulu tangkis jika dibandingkan dengan olahraga lainnya. Ini dibuktikan dengan lebih seringnya atlet cabang tersebut meraih gelar juara di cabang bulu tangkis daripada di cabang lain.\r\n\r\nAngkat besi juga menjadi cabang langganan medali Olimpiade sejak tahun 2004 karena keberhasilannya meraih minimal 1 medali perak dalam 3 ajang terakhir. Tenis juga pernah menjadi andalan Indonesia pada Asian Games abad ke-20 dengan raihan 14 emas, terbanyak kedua setelah bulu tangkis. Di tinju, Indonesia pernah mengenal Ellyas Pical, Muhammad Rachman dan Chris John yang pernah meraih gelar tinju internasional. \r\n\r\nSementara di balap mobil, Rio Haryanto muncul sebagai calon pendatang baru pada balap mobil formula. Rio sendiri juga menunjukkan kelayakannya untuk menjadi pembalap F1 pertama Indonesia dengan keberhasilannya menjadi juara 2 kali pada balap GP3 tahun 2011, dan mulai naik kelas ke GP2 (setingkat dibawah F1) tahun berikutnya. Kemunculan Rio juga turut memunculkan calon pembalap masa depan Indonesia lainnya seperti Sean Gelael, Philo Paz Patric Armand dan Senna Noor.\r\n\r\nRenungan\r\n\r\nNah, bisa aku simpulkan, sepak bola Indonesia sedang terpuruk, tetapi kita masih punya kesempatan kecil untuk memperbaiki keterpurukan ini. Tetapi, selain sepak bola, Indonesia masih punya cabang lain yang lebih menjanjikan prestasinya.\r\n\r\nParagraf terakhir. Haruskah aku bertanya beberapa hal ini:\r\n\r\nPerlukah sepak bola terus difokuskan?\r\nPerlukah Indonesia merelakan bulu tangkis dan cabang lain demi sepak bola?\r\nPantaskah media massa tidak mendengarkan penggemar olahraga berprestasi seperti diatas demi mengejar keuntungan sendiri dari berita sepak bola yang sangat dominan?\r\nLebih suka mana? Untung keras tanpa mempedulikan penggemar olahraga, atau rela mendapatkan keuntungan kecil demi penggemar olahraga walaupun untuk satu kejuaraan saja?\r\nTidak pantaskah olahraga tertentu diajarkan sejak dini?\r\nMengapa pertandingan sepak bola Timnas Indonesia yang hanya berlabel "Friendly" atau "Uji Coba" tetap mau ditayangkan di TV Nasional, sementara cabang lain yang berlabel "Super Series" atau "Grand Prix" malah tidak ditayangkan?\r\nTidak sadarkah bahwa terlalu banyak penyiaran laga uji coba itu berbahaya? Timnas Indonesia U-19 pada tahun 2014 sudah menjadi korban karena banyaknya lawan yang bisa mempelajari dan membaca kekuatan serangan Timnas U-19 lewat siaran langsung yang terlalu banyak diunggah di internet.\r\nMasihkah kau belum puas akan banyaknya penggemar sepak bola, wahai media massa-ku? Tidak maukah kau menambah penggemar di cabang olahraga lain yang lebih menjanjikan?								', 'ISL.jpg', 'blog pribadi'),
(7, 'Unej Jember Larang 25 Lagu Daerah Dinyanyikan ', '02 Jun 2015', '18 Mei 2015', 1, 5, 'Sebanyak 25 lagu daerah dilarang untuk dinyanyikan dalam lomba paduan suara Piala Rektor, 18-23 Mei 2015.\r\n\r\nPembatasan ini sengaja diberlakukan karena ada tujuan positif. "Indonesia ini kaya raya. Tapi 25 lagu ini terlalu sering dinyanyikan dalam lomba. Kami berusahaan memperkenalkan kekayaan Indonesia," kata Rokhmad Hidayanto, salah satu Dewan Pembina Unit Kegiatan Mahasiswa Paduan Suara Mahasiswa Universitas Jember. Senin (18/5/2015).\r\n\r\nBeberapa lagu yang dilarang untuk dinyanyikan itu antara lain Gundul-Gundul Pacul, Jangkrik Genggong, Kicir-Kicir, Manuk Dadali, Beungong Jeumpa, Paris Barantai, Sik-Sik Batumanikam, dan Tanduk Majeng.\r\n\r\nGara-gara pelarangan itu, Rokhmad diprotes sejumlah guru. "Mereka menganggap kami membatasi orang untuk berkarya. Di media sosial banyak masukan. Padahal tujuan kami melarang bukan untuk membatasi orang," katanya.\r\n\r\nPeserta lomba paduan suara ini adalah siswa taman kanak-kanak hingga perguruan tinggi. Ada tujuh kelompok paduan suara TK, 11 kelompok paduan suara sekolah dasar, enam kelompok paduan suara sekolah menengah pertama, 13 kelompok paduan suara sekolah menengah atas, dan 11 kelompok paduan suara fakultas.\r\n\r\n"Kami wajibkan mereka untuk menyanyikan lagi bertema nasionalisme, kepemudaan, dan cinta tanah air, selain lagu daerah. Tapi khusus untuk TK, lagu wajibnya adalah Bintang Kejora," kata Rokhmad.', 'Indonesia.jpg', 'beritajatim.com'),
(8, 'A Thousand Years (Christina Perri) - Versi Spanyol', '10 Jun 2015', '2013', 1, 6, 'Prometer, nunca te olvidaré <br>\r\nComo vencer como amarte sin caer<br>\r\nPor ti, te miro y puedo decir<br>\r\nMis dudas se van<br>\r\nDe alguna manera ya no están<br>\r\nTe acercaste<br><br>\r\n\r\nPodría morir<br>\r\nY esperarte una vida<br>\r\nNo tengas miedo a sentir<br>\r\nTe amaría por mil años más<br>\r\nAmarte por mil años más<br><br>\r\n\r\nNo hay tiempo<br>\r\nBella está, siento<br>\r\nMe debo atrever<br>\r\nNada impedirá decirle<br>\r\nCuando esté frente a mi<br>\r\nPor siempre y te cuidaré<br>\r\nCada respiro guardaré<br>\r\nTe acercaste<br><br>\r\n\r\nPodría morir<br>\r\nY esperarte una vida<br>\r\nNo tengas miedo a sentir<br>\r\nTe amaría por mil años más<br>\r\nAmarte por mil años más<br><br>\r\n\r\nSiempre supe que te encontraría<br>\r\nNo hay tiempo para decir<br>\r\nQue te amaría por mil años más<br>\r\nAmarte por mil años más<br><br>\r\n\r\nTe acercaste<br>\r\nTe acercaste<br><br>\r\n\r\nPodría morir<br>\r\nY esperarte una vida<br>\r\nNo tengas miedo a sentir<br>\r\nTe amaría por mil años más<br>\r\nAmarte por mil años más<br><br>\r\n\r\nSiempre supe que te encontraría<br>\r\nNo hay tiempo para decir<br>\r\nQue te amaría por mil años más<br>\r\nAmarte por mil años más<br><br>\r\n\r\n<iframe width="420" height="315"\r\nsrc="https://www.youtube.com/watch?v=awNlud0Wdjk">\r\n</iframe>', 'kkb.jpg', 'Kevin, Karla y la Banda'),
(9, 'TNI AD Sabet 30 Medali Emas Lomba Menembak di Australia', '10 Jun 2015', 'Senin, 25 Mei 2015', 1, 8, 'Sebanyak 14 anggota Tentara Nasional Indonesia Angkatan Darat (TNI AD) memboyong puluhan medali emas dalam ajang lomba tembak Australian Army Skills at Arms Meeting (AASAM) 2015 di Australia.<br><br>\r\n\r\nPantauan Warta Kota, para peserta tiba di Bandara Soekarno-Hatta melalui ruang VIP Terminal 1, disambut oleh Panglima Komando Cadangan Strategis Angkatan Darat, Letnan Jenderal Mulyono, Senin (25/5) petang pukul 17.00.\r\nMulyono mengatakan, 30 medali emas yang disabet Indonesia merupakan sebuah prestasi membanggakan.<br><br>\r\n\r\n"Kami berhasil mendapatkan 30 medali emas, 16 medali perak, dan 10 medali perunggu. Perolehan medali emas ini jelas membanggakan karena kami berhasil mengalahkan perolehan medali emas negara-negara kompetitor lain," kata Mulyono.\r\nMulyono memaparkan, negara lain seperti Australia, Amerika Serikat, dan Inggris tidak membawa medali emas lebih dari lima keping.<br><br>\r\n\r\n"Australia hanya lima medali emas, sementara Amerika Serikat hanya mampu membawa pulang empat. Inggris hanya tiga," katanya lagi.\r\nAdapun materi yang diperlombakan adalah kategori perorangan dan tim, mencakup penggunan pistol, senapan, senapan otomatis (SO), gabungan senapan dan SO, serta materi sniper atau penempak jitu.', 'army.jpg', 'http://wartakota.tribunnews.com/'),
(10, 'Lewis Hamilton Juara, Patahkan Mimpi Nico Rosberg', '11 Jun 2015', '8 Juni 2015', 1, 2, 'Hasil F1 2015 GP Kanada mengembalikan Lewis Hamilton sebagai kampiun. Sang juara bertahan mematahkan mimpi Nico Rosberg untuk mencetak hattrick kemenangan beruntun. Hamilton yang nyaman sejak memulai balapan dari pole position, kini memperlebar jarak dari Rosberg di klasemen F1 2015. Sementara, Sebastian Vettel hanya finish di urutan kelima.<br><br>\r\n\r\nLewis Hamilton yang pada sesi kualifikasi mencatatkan pole keenam dari tujuh seri balapan, tidak mendapatkan halangan berarti di Circuit Gilles Villeneuve. Ia memperoleh waktu 1 jam 31 menit dan 53,145 detik. Sepanjang race, Hamilton tidak pernah berjarak kurang dari satu detik dari rival terdekatnya, Nico Rosberg. Kala balapan ditutup, Rosberg hanya bisa menyentuh selisih 2,2 detik dari sang rekan satu tim.<br><br>\r\n\r\nVallteri Bottas, pembalap Williams yang memulai balapan dari urutan keempat, sukses menjadi pembalap ketiga di podium.Namun selisihnya dari Hamilton terlalu luar biasa, 40,6 detik. Ini menjadi fakta tak terbantahkan jika Mercedes musim ini masih terlalu dominan dibandingkan yang lain. Satu-satunya pembalap yang bisa bersaing dengan tim Jerman ini, Sebastian Vettel, hanya mampu finish di urutan kelima.<br><br>\r\n\r\nAkan halnya para pembalap McLaren: Jenson Button dan Fernando Alonso lagi-lagi gagal, bahkan tak mampu merampungkan balapan. Hasil yang ironis, ketika Ferrari dan Wiliams berpacu untuk urutan kedua, McLaren semakin tenggelam di dasar klasemen konstruktor.<br><br>\r\n\r\nBerikut ini hasil Grand Prix Kanada pada Senin, 8 Juni 2015.<br><br>\r\n\r\n1. Lewis Hamilton    Mercedes-Mercedes    70 laps    1hr 31m 53.145s<br>\r\n2. Nico Rosberg    Mercedes-Mercedes    +02.2s<br>\r\n3. Valtteri Bottas    Williams-Mercedes    +40.6s<br>\r\n4. Kimi Raikkonen    Ferrari-Ferrari    +45.6s<br>\r\n5. Sebastian Vettel     Ferrari-Ferrari    +49.9s<br>\r\n6. Felipe Massa    Williams-Mercedes    +56.3s<br>\r\n7. Pastor Maldonado    Lotus-Mercedes    +1m 06.6s<br>\r\n8. Nico Hulkenberg    Force India-Mercedes    +1 lap<br>\r\n9. Daniil Kvyat    Red Bull-Renault    +1 lap<br>\r\n10. Romain Grosjean    Lotus-Mercedes    +1 lap<br>\r\n11. Sergio Perez    Force India-Mercedes    +1 lap<br>\r\n12. Carlos Sainz Jr    Toro Rosso-Renault    +1 lap<br>\r\n13. Daniel Ricciardo    Red Bull-Renault    +1 lap<br>\r\n14. Marcus Ericsson    Sauber-Ferrari    +1 lap<br>\r\n15. Max Verstappen Toro Rosso-Renault    +1 lap<br>\r\n16. Felipe Nasr    Sauber-Ferrari    +1 lap<br>\r\n17. Will Stevens    Manor-Ferrari    +4 laps<br>\r\nRtd Roberto Merhi     Manor-Ferrari    59 lap<br>\r\nRtd Jenson Button    McLaren-Honda    56 lap<br>\r\nRtd Fernando Alonso    McLaren-Honda    46 lap<br>', 'juaraKanada.jpg', 'http://sidomi.com/'),
(11, 'Penyanyi Asal Indonesia ini Dapat 4 Yes Menyanyi lagu Italia Di Ajang Switzerland Got Talent', '12 Jun 2015', '21 Mei 2015', 1, 8, 'Luar biasa ternyata bakat-bakat asal indonesia juga bisa berhasil di kancah pencarian bakat internasional. Salah satunya penyanyi asal Indonesia berikut ini, dia menyanyikan lagu berbahasa Italia di ajang Switzerland Got Talent. Dan Mendapat Pujian Oleh Jurinya.<br><br>\r\n\r\nWanita bernama Eirene Dili Astris berumur 19 tahun ini dengan bangga menyebutkan bahwa dirinya adalah orang Indonesia, dan saat ini sedang menjalani kuliah di salah satu perguruan hotel di Swiss.<br><br>\r\n\r\nWanita yang awalnya nervous ini kemudian maju dan memukau para juri dengan menyanyikan lagu Italia. Sejak kecil suka menyanyi, mengikuti jejak ibunya yang seorang penyanyi.<br><br>\r\n\r\nSuaranya terdengar bagus sekali dan emosional, dia mendapat pujian bahkan empat YES dari para Juri. Para juri kagum dengan bagaimana Eirene bisa menyanyikan lagu, dengan bahasa yang bukan bahasa aslinya, dengan sangat baik.<br><br>\r\n\r\nSelamat ya Eirene semoga sukses di ajang yang kamu ikuti. Mari saksikan penampilannya yang memukau hati dengan suara emasnya berikut ini<br><br>\r\n\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" data-thumbnail-src="https://i.ytimg.com/vi/7WsSjK0XqQI/0.jpg" frameborder="0" height="266" src="https://www.youtube.com/embed/7WsSjK0XqQI?feature=player_embedded" width="320"></iframe>', 'eirene.jpg', 'hotmagz.com'),
(12, 'Kata Siapa Main Musik Metal Nggak Bisa Pakai Banjo ?', '12 Jun 2015', '30 Mei 2015', 3, 7, 'YouTube memang telah menjadi sarana berekspresi semua orang di berbagai belahan dunia dalam bentuk video. Selain videoklip , konser, tutorial, dan lainnya tak jarang kita selalu cari hiburan di YouTube.<br><br>\r\n\r\nBaru-baru ini seorang pemuda yang nggak diketahui asalnya bernama Rob Scallon sukses membuat orang seluruh dunia meliriknya karena berhasil cover lagu hits band metal Slayer berjudul Raining Blood dan Angel of Death menggunakan banjo yang notabene biasa digunakan untuk musik country.<br><br>\r\n\r\nLagu thrash metal yang ada dalam album Reign Of Blood ini merupakan salah satu lagu metal yang sulit dimainkan karena kompsisi progresi kordnya rumit disertai kecepatan maksimal. Rob Scallon sukses memainkan lagu itu hanya dengan banjo bersenar empat! Sebelum lagu Raining Blood, Rob sukses mencetak angka 1 juta viewers untuk cover lagu Slayer yang lain berjudul War Ensemble menggunakan ukulele empat senar. <br><br>\r\n\r\n<iframe allowfullscreen="" class="YOUTUBE-iframe-video" d frameborder="0" height="266" src="https://www.youtube.com/watch?v=nZ2ucr74YNk?feature=player_embedded" width="320"></iframe>', 'banjoMetal.JPG', 'http://belumtau.com/'),
(13, 'European Games? Apa itu?', '12 Jun 2015', '12 Juni 2015', 1, 3, 'European Games merupakan pesta olahraga yang diadakan dengan format sama seperti olimpiade pada umumnya. Pesta ini akan diadakan tanggal 12 Juni sampai 28 Juni 2015 di Baku, Azerbaijan sebagai musim pertama. Pesta olahraga ini diprakarsai oleh European Olympic Committee yang meluncurkan General Assembly-nya di ROma pada bulan Desember 2012. Diperkirakan ada 50 negara Eropa yang mengikutsertakan 6000 atletnya pada kejuaraan tersebut<br><br>\r\n\r\nDi Baku, akan ada 20 cabang olahraga yang dipertandingkan, seperti karate, basketball 3x3, sepak bola pantai, sambo (gulat Rusia), akuatik, panahan, atletik, badminton, bola voli, tinju, canoe, bersepeda, anggar, senam, menembak, tenis meja, taekwondo, triathlon dan gulat. <br><br>\r\n\r\n', 'EG2015.png', 'bbc.com'),
(14, 'Aktor Legendaris Dracula dan `LOTR`, Christopher Lee Meninggal Dunia', '12 Jun 2015', '11 Juni 2015', 1, 4, 'Dunia perfilman Hollywood tengah berduka. Aktor legendaris asal Inggris Raya Christopher Lee meninggal di usia 93 tahun.<br><br>\r\n\r\nSeperti dilaporkan Reuters, Lee meninggal pada Minggu (7/6/2015) di rumah sakit tempat ia menjalani operasi karena masalah pernapasan. Agen Lee menyatakan keluarga tidak ingin memberikan komentar.<br><br>\r\n\r\nSir Christopher Carandini Lee terkenal berkat perannya sebagai Count Dracula dalam beberapa film, antara lain `Dracula: The Prince of Darkness`, dan `Dracula Has Risen from The Grave`, serta `One More Time`, lalu `The Satanic Rites of Dracula`.<br><br>\r\n\r\nSelain itu, dia juga terlibat dalam film seri `The Lord of The Rings` sebagai penyihir putih Saruman. Lee belakangan ini juga bermain dalam `Star Wars` sebagai Count Dooku/Darth Tyranus.', 'CLee.jpg', 'http://entertainment.harianterbit.com/'),
(15, 'Liputan Singkat Pembukaan European Games 2015', '13 Jun 2015', '12 Juni 2015', 1, 3, 'Pembukaan European Games pertama di Baku, Azerbaijan 2015 berlangsung meriah ketika Olympic Stadium disulap menjadi panggung seni yang memukau para penonton. Upacara ini sendiri dimulai dengan nyanyian mugham dari Alim Qasimov yang berbunyi:<br><br>\r\n\r\nWe have space in our hearts for all our guests, <br>\r\nWe will sing 1001 songs for all those who come to this flame. <br><br>\r\n\r\n(Kita memiliki ruang di hati kita untuk semua tamu kita,<br>\r\nkita akan menyanyikan 1001 lagu untuk semua yang datang dalam nyala ini)<br><br>\r\n\r\nPesan sambutan tersebut diiringi kembang api dan aksi ratusan penari yang memenuhi panggung utama. Kemudian ditampilkanlah galeri perjalanan obor yang akan dinyalakan oleh Ilham Zakiyev, sang juara paralympic judo.<br><br>\r\n\r\nLalu ditampilkanlah puisi nasional Nizami dan tarian dari pasangan boneka Leyli dan Majnun yang merepresentasikan matahari dan bulan, unsur keseimbangan hidup manusia. <br><br>\r\n\r\nMalam pun semakin larut, seketika itu juga, peserta dari 50 negara peserta pun diperkenalkan, disusul dengan penampilan dari Lady Gaga. Serta diikuti dengan penyerahan bendera Komite Olimpiade Eropa (EOC) oleh para pemenang medali emas Olimpiade kepada Azerbaijani National Guard.<br><br>\r\n\r\nAraca dilanjutkan dengan Origins: Earth and Origins: Fire yang menceritakan sejarah pentingnya api bagi masyarakat Azerbaijan, serta ditutup dengan tarian tradisional Azerbaijan, Yalli.', 'EG2015OP.jpg', 'http://www.baku2015.com/'),
(16, 'Porsche Juara Le Mans, Finish 1-2', '15 Jun 2015', '14 Juni 2015', 1, 2, 'Porsche tampil sebagai juara ajang balap ketahanan 24 jam Le Mans, Minggu (14/6), yang merupakan kemenangan pertama sejak 1998. Sukses Porsche 919 Hybrid bernomor 19 itu berkat penampilan apik trio pebalap Nico Hulkenberg, Nick Tandy dan Earl Bamber, yang sekaligus mencatat finish 1-2 untuk Porsche. <br><br>\r\n\r\nUntuk posisi runner-up adalah Porsche bernomor 17 yang dikemudikan Mark Webber, Brendon Hartley dan T. Bernhard. Kedua Porsche itu, seperti dilaporkan Autosport, menyelesaikan balapan di tengah lintasan basah yang diguyur hujan. Keberhasilan finish 1-2 bagi Porsche tak lepas dari masalah teknis yang dialami rival berat mereka, yaitu dua mobil Audi bernomor 8 dan 9, yang masing-masing dikemudikan oleh M.Fassler, A.Lotterer, dan B.Treluyer, serta L.di Grassi, L.Duval, dan O.Jarvis. <br><br>\r\n\r\nSukses ini juga menjadi prestasi tersendiri bagi Porsche, karena pabrikan Jerman ini sudah absen di Le Mans sejak 2008 silam dan baru terjun kembali tahun ini. Sedangkan mobil Porsche ketiga yang bernomor 18 dan dikemudikan oleh R.Dumas, N.Jani, dan M.Lieb finish di posisi kelima, meski mereka mengawali lomba dari posisi terdepan. <br><br>\r\n\r\nDi posisi keenam dan delapan dihuni duo Toyota, yang bernomor 1 dan 2. Sementara urutan ketujuh diisi oleh Audi. <br><br>\r\n\r\nHasil 24 Heures du Mans 2015:<br><br>\r\n\r\nPos    Class    Team                 Car            Time/Gap<br><br>\r\n1    LMP1    Porsche Team            Porsche        24:00:42.784<br><br>\r\n2    LMP1    Porsche Team            Porsche        1 Lap<br><br>\r\n3    LMP1    Audi Sport Team Joest   Audi           2 Laps<br><br>\r\n4    LMP1    Audi Sport Team Joest   Audi           3 Laps<br><br>\r\n5    LMP1    Porsche Team            Porsche        4 Laps<br><br>\r\n6    LMP1    Toyota Racing           Toyota         8 Laps<br><br>\r\n7    LMP1    Audi Sport Team Joest   Audi           8 Laps<br><br>\r\n8    LMP1    Toyota Racing           Toyota         9 Laps<br><br>\r\n9    LMP2    KCMG                    ORECA/Nissan   37 Laps<br><br>\r\n10   LMP2    JOTA                    Gibson/Nissan    37 Laps<br><br>', '919.jpg', 'rajamobil.com dan dapurpacu.com'),
(17, 'Stevannet Berencana Menambah Fitur Baru', '25 Jul 2016', '26-07-2016', 1, 10, 'Meskipun baru dirilis<b>, Stevannet </b>akan memasuki percobaan lanjutan setelah adanya penyelesaian. Selain itu, fitur juga akan ditambah seperti forum diskusi.<div><br></div><div>Rencananya, aplikasi ini akan memasuki tahap tes massal sebelum penambahan fitur secepat mungkin tahun 2016 akhir. Namun <i>launching </i>fitur baru baru akan dilakukan pada tanggal 19 Januari 2017</div>', 'collectTitle.jpg', 'diri'),
(18, 'Serangan Teror Kembali Guncang Jerman', '26 Jul 2016', '25 Juli 2016', 1, 4, '<strong style="margin: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; line-height: 24px;">ANSBACH</strong><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">&nbsp;- Sebuah bar di Ansbach, Bavaria, Jerman, dibom ketika festival musik sedang berlangsung. Insiden ini membuat Jerman kembali diguncang serangan teror, setelah sebelumnya penembakan massal melanda mal di Munich yang menewaskan 10 orang, termasuk pelaku.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Ledakan bom di bar tersebut menewaskan satu orang yang diyakini sebagai pelaku pengeboman.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Ledakan bom juga melukai 12 orang. Pihak berwenang di Ansbach yakin, ledakan itu berasal dari perangkat improvisasi atau bom rakitan.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Polisi telah mengepung daerah sekitar restoran dan sedang melakukan penyelidikan di lokasi kejadian. â€Ledakan di pusat Kota Ansbach bukan ledakan gas, tapi disebabkan oleh alat peledak,â€ kata Wali Kota Ansbach, Carda Seidel, seperti dikutip&nbsp;</span><em style="margin: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; line-height: 24px;">Suddeutsche Zeitung</em><span style="margin: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; line-height: 24px;">, Senin (25/7/2016).</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Seidel melanjutkan, kemungkinan akan adanya ledakan lainnya tidak bisa dikesampingkan.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Pelaku pengeboman diketahui pria asal Suriah berusia 27 tahun. Pelaku masuk Jerman dua tahun lalu sebagai pencari suaka, namun permohonan suaka ditolak oleh otoritas Bavaria tahun lalu.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Meski permohonan suaka ditolak, pria Suriah itu diizinkan tinggal di Jerman untuk sementara, karena kondisi Suriah masih dilanda perang.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><span style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;">Polisi belum mengetahui apakah pelaku pengeboman di bar itu terkait kelompok radikal atau tidak. Penyelidikan saat ini difokuskan pada komunikasi dari pelaku.</span><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><br style="color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 24px;"><div style="margin: 0px; padding: 0px; border: 0px; font-size: 16px; vertical-align: baseline; color: rgb(37, 37, 37); font-family: Arial, Helvetica, sans-serif; line-height: 24px;">Pihak kepolisian mengatakan, pelaku semula selamat dari ledakan bom namun meninggal akibat luka yang parah.&lt;/div&gt;</div>', 'bar-dibom-serangan-teror-kembali-guncang-jerman-uKO.jpg', 'http://international.sindonews.com/');
INSERT INTO `articles` (`id`, `judul`, `tanggal_muat`, `tanggal_terjadi`, `id_jenis`, `id_topik`, `isi`, `gambar`, `sumber`) VALUES
(19, 'Pokemon Go diunduh 30 juta kali di Amerika Serikat', '26 Jul 2016', '25 Juli 2016', 1, 4, '<div><span style="color: rgb(64, 64, 64); font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; text-align: center;">Satu berita utama per minggu setelah aplikasi game tersebut pertama kali dikeluarkan di Amerika Serikat melaporkan terdapat 15 juta download di App Store milik Apple dan Google Play.</span></div><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">Tetapi angka tersebut tidak berasal dari toko app.</p><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">Bahkan ketika Apple memastikan pada hari Jumat (22 Juli) bahwa Pokemon Go menerobos catatan App Store terkait pengunduhan pada minggu pertama dikeluarkannya game tersebut, mereka tidak memberikan angkanya.</p><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">"Akan lebih baik jika Apple dan Google memberikan angka-angka ini, tetapi sayangnya mereka tidak melakukan ini," kata Abhinav Agrawal dari SurveyMonkey Intelligence.</p><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">Perusahaannya adalah salah satu yang berusaha mengetahui seberapa banyak orang yang mengunduh Pokemon Go.</p><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">Tetapi SurveyMonkey Intelligence cukup yakin untuk mengeluar data, dan angka terbaru mereka terkait Pokemon Go adalah lebih dari 30 juta download di AS.</p><p style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 1rem; line-height: 1.375; margin: 18px 0px 0px; padding: 0px; vertical-align: baseline;">Meskipun demikian media harus berhati-hati dalam melaporkan angka-angka ini sebagai fakta.</p>', 'trendingTitle.JPG', 'http://www.bbc.com/'),
(20, 'Perancis Rayakan Hari Bastille', '26 Jul 2016', '14 Juli 2016', 1, 11, '<div>Perancis sedang merayakan Hari Bastille, hari libur untuk memperingati penyerbuan benteng Bastille di Paris pada tanggal 14 Juli tahun 1789, yang menandai awal dari Revolusi Perancis.</div><div>Presiden Prancis Francois Hollande dan pejabat lainnya menghadiri parade militer di sepanjang Champ Elysees, Senin pagi (14/7).</div><div><br></div><div>Ratusan ribu penonton berjajar di boulevard Paris untuk menonton acara tersebut.</div><div><br></div><div>Hari Bastille adalah hari libur terbesar di Prancis dan perayaan sedang diadakan di seluruh negeri itu.</div><div><br></div><div>Pertunjukan kembang api yang akan dilaksanakan Senin malam (14/7) di Menara Eiffel akan didedikasikan untuk tema perang dan perdamaian.</div>', 'euro-france-2016.png', 'http://www.voaindonesia.com/'),
(21, 'Indonesia juara umum paduan suara internasional', '27 Jul 2016', '10 Juli 2016', 1, 8, '<p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;"><b>Paduan suara anak Indonesia keluar sebagai juara umum dalam kompetisi paduan suara internasional, Claudio Monteverdi International Choral Festival and Competition, yang berlangsung di Venesia, Italia, 7-10 Juli.</b></span></font></p><p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;">The Resonanz Childrens Choir, TRCC, yang dipimpin oleh konduktor Devi Fransisca ini juga meraih juara pertama untuk kategori Childrenâ€™s and Youth Choir dengan membawakan empat lagu, yaitu Der Wassermann karya Robert Schumann, Salve Regina karya Javier Busto, serta dua lagu karya Fero Aldiansya yaitu 137 Hip Street dan Bungong Jeumpa.</span></font></p><p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;">Avip Priatna, pimpinan sekolah musik yang menaungi TRCC mengatakan kemenangan ini adalah yang kelima di tingkat internasional dan dari sisi umur, peserta yang sekarang rata-rata paling muda.</span></font></p><p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;">Avip juga mengatakan, lagu Yamko Rambe Yamko dipilih "sebagai representatif lagu Indonesia dan kita percaya aransemen dan koreografinya dapat dijadikan andalan melawan peserta lainnya."</span></font></p><p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;">Sebuah unggahan yang memuat video penampilan anak-anak Indonesia ini ramai dibicarakan di Facebook dan telah dibagikan lebih dari 42.000 kali.</span></font></p><p class="story-body__introduction" style="border: 0px; font-stretch: inherit; margin: 28px 0px 0px; padding: 0px; vertical-align: baseline;"><font color="#404040" face="Helmet, Freesans, Helvetica, Arial, sans-serif"><span style="font-size: 16px; line-height: 22px;">Setelah pengumuman kemenangan, anak-anak paduan suara yang berusia 9-17 tahun itu kemudian terlihat melompat-lompat dan berteriak, "Indonesia!".</span></font></p><figure class="media-landscape has-caption full-width" style="border: 0px; color: rgb(64, 64, 64); font-stretch: inherit; font-family: Helmet, Freesans, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 16px; margin: 24px -24.6406px 0px 0px; padding: 0px; vertical-align: baseline; clear: both; background-color: rgb(17, 17, 17);"><span class="image-and-copyright-container" style="border: 0px; color: inherit; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: inherit; font-weight: inherit; letter-spacing: inherit; line-height: inherit; margin: 0px; padding: 0px; vertical-align: baseline; display: block; position: relative;"></span></figure>', '160710151724_indonesian_children_choir_640x360_avippriyatna_nocredit.jpg', 'http://www.bbc.com/'),
(22, 'Mahasiswa Indonesia juara dunia balap mobil hemat energi', '27 Jul 2016', '4 Juli 2016', 1, 8, '<div><b>Tim mahasiswa Indonesia dari Universitas Pendidikan Indonesia, Bandung menjadi juara dunia dalam lomba balap mobil hemat energi buatan mahasiswa yang pertama kali diselenggarakan di London, Shell Eco Marathon Drivers World Championship.</b></div><div><br></div><div>Tim mahasiswa yang menamakan diri Bumi Siliwangi mulai dari posisi kedua di belakang tim Prancis dari delapan tim yang turun dalam final lomba balap mobil Urban Concept atau konsep perkotaan dengan tiga jenis bahan bakar, bensin, disel dan listrik, di Olympic Park, London, Minggu (03/07).</div><div><br></div><div>Manajer Shell Eco Marathon, Danny Van Otterdyk, memuji kalkulasi tim Bumi Siliwangi yang membawa mereka menjadi juara dengan mobil listrik.</div><div><br></div><div>"Cara mereka menghitung energi sangat baik dan mereka pantas menang. Saya senang mereka bisa menang dalam acara perdana lomba balap mobil buatan mahasiswa ini," kata Van Otterdyk kepada wartawan BBC Indonesia, Endang Nurdin.</div><div><br></div><div>Saat lomba dimulai, mobil listrik Bumi Siliwangi, sempat turun di tempat keempat namun menyalip ke tempat teratas dalam tiga putaran lomba sejauh masing-masing sekitar 2,25 kilometer, dengan elevasi naik turun antara tiga sampai 12 meter.</div><div><br></div><div>Posisi kedua dalam lomba balap pertama ini diduduki tim dari Prancis ISEN Toulon yang juga menggunakan baterai listrik seperti UPI Bandung, dan yang ketiga tim Mater Dei Supermileage, dari Amerika Serikat yang menggunakan bahan bakar bensin.</div><div><br></div><div>Secara keseluruhan ada tiga tim mahasiswa yang mewakili Indonesia dalam ajang ini, termasuk dari Universitas Indonesia dengan bahan bakar bensin dan Institut Teknologi Sepuluh November Surabaya dengan diesel, namun hanya Bumi Siliwangi yang lolos ke putaran final.</div><div><br></div><div>Lebih dari 200 tim mahasiswa dari 29 negara ikut serta dalam lomba ini setelah menghabiskan waktu satu tahun terkahir untuk merancang, membangun dan menguji mobil hemat energi mereka.</div><div><br></div><div>Tim yang ikut dalam kejuaraan dunia pertama lomba mobil buatan mahasiswa ini dipilih dari juara lomba di kawasan Asia, Eropa dan Amerika Serikat.</div><div>Amin Sobirin, manajer Bumi Siliwangi mengatakan dari awal timnya mengejar kecepatan dan melatih pengemudi melintas naik turun dengan mobil listrik di seputar Bandung.</div><div><br></div><div>Ramdani, pengemudi balap Bumi Siliwangi, mengatakan sepanjang balap timnya terus berkomunikasi untuk memperlambat atau mempercepat mobil guna memastikan tenaga listrik yang disediakan dapat digunakan sampai garis finis.</div><div><br></div><div>Tim UPI, Bandung ini meraih juara dua dalam lomba Shell Asia Maret lalu di Manila dengan kecepatan 75 kilometer per KWH (kilowatt hour) dan dalam balap di London ini mereka meraih sekitar 80 kilometer per KWH.</div><div><br></div><div>Hadiah lomba termasuk diundang untuk menghabiskan sepekan bersama Scuderia Ferrari di Maranello, Italia.</div><div><br></div><div>Mereka akan bertemu dengan tim Ferrari dan menerima pelatihan pribadi serta nasihat dari para teknisi mengenai cara untuk meningkatkan performa kendaraan mereka pada Shell Eco-marathon 2017.</div><div><br></div><div>Sriyono, dosen pendidikan teknik mesin UPI Bandung mengatakan sekembalinya ke Indonesia mereka akan langsung kembali ke laboratorium untuk melakukan riset dan meningkatkan prestasi dari kendaraan yang ada saat ini.</div><div><br></div><div>"Kami juga akan mencoba ikut berkompetisi dalam lomba sejenis termasuk ikut dalam kontes nasional mobil hemat energi," kata Sriyono.</div><div><br></div><div>Sementara itu Duta Besar Indonesia untuk Inggris, Rizal Sukma, mengatakan prestasi UPI menunjukkan para mahasiswa Indonesia dapat bersaing di tingkat dunia dari sisi teknologi dan inovasi khususnya dalam upaya melakukan langkah penghematan energi.</div>', 'indonesia_drivers_world_championship.jpg', 'http://www.bbc.com/'),
(23, 'Olimpiade 2016', '27 Jul 2016', '5 Agustus 2016', 2, 3, '<font color="#252525" face="sans-serif"><span style="font-size: 14px; line-height: 22.4px;"><b>Olimpiade Musim Panas 2016</b> dan secara umum disebut Olimpiade Rio 2016, adalah ajang olahraga internasional utama yang akan diselenggarakan di Rio de Janeiro, Brasil, dari tanggal 5 sampai 21 Agustus 2016.&nbsp;</span></font><div><font color="#252525" face="sans-serif"><span style="font-size: 14px; line-height: 22.4px;"><br></span></font></div><div><font color="#252525" face="sans-serif"><span style="font-size: 14px; line-height: 22.4px;">Diperkirakan lebih dari 10.500 atlet dari 206 Komite Olimpiade Nasional (KON), termasuk dari Kosovo dan Sudan Selatan yang ikut serta untuk pertama kalinya, akan berpartisipasi dalam ajang ini.[2] Dengan 306 keping medali, ajang ini akan mempertandingkan 28 cabang olahraga Olimpiade â€” termasuk rugbi sevens dan golf, yang ditambahkan oleh Komite Olimpiade Internasional (KOI) pada tahun 2009.&nbsp;</span></font></div><div><font color="#252525" face="sans-serif"><span style="font-size: 14px; line-height: 22.4px;"><br></span></font></div><div><font color="#252525" face="sans-serif"><span style="font-size: 14px; line-height: 22.4px;">Ajang olahraga ini akan berlangsung di 33 gelanggang olahraga di kota tuan rumah serta di 5 gelanggang olahraga di kota SÃ£o Paulo, Belo Horizonte, Salvador, BrasÃ­lia, ibu kota negara, dan Manaus</span></font></div>', 'indonesia_drivers_world_championship.jpg', 'situs resmi');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `isi` text,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `isi`, `tanggal`) VALUES
(7, 'Wow keren', '25 May 2015'),
(8, 'Anti Mainstream.. yey		', '25 May 2015'),
(9, 'heeeeh', '26 May 2015');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `pembuat` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forumsisi`
--

CREATE TABLE IF NOT EXISTS `forumsisi` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `idForum` int(11) NOT NULL,
  `pembuat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL,
  `namaGaleri` varchar(30) NOT NULL,
  `id_topik` int(11) NOT NULL,
  `gambarSampul` varchar(30) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `namaGaleri`, `id_topik`, `gambarSampul`, `tanggal`, `deskripsi`) VALUES
(1, 'Para Legenda', 11, 'JPGR.JPG', '05 Aug 2015', 'Dengan ciri khasnya, para musisi legendaris ini tidak boleh dilupakan.'),
(2, 'Seperti Apakah Tampang Dunia P', 4, 'Australasia.jpg', '27 Jul 2016', 'Tampang dari satelit');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `noGambar` int(11) NOT NULL,
  `galeri` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `noUrutGambar` int(11) NOT NULL,
  `tanggalUnggah` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`noGambar`, `galeri`, `gambar`, `nama`, `noUrutGambar`, `tanggalUnggah`, `deskripsi`) VALUES
(2, 1, 'abba.jpg', 'ABBA', 2, '05 Aug 2015', 'Terdiri dari Benny Andersson, BjÃ¶rn Ulvaeus, Agnetha FÃ¤ltskog, dan Anni-Frid Lyngstad. Sebelum menjadi ABBA, FÃ¤ltskog dan Ulvaeus telah menikah dan kemudian setelah menjadi satu kelompok, Lyngstad dan Andersson juga menikah. Namun kedua pasangan ini kemudian bercerai. ABBA adalah akronim dari huruf pertama keempat anggotanya.\r\n\r\nPrestasinya yang paling terkenal adalah saat mereka berhasil menjuarai Kontes Lagu Eurovision tahun 1974, dengan lagunya yang berjudul "Waterloo". Lagu tersebut juga menjadi lagu favorit pemirsa saat diluncurkannya album "Congratulations". Selain itu ABBA juga membuat film berjudul "ABBA:The Movie" pada tahun 1977.'),
(3, 1, 'queen.jpg', 'Queen', 3, '26 Jul 2016', 'Queen adalah grup band rock dari Britania Raya yang dibentuk tahun 1970 di London. Semula terdiri dari Freddie Mercury (vokal, piano), Brian May (gitar, vokal). Karya awal Queen dipengaruhi oleh rock progresif, hard rock dan heavy metal, namun perlahan-lahan berubah menuju musik yang lebih konvensional dan bersahabat dengan pendengar radio, mencakup gaya musik yang lebih beragam ke dalam musik mereka.\r\n\r\nQueen sempat Vakum pada 1990-an dikarenakan Kematian Freddie Mercury pada 24 November 1991 akibat Penyakit AIDS,Meskipun begitu Queen sempat merilis album Studio berjudul Made In Heaven pada 1995.'),
(4, 1, 'unduhan.jpg', 'The Beach Boys', 4, '27 Jul 2016', 'The Beach Boys adalah sebuah grup musik rock Amerika Serikat yang terbentuk pada tahun 1961 di kota Hawthorne, California. Kelompok ini awalnya beranggotakan saudara Brian, Dennis dan Carl Wilson, sepupu mereka Mike Love, dan sahabat mereka Al Jardine. Di bawah manajemen tua kepada saudara Wilson, yaitu Murry, The Beach Boys bergabung Capitol Records pada tahun 1962. Rekaman musik pertama grup musik ini disambut hangat di seluruh Amerika Serikat karena harmoni vokalnya yang rapat dan seni kata yang mencerminkan budaya muda-mudi California Selatan yang menggemari luncur air, kereta dan asmara. Menjelang pertengahan 1960-an, arah musik kelompok ini didominasi oleh cita-cita daya cipta dan kemampuan menulis lagu si kepala Brian Wilson. Album Pet Sounds dan singel "Good Vibrations" (keduanya dirilis pada tahun 1966) yang kebanyakan ditulis oleh Brian menampilkan irama yang kompleks, rumit dan berlapis-lapis.'),
(5, 1, 'ej.jpg', 'Elton John', 5, '27 Jul 2016', 'Sir Elton Hercules John (lahir 25 Maret 1947; umur 69 tahun) merupakan penyanyi berkebangsaan Inggris. Ia terkenal sebagai pelantun lagu Candle In The Wind yang populer di pertengahan tahun 70-an. Kalau aslinya lagu itu dipersembahkan untuk Norma Jean alias Marilyn Monroe, maka Elton John mengubah lagu itu menjadi Candle In The Wind 1997 untuk dipersembahkan pada Mawar Inggris alias Putri Diana yang tewas pada 31 Agustus 1997. Lagu ini dinyanyikannya pada upacara pelepasan jenazah Putri Diana di Westminster Abbey pada 6 September 1997. Pada tahun 2005, ia menjadi suami (partner sipil) dari pacarnya, David Furnish.'),
(6, 2, 'Australasia.jpg', 'Australasia', 1, '27 Jul 2016', 'Asia Pasifik dan Australia'),
(7, 2, 'Euro-Africa-Middle East.jpg', 'Eropa dan Afrika', 2, '27 Jul 2016', 'Eropa dan Afrika'),
(8, 1, 'aqua.jpg', 'Aqua', 1, '27 Jul 2016', 'Eurodance Legend');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Jokes'),
(4, 'Opinions');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE IF NOT EXISTS `news_comments` (
`id` int(11) NOT NULL,
  `idBerita` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_comments`
--

INSERT INTO `news_comments` (`id`, `idBerita`, `nama`, `tanggal`, `isi`) VALUES
(4, 2, 'user1', '12 Jun 2015', 'Malmo 2016 kah?');

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE IF NOT EXISTS `opinions` (
`id` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `tanggal_dimuat` varchar(15) DEFAULT NULL,
  `isi` text NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL,
  `picture` varchar(20) DEFAULT NULL,
  `directory` varchar(150) DEFAULT NULL,
  `jenis` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `picture`, `directory`, `jenis`) VALUES
(1, 'Global Warming', 'C:\\Dataku\\Galeri\\Tambahan\\PrivateWeb\\Images\\GW.jpg', 'TM');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `forum` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `pertanyaan` text,
  `tanggal_dimuat` varchar(20) DEFAULT NULL,
  `jawaban` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `pertanyaan`, `tanggal_dimuat`, `jawaban`) VALUES
(4, 'Kapan pertanyaanku dijawab?				', '09 Jun 2015', 'paling lama 2 minggu lagi'),
(5, 'Boleh tes ga?		', '09 Jun 2015', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE IF NOT EXISTS `sejarah` (
  `id` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `tanggal`, `bulan`, `tahun`, `judul`) VALUES
(1, 6, 6, 2012, ' NASA Curiosity rover sukses mendarat di Mars'),
(2, 26, 7, 1847, 'Liberia Merdeka'),
(3, 26, 7, 1891, 'Tahiti Dikuasai Perancis'),
(4, 17, 8, 1945, 'Indonesia Memproklamasikan Kemerdekaannya'),
(5, 17, 8, 1960, 'Gabon Memproklamasikan Kemerdekaannya'),
(6, 14, 7, 1789, 'Revolusi Perancis, Penjara Bastille Diserbu Masyarakat'),
(7, 19, 4, 1912, 'Kapal Titanic Tenggelam. Sebuah kecelakaan kapal terbesar sepanjang sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE IF NOT EXISTS `topik` (
  `id` int(11) NOT NULL,
  `nama_topik` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `nama_topik`) VALUES
(1, 'Eurovision'),
(2, 'Racing'),
(3, 'Eurogames and Olympics'),
(4, 'Trending'),
(5, 'Budaya Langka Indonesia'),
(6, 'Cover Bahasa Asing'),
(7, 'Aksi Tak Biasa'),
(8, 'Indonesians Abroad'),
(9, 'Legenda'),
(10, 'Koleksiku'),
(11, 'Kisah Sejarah Terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `topikFav` int(2) NOT NULL,
  `reputation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `email`, `username`, `password`, `hobi`, `topikFav`, `reputation`) VALUES
('', '', 'admin2', 'admin2', NULL, 0, 100),
('', '', 'admin1', 'admin1', NULL, 0, 100),
('NamaName', 'christoforuss@yahoo.com', 'user1', 'user1', NULL, 0, 100),
('Pengguna Kedua', 'user2@yahoo.com', 'user2', 'user2', 'bawel', 2, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `id_jenis` (`id_jenis`), ADD KEY `id_jenis_2` (`id_jenis`), ADD KEY `id_topik` (`id_topik`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`id_topik`) REFERENCES `topik` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
