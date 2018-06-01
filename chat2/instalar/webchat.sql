
#
# Table structure for table 'auto_msg'
#

DROP TABLE IF EXISTS auto_msg;
CREATE TABLE auto_msg (
  mensagem text
) TYPE=MyISAM CHARSET=latin1;



#
# Dumping data for table 'auto_msg'
#

INSERT INTO auto_msg VALUES("Obrigado por usarem o WWC, não esqueçam de indica-lo para seus amigos");
INSERT INTO auto_msg VALUES("Não esqueçam de digitar /ajuda para conhecer os comandos do WWC");
INSERT INTO auto_msg VALUES("O WWC é um inovador sistema de chat em web, totalmente programado em PHP, completamente independente do IRC");
INSERT INTO auto_msg VALUES("Para tirar dúvidas sobre o WWC fale com um de nossos administradores (usuarios com um @ no inicio do nick)");


#
# Table structure for table 'bloqueios'
#

DROP TABLE IF EXISTS bloqueios;
CREATE TABLE bloqueios (
  ip char(100) default NULL,
  tempo int(255) default NULL,
  nick char(255) default NULL,
  ban_by char(255) default NULL,
  secID int(255) default NULL
) TYPE=MyISAM CHARSET=latin1;


#
# Table structure for table 'emoticons'
#

DROP TABLE IF EXISTS emoticons;
CREATE TABLE emoticons (
  num char(3) default NULL,
  atalho varchar(5) default NULL,
  descricao varchar(255) default NULL,
  arquivo varchar(255) default NULL
) TYPE=MyISAM CHARSET=latin1;



#
# Dumping data for table 'emoticons'
#

INSERT INTO emoticons VALUES("1", ":)", "Smile Feliz", "feliz");
INSERT INTO emoticons VALUES("2", "(l)", "Smile Apaixonado", "apaixonado");
INSERT INTO emoticons VALUES("3", ":-", "Smile Desapontado", "desapontado2");
INSERT INTO emoticons VALUES("4", "(6)", "Diabo", "diabo");
INSERT INTO emoticons VALUES("5", ":_", "Smile Duvidoso", "duvidoso");
INSERT INTO emoticons VALUES("6", ":$", "Smile Encabulado", "encabulado");
INSERT INTO emoticons VALUES("7", ":o", "Smile Impressionado", "impressionado");
INSERT INTO emoticons VALUES("8", "(y)", "Smile Tudo Joia", "joia");
INSERT INTO emoticons VALUES("9", ":P", "Smile Dando Lingua", "lingua");
INSERT INTO emoticons VALUES("10", "(=)", "Ninja", "ninja");
INSERT INTO emoticons VALUES("11", "(h)", "Smile de Oculos", "oculos");
INSERT INTO emoticons VALUES("12", ";)", "Smile Piscando o olho", "piscando");
INSERT INTO emoticons VALUES("18", ":(", "Smile Triste", "triste");
INSERT INTO emoticons VALUES("14", "¬¬", "Smile Sarcástico", "sarcastico");
INSERT INTO emoticons VALUES("15", "(s)", "Smile com Sono", "sono");
INSERT INTO emoticons VALUES("16", ":D", "Sorriso Aberto", "sorriso_aberto");
INSERT INTO emoticons VALUES("17", ":S", "Smile Louco", "maluco");


#
# Table structure for table 'extra_values'
#

DROP TABLE IF EXISTS extra_values;
CREATE TABLE extra_values (
  nome varchar(255) default NULL,
  valor_txt text,
  valor_int int(255) default NULL
) TYPE=MyISAM CHARSET=latin1;



#
# Dumping data for table 'extra_values'
#

INSERT INTO extra_values VALUES("env_msg_all", NULL, "1094316070");


#
# Table structure for table 'mensagens'
#

DROP TABLE IF EXISTS mensagens;
CREATE TABLE mensagens (
  mensagemID int(255) NOT NULL auto_increment,
  mensagem text,
  data datetime default NULL,
  de varchar(255) default NULL,
  para varchar(255) default NULL,
  secaoID int(255) default NULL,
  tempo int(100) default NULL,
  tipo int(1) default NULL,
  cor varchar(7) default NULL,
  PRIMARY KEY  (mensagemID)
) TYPE=MyISAM CHARSET=latin1;

#
# Table structure for table 'robot'
#

DROP TABLE IF EXISTS robot;
CREATE TABLE robot (
  ip char(255) default NULL,
  tempo int(255) default NULL
) TYPE=MyISAM CHARSET=latin1;



#
# Dumping data for table 'robot'
#

INSERT INTO robot VALUES("127.0.0.1", "1094316185");


#
# Table structure for table 'secoes'
#

DROP TABLE IF EXISTS secoes;
CREATE TABLE secoes (
  secaoID int(255) NOT NULL auto_increment,
  nome varchar(255) default NULL,
  adm_senha varchar(255) default NULL,
  PRIMARY KEY  (secaoID)
) TYPE=MyISAM CHARSET=latin1;


#
# Table structure for table 'usuarios'
#

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  nome char(255) default NULL,
  ip char(255) default NULL,
  tipo int(1) default NULL,
  tempo int(100) default NULL,
  secID int(255) default NULL,
  estado char(255) default NULL
) TYPE=MyISAM CHARSET=latin1;