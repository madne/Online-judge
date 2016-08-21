

CREATE database myDatabase1 ;


CREATE TABLE `myDatabase1`.`audio_events` ( 
	`id`          	INT(6) NOT NULL AUTO_INCREMENT ,
	`date`       	date   NOT NULL , 
	`start_hour` 	INT(4) NOT NULL ,
	`end_hour`  	INT(4) NOT NULL , 
	`handel`       	VARCHAR(20) NOT NULL , 
  PRIMARY KEY (`id`)        ) ;



CREATE TABLE `myDatabase1`.`video_events` ( 
	`id`          	INT(6) NOT NULL AUTO_INCREMENT ,
	`date`       	date   NOT NULL , 
	`start_hour` 	INT(4) NOT NULL ,
	`end_hour`  	INT(4) NOT NULL , 
	`handel`       	VARCHAR(20) NOT NULL , 
  PRIMARY KEY (`id`)        ) ;




CREATE TABLE `myDatabase1`.`audio_requests` ( 
	 `id` 				INT(6) NOT NULL AUTO_INCREMENT ,
	 `date`				date   NOT NULL , 
	 `start_hour`	 	INT(4) NOT NULL , 
	 `end_hour` 		INT(4) NOT NULL ,
	 `handel` 			VARCHAR(20) NOT NULL , 
PRIMARY KEY (`id`)            ) ;



CREATE TABLE `myDatabase1`.`video_requests` ( 
	 `id` 				INT(6) NOT NULL AUTO_INCREMENT ,
	 `date`				date   NOT NULL , 
	 `start_hour`	 	INT(4) NOT NULL , 
	 `end_hour` 		INT(4) NOT NULL ,
	 `handel` 			VARCHAR(20) NOT NULL , 
PRIMARY KEY (`id`)            ) ;




CREATE TABLE `myDatabase1`.`users` ( 
	   `id` 	 	INT(6) NOT NULL AUTO_INCREMENT ,
	   `name`		VARCHAR(20) NOT NULL ,
	   `handel`		VARCHAR(10) NOT NULL , 
	   `password` 	VARCHAR(20) NOT NULL , 
	   `email` 		VARCHAR(20) NOT NULL ,
	   `number`		INT(20) NOT NULL , 
	   `address` 	VARCHAR(30) NOT NULL , 
PRIMARY KEY (`id`)     ) ;







insert into mydatabase1.users (name,handel,password,email,address,number) values ('Luther','Luther','123','Luther@hotmail.fr','Louder',15547 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Yetta','Yetta','123','Yetta@hotmail.fr','Yellowhair',15553 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Jenniffer','Jenniffer','123','Jenniffer@hotmail.fr','Jantz',15559 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Sharyn','Sharyn','123','Sharyn@hotmail.fr','Shinault',15565 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Johnna','Johnna','123','Johnna@hotmail.fr','Jeanlouis',15571 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Arlena','Arlena','123','Arlena@hotmail.fr','Aguiar',15577 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Cheree','Cheree','123','Cheree@hotmail.fr','Cobos',15583 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Torie','Torie','123','Torie@hotmail.fr','Tibbets',15589 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Carline','Carline','123','Carline@hotmail.fr','Campuzano',15595 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Un','Un','123','Un@hotmail.fr','Ulmer',15601 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Herlinda','Herlinda','123','Herlinda@hotmail.fr','Hatfield',15607 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Monique','Monique','123','Monique@hotmail.fr','Morrow',15613 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Lyndsay','Lyndsay','123','Lyndsay@hotmail.fr','Lefkowitz',15619 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Maximo','Maximo','123','Maximo@hotmail.fr','Mayville',15625 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Isidra','Isidra','123','Isidra@hotmail.fr','Isabel',15631 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Bradford','Bradford','123','Bradford@hotmail.fr','Barr',15637 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Caitlyn','Caitlyn','123','Caitlyn@hotmail.fr','Corney',15643 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Doyle','Doyle','123','Doyle@hotmail.fr','Debonis',15649 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Monet','Monet','123','Monet@hotmail.fr','Mateo',15655 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Sylvie','Sylvie','123','Sylvie@hotmail.fr','Shrader',15661 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Jonna','Jonna','123','Jonna@hotmail.fr','January',15667 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Shirl','Shirl','123','Shirl@hotmail.fr','Seales',15673 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Fumiko','Fumiko','123','Fumiko@hotmail.fr','Fey',15679 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Sheena','Sheena','123','Sheena@hotmail.fr','Stoecker',15685 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Raylene','Raylene','123','Raylene@hotmail.fr','Ribera',15691 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Jayna','Jayna','123','Jayna@hotmail.fr','Jehle',15697 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Waylon','Waylon','123','Waylon@hotmail.fr','Wigington',15703 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Chere','Chere','123','Chere@hotmail.fr','Coto',15709 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Tyron','Tyron','123','Tyron@hotmail.fr','Trapani',15715 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Belle','Belle','123','Belle@hotmail.fr','Boisvert',15721 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Ardelle','Ardelle','123','Ardelle@hotmail.fr','Alfaro',15727 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Hyo','Hyo','123','Hyo@hotmail.fr','Heavener',15733 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Cari','Cari','123','Cari@hotmail.fr','Cowgill',15739 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Hector','Hector','123','Hector@hotmail.fr','Hartwell',15745 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Yesenia','Yesenia','123','Yesenia@hotmail.fr','Yonts',15751 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Phebe','Phebe','123','Phebe@hotmail.fr','Pieroni',15757 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Pa','Pa','123','Pa@hotmail.fr','Peagler',15763 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Reagan','Reagan','123','Reagan@hotmail.fr','Rucker',15769 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Amber','Amber','123','Amber@hotmail.fr','Amundsen',15775 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Lizabeth','Lizabeth','123','Lizabeth@hotmail.fr','Linares',15781 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Dimple','Dimple','123','Dimple@hotmail.fr','Dulaney',15787 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Louisa','Louisa','123','Louisa@hotmail.fr','Latch',15793 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Merrie','Merrie','123','Merrie@hotmail.fr','Mcconkey',15799 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Collen','Collen','123','Collen@hotmail.fr','Crisman',15805 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Deshawn','Deshawn','123','Deshawn@hotmail.fr','Dory',15811 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Cathi','Cathi','123','Cathi@hotmail.fr','Curto',15817 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Honey','Honey','123','Honey@hotmail.fr','Hadsell',15823 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Gerald','Gerald','123','Gerald@hotmail.fr','Gowers',15829 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Esther','Esther','123','Esther@hotmail.fr','Evins',15835 );
insert into mydatabase1.users (name,handel,password,email,address,number) values ('Gwendolyn','Gwendolyn','123','Gwendolyn@hotmail.fr','Gildea',15841 );


















CREATE TABLE `mydatabase1`.`gallery_images` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `date` varchar(40) NOT NULL,
  `src` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ;










insert into gallery_images (date,src) values ('20 March 2016','gallery/img1.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img2.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img3.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img4.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img5.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img6.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img7.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img8.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img9.jpg');
insert into gallery_images (date,src) values ('20 March 2016','gallery/img10.jpg');



















CREATE TABLE `mydatabase1`.`contact` ( 
		`id` INT(6) NOT NULL AUTO_INCREMENT ,
	 	`name` VARCHAR(20) NOT NULL , 
	    `email` VARCHAR(20) NOT NULL ,
	    `country` VARCHAR(20) NOT NULL , 
	    `address` VARCHAR(20) NOT NULL ,
  	    `phone` INT(20) NOT NULL ,
	    `subject` VARCHAR(30) NOT NULL , 
	    `message` TEXT NOT NULL , 
PRIMARY KEY (`id`)) ;





CREATE TABLE mydatabase1.blog  (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `src` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `content` text NOT NULL,
 PRIMARY KEY (`id`)
                        ) ;






INSERT INTO `blog` (`id`, `src`, `title`, `content`) VALUES ('1', 'img/blog/blog1.jpg', ' first step into the world', 'If you’re an aspiring entrepreneur, but not quite ready to give up your day job, you might be thinking about a side hustle — a business you can run in your spare time. We’ve got some advice on how to do it, some pitfalls to watch out for, and how to know when it’s time to make your side hustle your full-time job. In this TGIM short, you''ll... Learn why a side business is a smart first step into the world of entrepreneurship Find out why starting small is the key to accomplishing something big Discover when to quit your day job and focus entirely on your new project Check out the full short below:'), (NULL, 'img/blog/blog2.jpg', 'eat and sleep', 'If you’re an aspiring entrepreneur, but not quite ready to give up your day job, you might be thinking about a side hustle — a business you can run in your spare time. We’ve got some advice on how to do it, some pitfalls to watch out for, and how to know when it’s time to make your side hustle your full-time job. In this TGIM short, you''ll... Learn why a side business is a smart first step into the world of entrepreneurship Find out why starting small is the key to accomplishing something big Discover when to quit your day job and focus entirely on your new project Check out the full short below:'), (NULL, 'img/blog/blog3.jpg', 'starting small is the key ', 'If you’re an aspiring entrepreneur, but not quite ready to give up your day job, you might be thinking about a side hustle — a business you can run in your spare time. We’ve got some advice on how to do it, some pitfalls to watch out for, and how to know when it’s time to make your side hustle your full-time job. In this TGIM short, you''ll... Learn why a side business is a smart first step into the world of entrepreneurship Find out why starting small is the key to accomplishing something big Discover when to quit your day job and focus entirely on your new project Check out the full short below:'), (NULL, 'img/blog/blog4.jpg', 'Modern fun', 'If you’re an aspiring entrepreneur, but not quite ready to give up your day job, you might be thinking about a side hustle — a business you can run in your spare time. We’ve got some advice on how to do it, some pitfalls to watch out for, and how to know when it’s time to make your side hustle your full-time job. In this TGIM short, you''ll... Learn why a side business is a smart first step into the world of entrepreneurship Find out why starting small is the key to accomplishing something big Discover when to quit your day job and focus entirely on your new project Check out the full short below:'), (NULL, 'img/blog/blog5.jpg', 'do not work', 'If you’re an aspiring entrepreneur, but not quite ready to give up your day job, you might be thinking about a side hustle — a business you can run in your spare time. We’ve got some advice on how to do it, some pitfalls to watch out for, and how to know when it’s time to make your side hustle your full-time job. In this TGIM short, you''ll... Learn why a side business is a smart first step into the world of entrepreneurship Find out why starting small is the key to accomplishing something big Discover when to quit your day job and focus entirely on your new project Check out the full short below:');