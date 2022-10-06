-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 06. 17:18
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kosar`
--

CREATE TABLE `kosar` (
  `kosarid` bigint(20) NOT NULL,
  `termekid` bigint(20) NOT NULL,
  `vevoid` bigint(20) NOT NULL,
  `ar` int(5) NOT NULL,
  `nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kosar`
--

INSERT INTO `kosar` (`kosarid`, `termekid`, `vevoid`, `ar`, `nev`) VALUES
(112, 11, 13, 7000, 'No Mans Sky');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termek`
--

CREATE TABLE `termek` (
  `termekid` bigint(20) NOT NULL,
  `nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(6) NOT NULL,
  `mufaj` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` varchar(400) COLLATE utf8_hungarian_ci NOT NULL,
  `kep` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `termek`
--

INSERT INTO `termek` (`termekid`, `nev`, `ar`, `mufaj`, `leiras`, `kep`) VALUES
(11, 'No Mans Sky', 7000, 'Singleplayer', 'No Mans Sky is a space exploration game and the story is heavily focused on it. As the game progresses you will learn more about the universe you are playing in, including the portals, and the true nature of a mysterious entity called Atlas.', 'kepek/nomans.png'),
(12, 'Grand Theft Auto V', 5000, 'Action', 'When a young street hustler, a retired bank robber, and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government, and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody — least of all each other.', 'kepek/GTA5.jpg'),
(14, 'Battlefield 2042', 14000, 'Multiplayer', 'Battlefield 2042 is a multiplayer first-person shooter developed by EA DICE. It is another release of one of the most popular shooter game franchises in the whole industry, that gathers millions of players from all over the world, battling each other on virtual battlefields.\r\n\r\nThe game takes us into a not distant feature, introducing new weapons, tools, and vehicles. The game features very high-q', 'kepek/Battlefield2042.png'),
(15, 'Far Cry 6', 12000, 'Singleplayer', 'This time it is about a dictatorship in a paradise. The place seems to be “frozen in time” because of the strict ruler, Anton Castillo. His aim is to bring Yara to its former glory. However, he will stop at nothing to realize his dreams.\r\n\r\nHe wants his son, Diego, to follow him on his merciless path of taking full control of the island. The atmosphere is very dense, so the revolution is inevitabl', 'kepek/Farcry6.png'),
(16, 'Assassins Creed: Valhalla', 9000, 'Singleplayer', 'Set during the time of Viking conquest of Britain, the game features several new gameplay mechanics, as well as a few from the earlier installments of the series. The title received positive initial receptions, mainly of its intriguing setting and protagonist.', 'kepek/ACValhalla.png'),
(17, 'Resident Evil 8: Village', 8000, 'Horror', 'Resident Evil: Village is the 8th installment of popular survival horror video game franchise created and released by Capcom. Developers once again decided to realize their newest game using the First Person perspective, which maximizes the immersion and makes the whole experience much more exciting and terrifying. Similarly like it was in the previous Resident Evil game, Resident Evil 8 features ', 'kepek/RE8.png'),
(18, 'FIFA 22', 13000, 'Sports', 'FIFA 22 is the latest installment of the FIFA series developed by EA Canada and published by Electronic Arts. The game takes you back to the world of international football, offering improved visuals and gameplay mechanics, bringing the virtual matches even closer to their real-life counterparts. FIFA 22 was met with positive initial reception thanks to its improved motion systems, mang other feat', 'kepek/Fifa22.png'),
(19, 'NBA 2K22', 8500, 'Sports', 'NBA 2K22 is a basketball sports game developed by Visual Concepts and published by 2K Games. It is the latest installment in the series of basketball video games. The player is given the opportunity to become a part of one of the world\'s leading basketball associations, playing against the best teams in the United States of America. 2K22 introduces several changes and new gameplay mechanics, intro', 'kepek/Nba2k22.png'),
(20, 'F1 2021', 13000, 'Racing', 'F1 2021 is the blockbuster twelfth part of racing simulations, developed by Codemasters and published for the first time in history by Electronic Arts. Play a title based on the official Formula 1 racing license and feel the speed in the world\'s most famous tracks.', 'kepek/F12021.png'),
(21, 'The Witcher 3: Wild Hunt', 5000, 'Adventure', 'Come back to the war-torn Northern Kingdoms. Become Geralt, a veteran monster hunter trying to make a living in a violent world. Take him on a long journey across the realms tracking his adopted daughter, following the trail of the love of his life and earning a living by hunting monsters. Find new stories wherever you go and make decisions that will influence many.', 'kepek/Witcher3.png'),
(22, 'Mortal Kombat 11', 6000, 'Action', 'Mortal Kombat 11 is a 2.5D fighting PC game, developed by NetherRealm Studio. It’s the eleventh main title in the Mortal Kombat series, known for its gore visuals, violence and brutal gameplay. MK 11 runs on Unreal Engine 3.', 'kepek/Mortalkombat11.png'),
(23, 'Outlast 2', 1500, 'Horror', 'The first Outlast was a disturbing trip through a dilapidated mental hospital. Now in Outlast 2 (PC) you will visit the cornfields of Arizona where a doomsday cult controls a village in the middle of nowhere. Disturbing imagery, unsettling sound design, and a feeling of hopelessness make Outlast 2 a rightful successor to the first game\'s legacy.', 'kepek/Outlast2.png'),
(24, 'Dying Light 2', 18000, 'Adventure', 'Dying Light 2 is an upcoming survival horror action role-playing video game developed by Techland and set to be released in 2022 by Techland Publishing. It is the sequel to the Dying Light from 2015 and it takes place 15 years after the story presented in its predecessor. As an infected survivor, you will be tasked with bringing back the order and ensuring peace in the city – you are the last hope', 'kepek/Dyinglight2.png'),
(25, 'Red Dead Redemption 2', 13000, 'Action', 'Red Dead Redemption 2 is an action-adventure game it was released on Xbox One and PlayStation 4, and since 2019 it is also available on the PC. The game is a prequel to the Red Dead Redemption released in 2010 and focuses on the life of the outlaw Arthur Morgan. Enter and experience a truly massive world with an astounding amount of activities, interactions, beautiful visuals and more. If you have', 'kepek/Rdr2.png'),
(26, 'Dead by Daylight', 4000, 'Multiplayer', 'Dead by Daylight (PC) is an asymmetrical multiplayer survival horror game. A group of up to four survivors tries to escape from a nightmarish place where a supernaturally powerful killer tries to sacrifice them to a malevolent god.Dead by Daylight allows players to play both sides of classic slasher movie stories, and taste the dread and the power of survivors and killers respectively.', 'kepek/Dbd.png'),
(27, 'ARK: Survival Evolved', 11000, 'Multiplayer', 'ARK: Survival Evolved is an open-world survival game letting the players roam free through beautifully rendered environments where dinosaurs roam.Craft weapons, tame wildlife, form a tribe with likeminded players, and fight for survival on the mysterious land called ARK.', 'kepek/ARK.png'),
(28, 'Alien Isolation', 3000, 'Horror', 'The gameplay is where the game really shines. It mixes an adventure game with a stealth based game and a little bit of a FPS. Most of the time though, your main task is to avoid the alien. This monster is restless and it is going to constantly hunt you. Soon you are going to realize that the creators introduced a really interesting AI engine in their game.', 'kepek/Alienisolation.png'),
(30, 'Hitman 3', 16000, 'Singleplayer', 'Hitman 3 is the next single-player installment of an excellent game series devoted to the story of the world\'s most iconic paid killer. Developed by IO Interactive studio and released in 2021, the game presents completely new mechanical solutions. As Agent 47, for whom the most important thing is the ability to sneak and stealthily eliminate enemies, you take part in a particularly mature storylin', 'kepek/Hitman3.png'),
(31, 'DOOM Eternal', 8000, 'First-Person Shooter', 'DOOM Eternal is a first-person shooter game developed by ID Software and published by Bethesda Softworks. The game is the direct sequel to the 2016 Doom and the fifth main installment of the Doom series. In the game, the player once again controls the Doom Slayer, an ancient warrior facing off against the forces of Hell. DOOM Eternal takes place sometime after the events of the previous one and fe', 'kepek/Doometernal.png'),
(32, 'Gang Beasts', 2000, 'Multiplayer', 'Gang Beasts is a game in which surly, gelatinous characters are participating in very brutal yet funny brawls. The name of the city fits perfectly to the situation which you have to deal with. People of Beef City need only a little spark to start a fight. Up to eight people might participate in the battle in which everything is possible and rules do not exist. You have to keep that in mind if you ', 'kepek/Gangbeasts.png'),
(33, 'Fall Guys: Ultimate Knockout', 3000, 'Multiplayer', 'A great party game with adorable little jellybean-like puppets for up to 60 players is nothing else but Fall Guys: Ultimate Knockout. Call your friends and check it out for yourself!', 'kepek/Fallguys.png'),
(34, 'PAYDAY 2', 2500, 'Multiplayer', 'PAYDAY 2 is an action-packed, four-player co-op shooter that once again lets gamers don the masks of the original PAYDAY crew - Dallas, Hoxton, Wolf and Chains - as they descend on Washington DC for an epic crime spree.', 'kepek/Payday2.png'),
(35, 'Elden Ring', 17000, 'Adventure', 'Elden Ring is a dark fantasy RPG developed by FromSoftware and published thanks to Bandai Namco Entertainment. It is an epic and challenging adventure created by the developers of Demon\'s Souls in collaboration with the author of A Song of Ice and Fire series - R. R. Martin. Discover the secrets of the Lands Between and embark on the most heroic mission to discover the purpose of the magical artif', 'kepek/Eldenring.png'),
(36, 'Wreckfest', 5000, 'Racing', 'Wreckfest is racing game focused on destroying cars and wonky physics during fights between cars. No fair play is applied here – all that matters is which car stays on track. Playing this game is a lot of fun! Before you set off on the racing tracks, you’ll need to customize your car, not only when it comes to its looks, but also parameters. During racing, the player can gain additional parts and ', 'kepek/Wreckfest.png'),
(37, 'Farming Simulator 22', 9000, 'Singleplayer', 'Farming Simulator 22 is an upcoming simulation/management game developed by Giants Software. In FS22, the player will have a chance to take on the mantle of a modern farmer, growing crops, breeding animals, and managing a successful farming operation. The game features over 400 types of farming equipment that the player can invest in, including the most popular brands. A new feature in the game ar', 'kepek/Farmingsimulator22.png'),
(38, 'Star Wars Jedi: Fallen Order', 7000, 'Adventure', 'Star Wars Jedi: Fallen Order is a single player, third-person perspective action game, published by Electronic Arts and developed by Respawn Entertainment, the studio behind such titles as the Titanfall series and Apex: Legends. The game is set between Episodes III and IV of the Star Wars saga and features a brand new story and characters. The main protagonist of the game is Cal Kestis, young Jedi', 'kepek/Jedifallenorder.png'),
(39, 'Sniper Elite 4', 3000, 'Action', 'Karl Fairburne returns. After opening up the African front to the allied assault, he is assigned to aid the Italian resistance against Nazi presence. Sniper Elite 4 (PC) is a new game from Rebellion Developments, for the fourth time putting the players in the combat boots of an American covert operative Karl Fairburne.Sniper Elite improves on every aspect of the previous entries in the series. Big', 'kepek/Sniperelite4.png'),
(40, 'Tom Clancys Rainbow Six Siege', 6000, 'Multiplayer', 'Tom Clancy\'s Rainbow Six Siege is a game that enjoys a well-deserved reputation on the market. This is a first-person shooter, in which we can compete with other players from around the world in exciting games and constantly develop our skills. The game even has the Rainbow Six Siege Pro League, which can be watched, in which the best players from around the world compete against each other.', 'kepek/Rainbowsixsiege.png'),
(41, 'South Park: The Stick of Truth', 3000, 'Adventure', 'From the perilous battlefields of the fourth-grade playground, a young hero will rise, destined to be South Park’s savior. From the creators of South Park, Trey Parker and Matt Stone, comes an epic quest to become… cool. Introducing South Park: The Stick of Truth. \r\n\r\nFor a thousand years, the battle has been waged. The sole reason humans and elves are locked in a neverending war: The Stick of Tru', 'kepek/Southpark.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlas`
--

CREATE TABLE `vasarlas` (
  `vasarlasid` bigint(20) NOT NULL,
  `datum` datetime NOT NULL,
  `osszeg` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `vasarlas`
--

INSERT INTO `vasarlas` (`vasarlasid`, `datum`, `osszeg`) VALUES
(1, '0000-00-00 00:00:00', 10000),
(2, '0000-00-00 00:00:00', 28000),
(3, '0000-00-00 00:00:00', 14000),
(4, '2022-05-02 00:00:00', 12000),
(5, '2022-05-02 12:13:17', 12000),
(6, '2022-05-02 12:20:22', 12000),
(7, '2022-05-02 12:36:58', 14000),
(8, '2022-05-02 12:41:16', 5000),
(9, '2022-05-02 12:45:47', 7000),
(10, '2022-05-02 13:01:25', 28000),
(11, '2022-05-02 13:36:38', 7000),
(12, '2022-05-02 13:36:57', 42000),
(13, '2022-05-02 13:38:34', 7000),
(14, '2022-05-02 13:43:20', 7000),
(15, '2022-05-02 13:46:34', 14000),
(16, '2022-05-02 13:59:17', 7000),
(17, '2022-05-02 13:59:52', 14000),
(18, '2022-05-02 14:06:55', 7000),
(19, '2022-05-02 14:07:25', 7000),
(20, '2022-05-02 14:12:52', 7000),
(21, '2022-05-02 14:56:56', 3000),
(22, '2022-05-02 15:27:59', 7000),
(23, '2022-05-02 15:29:12', 7000),
(24, '2022-05-02 20:34:14', 24000),
(25, '2022-05-02 20:49:29', 17000),
(26, '2022-05-02 21:40:23', 11000),
(27, '2022-05-22 21:04:38', 5000),
(28, '2022-10-04 17:39:23', 12000),
(29, '2022-10-04 17:57:47', 37000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vevo`
--

CREATE TABLE `vevo` (
  `vevoid` bigint(20) NOT NULL,
  `nev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `emlek` varchar(20) COLLATE utf8_hungarian_ci NOT NULL,
  `egyenleg` int(10) NOT NULL,
  `jatekok` int(10) NOT NULL,
  `ev` date NOT NULL,
  `tnev` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `lakcim` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `profilkepek` varchar(30) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'profilkepek/ujfelhasznalo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `vevo`
--

INSERT INTO `vevo` (`vevoid`, `nev`, `email`, `jelszo`, `emlek`, `egyenleg`, `jatekok`, `ev`, `tnev`, `lakcim`, `admin`, `profilkepek`) VALUES
(7, 'a', 'a@a.a', 'c4ca4238a0b923820dcc509a6f75849b', '', 74000, 0, '2003-12-10', 'Pumped Gáborka', 'Olümposz', 1, 'profilkepek/Among_Us.png'),
(11, 'asd', 'szericsi00@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'asd', 66000, 0, '0000-00-00', '', '', 1, 'profilkepek/ujfelhasznalo.png'),
(12, 'felhasznalo', 'felhasznalo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'egy', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(13, 'valaki', 'valaki@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'egy', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(14, 'fa', 'fa@fa.fa', '89e6d2b383471fc370d828e552c19e65', 'fa', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(15, 'da', 'da@da.da', '5ca2aa845c8cd5ace6b016841f100d82', 'da', 45308453, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(16, 'ga', 'ga@ga.ga', '32d7508fe69220cb40af28441ef746d9', 'ga', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(17, 'ha', 'ha@ha.ha', '925cc8d2953eba624b2bfedf91a91613', 'ha', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png'),
(18, 'ra', 'ra@ra.ra', 'db26ee047a4c86fbd2fba73503feccb6', 'ra', 0, 0, '0000-00-00', '', '', 0, 'profilkepek/ujfelhasznalo.png');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kosar`
--
ALTER TABLE `kosar`
  ADD PRIMARY KEY (`kosarid`);

--
-- A tábla indexei `termek`
--
ALTER TABLE `termek`
  ADD PRIMARY KEY (`termekid`);

--
-- A tábla indexei `vasarlas`
--
ALTER TABLE `vasarlas`
  ADD PRIMARY KEY (`vasarlasid`);

--
-- A tábla indexei `vevo`
--
ALTER TABLE `vevo`
  ADD PRIMARY KEY (`vevoid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kosar`
--
ALTER TABLE `kosar`
  MODIFY `kosarid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT a táblához `termek`
--
ALTER TABLE `termek`
  MODIFY `termekid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT a táblához `vasarlas`
--
ALTER TABLE `vasarlas`
  MODIFY `vasarlasid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT a táblához `vevo`
--
ALTER TABLE `vevo`
  MODIFY `vevoid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
