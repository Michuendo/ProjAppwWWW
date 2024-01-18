-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 10, 2024 at 05:37 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moja_strona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(11) NOT NULL,
  `naglowek` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmy`
--

INSERT INTO `filmy` (`id`, `naglowek`, `video`) VALUES
(1, 'Wiedźmin 3: Dziki Gon', 'https://www.youtube.com/embed/UgYoKVUPD8Y?si=9wxqy8XwM-3P65G-'),
(2, 'Cyberpunk 2077', 'https://www.youtube.com/embed/LembwKDo1Dk?si=4fCYSCahmv4qebJp'),
(3, 'Dying Light 2', 'https://www.youtube.com/embed/68bZ1LKKh7Q?si=PnB9qQep18XLU5dk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listy`
--

CREATE TABLE `listy` (
  `id` int(11) NOT NULL,
  `gry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `premiery`
--

CREATE TABLE `premiery` (
  `id` int(11) NOT NULL,
  `naglowek` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premiery`
--

INSERT INTO `premiery` (`id`, `naglowek`, `img`) VALUES
(1, 'PlayerUnknown’s Battlegrounds (PUBG)', 'pubg.jpg'),
(2, 'Fortnite', 'fort.jpg'),
(3, 'Minecraft', 'mc.jpg'),
(4, 'League of Legends', 'lol.jpg'),
(5, 'Apex Legends', 'apex.jpg'),
(6, 'Valorant', 'valo.jpg'),
(7, 'Dota 2', 'dota.jpg'),
(8, 'GTA V', 'gta.jpg'),
(9, 'Counter-Strike: Global Offensive', 'cs.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strona_glowna`
--

CREATE TABLE `strona_glowna` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `naglowek` varchar(255) NOT NULL,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strona_glowna`
--

INSERT INTO `strona_glowna` (`id`, `img`, `naglowek`, `tresc`) VALUES
(1, 'wiedzmin.jpg', 'Wiedźmin 3: Dziki Gon', 'Fabularna gra akcji wyprodukowana i wydana przez CD Projekt Red 19 maja 2015 na platformy \r\n                Microsoft Windows, PlayStation 4 i Xbox One. Wersja na Nintendo Switch ukazała się 15 października 2019. 14 grudnia 2022 wydano wersję przeznaczoną na platformy PlayStation 5 i Xbox Series X/S.\r\n                <br><br>\r\n                Gra jest kontynuacją wydanego w 2007 roku Wiedźmina oraz Wiedźmina 2: Zabójców królów, \r\n                który miał swoją premierę w 2011 roku. Tak jak poprzednie części, opowiada ona historię tytułowego wiedźmina – Geralta z Rivii – i jest osadzona w świecie wiedźmina, którego twórcą jest Andrzej Sapkowski. Produkcja jest ostatnią częścią cyklu, którego głównym bohaterem jest tytułowy wiedźmin, razem z nią stanowiącego trylogię.\r\n                <br><br>\r\n                Pierwszy zwiastun produkcji został zaprezentowany na konferencji Microsoftu na targach E3 \r\n                w czerwcu 2013 roku. Ponadto Wiedźmin 3 zdobył tam kilkadziesiąt nagród oraz nominacji \r\n                przyznanych przez czasopisma i portale z branży gier komputerowych.\r\n                <br><br>'),
(2, 'cyberpunk.jpg', 'Cyberpunk 2077', 'Cyberpunk 2077 to rozgrywająca się w otwartym świecie przygoda,\r\n                 której akcja toczy się w Night City, megalopolis rządzonym przez obsesyjną pogoń \r\n                 za władzą, sławą i przerabianiem własnego ciała. Nazywasz się V i musisz zdobyć jedyny\r\n                  w swoim rodzaju implant - klucz do nieśmiertelności. Stwórz własny styl gry i ruszaj na\r\n                   podbój potężnego miasta przyszłości, którego historię kształtują twoje decyzje.\r\n                   <br><br>'),
(3, 'dying_light.jpg', 'Dying Light 2: Stay Human', 'Dying Light 2: Stay Human przedstawia unikatową wizję postapokalipsy,\r\n                 nazwaną Współczesnym Średniowieczem. To bezlitosna i brutalna rzeczywistość w \r\n                 której zagrożeniem są nie tylko zarażeni, ale również nie mający zahamowań ludzie.\r\n                <br><br>\r\n                Czy szybkie myślenie, niebywałe umiejętności parkouru i niezłomna wola walki uratują \r\n                Cię przed pochłaniającą świat ciemnością? Podejmuj moralnie skomplikowane decyzje, \r\n                zobacz na własne oczy, jaki mają wpływ na transformację chylącego się ku upadkowi miasta. \r\n                I zdecyduj o jego losie.\r\n                <br><br>'),
(4, 'frostpunk.jpg', 'Frostpunk', 'Akcja Frostpunk ma miejsce w XIX w. po nastąpieniu nowej epoki lodowcowej. \r\n                W sercu mroźnego postapokaliptycznego środowiska gracz buduje i rozwija miasto ocalonych.\r\n                 W tej survivalowej produkcji ważne są ustanawiane prawa, które ukształtują społeczność w \r\n                 taki sposób, by nie straciła nadziei i woli życia. Frostpunk zawiera nawet specjalny wskaźnik, \r\n                 odzwierciedlający nastroje mieszkańców. Decyzja w sprawie praw rzadko kiedy jest prosta. Każda\r\n                  ma swoje dobre i złe strony. Gracz musi czasem zdecydować, czy kierować się dobrem jednostki czy \r\n                  ogółu. Czasy, w jakich dzieje się akcja gry Frostpunk, mają wpływ na szczególne problemy w \r\n                  społeczeństwa, a także na rodzaje wyposażenia np. energia wytwarzana jest dzięki silnikom parowym.\r\n                  <br><br>\r\n                Na początku gry Frostpunk zasoby są stosunkowo łatwe do zebrania, ale z czasem jest ich coraz mniej.\r\n                 By nie zagłodzić mieszkańców, gracz musi budować specjalne konstrukcje, dzięki którym można wydobyć \r\n                 cenne surowce z głębi, a także balon jako środek transportu, który pozwoli na zbadanie i eksploatowanie\r\n                  okolicy.\r\n                  <br><br>'),
(5, 'sniper.jpg', 'Sniper: Ghost Warrior Contracts 2', 'Sniper Ghost Warrior Contracts 2 to druga z cyklu i kolejna w dorobku polskiego \r\n                studia CI Games produkcja, w której mamy okazję wcielić się w zawodowego snajpera\r\n                 umiejącego oddać celny strzał nawet z 1000 metrów. Tym razem kampania dla jednego gracza zabiera\r\n                  nas na Bliski Wschód w celu obalenia panującego tam reżimu dążącego do wywołania wojny w regionie.\r\n                  <br><br>'),
(6, 'wit2.jpg', 'Wiedźmin 2: Zabójcy królów', 'The Witcher 2: Assassins of Kings to gra, do której trudno podchodzić bez poradnika. \r\n                Trudne walki i zawiła fabuła, a do tego ogrom możliwości oraz ścieżek rozwoju -\r\n                 dla niektórych graczy to zbyt wiele. Aby rozwiązać wszystkie problemy i pomóc Białym Wilkom\r\n                  w bezstresowym cieszeniu się grą, stworzyliśmy niniejszy poradnik. Zawiera on nie tylko obszerny \r\n                  opis wszystkich zadań głównych i pobocznych, ale również przydatne grafy obrazujące konsekwencje \r\n                  naszych wyborów oraz możliwe zakończenia. Do tego dochodzi kompletna lista wszystkich zbroi, broni,\r\n                   eliksirów i innych przedmiotów, wzbogacona o szereg schematów pozwalających na ich utworzenie. Nie\r\n                    zabrakło też opisów scen erotycznych i przydatnych zestawień handlarzy, osiągnięć, zdolności, \r\n                    umiejętności i easter eggów. Do całości dodano też poręczny bestiariusz oraz rozdział poświęcony mapom\r\n                     terenu. Wszystkie walki z bossami zostały szczegółowo opisane, a niektóre fragmenty gry zobrazowano\r\n                      przez filmy wideo.\r\n                      <br><br>  '),
(7, 'outriders.jp', 'Outriders Worldslayer', 'Outriders: Worldslayer to brutalna, kooperacyjna strzelanka RPG dla 1-3 graczy, osadzona w oryginalnym, mrocznym uniwersum sci-fi.\r\n                <br><br>  \r\n                Stwórz własnego Outridera, wybierając jedną z czterech potężnych klas i zacznij od podstawowej kampanii „Outriders” lub użyj wzmocnienia do 30 poziomu, by od razu przejść do wydarzeń rozszerzenia „Worldslayer” z pełni doświadczonym Outriderem i podróżuj po zabójczej planecie Enoch.\r\n                <br><br>  \r\n                Pełne doświadczenie w grze Outriders: Worldslayer obejmuje oryginalną grę OUTRIDERS wraz z licznymi ulepszeniami jakości życia i zawartością Ekspedycji dodanymi od czasu premiery.\r\n                <br><br>  '),
(8, 'ghostrunner.jpg', 'Ghostrunner', 'Gra akcji FPP polskiego studia One More Level. W Ghostrunner trafiamy do cyberpunkowego miasta rządzonego twardą ręką przez niejaką Kluczniczkę. Na rozgrywkę składa się parkourowe przemierzanie poziomów oraz eliminowanie przeciwników z użyciem broni białej i specjalnych mocy.\r\n                <br><br>  '),
(9, 'medium.jpg', 'The Medium', 'The Medium jest polskim horrorem inspirowanym serią Silent Hill. Wcielamy się w kobietę, która potrafi widzieć duchy i stara się rozwikłać zagadkę morderstwa pewnego dziecka. Produkcja stanowi kolejne dzieło utalentowanego krakowskiego zespołu Bloober Team.\r\n                <br><br> '),
(10, 'charnobyl.jpg', 'Chernobylite - Enhanced Edition', 'Przygodowa gra akcji FPP typu survival horror, stworzona przez polskie studio The Farm 51 – autorów m.in. Get Even i World War 3. Rozgrywka w Chernobylite toczy się w tzw. Strefie Wykluczenia wokół elektrowni jądrowej w Czarnobylu.\r\n                <br><br> ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `world_games`
--

CREATE TABLE `world_games` (
  `id` int(11) NOT NULL,
  `naglowek` varchar(255) NOT NULL,
  `tresc` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `world_games`
--

INSERT INTO `world_games` (`id`, `naglowek`, `tresc`, `img`) VALUES
(1, 'Frostpunk 2', 'Na ten tytuł czeka z pewnością sporo osób. \"Frostpunk 2\" to kontynuacja ciepło przyjętej strategii o świecie skutym lodem, gdzie w skrajnie dramatycznych warunkach musimy przetrwać i rozwinąć cywilizację.\r\n    <br><br>\r\n    Sequel ponownie przeniesie nas do krainy wiecznej zimy. Akcja rozpocznie się trzy dekady po apokaliptycznej burzy śnieżnej. Wcześniej mieliśmy do czynienia z erą pary, natomiast teraz spróbujemy inwestować w przemysł naftowy.\r\n    <br><br>\r\n    Po raz kolejny będziemy rozbudowywać metropolię i zaspokajać potrzeby różnych grup. Na własnej skórze przekonamy się, czy w tak bezwzględnej rzeczywistości można być łagodnym władcą, czy jednak konieczne stanie się wprowadzenie rządów twardej ręki.\r\n    <br><br>\r\n    Nie jest do końca przesądzone, że \"Frostpunk 2\" ukaże się w tym roku – niemniej na jej karcie na Steamie widnieje informacja, że produkcji należy spodziewać się już niebawem. Czyli są jakieś szanse, że 11 bit studios wypuści sequel w ciągu kolejnych miesięcy.\r\n    <br><br>', 'frostpunk2.jpg'),
(2, 'Hellish Quart', 'Produkcja od studia Kubold przenosi nas do XVII wieku. Trafimy do Rzeczpospolitej Obojga Narodów, gdzie mamy pojedynkować się z innymi. Wybierzemy jedną z wielu dostępnych postaci i broni – i przystąpimy do walki.\r\n    <br><br>\r\n    \"Hellish Quart\" zaoferuje kilka głównych trybów. Będziemy walczyć między innymi w trybie szybkiej potyczki, fabularnym czy lokalnej kooperacji. \r\n    <br><br>\r\n    Poniżej publikujemy wideo z rozgrywką. Trzeba przyznać, że wygląda to całkiem dobrze. Uwagę przyciąga świetna fizyka i realizm ruchu postaci.\r\n    <br><br>\r\n    Tytuł jest już od dłuższego czasu dostępny w ramach wczesnego dostępu, ale w kolejnych miesiącach ma zadebiutować ostateczna wersja. Sądząc po pochlebnych opiniach graczy na Steamie, to może się udać. Chociaż podobno nie jest to gra dla wszystkich, ponieważ ma dość wysoki poziom trudności.\r\n    <br><br>', 'hell.jpg'),
(3, 'Holstin', 'n>\r\n    A to produkcja, która zdaje się być \"podwójnie polska\" – bo nie tylko tworzy ją rodzime studio, ale i dodatkowo jej akcja toczy się w Polsce w latach 90. A że to horror? No cóż, tak już jakoś wyszło.\r\n    <br><br>\r\n    W tytule od studia Sonka wcielimy się w Tomasza, który wybierze się do podolsztyńskiej miejscowości Kolonii-Jeziornych, by odszukać zaginionego przyjaciela. Po koledze ani śladu, natomiast my szybko zdamy sobie sprawę, że to miejsce opanowały siły zła. Tomasz spróbuje odkryć tajemnicę miasteczka – i przy okazji wyjść z sytuacji w jednym kawałku.\r\n    <br><br>\r\n    Ostatnio twórcy podzielili się z internetem 15-minutowym nagraniem wideo z gameplayem. Uwagę zwraca pikselowy styl graficzny, który przywodzi na myśl produkcje z lat 90. Filmik potwierdza informację, że polski horror raczej nie zaliczy opóźnienia i można spodziewać się go jeszcze w tym roku. No i super.\r\n    <br><br>      ', 'holstin.jpg'),
(4, 'Manor Lords', 'Kolejną z ciekawszych zapowiedzi na 2023 r. jest \"Manor Lords\", czyli połączenie strategii i city buildera od Slavic Magic. Akcja tytułu przeniesie nas do średniowiecza. Głównym zadaniem gracza ma być rozwijanie osady, ale to tylko brzmi tak łatwo.\r\n    <br><br>  \r\n    Bo generalnie jako średniowieczny władca będziemy mieć pełne ręce roboty. Trzeba tu wznosić budynki, zarządzać zasobami i produkcją i podbijać sąsiednie terytoria.\r\n    <br><br>  \r\n    Przy tworzeniu gry deweloperzy inspirowali się architekturą i sztuką XIV-wiecznej Frankonii. Slavic Magic postawiło sobie za cel odzwierciedlenie tamtych czasów z historyczną dokładnością. Ma to odzwierciedlenie zarówno w oprawie wideo, jak i mechanikach gry – i reakcji środowiska na nasze działania.\r\n    <br><br>  \r\n    I, jak sugeruje opis \"Manor Lords\" na Steamie, nie jest to tylko czcza gadanina. Na przykład czytamy: \"niekontrolowana ekspansja będzie miała bezpośredni wpływ na środowisko. Stada jeleni będą migrować z dala od wkraczającej cywilizacji, brak płodozmianu pogorszy żyzność gleby, a wycięcie zbyt wielu drzew spowoduje wylesienie\". Czyli twórcy naprawdę podeszli do tematu na poważnie.\r\n        \r\n    <br><br>  ', 'manor.jpg'),
(5, 'Lords of the Fallen', 'Dla niektórych graczy ten tytuł może brzmieć znajomo – i nic dziwnego, bo \"The Lords of the Fallen\" to reboot gry o prawie samej nazwie z 2014 r. Tworzeniem nowej wersji zajmuje się należące do spółki CI Games studio HEXWORKS.\r\n    <br><br>  \r\n    Przeniesiemy się do świata, gdzie rządził tyran Adyr, który w końcu został obalony. Jednak sielanka nie trwa długo – król odradza się. I tu do akcji wkroczy główny bohater, który wyruszy w podróż pomiędzy dwiema krainami, by na zawsze położyć kres panowaniu Adyra.\r\n    <br><br>  \r\n    Jak na produkcję souls-like przystało, po drodze do celu mamy przemierzać mroczny świat i walczyć z przeraźliwymi przeciwnikami. Kraina \"The Lords of the Fallen\" będzie ogromna – bo ponad 5-krotnie większa od oryginału.\r\n    <br><br>  \r\n    Co natomiast dotyczy walki, to w produkcji ma być dostępnych wiele różnych typów broni. A poza tym postać ma władać magią. Zobaczymy, jak to wyjdzie w praktyce.\r\n    <br><br>  ', 'lotf.png'),
(6, 'The Last Case of Benedict Fox', 'A to jedna z najciekawszych polskich zapowiedzi na 2023 r. Głównym bohaterem gry od Plot Twist jest długonogi detektyw Benedict Fox, który postanawia rozwikłać sprawę morderstw w starej rezydencji.\r\n    <br><br>  \r\n    Co jest szczególnie intrygujące w \"The Last Case of Benedict Fox\", to detektyw ma więź z demonem, którego może wykorzystywać do wnikania w umysły zmarłych postaci. Dzięki demonowi będziemy mogli przedostawać się do światów wspomnień i traum napotkanych protagonistów.\r\n    <br><br>  \r\n    Poza ciekawą fabułą produkcja ma zaoferować satysfakcjonujący system walki. Bohater będzie dysponować demonicznymi mocami. Używane w różnych kombinacjach, mają one być skutecznym narzędziem walki z potworami i okultystami.\r\n    <br><br>  \r\n    Uwagę zwraca też bardzo atrakcyjna – i trochę jakby groteskowa – grafika. \"The Last Case of Benedict Fox\" na pewno spodoba się fanom twórczości Tima Burtona. \r\n    <br><br>', 'last.jpg'),
(7, 'The Invincible', 'O \"Niezwyciężonym\" słyszeliśmy już trochę w zeszłym roku. To pierwszoosobowa przygodówka w klimacie sci-fi oparta o twórczość Stanisława Lema. W grze wcielimy się w astrobiolożkę Yasną, która wyruszy na niezbadaną planetę Regis III.\r\n    <br><br> \r\n    Szybko okaże się, że naszą załogę gdzieś wcięło.\r\n    <br><br> \r\n    Próbując odnaleźć pozostałych naukowców, Yasna będzie eksplorować obce tereny i wchodzić w interakcje z tubylcami, przy okazji odkrywając prawdę o ludzkości. Dokonane przez nas wybory wpłyną na kształt fabuły.\r\n    <br><br> \r\n    A wszystko to ma mieć miejsce w retrofuturystycznej scenerii. Twórcy z krakowskiego studia Starward Industries zapewniają, że ich produkcja zaoferuje nowoczesną grafikę na Unreal Engine.\r\n    <br><br> ', 'invisible.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `listy`
--
ALTER TABLE `listy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `premiery`
--
ALTER TABLE `premiery`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `strona_glowna`
--
ALTER TABLE `strona_glowna`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `world_games`
--
ALTER TABLE `world_games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listy`
--
ALTER TABLE `listy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premiery`
--
ALTER TABLE `premiery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `strona_glowna`
--
ALTER TABLE `strona_glowna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `world_games`
--
ALTER TABLE `world_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
