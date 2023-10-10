CREATE DATABASE  IF NOT EXISTS `hard_games` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `hard_games`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hard_games
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jogos`
--

DROP TABLE IF EXISTS `jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jogos` (
  `ID_JOGO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_JOGO` varchar(80) NOT NULL,
  `DESCRICAO_JOGO` varchar(40) NOT NULL,
  `IMG_JOGO` varchar(10) NOT NULL,
  `SOBRE_JOGO` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID_JOGO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jogos`
--

LOCK TABLES `jogos` WRITE;
/*!40000 ALTER TABLE `jogos` DISABLE KEYS */;
INSERT INTO `jogos` VALUES (1,'Genshin Impact','Gênero: Ação, Aventura, Mundo Aberto','img_b1.jpg','Genshin Impact é um popular jogo de ação de mundo aberto desenvolvido pela empresa chinesa miHoYo. Lançado em setembro de 2020, o jogo está disponível em várias plataformas, incluindo PC, PlayStation, iOS e Android. Ambientado no mundo mágico de Teyvat, Genshin Impact segue a jornada de um(a) protagonista que é separado(a) de seu irmão(a) gêmeo(a) e acaba em um mundo misterioso. O jogador explora este vasto mundo, enfrenta inimigos, resolve quebra-cabeças e reúne uma equipe de personagens com habilidades únicas, chamados \"Visionários\", para desvendar os segredos de Teyvat e buscar seu irmão(a). O jogo é elogiado por seus gráficos impressionantes, jogabilidade envolvente e uma grande variedade de personagens jogáveis. Além disso, Genshin Impact é conhecido por seu modelo de negócios \"gacha\", onde os jogadores podem gastar dinheiro real para adquirir novos personagens e armas por meio de microtransações.'),(2,'Fall Guys','Gênero: Corrida, Competitivo, Desafios','img_b2.jpg','Fall Guys: Ultimate Knockout é um jogo de festa desenvolvido pela Mediatonic e publicado pela Devolver Digital. Lançado em agosto de 2020, o jogo se tornou um sucesso instantâneo, especialmente entre os jogadores que buscam diversão casual e multiplayer.\r\n\r\nEm Fall Guys, os jogadores assumem o controle de pequenas criaturas chamadas \"Fall Guys\" e competem em uma série de minijogos desafiadores em uma competição estilo corrida. O objetivo é superar obstáculos, desafios e outros jogadores para ser o último a permanecer de pé. À medida que os jogadores progridem, ganham coroas virtuais que podem ser usadas para desbloquear trajes e personalizações para seus personagens.\r\n\r\nO jogo é conhecido por sua jogabilidade simples, porém altamente caótica e hilária. Com uma estética colorida e animada, Fall Guys cria uma atmosfera de diversão e competição, tornando-o uma excelente opção para festas e para jogar com amigos online. A jogabilidade é rápida e imprevisível, o que o torna um jogo muito popular para streaming e competições online.'),(3,'God Of War','Gênero: Ação, Aventura, Mitologia','img_b3.jpg','God of War é uma popular franquia de jogos eletrônicos de ação e aventura desenvolvida pela Santa Monica Studio e publicada pela Sony Interactive Entertainment. A série é centrada na história de Kratos, um guerreiro espartano que, ao longo dos jogos, enfrenta deuses, criaturas mitológicas e desafios monumentais em busca de vingança e redenção.\r\n\r\nO jogo original, lançado em 2005, foi notável por sua jogabilidade intensa, combates brutais, quebra-cabeças desafiadores e narrativa envolvente. Em 2018, a franquia deu um novo rumo com o lançamento de \"God of War\" para o PlayStation 4, que trouxe uma abordagem mais madura, uma narrativa profundamente emocional e uma mudança de cenário para a mitologia nórdica.\r\n\r\nAlém disso, a série é conhecida por sua jogabilidade fluida e cinematográfica, que combina combates intensos com elementos de quebra-cabeças e exploração. Os jogos da série são amplamente elogiados por seus visuais impressionantes, trilha sonora épica e a evolução contínua do personagem Kratos ao longo da história.\r\n\r\nEm resumo, God of War é uma série de jogos eletrônicos que combina ação, mitologia e narrativa cativante, e é um dos títulos mais icônicos da PlayStation e da indústria de jogos eletrônicos como um todo.'),(4,'Need for Speed','Gênero: Corrida, Competitivo','img_b4.jpg','Need for Speed é uma franquia de jogos de corrida desenvolvida pela Electronic Arts. Desde o seu início em 1994, a série tornou-se uma das mais icônicas e duradouras do gênero. A proposta dos jogos Need for Speed é proporcionar uma experiência de corrida emocionante, centrada em carros esportivos, personalização automotiva e perseguições policiais.\r\n\r\nCada título da série oferece uma variedade de modos de jogo, que podem incluir corridas de rua, circuitos fechados, perseguições policiais, e até mesmo modalidades de estilo livre. A personalização dos veículos desempenha um papel significativo nos jogos, permitindo aos jogadores modificar seus carros com uma ampla gama de opções, desde melhorias de desempenho até personalizações visuais.\r\n\r\nA série também é conhecida por apresentar uma ampla seleção de carros licenciados, desde supercarros de alto desempenho até clássicos e carros esportivos modificados. A narrativa e o ambiente podem variar de jogo para jogo, abrangendo desde corridas ilegais nas ruas de cidades fictícias até competições de alto nível em circuitos.\r\n\r\nNeed for Speed é apreciado por sua abordagem acessível à jogabilidade de corrida, que permite que jogadores de todos os níveis de habilidade desfrutem da emoção das corridas de carros. Além disso, os visuais impressionantes e a trilha sonora de cada jogo contribuem para criar uma experiência de corrida empolgante.\r\n\r\nEm resumo, Need for Speed é uma série de jogos de corrida que oferece uma experiência de velocidade, personalização de carros e competição emocionante, com uma rica variedade de modos de jogo e carros para os entusiastas de automobilismo e fãs de jogos de corrida.');
/*!40000 ALTER TABLE `jogos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(80) NOT NULL,
  `NAME_USER` varchar(20) NOT NULL,
  `SENHA` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`),
  UNIQUE KEY `NAME_USER` (`NAME_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Pedro Felipe da Silva','kan3mo','pedro2103');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-10  0:43:17
