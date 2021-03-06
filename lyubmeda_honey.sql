-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 01 2021 г., 14:50
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lyubmeda_honey`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`, `image`) VALUES
(1, 'Мед', 0, 1, NULL),
(2, 'Бальзамы', 1, 1, NULL),
(3, 'Фиточаи, травяные сборы', 2, 1, NULL),
(4, 'Продукты пчеловода', 3, 1, NULL),
(5, 'Подарочные наборы', 4, 1, NULL),
(6, 'Каменное масло', 5, 1, NULL),
(7, 'Мумие', 6, 1, NULL),
(8, 'Масло холодного отжима', 7, 1, NULL),
(9, 'Сиропы', 8, 1, NULL),
(10, 'Аромасло', 9, 1, NULL),
(11, 'Бочата', 10, 1, NULL),
(12, 'Пантовая продукция', 11, 1, NULL),
(13, 'Свечи', 12, 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg'),
('gresgde', 'papap1919@mail.ru', 'grdseg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `image` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `is_popular` int(11) NOT NULL DEFAULT '0',
  `is_new` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `image`, `description`, `is_popular`, `is_new`, `status`) VALUES
(15, 'Мед васильковый долгополов', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(16, 'Мед гречишный', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(17, 'Мед Донник', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(18, 'Мед донник Краснощеково', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(19, 'Мед Дягиль Чарышский', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(20, 'Мед каштановый', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(21, 'Мед Каштановый в банке', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(22, 'Мед Липовый', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(23, 'Мёд натуральный Акация', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(24, 'Мёд натуральный Васильковый', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(25, 'Мёд натуральный Донник', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(26, 'Мёд натуральный Дягиль Красногорский р-н', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(27, 'Мёд натуральный с орешками в баночке', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(28, 'Мёд натуральный Эспарцет', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(29, 'Мёд разнотравие луговой', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(30, 'Мед разнотравье', 1, 0, 0, 1, NULL, '', 1, 1, 1),
(31, 'Мед разнотравье Красногорский р-н', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(32, 'Мед с малиной', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(33, 'Мед с пыльцой', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(34, 'Мёд сотовый', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(35, 'Мед Таежный', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(36, 'КремМед бэмби, 200гр, АлтайскийСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(37, 'Мед с гомогенатом,300гр. АлтайСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(38, 'Мед с маточным молочкомй,300гр. АлтайСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(39, 'Мед с пантами,300гр. АлтайСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(40, 'Мед с пыльцой, 300гр,АлайскийСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(41, 'Мед таежный антивирусный,300гр. АлтайСтаровер', 1, 0, 100, 1, NULL, '', 1, 1, 1),
(42, 'Бальзам \"Сердечный\" АлтайДар, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(43, 'Бальзам ЖелудочныйГорнаяСибирь, 250мл. АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(44, 'Бальзам пантовый на кедровом орехе \"золотой олень Алтая\" 100мл АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(45, 'Бальзам пантовый на кедровом орехе \"золотой олень Алтая\" 250мл АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(46, 'Бальзам Пантогематоген SPORT с травами Алтая АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(47, 'Бальзам Противопростудный \"Горная сибирь\" АлтайДар, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(48, 'Бальзам Тонизирующий Горная Сибирь, 250мл АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(49, 'Бальзам Успокаивающий Горная Сибирь, 250мл АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(50, 'Бальзам Чага на алт.травахСибирь, 250мл. АлтайДар, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(51, 'Бальзам \"Жизнедар\", 250мл, АлтайФлора, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(52, 'Бальзам \"Красногорье с шиповником-общеукрепляющий, АФ, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(53, 'Бальзам Богатырский, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(54, 'Бальзам Золотой Алтай женский, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(55, 'Бальзам Золотой Алтай мужской, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(56, 'Бальзам Золотой Алтай общеукрепляющий, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(57, 'Бальзам Золотой Алтай тонизирующий, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(58, 'Бальзам Золотой Алтай успокаивающий, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(59, 'Бальзам Сердечный Алтай  ПЭТ, АлтайФлора, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(60, 'бальзам Сила гор, 0,25л, АФ, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(61, 'Бальзам Солнышко, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(62, 'Густой бальзам \"Сибирский\" 150г., АФ, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(63, 'Густой бальзам Алтайский мужской 140гр, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(64, 'Густой бальзам Сила Гор 150гр, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(65, 'Сухой бальзам Вита-Тонус Тонизирующий 250 мл, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(66, 'Сухой бальзам Для Тебя женский 250 мл, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(67, 'Сухой бальзам Релакс успокаивающий 250 мл, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(68, 'Бальзам Алфит Плюс №12 мастопатийный 250мл, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(69, 'Бальзам Алфит Плюс №2 для профилактики ОРВИ 250мл, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(70, 'Бальзам Алфит Плюс №3 тонизирующий 250мл, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(71, 'Бальзам ', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(73, 'Бальзам Кадынсуу,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(74, 'Бальзам Панто-Люкс №1,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(75, 'Бальзам Панто-Люкс №2,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(76, 'Бальзам Панто-Люкс №3,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(77, 'Бальзам Панто-Люкс №4,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(78, 'Бальзам Панто-Люкс №5,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(79, 'Бальзам Панто-Люкс №6,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(80, 'Бальзам Панто-Люкс №7,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(81, 'Бальзам Сартакпай,250мл. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(82, 'Пантогематоген 250мл. сув. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(83, 'Пантогематоген 500мл. сув. Биостимул, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(84, 'Бальзам Горно-Алтайский, 100мл Нарине-А, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(85, 'Бальзам Горно-Алтайский, 250мл. Нарине-А, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(86, 'Бальзам Горно-Алтайский, 500мл. Нарине-А, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(87, 'Бальзам Алтайские травы, ПиЧ., шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(88, 'Бальзам Ангиотоник,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(89, 'Бальзам Антитоник,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(90, 'Бальзам Бронхотоник,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(91, 'Бальзам густой Витаминный,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(92, 'Бальзам густой Для женского здоровья,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(93, 'Бальзам густой Для здоровой печени,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(94, 'Бальзам густой Для здоровья печени, 140г. ПиЧ, шт.', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(95, 'Бальзам густой Для здоровья почек,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(96, 'Бальзам густой Для здоровья сердца и сосудов,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(97, 'Бальзам густой Для здоровья суставой,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(98, 'Бальзам густой Для мужского здоровья,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(99, 'Бальзам густой Для улучшениея зрения,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(100, 'Бальзам густой Для улучшениея сна,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(101, 'Бальзам густой Противопростудный,140гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(102, 'Бальзам Для мужского здоровья,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(103, 'Бальзам Иммунотоник,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(104, 'Бальзам Общеукрепляющий,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(105, 'Бальзам Энерготоник,250гр. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(106, 'Сбитень б/а Медовый,250мл. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(107, 'Сбитень б/а Медовый,95мл. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(108, 'Сбитень б/а Сибирский,250мл. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(109, 'Сбитень б/а Сибирский,95мл. ПиЧ, шт', 2, 0, 100, 1, NULL, '', 1, 1, 1),
(110, 'Чай Березовая почка противовоспалительное, потогенное, желчегонное, отхаркивающее средство, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(111, 'Чай Бессмертник повышает тонус желчного пузыря, обладает противовоспалительным и желчегонным дейст, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(112, 'Чай Боровая матка (Ортилия однобокая) пакет с замком, 50мг, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(113, 'Чай Боровая матка повышает иммунитет, увеличивает репродуктивность женской половой системы, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(114, 'Чай Гинекологический с боровой маткой (ромашка, кора дуба, донник), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(115, 'Чай Гинекологический с красной щеткой (ромашка, кора дуба, донник), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(116, 'Чай Зверобой 50 гр, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(117, 'Чай Здоровье суставов (сабельник, девясил, боярышник), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(118, 'Чай Златогорье (облепиха, курильский чай), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(119, 'Чай Золотой корень (родиола розовая) снимает усталость, оказывает стимулирующее действие, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(120, 'Чай Календула антисептическое и противовоспалительное средство при порезах, ожогах, фурункулёзе, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(121, 'Чай Красная щётка женские заболевания: миома, мастопатия, эндометриоз, иммуностимулирующее, онкопр, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(122, 'Чай Красногорский  брусничный (зверобой, чабрец, копеечник), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(123, 'Чай Красногорский  витаминный ( шиповник, смородина, крапива), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(124, 'Чай Красногорский  с курильским чаем (берёза лист, зверобой, черника), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(125, 'Чай Красногорский  с шиповником, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(126, 'Чай Красногорский  таёжный тонизирующий (рябина красная, шиповник, родиола), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(127, 'Чай Лапчатка кустарниковая  (цвет и лист) пакет с замком, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(128, 'Чай Лен, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(129, 'Чай Лопух, корень, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(130, 'Чай Осина кора пакет с замком, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(131, 'Чай Расторопша 50 гр, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(132, 'Чай Солодка, корень, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(133, 'Чай Тысячелистник противовоспалительное, обезболивающее, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(134, 'Чай Успокаивающий (душица, хмель, пустырник), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(135, 'Чай Череда 50г, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(136, 'Иван-Чай Ферметированный с душицей, 50гр Алтайские традиции, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(137, 'Чай \"Батыр\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(138, 'Чай \"Горные реки\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(139, 'Чай \"Душевный вечер\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(140, 'Чай \"Золотая луна\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(141, 'Чай \"Свободное дыхание\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(142, 'Чай \"Снежные вершины\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(143, 'Чай \"Солнечный\" Алтын Крафт пакет, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(144, 'Агарикус, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(145, 'Гриб рейша, 50г. ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(146, 'ИВАН ЧАЙ, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(147, 'Красная Щетка, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(148, 'Красный Корень, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(149, 'Моралий Корень, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(150, 'Панцерия, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(151, 'Чага, ГАФ, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(152, 'Гриб Рейши, 75гр. АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(153, 'Боярышник (плоды), 200гр. Данила Травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(154, 'Боярышник (цветы) 60 гр. Данила Травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(155, 'Корень Мужик корень(Молочай паласса), 25г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(156, 'Сбор Варикозное расширение вен, 160г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(157, 'Сбор Геморрой, 140г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(158, 'Сбор Гипертония, 140г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(159, 'Сбор Гипертония(бум.), 150г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(160, 'Сбор Желудочно-кишечные заболевания(бум.), 150г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(161, 'Сбор Камни в почках (золотая розга), 120г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(162, 'Сбор Простатит, 140г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(163, 'Сбор Простатит(бум.), 150г., Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(164, 'Сбор Противоопухолевый, 150г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(165, 'Сбор Противоопухолевый(бум.), 150г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(166, 'Сбор Сахарный диабет, 180г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(167, 'Фиточай При желудочно-кишечных заболеваниях, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(168, 'Чай Алтайский ключ, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(169, 'Чай Антиалкогольный,данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(170, 'Чай Антиникотиновый, данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(171, 'Чай Бодрящий с пантами, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(172, 'Чай Болезнь Паркинсона, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(173, 'Чай Боровая матка, 60гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(174, 'Чай Букет Алтая, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(175, 'Чай ВИТАМИННЫЙ, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(176, 'Чай Горный Алтай, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(177, 'Чай Женское Здоровье, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(178, 'Чай Земляничный 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(179, 'Чай Иван-Чай, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(180, 'Чай КЕДРОВЫЙ, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(181, 'Чай Монастырский, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(182, 'Чай Мужское Здоровье, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(183, 'Чай Очанка (глазная трава), 60гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(184, 'Чай При простудных заболеваниях, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(185, 'Чай Сагаан-Дали (цел.), 10г, Данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(186, 'Чай Таежный (бадан, лапчатка, ежевика), шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(187, 'Чай ТАЕЖНЫЙ, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(188, 'Чай ЦВЕТОЧНЫЙ майский, 150гр Данила Травник, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(189, 'Чай Чабрец, данила травник, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(190, 'Иван чай с душицей, 50гр, АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(191, 'Иван чай ферментированный 50гр,  Алтай Дар , шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(192, 'Иван чай ферментированный, 50гр АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(193, 'Иван-Чай лист со смородиной, 30гр, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(194, 'Иван-Чай лист. с рябиной 50гр, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(195, 'Иван-чай с мелисой и мятой 50гр., АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(196, 'Иван-чай с мятой и смородиной,50гр, АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(197, 'Курильский чай, 75гр. АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(198, 'Моносырье Календула, цветки 30г, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(199, 'Ромашка 75гр. АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(200, 'Чайный напиток \"Травяной микс\", крафт, 60г, Сибирский кедр, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(201, 'Череда, 100гр, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(202, 'Черная смородина (лист), 60гр, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(203, 'Боровая матка(ортилидия однобокая) ХОРСТ25гр. Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(204, 'Грушанка круглолистная ф/п 1,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(205, 'Зимолюбка зонтичная ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(206, 'Кора крушины ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(207, 'Лапчатка белая. корень ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(208, 'Расторопша пятнистая .плоды   ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(209, 'Сбор растительный ЖЕНСКИЙ ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(210, 'Сбор растительный ХОРСТ Жизнедар ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(211, 'Сбор растительный ХОРСТ Иммуносил  ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(212, 'Сбор растительный ХОРСТ Нормовес  ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(213, 'Сбор растительный ХОРСТ Нормотензин  ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(214, 'Сбор растительный ХОРСТ Свободное дыхание ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(215, 'Сбор растительный ХОРСТ ФитоВитанол ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(216, 'Сбор растительный ХОРСТ Фитосуставин 50гр Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(217, 'Солодка-Хорст  ф/п 2,0*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(218, 'Чабрец-Тимьян ползучий ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(219, 'Шалфей лекарственный  ф/п 1,5*20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(220, 'Эхинацея пурпурная ф/п 1,5\"20 Эклипта, шт', 3, 0, 100, 1, '', '', 1, 1, 1),
(221, 'Эхинацея, 75гр. АлтайДар, шт.', 3, 0, 100, 1, '', '', 1, 1, 1),
(222, 'Золотая бабочка  100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(223, 'Золотая бабочка Грация 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(224, 'Золотая бабочка женский 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(225, 'Золотая бабочка Легочница 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(226, 'Золотая бабочка Мужской 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(227, 'Золотая бабочка Общеукрепляющий 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(228, 'Золотая бабочка Сердечница 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(229, 'Золотая бабочка Солнышко 100 мл, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(230, 'Апифлогин, 25 гр. Апика, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(231, 'Прополисное молочко,эмульсия, 30 мл. Апика, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(232, 'Галлерия меланелла Иммунострон ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(233, 'Галлерия меланелла Нефрострон ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(234, 'Галлерия меланелла Тиреострон ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(235, 'Медовый напиток 1,5 л., шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(236, 'перга в банке, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(237, 'Прополис, кг, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(238, 'пыльца в банке, 100гр. Любитель МЕДа, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(239, 'Адсорбированное маточное молочко Алтайское,20гр НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(240, 'Маточное молочко лиофелизированное, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(241, 'МЕЛАНИУМ Золото Алтая НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(242, 'МЕЛАНИУМ Легкое дыхание НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(243, 'МЕЛАНИУМ Оковед НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(244, 'МЕЛАНИУМ Он+Она НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(245, 'МЕЛАНИУМ Сердце долгожителя НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(246, 'МЕЛАНИУМ Супер защита организма НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(247, 'МЕЛАНИУМ Экстракт восковой моли Алтайский старожил,100мл. НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(248, 'МЕЛАНИУМ Экстракт восковой моли, Алтайский старожил,50мл НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(249, 'Прополис-спрей, 50мл НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(250, 'ПЧЕЛОВИТ №1 Сердцу и сосудам НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(251, 'ПЧЕЛОВИТ №2 Сердцу и сосудам НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(252, 'ПЧЕЛОВИТ Для мужчин НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(253, 'ПЧЕЛОВИТ Для суставов НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(254, 'ПЧЕЛОВИТ Жидкий, 100мл НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(255, 'ПЧЕЛОВИТ ЖКТ НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(256, 'ПЧЕЛОВИТ Оздоравливающий НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(257, 'ПЧЕЛОВИТ Почечный НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(258, 'ПЧЕЛОВИТ С прополисом НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(259, 'Трутневое молочко Алтайское,20гр. НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(260, 'ЭЛИКСИР с Прополисом и боярышником НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(261, 'ЭЛИКСИР с Прополисом и золотым корнем НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(262, 'ЭЛИКСИР с Прополисом и красной щеткой НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(263, 'ЭЛИКСИР с Прополисом и красным корнем НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(264, 'ЭЛИКСИР с Прополисом и лопухом НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(265, 'ЭЛИКСИР с Прополисом и одуванчиком НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(266, 'ЭЛИКСИР с Прополисом и солодкой НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(267, 'ЭЛИКСИР с Прополисом и чагой НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(268, 'ЭЛИКСИР с Прополисом и шиповником НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(269, 'ЭЛИКСИР с Прополисом и эхинацеей НектарАлтая, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(270, 'Огневка ЛОНГ  (для Печени) 100мл, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(271, 'Огневка ЛЮКС (для Щитовидной Железы) 100мл, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(272, 'пчела и человек, ', 4, 0, 100, 1, '', '', 1, 1, 1),
(273, 'АФК Прополис №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(274, 'АФК Прополис+Боровая матка №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(275, 'АФК Прополис+Имбирь №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(276, 'АФК Прополис+Красная щетка №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(277, 'АФК Прополис+Сабельник №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(278, 'АФК Прополис+Чага №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(279, 'АФК Прополис+шалфей №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(280, 'АФК Пыльца+БоярышникПустырник №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(281, 'АФК Пыльца+ВолодушкаРасторопша №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(282, 'АФК Пыльца+Маралий корень №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(283, 'АФК Пыльца+Шиповник Черника №60*0,55г ПиЧ, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(284, 'Свеча прополисная Женкая, АлтайскийСтаровер, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(285, 'Свеча прополисная Мужская,АлтайскийСтаровер, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(286, 'Свеча слабительная, АлтайСтаровер, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(287, 'Трутневое молочко Алтайское 50капс. Биолит, шт.', 4, 0, 100, 1, '', '', 1, 1, 1),
(288, 'Фитохитин-3 Гипертония-контроль ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(289, 'Фитохитин-4 Гельминты-контроль ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(290, 'Фитохитин-5 Климакс-контроль ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(291, 'Фитохитин-8 Варикоз-контроль ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(292, 'Фитохитин-9 Офтальмо-контроль ДК, шт', 4, 0, 100, 1, '', '', 1, 1, 1),
(293, 'Набор \"Магия трав\"(чемоданчик), шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(294, 'набор бальзамов \"Горная Сибирь\" №2(сердечный,успокаивающий, женский 100мл) АлтайДар, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(295, 'Набор бальзамов \"Горная Сибирь\" №3 (мужской, пантакриновый-2шт. 100мл) коробка-книга АлтайДар, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(296, 'Набор бальзамов Горная Сибирь №1 (мужской, женский, имунный 100мл) коробка книга АлтайДар, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(297, 'Набор Шкатулка (Б-м Г-Алтайский 100мл), шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(298, 'Набор Шкатулка (Б-м Г-Алтайский 250мл), шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(299, 'Набор Шкатулка (Б-м Дар Женищине 250мл), шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(300, 'Набор Шкатулка (Б-м Медведь 250мл), шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(301, 'Подарочный набор \"Мёд дягиль\" в кедровой упаковке, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(302, 'Подарочный набор \"секреты долголетия\", Биостимул, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(303, 'Подарочный набор \"ЭКО-ПОДАРОК\",АлтайДАР, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(304, 'Подарочный набор ДАР АЛТАЯ (Сундучок) АлтайДар, шт', 5, 0, 100, 1, '', '', 1, 1, 1),
(305, 'Подарочный набор Золотой олень 100мл АлтайДар, шт', 5, 0, 100, 1, '', '', 1, 1, 1),
(306, 'Подарочный набор МАГИЯ ТРАВ АЛТАЯ АлтайДар, шт', 5, 0, 100, 1, '', '', 1, 1, 1),
(307, 'Подарочный набор с бальзамами, АлтайФлора, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(308, 'Подарочный набор чайный, АлтайФлора, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(309, 'Подарочный набор 3 вида меда, шт.', 5, 0, 100, 1, '', '', 1, 1, 1),
(310, 'Каменное масло Алтайский минерал,3гр. Г-АФарм, шт', 6, 0, 100, 1, NULL, '', 1, 1, 1),
(311, 'Мумие алтайское \"Бальзам гор\" №30, АлтайДар, шт.', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(312, 'Мумие в капсулах 30шт.,ГАФ, шт.', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(313, 'Мумие в капсулах 60шт., ГАФ, шт.', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(314, 'МумиёБальзам Горного-Алтая,100гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(315, 'МумиёБальзам Горного-Алтая,10гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(316, 'МумиёБальзам Горного-Алтая,20гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(317, 'МумиёБальзам Горного-Алтая,30гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(318, 'МумиёБальзам Горного-Алтая,50гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(319, 'МумиёБальзам Горного-Алтая,5гр. Г-АФарм, шт', 7, 0, 100, 1, NULL, '', 1, 1, 1),
(621, 'Кедровое масло \"Кедр Алтая\", шт.', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(622, 'Льняное масло, шт.', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(623, 'Масло на травах ЖИВА №1 иммунные с Огневкой, шт', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(624, 'Масло на травах ЖИВА №3 для Печени, шт', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(625, 'Масло на травах ЖИВА №5 Антипаразитарное, шт', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(626, 'Масло на травах ЖИВА №6 для Сердца и сосудов, шт', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(627, 'Масло тыквенное Алтай,100мл АлтайДар, шт', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(628, 'Облепиховое масло \"Янтарь Алтая\", шт.', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(629, 'Пихтовое масло эфирное \"Алтайской пихты\", шт.', 8, 0, 100, 1, NULL, '', 1, 1, 1),
(630, 'Сироп Боярышник/черноплодная рябина, 330гр АлтайДар, шт', 9, 0, 100, 1, NULL, '', 1, 1, 1),
(631, 'Сироп прополиса с красной щеткой 200мл. Эклипта, шт', 9, 0, 100, 1, NULL, '', 1, 1, 1),
(632, 'Сироп прополиса с красным коренем 200мл. Эклипта, шт', 9, 0, 100, 1, NULL, '', 1, 1, 1),
(633, 'Сироп Шиповник,250мл. ПиЧ, шт.', 9, 0, 100, 1, NULL, '', 1, 1, 1),
(634, 'Сироп Эхинацея,100мл. Биолит, шт', 9, 0, 100, 1, NULL, '', 1, 1, 1),
(635, 'Волшебная формула №4,Для Согревающего массажа, 50мл., шт', 10, 0, 100, 1, NULL, '', 1, 1, 1),
(636, 'Волшебная формула №6,Для Усталых ног, 25мл., шт', 10, 0, 100, 1, NULL, '', 1, 1, 1),
(637, 'Волшебная формула №7, Антицеллюлитное, 50мл., шт', 10, 0, 100, 1, NULL, '', 1, 1, 1),
(638, 'Ель, натуральное эфирное масло,10мл, шт', 10, 0, 100, 1, NULL, '', 1, 1, 1),
(639, 'Бочата №11 (5000гр)бочка, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(640, 'Бочата №1м (400гр)бочка с медв.мален., шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(641, 'Бочата №3мб (400гр)горшочек с медв.бол., шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(642, 'Бочата №4 (200гр)горшочек, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(643, 'Бочата №5 (200гр) кадка, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(644, 'Бочата №5 (200гр) кадка с медв.мал., шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(645, 'Бочата №5 (200гр)бочка с медв. мал., шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(646, 'боченок с обручами цвета дуб 4 кг, шт.', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(647, 'Бочонок 5кг, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(648, 'Бочонок 7кг, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(649, 'Бочонок с медведем на крышке 0,5кг с логотипом, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(650, 'Бочонок с медведем на крышке 0,5кг с логотипом ручная работа, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(651, 'Бочонок с медведем на крышке 1,5кг с логотипом, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(652, 'Бочонок с обручами с защелкивающейся крышкой тёмный \"Купеческий\", 0,3кг, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(653, 'Бочонок с обручами цвета дуб 2кг, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(654, 'Горшочек глиняный (Башня), шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(655, 'Кружка тёмная КБ1 0,5л, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(656, 'Тарелка порционная Т6, сосна, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(657, 'Тарелка-жёлудь Т12, сосна, шт', 11, 0, 100, 1, NULL, '', 1, 1, 1),
(658, 'Пантогематоген 500мл ЗАО \"Тайнинское\", шт.', 12, 0, 100, 1, NULL, '', 1, 1, 1),
(659, 'Пантогематоген таблетки Жизненная сила мужчины, АлтайФлора, шт.', 12, 0, 100, 1, NULL, '', 1, 1, 1),
(660, 'Пантопрост 28 ДК, шт', 12, 0, 100, 1, NULL, '', 1, 1, 1),
(661, 'Панторин 250мл. Биостимул, шт', 12, 0, 100, 1, NULL, '', 1, 1, 1),
(662, 'Воск,1кг., шт.', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(663, 'Вощина, шт.', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(664, 'Свеча Ёлка цв., шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(665, 'Свеча Куб Соты, шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(666, 'Свеча церковная №100, шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(667, 'Свеча церковная №120 (14 см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(668, 'Свеча церковная №2, шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(669, 'Свеча церковная №20 (29,5 см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(670, 'Свеча церковная №40 (27,5 см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(671, 'Свеча церковная №5 (41см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(672, 'Свеча церковная №60 (20,5 см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1),
(673, 'Свеча церковная №80 (17 см), шт', 13, 0, 100, 1, NULL, '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `product_order`;
CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'fvdsfvvsdr', '89059835057', 'qwtqwegfewgw', 0, '2021-06-01 02:16:34', '{\"1\":1}', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `qwq`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `qwq`;
CREATE TABLE `qwq` (
  `KeyFld` int(11) NOT NULL,
  `DataFld` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `qwq`
--

INSERT INTO `qwq` (`KeyFld`, `DataFld`) VALUES
(1, 'q'),
(2, 'w'),
(3, 'e');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--
-- Создание: Авг 11 2021 г., 16:34
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'qwerty', 'papap1919@mail.ru', '1234567', 'admin'),
(2, 'dsad', 'qwqwqwq@mail.ru', '1234567', ''),
(3, 'dsad', 'qwqwdsqwq@mail.ru', '1234567', ''),
(4, 'qda', 'papafdp1919@mail.ru', '16436723623', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=674;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
