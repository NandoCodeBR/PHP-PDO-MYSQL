CREATE TABLE usuario(
	id int not null primary key auto_increment,
	nome varchar(50) not null,
	email varchar(100) not null,
	senha varchar(32) not null
);
INSERT INTO usuario (nome, email, senha) 
	VALUES ("Fernando", "Fernando123@teste.com", 1234
);

INSERT INTO usuario (nome, email, senha) 
	VALUES ("Gabriel", "Gabriel@teste.com", 1234
);

INSERT INTO usuario (nome, email, senha) 
	VALUES ("Luiz", "Luiz@teste.com", 1234
);

INSERT INTO usuario (nome, email, senha) 
	VALUES ("Fabricio", "Fabricio@teste.com", 1234
); 