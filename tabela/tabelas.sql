CREATE TABLE pets 
( 
 nomepet varchar(30) NOT NULL,  
 codpet INT AUTO_INCREMENT PRIMARY KEY,  
 codusuario INT,
 raça varchar(30) NOT NULL,  
 sexo varchar(30) NOT NULL,  
 cidadepet varchar(30) NOT NULL,  
 porte varchar(30) NOT NULL,  
 idade varchar(30) NOT NULL,
 castrado varchar(3) NOT NULL,  
 imagem varchar(30) NOT NULL,
 status boolean DEFAULT 0

); 

CREATE TABLE usuarios
(   
 nomeusuario varchar(30) NOT NULL,  
 codusuario INT AUTO_INCREMENT PRIMARY KEY,  
 telefone varchar(30) NOT NULL,  
 sexo varchar(30) NOT NULL,  
 idade varchar(30) NOT NULL,  
 email varchar(30) NOT NULL,  
 status boolean,  
 cpf varchar(30) NOT NULL, 
 cep varchar(11) NOT NULL,
 cidade varchar(30) NOT NULL, 
 senha varchar(30) NOT NULL
); 

CREATE TABLE adocao
( 
 codadocao INT AUTO_INCREMENT PRIMARY KEY,   
 codpet INT,  
 codcuidador INT , 
 motivo varchar(80) NOT NULL,
 status boolean DEFAULT 0,
 reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
); 

ALTER TABLE pets ADD  FOREIGN KEY(codusuario) REFERENCES usuarios (codusuario);
ALTER TABLE adocao ADD FOREIGN KEY(codpet) REFERENCES pets (codpet);
ALTER TABLE adocao ADD FOREIGN KEY(codcuidador) REFERENCES usuarios  (codusuario);
