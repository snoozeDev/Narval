-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 03, 2017 at 06:31 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `marinedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `AVIONS`
--

CREATE TABLE `AVIONS` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `TYPES_AVIONS_ID` int(11) NOT NULL,
  `SONARS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `BATEAUX`
--

CREATE TABLE `BATEAUX` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `TYPES_BATEAUX_ID` int(11) NOT NULL,
  `SONARS_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BATEAUX`
--

INSERT INTO `BATEAUX` (`ID`, `nom`, `TYPES_BATEAUX_ID`, `SONARS_ID`) VALUES
(1, 'qwqw', 1, 1),
(2, 'TEST', 1, 2),
(3, 'm', 1, 1),
(4, 'test', 1, 1),
(5, 'oool', 1, 1),
(7, 'HELLOW', 2, 1),
(8, 'pool', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `HELICOS`
--

CREATE TABLE `HELICOS` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `TYPES_HELICOS_ID` int(11) NOT NULL,
  `SONARS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HELICOS`
--

INSERT INTO `HELICOS` (`ID`, `nom`, `TYPES_HELICOS_ID`, `SONARS_ID`) VALUES
(0, 'test1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `save_marine_table`
--

CREATE TABLE `save_marine_table` (
  `id` int(11) NOT NULL,
  `mapName` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cercles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `polygs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `texts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `polyls` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bateaux` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_marine_table`
--

INSERT INTO `save_marine_table` (`id`, `mapName`, `mapDescription`, `cercles`, `polygs`, `texts`, `polyls`, `batis`, `bateaux`) VALUES
(1, 'OBJECTIF: LIBREVILLE', 'Ã‰vacuation des expatriÃ©s franÃ§ais de Libreville (Gabon) en prÃ©sence de forces rebelles.', '{"0":[90000,{"lat":1.625758360412755,"lng":7.437744140625001},{"className":"cercle0","color":"red","fillColor":"red","fillOpacity":0.5,"clickable":false,"radius":90000}],"1":[45000,{"lat":0.14282211771738432,"lng":6.602783203125001},{"className":"cercle1","color":"red","fillColor":"red","fillOpacity":0.5,"clickable":false,"radius":45000}]}', '', '{"0":[{"lat":0.39207152508037724,"lng":9.48600769042969},"OBJECTIF"]}', '', '{"0":[{"lat":0.34057416628374637,"lng":6.734962463378907},"port"],"1":[{"lat":1.6614492361273212,"lng":7.430877685546876},"port"],"2":[{"lat":0.39756455872216256,"lng":9.440002441406252},"port"],"3":[{"lat":0.208739772610497,"lng":9.415969848632814},"port"],"4":[{"lat":-0.7092866926005469,"lng":8.781509399414064},"port"],"5":[{"lat":-1.8755804639734532,"lng":9.27452087402344},"port"],"6":[{"lat":-0.5458749203708223,"lng":9.196243286132814},"port"],"7":[{"lat":1.0072570730257588,"lng":9.58213806152344},"port"],"8":[{"lat":0.4030575887097323,"lng":9.457168579101564},"ville"],"9":[{"lat":0.6097297021959899,"lng":9.330139160156252},"village"],"10":[{"lat":0.19157373972537947,"lng":9.422149658203127},"village"],"11":[{"lat":-0.5259630718092625,"lng":9.209289550781252},"village"],"12":[{"lat":0.17234776255188525,"lng":10.091629028320312},"ville"],"13":[{"lat":0.9969589657344593,"lng":9.593124389648438},"ville"],"14":[{"lat":1.577711956834023,"lng":9.616470336914064},"ville"],"15":[{"lat":1.5900668536691172,"lng":9.619216918945314},"port"],"16":[{"lat":1.8680313936525699,"lng":9.76341247558594},"port"],"17":[{"lat":1.8570508698571522,"lng":9.773025512695314},"ville"]}', '{"0":[{"icon":{"options":{"iconUrl":"image/paquebot-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"15","red",false,"15","paquebot","15",20000,false,[{"lat":-0.5877582458165641,"lng":8.783569335937502},{"lat":-0.44494181687807316,"lng":8.701171875000002},{"lat":-0.3350810977086186,"lng":8.695678710937502},{"lat":-0.1867672473697175,"lng":8.695678710937502},{"lat":0.08239743253577557,"lng":8.728637695312502},{"lat":0.1977535136255067,"lng":8.745117187500002},{"lat":0.36803946119346553,"lng":8.745117187500002},{"lat":0.8074683870228081,"lng":8.800048828125002},{"lat":1.0051974541602744,"lng":8.915405273437502},{"lat":1.2468498190181676,"lng":9.085693359375002},{"lat":1.3951257897508365,"lng":9.129638671875002},{"lat":1.7740084780891991,"lng":9.288940429687502},{"lat":1.8893059628373186,"lng":9.475708007812502},{"lat":1.8563645848502908,"lng":9.673461914062502}]],"1":[{"icon":{"options":{"iconUrl":"image/cargo-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"15","red",false,"15","cargo","15",30000,false,[{"lat":0.6756435204204166,"lng":9.234008789062502},{"lat":0.7525418387094969,"lng":9.118652343750002},{"lat":0.8459165322899798,"lng":9.003295898437502},{"lat":0.7580345254974181,"lng":8.805541992187502},{"lat":0.7525418387094969,"lng":8.739624023437502},{"lat":0.7415564444349354,"lng":8.602294921875002},{"lat":0.6756435204204166,"lng":8.421020507812502},{"lat":0.6207153969631366,"lng":8.261718750000002},{"lat":0.6756435204204166,"lng":8.031005859375002},{"lat":0.664657943792124,"lng":7.772827148437501},{"lat":0.6976145987557035,"lng":7.619018554687501},{"lat":0.7195855745039547,"lng":7.514648437500001},{"lat":0.7525418387094969,"lng":7.415771484375001},{"lat":0.8074683870228081,"lng":7.267456054687501},{"lat":0.884364296613886,"lng":7.047729492187501},{"lat":0.9008417889908868,"lng":6.904907226562501},{"lat":0.9557662177941483,"lng":6.674194335937501},{"lat":0.9942127983364538,"lng":6.536865234375001},{"lat":1.016182073033441,"lng":6.399536132812501},{"lat":1.1370103264643097,"lng":6.2786865234375},{"lat":1.4280747713669428,"lng":6.256713867187501},{"lat":1.5873213274098943,"lng":6.108398437500001},{"lat":1.7630273831138816,"lng":6.036987304687501},{"lat":2.542500126605434,"lng":5.921630859375001},{"lat":2.9046388185851506,"lng":5.916137695312501},{"lat":3.2556928748506118,"lng":6.0479736328125},{"lat":3.464074191553031,"lng":6.256713867187501},{"lat":3.639517732223585,"lng":6.454467773437501},{"lat":3.7820405282110454,"lng":7.031250000000001},{"lat":3.7820405282110454,"lng":7.668457031250001},{"lat":3.8204080831949407,"lng":8.113403320312502},{"lat":3.793002860841048,"lng":8.596801757812502},{"lat":3.7655967694198504,"lng":8.668212890625002}]],"2":[{"icon":{"options":{"iconUrl":"image/peche-neutre.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","green",false,"5","peche","5",0,false,[{"lat":1.5818302639606454,"lng":9.549865722656252},{"lat":1.4774973547127201,"lng":9.354858398437502},{"lat":1.1507404998678228,"lng":9.173583984375002},{"lat":0.8926030520310967,"lng":9.250488281250002},{"lat":0.7195855745039547,"lng":9.332885742187502},{"lat":0.7580345254974181,"lng":9.407043457031252},{"lat":0.8541553715898037,"lng":9.50042724609375},{"lat":0.9200654358283382,"lng":9.522399902343752}]],"3":[{"icon":{"options":{"iconUrl":"image/peche-neutre.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","green",false,"5","peche","5",0,false,[{"lat":-0.5300827699064127,"lng":9.146118164062502},{"lat":-0.3460672317284577,"lng":9.082946777343752},{"lat":-0.15655498097406856,"lng":9.066467285156252},{"lat":0.14831526404883005,"lng":9.118652343750002},{"lat":0.36803946119346553,"lng":9.173583984375002},{"lat":0.40923724301497316,"lng":9.288940429687502},{"lat":0.40374421719872633,"lng":9.393310546875002}]],"4":[{"icon":{"options":{"iconUrl":"image/peche-neutre.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","green",false,"5","peche","5",0,false,[{"lat":-0.002746582030202296,"lng":6.270446777343751},{"lat":0.15380840901698828,"lng":6.253967285156251},{"lat":0.34057416628374637,"lng":6.262207031250001},{"lat":0.5740260414817289,"lng":6.383056640625001},{"lat":0.6124761280050813,"lng":6.608276367187501},{"lat":0.5410686180426414,"lng":6.800537109375001},{"lat":0.30212262334655665,"lng":6.954345703125001},{"lat":0.08239743253577557,"lng":6.896667480468751},{"lat":-0.06317137392008215,"lng":6.729125976562501},{"lat":-0.13732897007314554,"lng":6.611022949218751},{"lat":-0.11535636737818807,"lng":6.451721191406251},{"lat":0.010986328057681535,"lng":6.300659179687501},{"lat":0.05493163220967156,"lng":6.256713867187501}]],"5":[{"icon":{"options":{"iconUrl":"image/paquebot-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","red",false,"5","paquebot","5",0,false,[{"lat":2.180259769681356,"lng":9.266967773437502},{"lat":2.152813583128846,"lng":9.102172851562502},{"lat":2.054003264372146,"lng":8.887939453125002},{"lat":2.04302395742204,"lng":8.569335937500002},{"lat":2.00459579470075,"lng":8.333129882812502},{"lat":2.0210651187669897,"lng":8.201293945312502},{"lat":2.152813583128846,"lng":8.448486328125002},{"lat":2.191238104506552,"lng":8.761596679687502},{"lat":2.273573022378629,"lng":9.052734375000002},{"lat":2.2625953010152453,"lng":9.277954101562502},{"lat":2.2625953010152453,"lng":9.470214843750002},{"lat":2.251617496549158,"lng":9.569091796875002},{"lat":2.2351506349126393,"lng":9.678955078125002}]],"6":[{"icon":{"options":{"iconUrl":"image/cargo-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","red",false,"5","cargo","5",0,false,[{"lat":1.938716855057324,"lng":8.344116210937502},{"lat":1.9606767908079445,"lng":8.552856445312502},{"lat":2.0924302418460576,"lng":8.552856445312502},{"lat":2.191238104506552,"lng":8.596801757812502},{"lat":2.2406396093827334,"lng":8.893432617187502},{"lat":2.2900394477259947,"lng":9.140625000000002},{"lat":2.3174830687583046,"lng":9.338378906250002},{"lat":2.3065056838291094,"lng":9.656982421875},{"lat":2.1857489471296665,"lng":9.624023437500002},{"lat":2.152813583128846,"lng":9.569091796875002},{"lat":2.1637921174107735,"lng":9.508666992187502}]],"7":[{"icon":{"options":{"iconUrl":"image/peche-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"5","red",false,"5","peche","5",0,false,[{"lat":2.1308562777325313,"lng":8.800048828125002},{"lat":2.2077054557054083,"lng":8.931884765625002},{"lat":2.28455066023697,"lng":9.140625000000002},{"lat":2.3229717293301575,"lng":9.343872070312502},{"lat":2.3065056838291094,"lng":9.558105468750002},{"lat":2.064982495867117,"lng":9.547119140625002},{"lat":2.05949288957668,"lng":9.387817382812502},{"lat":2.00459579470075,"lng":9.091186523437502},{"lat":1.9222467160981036,"lng":8.767089843750002},{"lat":1.911266535096585,"lng":8.574829101562502}]],"8":[{"icon":{"options":{"iconUrl":"image/bpc-allie.svg","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"30","blue",false,"30","bpc","30",80000,false,[{"lat":2.997898741103057,"lng":9.041748046875002},{"lat":2.789424777005989,"lng":9.063720703125002},{"lat":2.5205489142495527,"lng":9.096679687500002},{"lat":2.4601811810210052,"lng":8.992309570312502},{"lat":2.4272521703917294,"lng":8.756103515625002},{"lat":2.4052990502867853,"lng":8.470458984375002},{"lat":2.3833455768534364,"lng":8.272705078125002},{"lat":2.4052990502867853,"lng":8.124389648437502},{"lat":2.438228596940692,"lng":8.058471679687502},{"lat":2.4656692707025543,"lng":7.926635742187501},{"lat":2.515061053188819,"lng":7.750854492187501},{"lat":2.5260367521718403,"lng":7.586059570312501},{"lat":2.4985973316782895,"lng":7.27294921875},{"lat":2.4437167766633623,"lng":7.086181640625001},{"lat":2.1637921174107735,"lng":6.734619140625},{"lat":1.9826364384297503,"lng":6.602783203125001},{"lat":1.548883579847398,"lng":6.525878906250001},{"lat":1.3182430568620136,"lng":6.531372070312501},{"lat":1.0326589311777885,"lng":6.674194335937501},{"lat":0.7250783020332547,"lng":6.959838867187501},{"lat":0.686629072209557,"lng":7.207031250000001},{"lat":0.6591651462894632,"lng":7.553100585937501},{"lat":0.45592780548689615,"lng":9.014282226562502},{"lat":0.4064907305738824,"lng":9.305419921875002}]],"9":[{"icon":{"options":{"iconUrl":"image/puma-allie.png","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"30","blue",false,"30","puma","30",30000,false,[{"lat":2.833317196855306,"lng":8.679199218750002},{"lat":2.141834969768584,"lng":8.640747070312502},{"lat":1.8728353512547844,"lng":8.701171875000002},{"lat":1.7740084780891991,"lng":8.778076171875002},{"lat":1.6587038068676245,"lng":8.860473632812502},{"lat":1.3786511252106899,"lng":9.019775390625002},{"lat":0.653672342728431,"lng":9.404296875000002}]],"10":[{"icon":{"options":{"iconUrl":"image/avion-allie.png","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"100","blue",false,"100","avion","100",50000,false,[{"lat":3.425691524418062,"lng":8.739624023437502},{"lat":0.2966295342722323,"lng":9.42626953125},{"lat":0.43395581191069055,"lng":9.618530273437502},{"lat":0.2856433479945185,"lng":9.997558593750002},{"lat":0.2746571512146894,"lng":9.536132812500002},{"lat":0.8459165322899798,"lng":9.563598632812502},{"lat":1.3951257897508365,"lng":9.602050781250002},{"lat":1.7245930431979002,"lng":9.750366210937502},{"lat":3.518903869025867,"lng":8.778076171875002}]],"11":[{"icon":{"options":{"iconUrl":"image/cargo-neutre.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"14","green",false,"14","cargo","14",10000,false,[{"lat":1.7081209445886645,"lng":9.327392578125002},{"lat":1.7410649992245233,"lng":9.069213867187502},{"lat":1.7410649992245233,"lng":8.948364257812502},{"lat":1.6751763250632035,"lng":8.701171875000002},{"lat":1.6861579269987979,"lng":8.580322265625002},{"lat":1.6751763250632035,"lng":8.300170898437502},{"lat":1.6861579269987979,"lng":8.063964843750002},{"lat":1.6641946615712557,"lng":7.723388671875001},{"lat":1.691648704756987,"lng":7.520141601562501},{"lat":1.653212936926045,"lng":7.465209960937501}]],"12":[{"icon":{"options":{"iconUrl":"image/fennec-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"40","red",false,"40","fennec","40",30000,false,[{"lat":1.6806671337507348,"lng":7.432250976562501},{"lat":1.949696858747372,"lng":7.739868164062501},{"lat":2.191238104506552,"lng":8.003540039062502},{"lat":2.4107873635632364,"lng":8.025512695312502},{"lat":2.6138389710984824,"lng":8.069458007812502},{"lat":2.6522505226124395,"lng":7.976074218750001},{"lat":2.723583083348398,"lng":7.827758789062501},{"lat":2.7729646957938243,"lng":7.734375000000001},{"lat":2.6577377901397883,"lng":7.514648437500001},{"lat":2.5205489142495527,"lng":7.470703125000001},{"lat":2.5040852618529215,"lng":7.404785156250001},{"lat":2.311994386907854,"lng":7.141113281250001},{"lat":2.180259769681356,"lng":7.075195312500001},{"lat":1.9661667298513452,"lng":6.8499755859375},{"lat":1.691648704756987,"lng":6.756591796875001},{"lat":1.4006173190275208,"lng":6.910400390625001},{"lat":1.4610232806227543,"lng":7.448730468750001},{"lat":1.6092854348744543,"lng":7.432250976562501}]],"13":[{"icon":{"options":{"iconUrl":"image/phm-allie.png","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"60","blue",false,1,"phm",1,100000,false,[{"lat":-1.8947961320582758,"lng":9.091186523437502},{"lat":-1.5653569866197157,"lng":8.552856445312502},{"lat":-1.323734761011294,"lng":8.410034179687502},{"lat":-0.9337965488500171,"lng":8.157348632812502},{"lat":-0.47789973201326874,"lng":8.234252929687502},{"lat":0.19226038138120835,"lng":8.399047851562502},{"lat":0.3076157096439005,"lng":8.767089843750002},{"lat":0.3460672317284577,"lng":9.069213867187502},{"lat":0.4064907305738824,"lng":9.310913085937502},{"lat":0.29113644247137116,"lng":9.140625000000002},{"lat":0.21972602392080884,"lng":9.080200195312502},{"lat":0.04943847042772729,"lng":9.096679687500002},{"lat":-0.3076157096439005,"lng":9.113159179687502},{"lat":-0.3900116365329006,"lng":9.118652343750002}]],"14":[{"icon":{"options":{"iconUrl":"image/paquebot-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"30","red",false,1,"paquebot",1,30000,false,[{"lat":0.21972602392080884,"lng":8.267211914062502},{"lat":0.07141111432403538,"lng":8.201293945312502},{"lat":-0.07141111432402265,"lng":8.151855468750002},{"lat":-0.20324664405209258,"lng":8.102416992187502},{"lat":-0.4724067568442892,"lng":8.041992187500002},{"lat":-0.856901647439813,"lng":8.014526367187502},{"lat":-1.0711045990129324,"lng":8.014526367187502},{"lat":-1.197422590365017,"lng":8.091430664062502},{"lat":-1.4774973547127075,"lng":8.267211914062502},{"lat":-1.1479944704491494,"lng":8.442993164062502},{"lat":-1.1095497845377469,"lng":8.426513671875002},{"lat":-0.9447814006873896,"lng":8.497924804687502},{"lat":-0.5822653680900857,"lng":8.585815429687502},{"lat":-0.4724067568442892,"lng":8.723144531250002},{"lat":-0.42296979098860243,"lng":8.898925781250002},{"lat":-0.42296979098860243,"lng":8.981323242187502}]],"15":[{"icon":{"options":{"iconUrl":"image/cargo-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"15","red",false,1,"cargo",1,20000,false,[{"lat":-0.3680394611934528,"lng":8.591308593750002},{"lat":-0.2252191465717146,"lng":8.536376953125002},{"lat":-0.15930155257138995,"lng":8.558349609375002},{"lat":-0.15930155257138995,"lng":8.712158203125002},{"lat":-0.04394530819134536,"lng":8.673706054687502},{"lat":0.027465819260582135,"lng":8.624267578125002},{"lat":0.0769042737833478,"lng":8.580322265625002},{"lat":0.14282211771738432,"lng":8.640747070312502},{"lat":0.17578097424708533,"lng":8.794555664062502},{"lat":0.1977535136255067,"lng":8.909912109375002},{"lat":0.12084951976866681,"lng":8.937377929687502},{"lat":0.06042479348669642,"lng":8.893432617187502},{"lat":-0.03845214555104571,"lng":8.931884765625002},{"lat":-0.10986321392741416,"lng":8.904418945312502},{"lat":-0.17028783523693297,"lng":8.926391601562502},{"lat":-0.21972602392080884,"lng":8.931884765625002},{"lat":-0.269164049012702,"lng":8.915405273437502},{"lat":-0.3186018737056562,"lng":8.931884765625002}]],"16":[{"icon":{"options":{"iconUrl":"image/paquebot-ennemi.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"30","red",false,1,"paquebot",1,20000,false,[{"lat":-2.103409206077377,"lng":8.360595703125002},{"lat":-2.0320445754194307,"lng":8.470458984375002},{"lat":-1.9881263049374718,"lng":8.421020507812502},{"lat":-1.8893059628373186,"lng":8.393554687500002},{"lat":-1.8014609294680355,"lng":8.349609375000002},{"lat":-1.7081209445886518,"lng":8.311157226562502},{"lat":-1.653212936926045,"lng":8.261718750000002},{"lat":-1.5324100450044358,"lng":8.245239257812502},{"lat":-1.4061088354351594,"lng":8.256225585937502},{"lat":-1.2798007914843985,"lng":8.228759765625002},{"lat":-1.2413579498795597,"lng":8.206787109375002},{"lat":-1.1370103264642968,"lng":8.168334960937502},{"lat":-0.9942127983364538,"lng":8.124389648437502},{"lat":-0.884364296613886,"lng":8.162841796875002},{"lat":-0.763527205318436,"lng":8.223266601562502},{"lat":-0.7195855745039547,"lng":8.267211914062502},{"lat":-0.6097297021959899,"lng":8.327636718750002},{"lat":-0.5218433709928397,"lng":8.349609375000002},{"lat":-0.4724067568442892,"lng":8.366088867187502},{"lat":-0.39550467153200675,"lng":8.393554687500002},{"lat":-0.38451859794901677,"lng":8.448486328125002},{"lat":-0.3350810977086186,"lng":8.745117187500002},{"lat":-0.2581778372370411,"lng":8.756103515625002},{"lat":-0.15380840901698828,"lng":8.794555664062502},{"lat":-0.23620538561262966,"lng":8.865966796875002},{"lat":-0.2966295342722196,"lng":8.926391601562502},{"lat":-0.3076157096439005,"lng":9.036254882812502}]],"17":[{"icon":{"options":{"iconUrl":"image/peche-neutre.png","className":"rred2","iconSize":[30,30],"iconAnchor":[15,15],"popupAnchor":[0,-9]},"_initHooksCalled":true}},"10","green",false,1,"peche",1,5000,false,[{"lat":-1.1315182387740395,"lng":7.816772460937501},{"lat":-1.0381511983133127,"lng":7.789306640625001},{"lat":-0.961258613197397,"lng":7.811279296875001},{"lat":-0.8514090937772903,"lng":7.849731445312501},{"lat":-0.6921218386632358,"lng":7.871704101562501},{"lat":-0.5053645409602877,"lng":7.904663085937501},{"lat":-0.2966295342722196,"lng":7.981567382812501},{"lat":-0.17578097424708533,"lng":8.031005859375002},{"lat":-0.016479491960279726,"lng":8.063964843750002},{"lat":0.043945308191358085,"lng":8.047485351562502},{"lat":0.21972602392080884,"lng":8.091430664062502},{"lat":0.35705335302470415,"lng":8.118896484375002},{"lat":0.2966295342722323,"lng":7.783813476562501},{"lat":0.13732897007314554,"lng":7.761840820312501},{"lat":0.03845214555104571,"lng":7.855224609375001},{"lat":-0.07690427378333507,"lng":7.778320312500001},{"lat":-0.21423289925022543,"lng":7.772827148437501},{"lat":-0.34057416628374637,"lng":7.668457031250001}]]}');

-- --------------------------------------------------------

--
-- Table structure for table `SONARS`
--

CREATE TABLE `SONARS` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `rayon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SONARS`
--

INSERT INTO `SONARS` (`ID`, `nom`, `rayon`) VALUES
(1, 'Radar1', 10),
(2, 'Radar2', 20);

-- --------------------------------------------------------

--
-- Table structure for table `TYPES_AVIONS`
--

CREATE TABLE `TYPES_AVIONS` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `vitesse-max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TYPES_AVIONS`
--

INSERT INTO `TYPES_AVIONS` (`ID`, `nom`, `vitesse-max`) VALUES
(1, 'Rafale', 2222),
(2, 'Mirage 2000-5', 2716),
(3, 'Super &eacutetendard modernis&eacute', 1560),
(4, 'Falcon 50m', 915),
(5, 'Atlantique ATL2', 650),
(6, 'Embraer EMB-121 Xingu', 465),
(7, 'Falcon 10', 912),
(8, 'Mudy Cap 10', 340),
(9, 'Hawkeye', 604);

-- --------------------------------------------------------

--
-- Table structure for table `TYPES_BATEAUX`
--

CREATE TABLE `TYPES_BATEAUX` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `vitesse-max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TYPES_BATEAUX`
--

INSERT INTO `TYPES_BATEAUX` (`ID`, `nom`, `vitesse-max`) VALUES
(1, 'BPC', 18),
(2, 'FREGATE', 15),
(3, 'BCR', 19),
(4, 'FDA', 29),
(5, 'PA', 27),
(6, 'FAA', 29),
(7, 'FS', 20),
(8, 'PATROUILLEURS', 24),
(9, 'PATROUILLEURS P400', 24),
(10, 'FREMM', 27),
(11, 'F70', 30),
(12, 'CHASSEURS DE MINES', 15),
(13, 'BÂTIMENTS D’EXPERIMENTATION D’ESSAIS ET DE MESURES', 17),
(14, 'PATROUILLEUR DE SERVICE PUBLIC', 12),
(15, 'MOYEN PORTUAIRE', 10),
(16, 'A69', 24),
(17, 'TCD', 9),
(18, 'FLF', 25),
(19, 'BÂTIMENTS HYDROGRAPHIQUE', 14),
(20, 'PATROUILLEUR AUSTRAL', 14),
(21, 'BATRAL', 16),
(22, 'EDA-R', 30),
(23, 'BRS', 11),
(24, 'CTM', 9);

-- --------------------------------------------------------

--
-- Table structure for table `TYPES_HELICOS`
--

CREATE TABLE `TYPES_HELICOS` (
  `ID` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `vitesse-max` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TYPES_HELICOS`
--

INSERT INTO `TYPES_HELICOS` (`ID`, `nom`, `vitesse-max`) VALUES
(1, 'type1', 20),
(2, 'type2', 40),
(3, 'nom', 0),
(4, 'Panther', 306),
(5, 'EC 225', 324),
(6, 'Dauphin SP', 296),
(7, 'Alouette III', 210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AVIONS`
--
ALTER TABLE `AVIONS`
  ADD PRIMARY KEY (`ID`,`TYPES_AVIONS_ID`,`SONARS_ID`),
  ADD KEY `fk_AVIONS_TYPES_AVIONS1_idx` (`TYPES_AVIONS_ID`),
  ADD KEY `fk_AVIONS_SONARS1_idx` (`SONARS_ID`);

--
-- Indexes for table `BATEAUX`
--
ALTER TABLE `BATEAUX`
  ADD PRIMARY KEY (`ID`,`TYPES_BATEAUX_ID`,`SONARS_ID`),
  ADD KEY `fk_BATEAUX_TYPES_BATEAUX1_idx` (`TYPES_BATEAUX_ID`),
  ADD KEY `fk_BATEAUX_SONARS1_idx` (`SONARS_ID`);

--
-- Indexes for table `HELICOS`
--
ALTER TABLE `HELICOS`
  ADD PRIMARY KEY (`ID`,`TYPES_HELICOS_ID`,`SONARS_ID`),
  ADD KEY `fk_HELICOS_SONARS1_idx` (`SONARS_ID`),
  ADD KEY `fk_HELICOS_TYPES_HELICOS1_idx` (`TYPES_HELICOS_ID`);

--
-- Indexes for table `save_marine_table`
--
ALTER TABLE `save_marine_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SONARS`
--
ALTER TABLE `SONARS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TYPES_AVIONS`
--
ALTER TABLE `TYPES_AVIONS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TYPES_BATEAUX`
--
ALTER TABLE `TYPES_BATEAUX`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `TYPES_HELICOS`
--
ALTER TABLE `TYPES_HELICOS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BATEAUX`
--
ALTER TABLE `BATEAUX`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `save_marine_table`
--
ALTER TABLE `save_marine_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `TYPES_HELICOS`
--
ALTER TABLE `TYPES_HELICOS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `AVIONS`
--
ALTER TABLE `AVIONS`
  ADD CONSTRAINT `fk_AVIONS_SONARS1` FOREIGN KEY (`SONARS_ID`) REFERENCES `SONARS` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AVIONS_TYPES_AVIONS1` FOREIGN KEY (`TYPES_AVIONS_ID`) REFERENCES `TYPES_AVIONS` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `BATEAUX`
--
ALTER TABLE `BATEAUX`
  ADD CONSTRAINT `fk_BATEAUX_SONARS1` FOREIGN KEY (`SONARS_ID`) REFERENCES `SONARS` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BATEAUX_TYPES_BATEAUX1` FOREIGN KEY (`TYPES_BATEAUX_ID`) REFERENCES `TYPES_BATEAUX` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `HELICOS`
--
ALTER TABLE `HELICOS`
  ADD CONSTRAINT `fk_HELICOS_SONARS1` FOREIGN KEY (`SONARS_ID`) REFERENCES `SONARS` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_HELICOS_TYPES_HELICOS1` FOREIGN KEY (`TYPES_HELICOS_ID`) REFERENCES `TYPES_HELICOS` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
