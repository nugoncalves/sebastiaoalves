-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2023 at 09:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebastiaoalves`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `chamada` varchar(100) DEFAULT NULL,
  `titulo` text NOT NULL,
  `texto` longtext DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `img_mobile` varchar(150) NOT NULL,
  `img_desktop` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `pos`, `chamada`, `titulo`, `texto`, `link`, `img_mobile`, `img_desktop`) VALUES
(7, 1, 'Novidade', 'Senhora do Amor e da Guerra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum dui ut nisl ultricies mattis. Duis tristique nec lacus eget porta. Fusce suscipit egestas pretium. Cras ac turpis nec tortor pharetra rutrum non eget augue. ', 'livro.php?livro=1', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho1_mob.jpg', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho1.jpg'),
(8, 2, '', 'O Caracol Estrábico', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum dui ut nisl ultricies mattis. Duis tristique nec lacus eget porta. Fusce suscipit egestas pretium. Cras ac turpis nec tortor pharetra rutrum non eget augue. Donec non leo pretium, fringilla risus quis, tincidunt lectus. In tempor ipsum id ligula ornare, eget eleifend massa pharetra. Morbi ut nulla et ipsum euismod egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut malesuada metus sed tellus pulvinar congue. Nunc massa eros, fermentum vel velit vitae, porta eleifend lorem. ', 'livro.php?livro=2', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho2_mob.jpg', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho2.jpg'),
(9, 3, '', 'O Coleccionador de Amnésias', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum dui ut nisl ultricies mattis. Duis tristique nec lacus eget porta. Fusce suscipit egestas pretium. Cras ac turpis nec tortor pharetra rutrum non eget augue. Donec non leo pretium, fringilla risus quis, tincidunt lectus. In tempor ipsum id ligula ornare, eget eleifend massa pharetra. Morbi ut nulla et ipsum euismod egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut malesuada metus sed tellus pulvinar congue. Nunc massa eros, fermentum vel velit vitae, porta eleifend lorem. ', 'livro.php?livro=3', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho3_mob.jpg', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho3.jpg'),
(10, 4, 'Pré-venda', 'O Velho que Pensava que Fugia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum dui ut nisl ultricies mattis. Duis tristique nec lacus eget porta. Fusce suscipit egestas pretium. Cras ac turpis nec tortor pharetra rutrum non eget augue. Donec non leo pretium, fringilla risus quis, tincidunt lectus. In tempor ipsum id ligula ornare, eget eleifend massa pharetra. Morbi ut nulla et ipsum euismod egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut malesuada metus sed tellus pulvinar congue. Nunc massa eros, fermentum vel velit vitae, porta eleifend lorem. ', 'livro.php?livro=4', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho4_mob.jpg', 'http://localhost/sebastiaoalves/uploads/banner/cabecalho4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `data` text NOT NULL,
  `img` tinytext DEFAULT NULL,
  `titulo` tinytext NOT NULL,
  `texto` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `data`, `img`, `titulo`, `texto`) VALUES
(2, '2023-05-01', 'http://localhost/sebastiaoalves/uploads/imprensa/conteudo-imprensa1.jpg', 'Lorem ipsum dolor', '<p>Nam fermentum <i>eleifend</i> hendrerit. Fusce felis mauris, maximus sed elementum vitae, euismod sit amet nunc.&nbsp;</p><p>Morbi ac augue hendrerit, faucibus nisi a, aliquam dui. Pellentesque porta libero non metus lobortis, gravida consectetur nunc dictum. Maecenas elementum maximus metus vitae iaculis. Nulla sit amet euismod eros, nec fermentum ex. Morbi ullamcorper luctus sodales. Quisque feugiat auctor mi a tempus. Aenean et enim ultrices, tincidunt sapien et, volutpat erat. Curabitur semper lacus sed felis aliquam, id aliquam ante rhoncus. Etiam volutpat lectus in sapien suscipit congue at ac elit.</p><p><strong>Praesent sit amet dui vitae</strong> odio placerat ullamcorper ut nec lectus. Duis nibh nunc, tincidunt sit amet magna id, placerat malesuada neque. Mauris pellentesque, erat sit amet scelerisque efficitur, nulla nisl viverra ante, non semper nulla orci ut arcu.</p>'),
(5, '2023-05-11', 'http://localhost/sebastiaoalves/uploads/imprensa/imprensa2.jpg', 'Praesent ultrices dolor ac metus malesuada dapibus', '<p>Praesent ultrices dolor ac metus malesuada dapibus. Etiam tristique dolor lacus, quis efficitur justo vestibulum eu. Pellentesque eu elementum lacus, et molestie dolor. Nam aliquam molestie lectus a luctus. Quisque tortor augue, tincidunt tincidunt arcu malesuada, scelerisque tempus nisi. Duis sit amet nisi scelerisque, cursus arcu eget, aliquet turpis. Etiam diam dui, aliquam sit amet sapien non, ultrices mattis eros. Vestibulum porttitor eros ut nunc pellentesque feugiat. Morbi vehicula finibus urna, et volutpat tortor auctor et. Vivamus ullamcorper tellus quis laoreet dignissim. Maecenas dapibus orci id turpis ornare, non consectetur ex tempor. Mauris sollicitudin nunc elit, ut sodales lorem vestibulum sed. Phasellus auctor, mi eget semper aliquam, justo augue imperdiet odio, aliquam pulvinar lacus neque et risus. Mauris placerat tincidunt lorem id finibus. Proin vestibulum pulvinar dui. Integer euismod, augue vitae efficitur convallis, turpis nisi bibendum mauris, at sollicitudin augue quam quis quam.</p><p>Sed lobortis bibendum nulla, a gravida dolor rutrum in. Etiam at pulvinar magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vitae eros non metus congue cursus. Morbi aliquam libero in est finibus, iaculis sodales odio ullamcorper. Fusce viverra ante quam, in consectetur arcu consectetur a. Nullam eget accumsan nisl, quis malesuada arcu. Nam in dui justo. Sed at sem pulvinar, malesuada erat ac, ullamcorper felis. Suspendisse potenti. Vivamus dolor arcu, placerat sed urna euismod, lacinia posuere nisl. Duis ut rutrum nulla. Phasellus quis erat at lacus commodo viverra.</p>'),
(6, '2023-04-06', 'http://localhost/sebastiaoalves/uploads/imprensa/conteudo-imprensa2.jpg', 'Lorem ipsum dolor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec justo mi, ultricies ac lorem at, laoreet sagittis tellus. Morbi pharetra ipsum vel elit dignissim, vitae lacinia massa bibendum. Nunc interdum lacinia facilisis. Morbi vitae pellentesque tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices arcu volutpat est sodales, eget finibus augue volutpat. Phasellus nec felis non urna tristique ultrices. Nulla facilisi. Sed efficitur blandit lorem, vitae dictum nibh lobortis at.</p><p>Cras euismod odio eget lacus bibendum, a rhoncus quam porttitor. In eleifend non tortor non molestie. In hac habitasse platea dictumst. Maecenas ac lectus mattis, blandit risus eu, pharetra orci. Praesent facilisis lacus a nibh lacinia feugiat. Quisque congue vitae sapien nec faucibus. Suspendisse dapibus porta dui, et aliquet justo convallis viverra. Ut consequat nisl eget odio lacinia maximus. Aliquam mattis metus at risus mollis rhoncus.</p><p>Phasellus placerat sed tellus eu fermentum. Etiam efficitur libero metus, ac suscipit odio scelerisque a. Praesent auctor diam et est tempus, non consectetur dui dignissim. Etiam efficitur elementum lacinia. Fusce ut viverra lectus. Ut consequat, ante ut scelerisque convallis, turpis felis pretium purus, eu cursus felis eros sit amet magna. Nullam cursus lacinia condimentum. Morbi scelerisque tristique justo, et porttitor lacus ullamcorper non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor velit, pulvinar vitae metus eu, pulvinar luctus lectus. Integer vel ante egestas, tristique nunc ac, euismod magna. Praesent quis orci orci. Nulla scelerisque sollicitudin pretium. Phasellus pretium ligula at odio rutrum, eget auctor dui congue. Pellentesque nec enim imperdiet, dictum nunc vitae, eleifend ex.</p>'),
(7, '2023-04-28', 'http://localhost/sebastiaoalves/uploads/imprensa/conteudo-imprensa1.jpg', 'Lorem ipsum dolor', '<p>Nam fermentum <i>eleifend</i> hendrerit. Fusce felis mauris, maximus sed elementum vitae, euismod sit amet nunc.&nbsp;</p><p>Morbi ac augue hendrerit, faucibus nisi a, aliquam dui. Pellentesque porta libero non metus lobortis, gravida consectetur nunc dictum. Maecenas elementum maximus metus vitae iaculis. Nulla sit amet euismod eros, nec fermentum ex. Morbi ullamcorper luctus sodales. Quisque feugiat auctor mi a tempus. Aenean et enim ultrices, tincidunt sapien et, volutpat erat. Curabitur semper lacus sed felis aliquam, id aliquam ante rhoncus. Etiam volutpat lectus in sapien suscipit congue at ac elit.</p><p><strong>Praesent sit amet dui vitae</strong> odio placerat ullamcorper ut nec lectus. Duis nibh nunc, tincidunt sit amet magna id, placerat malesuada neque. Mauris pellentesque, erat sit amet scelerisque efficitur, nulla nisl viverra ante, non semper nulla orci ut arcu.</p>'),
(8, '2023-05-05', 'http://localhost/sebastiaoalves/uploads/imprensa/imprensa2.jpg', 'Praesent ultrices dolor ac metus malesuada dapibus', '<p>Praesent ultrices dolor ac metus malesuada dapibus. Etiam tristique dolor lacus, quis efficitur justo vestibulum eu. Pellentesque eu elementum lacus, et molestie dolor. Nam aliquam molestie lectus a luctus. Quisque tortor augue, tincidunt tincidunt arcu malesuada, scelerisque tempus nisi. Duis sit amet nisi scelerisque, cursus arcu eget, aliquet turpis. Etiam diam dui, aliquam sit amet sapien non, ultrices mattis eros. Vestibulum porttitor eros ut nunc pellentesque feugiat. Morbi vehicula finibus urna, et volutpat tortor auctor et. Vivamus ullamcorper tellus quis laoreet dignissim. Maecenas dapibus orci id turpis ornare, non consectetur ex tempor. Mauris sollicitudin nunc elit, ut sodales lorem vestibulum sed. Phasellus auctor, mi eget semper aliquam, justo augue imperdiet odio, aliquam pulvinar lacus neque et risus. Mauris placerat tincidunt lorem id finibus. Proin vestibulum pulvinar dui. Integer euismod, augue vitae efficitur convallis, turpis nisi bibendum mauris, at sollicitudin augue quam quis quam.</p><p>Sed lobortis bibendum nulla, a gravida dolor rutrum in. Etiam at pulvinar magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vitae eros non metus congue cursus. Morbi aliquam libero in est finibus, iaculis sodales odio ullamcorper. Fusce viverra ante quam, in consectetur arcu consectetur a. Nullam eget accumsan nisl, quis malesuada arcu. Nam in dui justo. Sed at sem pulvinar, malesuada erat ac, ullamcorper felis. Suspendisse potenti. Vivamus dolor arcu, placerat sed urna euismod, lacinia posuere nisl. Duis ut rutrum nulla. Phasellus quis erat at lacus commodo viverra.</p>'),
(9, '2023-04-04', 'http://localhost/sebastiaoalves/uploads/imprensa/conteudo-imprensa2.jpg', 'Lorem ipsum dolor', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec justo mi, ultricies ac lorem at, laoreet sagittis tellus. Morbi pharetra ipsum vel elit dignissim, vitae lacinia massa bibendum. Nunc interdum lacinia facilisis. Morbi vitae pellentesque tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean ultrices arcu volutpat est sodales, eget finibus augue volutpat. Phasellus nec felis non urna tristique ultrices. Nulla facilisi. Sed efficitur blandit lorem, vitae dictum nibh lobortis at.</p><p>Cras euismod odio eget lacus bibendum, a rhoncus quam porttitor. In eleifend non tortor non molestie. In hac habitasse platea dictumst. Maecenas ac lectus mattis, blandit risus eu, pharetra orci. Praesent facilisis lacus a nibh lacinia feugiat. Quisque congue vitae sapien nec faucibus. Suspendisse dapibus porta dui, et aliquet justo convallis viverra. Ut consequat nisl eget odio lacinia maximus. Aliquam mattis metus at risus mollis rhoncus.</p><p>Phasellus placerat sed tellus eu fermentum. Etiam efficitur libero metus, ac suscipit odio scelerisque a. Praesent auctor diam et est tempus, non consectetur dui dignissim. Etiam efficitur elementum lacinia. Fusce ut viverra lectus. Ut consequat, ante ut scelerisque convallis, turpis felis pretium purus, eu cursus felis eros sit amet magna. Nullam cursus lacinia condimentum. Morbi scelerisque tristique justo, et porttitor lacus ullamcorper non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor velit, pulvinar vitae metus eu, pulvinar luctus lectus. Integer vel ante egestas, tristique nunc ac, euismod magna. Praesent quis orci orci. Nulla scelerisque sollicitudin pretium. Phasellus pretium ligula at odio rutrum, eget auctor dui congue. Pellentesque nec enim imperdiet, dictum nunc vitae, eleifend ex.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `chamada` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `img_principal` tinytext NOT NULL,
  `destaque` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`id`, `pos`, `titulo`, `chamada`, `descricao`, `img_principal`, `destaque`) VALUES
(1, 1, 'SENHORA DO AMOR E DA GUERRA', 'Novidade', '<p>ruk, Mesopotâmia, 3000 a.C. Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo. Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o dom de seduzir, que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção dos sacerdotes de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestilência, após inundações que cobriram a terra como após um dilúvio bíblico… As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita. LER EXCERTO NO BROWSER (PDF): LER EXCERTO FAZER DOWNLOAD DO EXCERTO (EBOOK ): DOWNLOAD Edição: Junho de 2020 Editora: Cultura Editora Classificação Temática: Romance Dimensões: 150 x 228 x 14 mm Encadernação: Capa mole Páginas: 240 Onde Comprar em Papel: Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc Onde comprar o E-BOOK: Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Cultura Editora, Bertrand, etc</p>', 'http://localhost/sebastiaoalves/uploads/livros/livro1.jpg', 1),
(2, 4, 'O CARACOL ESTRÁBICO', '', '<p>12 PERSONAGENS. 12 HISTÓRIAS DE DESFECHO INSÓLITO: * Xana desistiu por fim de repelir as atenções de um celibatário de meia-idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda. * Rodrigo chega a casa angustiado, sabendo que as filhas ficaram sozinhas com a mãe… * Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar. * Emigrado em Inglaterra, naturalizado inglês e pouco orgulhoso das suas origens, António tem que deslocar-se à terra onde, certo dia por engano, a cegonha o depositou. * O velho professor tenta assegurar-se de que está vivo. * Um pai extraviado telefona à filha dias depois de esta receber a herança. * Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário… * Vendo a bandeira a meia haste, o presidente do instituto pergunta quem morreu… * Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe. * O que poderá impedir um sem-abrigo de atingir a glória? * Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher. * Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica. Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas incompreendidos. São uma raça a abater LER EXCERTO NO BROWSER (PDF): LER EXCERTO FAZER DOWNLOAD DO EXCERTO (EBOOK): DOWNLOAD Editora: Chiado Editora Classificação Temática: Contos Dimensões: 143 x 220 x 14 mm Encadernação: Capa mole Páginas: 159 Onde Comprar em Papel: Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc Onde comprar o E-BOOK: Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', '/sebastiao_alves/uploads/livro2.jpg', 0),
(3, 3, 'O COLECIONADOR DE AMNÉSIAS', '', '<p>Um lapso de memória, um acidente na fábrica… O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada… Decide pois reformar-se e realizar o seu sonho de sempre: escrever um romance. Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como grãos de areia… Até ao dia mágico em que, numa tabacaria em Pedrouços, repara num livrinho de absurdos com um título extraordinário: Memórias de um amnésico. E embora sinta que o título lhe foi roubado, ao mesmo tempo já sabe o que vai escrever. Agora trabalha com método. De manhã escreve o passado, aquilo que lhe aconteceu desde o acidente na fábrica, com que se iniciou aquilo a que chama o resto da sua vida. À noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele. Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situações aqui narradas, nestes momentos de ternura, nestes momentos de humor, nestes momentos de tristeza e solidão que fazem o percurso de um homem, desde os tempos em que, embora já atingido pela doença, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de Alzheimer. Manuela Morais, Associação Alzheimer Portugal LER EXCERTO NO BROWSER (PDF): LER EXCERTO FAZER DOWNLOAD DO EXCERTO (EBOOK): DOWNLOAD Editora: Chiado Editora Classificação Temática: Romance Dimensões: 141 x 217 x 16 mm Encadernação: Capa mole Páginas: 206 Onde Comprar em Papel: Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc Onde comprar o E-BOOK: Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', '/sebastiao_alves/uploads/livro3.jpg', 1),
(4, 2, 'O VELHO QUE PENSAVA QUE FUGIA', '', '<p>Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média? E que dilema o vem finalmente surpreender, quando pensava ter encontrado a paz e mesmo reencontrado amor? LER EXCERTO NO BROWSER (PDF): LER EXCERTO FAZER DOWNLOAD DO EXCERTO (EBOOK): DOWNLOAD Editora: Chiado Editora Classificação Temática: Romance Dimensões: 139 x 218 x 13 mm Encadernação: Capa mole Páginas: 168 Onde Comprar em Papel: Pode ser encomendado nas boas livrarias: Fnac, Bertrand, Almedina, etc Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc Onde comprar o E-BOOK: Pode ser encomendado pelos canais habituais da internet: Wook, Amazon, Chiado Editora, Bertrand, etc</p>', '/sebastiao_alves/uploads/livro4.jpg', 1),
(5, 5, 'O HOMEM CERTO É DIFÍCIL DE ENCONTRAR', '', '<p>Uma explosão de gás num andar de luxo de um prédio de Lisboa causa uma vítima mortal: um antigo corretor de bolsa caído em desgraça e entretanto diminuído por um AVC. A explosão deu-se na cozinha, provocada pelo arranque da máquina de lavar roupa, em circunstâncias consideradas duvidosas. Acidente? Suicídio? Homicídio? A história é narrada na primeira pessoa pela mulher que, à data da ocorrência, continuava a tratar do marido inválido. Num vaivém de recordações, Lídia vai-nos contando a sua vida, desde um primeiro divórcio, ao encontro com o famoso corretor, já então afastado da Bolsa, e à transformação deste num homem violento. Simultaneamente relata os sucessivos interrogatórios na Judiciária e as crescentes suspeitas de que é objeto. O recente reunião com um amigo, uma espécie de alma gémea encontrada num “site” de encontros da internet, só serve para agravar a desconfiança. Caberá ao leitor decidir se é culpada ou inocente.</p>', '/sebastiao_alves/uploads/livro5.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo` varchar(100) NOT NULL,
  `tabela` varchar(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `data`, `tipo`, `tabela`, `titulo`, `id_user`) VALUES
(1, '2023-05-13 18:08:22', 'update', 'livros', 'SENHORA DO AMOR E DA GUERRA', 1),
(2, '2023-05-13 18:15:59', 'logout', 'logout', 'logout', 1),
(3, '2023-05-13 18:17:43', 'login', 'login', 'login', 1),
(4, '2023-05-13 18:19:00', 'logout', 'session', 'Session End', 1),
(5, '2023-05-13 18:19:25', 'login', 'session', 'Session Start', 1),
(6, '2023-05-13 18:26:02', 'update', 'settings', 'Sobre o Autor', 1),
(7, '2023-05-13 18:33:44', 'insert', 'banners', 'qq', 1),
(8, '2023-05-13 18:38:52', 'insert', 'banners', 'qq', 1),
(9, '2023-05-13 18:40:32', 'insert', 'banners', 'qq', 1),
(10, '2023-05-13 18:40:37', 'delete', 'banners', 'qq', 1),
(11, '2023-05-13 18:44:46', 'update', 'livros', 'SENHORA DO AMOR E DA GUERRA', 1),
(12, '2023-05-13 18:45:00', 'delete', 'livros', '', 1),
(13, '2023-05-13 18:45:40', 'insert', 'livros', 'Lorem', 1),
(14, '2023-05-13 18:49:41', 'update', 'livros', 'destaque[1] ', 1),
(15, '2023-05-13 18:50:30', 'update', 'livros', 'destaque[0] ', 1),
(16, '2023-05-13 18:54:58', 'update', 'livros', 'destaque[1] Lorem', 1),
(17, '2023-05-13 18:55:15', 'update', 'livros', 'destaque[0] Lorem', 1),
(18, '2023-05-13 19:02:40', 'insert', 'imprensa', 'Lorem ipsum dolor', 1),
(19, '2023-05-13 19:13:25', 'update', 'imprensa', 'Lorem ipsum dolor', 1),
(20, '2023-05-13 19:13:36', 'update', 'imprensa', 'Lorem ipsum dolor', 1),
(21, '2023-05-13 19:16:03', 'insert', 'imprensa', 'asdfasdf', 1),
(22, '2023-05-13 19:16:46', 'insert', 'imprensa', 'asdfasdf', 1),
(23, '2023-05-13 19:16:48', 'delete', 'imprensa', 'asdfasdf', 1),
(24, '2023-05-13 19:20:14', 'update', 'settings', 'Contactos', 1),
(25, '2023-05-13 20:16:01', 'update', 'users', 'Admin', 1),
(26, '2023-05-13 20:21:49', 'update', 'users', 'Admin', 1),
(27, '2023-05-14 19:15:46', 'login', 'session', 'Session Start', 1),
(28, '2023-05-14 19:41:14', 'update', 'users', 'Admin', 1),
(29, '2023-05-14 19:45:40', 'update', 'users', 'Nuno', 1),
(30, '2023-05-14 19:55:01', 'update', 'users', 'Admin', 1),
(31, '2023-05-14 19:55:12', 'update', 'users', 'Nuno', 1),
(32, '2023-05-14 20:08:39', 'login', 'session', 'Session Start', 1),
(33, '2023-05-14 20:20:26', 'login', 'session', 'Session Start', 1),
(34, '2023-05-14 20:21:10', 'login', 'session', 'Session Start', 1),
(35, '2023-05-14 20:21:34', 'login', 'session', 'Session Start', 1),
(36, '2023-05-14 20:22:04', 'logout', 'session', 'Session End', 1),
(37, '2023-05-14 20:22:15', 'login', 'session', 'Session Start', 1),
(38, '2023-05-14 20:23:35', 'login', 'session', 'Session Start', 1),
(39, '2023-05-14 20:23:40', 'logout', 'session', 'Session End', 1),
(40, '2023-05-14 20:23:57', 'login', 'session', 'Session Start', 1),
(41, '2023-05-14 20:26:32', 'update', 'users', 'Admin', 1),
(42, '2023-05-14 20:26:37', 'update', 'users', 'Nuno', 1),
(43, '2023-05-14 20:26:46', 'login', 'session', 'Session Start', 1),
(44, '2023-05-14 20:26:46', 'update', 'users', 'PASS_CHANGEAdmin', 1),
(45, '2023-05-14 20:26:49', 'logout', 'session', 'Session End', 1),
(46, '2023-05-14 20:26:56', 'login', 'session', 'Session Start', 1),
(47, '2023-05-14 20:27:11', 'login', 'session', 'Session Start', 1),
(48, '2023-05-14 20:27:11', 'update', 'users', 'PASS_CHANGEAdmin', 1),
(49, '2023-05-14 20:29:08', 'logout', 'session', 'Session End', 1),
(50, '2023-05-14 20:33:45', 'login', 'session', 'Session Start', 1),
(51, '2023-05-14 20:34:01', 'logout', 'session', 'Session End', 1),
(52, '2023-05-14 20:36:55', 'login', 'session', 'Session Start', 1),
(53, '2023-05-14 20:41:00', 'insert', 'banners', 'Senhora do Amor e da Guerra', 1),
(54, '2023-05-14 20:52:45', 'update', 'banners', 'Senhora do Amor e da Guerra', 1),
(55, '2023-05-14 20:53:30', 'insert', 'banners', 'O Caracol Estrábico', 1),
(56, '2023-05-14 20:54:13', 'insert', 'banners', 'O Coleccionador de Amnésias', 1),
(57, '2023-05-14 20:55:00', 'insert', 'banners', 'O Velho que Pensava que Fugia', 1),
(58, '2023-05-14 21:19:07', 'insert', 'banners', 'asdasd', 1),
(59, '2023-05-14 21:19:18', 'delete', 'banners', 'asdasd', 1),
(60, '2023-05-14 21:41:18', 'delete', 'livros', '', 1),
(61, '2023-05-14 21:57:57', 'update', 'settings', 'Contactos', 1),
(62, '2023-05-14 22:14:56', 'update', 'livros', 'destaque[1] O CARACOL ESTRÁBICO', 1),
(63, '2023-05-14 22:15:16', 'update', 'livros', 'destaque[0] O CARACOL ESTRÁBICO', 1),
(64, '2023-05-14 22:25:10', 'update', 'settings', 'Sobre o Autor', 1),
(65, '2023-05-14 22:25:34', 'update', 'settings', 'Sobre o Autor', 1),
(66, '2023-05-14 22:28:03', 'update', 'settings', 'Sobre o Autor', 1),
(67, '2023-05-14 22:28:24', 'update', 'settings', 'Sobre o Autor', 1),
(68, '2023-05-14 22:29:40', 'insert', 'banners', 'Lorem', 1),
(69, '2023-05-14 22:29:54', 'delete', 'banners', 'Lorem', 1),
(70, '2023-05-14 22:36:21', 'update', 'settings', 'Sobre o Autor', 1),
(71, '2023-05-14 23:44:56', 'insert', 'imprensa', 'Praesent ultrices dolor ac metus malesuada dapibus', 1),
(72, '2023-05-14 23:45:44', 'insert', 'imprensa', 'Lorem ipsum dolor', 1),
(73, '2023-05-15 00:06:52', 'update', 'imprensa', 'Lorem ipsum dolor', 1),
(74, '2023-05-15 00:07:03', 'update', 'imprensa', 'Lorem ipsum dolor', 1),
(75, '2023-05-15 00:07:14', 'update', 'imprensa', 'Praesent ultrices dolor ac metus malesuada dapibus', 1),
(76, '2023-05-15 00:17:25', 'update', 'banners', 'Senhora do Amor e da Guerra', 1),
(77, '2023-05-15 00:17:55', 'update', 'banners', 'O Caracol Estrábico', 1),
(78, '2023-05-15 00:18:14', 'update', 'banners', 'O Coleccionador de Amnésias', 1),
(79, '2023-05-15 00:18:35', 'update', 'banners', 'O Velho que Pensava que Fugia', 1),
(80, '2023-05-15 00:19:02', 'update', 'banners', 'O Velho que Pensava que Fugia', 1),
(81, '2023-05-15 00:19:18', 'update', 'banners', 'Senhora do Amor e da Guerra', 1),
(82, '2023-05-15 00:19:28', 'update', 'banners', 'O Caracol Estrábico', 1),
(83, '2023-05-15 00:19:37', 'update', 'banners', 'O Coleccionador de Amnésias', 1),
(84, '2023-05-15 00:20:32', 'update', 'banners', 'O Coleccionador de Amnésias', 1),
(85, '2023-05-15 00:28:42', 'update', 'banners', 'Senhora do Amor e da Guerra', 1),
(86, '2023-05-15 06:53:46', 'login', 'session', 'Session Start', 1),
(87, '2023-05-15 07:07:31', 'update', 'livros', 'destaque[1] O CARACOL ESTRÁBICO', 1),
(88, '2023-05-15 07:07:33', 'update', 'livros', 'destaque[0] O CARACOL ESTRÁBICO', 1),
(89, '2023-05-15 07:07:54', 'update', 'livros', 'O COLECIONADOR DE AMNÉSIAS', 1),
(90, '2023-05-15 07:08:11', 'update', 'livros', 'O COLECIONADOR DE AMNÉSIAS', 1),
(91, '2023-05-15 07:08:26', 'update', 'livros', 'O VELHO QUE PENSAVA QUE FUGIA', 1),
(92, '2023-05-15 07:08:37', 'update', 'livros', 'O CARACOL ESTRÁBICO', 1),
(93, '2023-05-15 07:22:49', 'logout', 'session', 'Session End', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `favicon` tinytext DEFAULT NULL,
  `morada` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `autor_img` tinytext DEFAULT NULL,
  `autor_descricao` text DEFAULT NULL,
  `ultimosLivros` longtext DEFAULT NULL,
  `facebook_link` varchar(150) DEFAULT NULL,
  `instagram_link` varchar(150) DEFAULT NULL,
  `linkedin_link` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `favicon`, `morada`, `email`, `telefone`, `autor_img`, `autor_descricao`, `ultimosLivros`, `facebook_link`, `instagram_link`, `linkedin_link`) VALUES
(1, '', '<p><strong>Rua Lorem Ipsum dolor sit amet</strong>, 29</p><p>9900-000 Ipsum</p>', 'sebastiao@sebastiaoalves.com', '999999999', 'http://localhost/sebastiaoalves/uploads/autor/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non quam ornare, sagittis nisi non, placerat sapien. Proin pharetra, arcu sit amet cursus malesuada, velit orci pretium quam, in tristique nunc odio nec velit. Sed tempor dolor tristique, tincidunt mi ut, viverra purus. Nam congue purus magna, et varius nunc condimentum eu. Vestibulum commodo mi eu enim tincidunt suscipit. Vivamus id velit ac libero lacinia tempus eu et dui. Donec eget egestas ex, elementum rhoncus arcu. Sed purus arcu, euismod in luctus in, consequat non libero. Pellentesque tempor aliquet diam, eget tincidunt purus tempor ut. Nulla molestie neque nisl, in malesuada velit malesuada ac. Nullam lobortis gravida pretium. Pellentesque pulvinar turpis quis purus ullamcorper tempus. Aenean scelerisque sit amet dui ac posuere.</p><p>Aenean ac purus dictum tortor iaculis semper in vel eros. Etiam eu nibh volutpat, feugiat lorem in, tincidunt massa. Vivamus id semper justo, tristique egestas ipsum. Donec elementum augue arcu, bibendum commodo neque hendrerit quis. Sed ex nibh, blandit nec hendrerit dapibus, auctor ac neque. Ut a dui sed sapien elementum maximus. Proin congue odio a ipsum volutpat, eu efficitur diam imperdiet. Ut rhoncus lorem eget scelerisque suscipit.</p><p>Nullam sagittis neque vel nisl aliquet dapibus vel a urna. Morbi malesuada, purus eget interdum aliquet, justo justo laoreet mauris, non lobortis nunc sem sed augue. Cras nec semper nulla. Vivamus eleifend mi venenatis sagittis placerat. Curabitur at tristique nunc. Ut quis aliquet lacus. Proin tempor ex sit amet augue iaculis mattis. Vivamus venenatis velit quis nunc porttitor pulvinar. Fusce felis tellus, finibus et arcu eu, scelerisque sollicitudin orci. Sed placerat sit amet ligula ut venenatis. Donec sodales volutpat turpis. Integer commodo pellentesque arcu, nec sodales ipsum convallis eget. Morbi vestibulum, augue non accumsan venenatis, erat enim dapibus mauris, ut eleifend ipsum lectus eget justo. Etiam iaculis facilisis erat ac convallis. Integer sollicitudin in tellus sed tincidunt.</p><p>Cras euismod odio eget lacus bibendum, a rhoncus quam porttitor. In eleifend non tortor non molestie. In hac habitasse platea dictumst. Maecenas ac lectus mattis, blandit risus eu, pharetra orci. Praesent facilisis lacus a nibh lacinia feugiat. Quisque congue vitae sapien nec faucibus. Suspendisse dapibus porta dui, et aliquet justo convallis viverra. Ut consequat nisl eget odio lacinia maximus.</p><p>&nbsp;Aliquam mattis metus at risus mollis rhoncus. Phasellus placerat sed tellus eu fermentum. Etiam efficitur libero metus, ac suscipit odio scelerisque a. Praesent auctor diam et est tempus, non consectetur dui dignissim. Etiam efficitur elementum lacinia. Fusce ut viverra lectus. Ut consequat, ante ut scelerisque convallis, turpis felis pretium purus, eu cursus felis eros sit amet magna. Nullam cursus lacinia condimentum.&nbsp;</p><p>Morbi scelerisque tristique justo, et porttitor lacus ullamcorper non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor velit, pulvinar vitae metus eu, pulvinar luctus lectus. Integer vel ante egestas, tristique nunc ac, euismod magna. Praesent quis orci orci. Nulla scelerisque sollicitudin pretium. Phasellus pretium ligula at odio rutrum, eget auctor dui congue.&nbsp;</p>', '<p>Cras euismod odio eget lacus bibendum, a rhoncus quam porttitor. In eleifend non tortor non molestie. In hac habitasse platea dictumst. Maecenas ac lectus mattis, blandit risus eu, pharetra orci. Praesent facilisis lacus a nibh lacinia feugiat. Quisque congue vitae sapien nec faucibus. Suspendisse dapibus porta dui, et aliquet justo convallis viverra. Ut consequat nisl eget odio lacinia maximus.</p><p>&nbsp;Aliquam mattis metus at risus mollis rhoncus. Phasellus placerat sed tellus eu fermentum. Etiam efficitur libero metus, ac suscipit odio scelerisque a. Praesent auctor diam et est tempus, non consectetur dui dignissim. Etiam efficitur elementum lacinia. Fusce ut viverra lectus. Ut consequat, ante ut scelerisque convallis, turpis felis pretium purus, eu cursus felis eros sit amet magna. Nullam cursus lacinia condimentum.&nbsp;</p><p>Morbi scelerisque tristique justo, et porttitor lacus ullamcorper non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor velit, pulvinar vitae metus eu, pulvinar luctus lectus. Integer vel ante egestas, tristique nunc ac, euismod magna. Praesent quis orci orci. Nulla scelerisque sollicitudin pretium. Phasellus pretium ligula at odio rutrum, eget auctor dui congue.&nbsp;</p>', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `password`) VALUES
(1, 'Admin', 'admin@admin.pt', '$2y$10$yXfPaND5fVfcfMcL/kdROeR9nq9XHZjewFqCnugL3Ht/kx.MpUXM2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
