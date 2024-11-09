<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pw_bd";
 
$script = "CREATE DATABASE PW_BD;
        USE PW_BD;
        CREATE TABLE PRODUTOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            DESCRICAO VARCHAR(150) NOT NULL,
            CODIGO_BARRA VARCHAR(25) NOT NULL,
            IMAGEM VARCHAR(50),
            VALOR DECIMAL(10,2) NOT NULL,
            ATIVO BIT NOT NULL
 
        );
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Amendoin verde','73173172317732',5.50, 1);
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Goabinha','12313123131123',1.50, 1);
        INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRA, ATIVO) VALUES
        ('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1),
        ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1),
        ('Smartphone XPro - 128GB, Câmera 48MP', 1999.00, '1234567890125', 1),
        ('Caderno Universitário - 200 Folhas', 29.90, '1234567890126', 1),
        ('Mochila de Couro - Elegante e Espaçosa', 249.90, '1234567890127', 1),
        ('Fone de Ouvido Bluetooth - Cancelamento de Ruído', 149.90, '1234567890128', 1),
        ('Relógio Digital - À Prova D\'água', 199.90, '1234567890129', 1),
        ('Lavadora de Roupas - 10Kg', 1599.00, '1234567890130', 1),
        ('Batedeira Elétrica - 5 Velocidades', 399.90, '1234567890131', 1),
        ('Kit de Maquiagem - 12 Peças', 89.90, '1234567890132', 1),
        ('Cafeteira Elétrica - 12 Xícaras', 299.90, '1234567890133', 1),
        ('Conjunto de Panelas - Antiaderente', 349.90, '1234567890134', 1),
        ('TV LED 50\" - Full HD', 2499.00, '1234567890135', 1),
        ('Geladeira Inverse - 450 Litros', 3499.00, '1234567890136', 1),
        ('Assento de Carro - Conforto e Segurança', 199.90, '1234567890137', 1),
        ('Conjunto de Facas de Cozinha - 6 Peças', 129.90, '1234567890138', 1),
        ('Roupão de Banho - Microfibra', 89.90, '1234567890139', 1),
        ('Aspirador de Pó - Sem Fio', 599.90, '1234567890140', 1),
        ('Secador de Cabelo - 2200W', 199.90, '1234567890141', 1),
        ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1);
 
        CREATE TABLE CATEGORIAS(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOME VARCHAR(80) NOT NULL
            );
 
            INSERT INTO CATEGORIAS (NOME) VALUES
            ('Roupas'),
            ('Eletrônicos'),
            ('Eletrodomésticos'),
            ('Utensílios de Cozinha'),
            ('Papeleria'),
            ('Acessórios'),
            ('Comidas');
 
            ALTER TABLE PRODUTOS
            ADD COLUMN CATEGORIA_ID INT;
 
            ALTER TABLE PRODUTOS
            ADD CONSTRAINT FK_PRODUTOS_CATEGORIAS
            FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIAS ( ID );"
        ; 
        <?php
       
        $host = 'localhost'; 
        $user = 'root'; 
        $password = ''; 
        $dbname = 'sistema'; 
    
     
        $conn = new mysqli($host, $user, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        
        if ($conn->multi_query($sql)) {
            echo "Tabelas criadas com sucesso!";
        } else {
            echo "Erro ao criar tabelas: " . $conn->error;
        }
        ?>
        <?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'sistema';
        
        $conn = new mysqli($host, $user, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }
        ?>
?>