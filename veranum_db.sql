CREATE TABLE IF NOT EXISTS USUARIO
(
    USUARIO_RUN         VARCHAR(15) PRIMARY KEY,
    USUARIO_DV          VARCHAR(1) NOT NULL,
    USUARIO_NOMBRE      VARCHAR(80) NOT NULL,
    USUARIO_APELLIDO    VARCHAR(80) DEFAULT NULL,
    USUARIO_CORREO      VARCHAR(300) NOT NULL,
    USUARIO_TIPO        INT NOT NULL,       -- 1: FUNCIONARIO .- 2: CLIENTE .- 3: PROVEEDOR
    USUARIO_TELEFONO    VARCHAR(18) DEFAULT NULL
);
-- SUBMODULO CLIENTE
CREATE TABLE IF NOT EXISTS MENU
(
    MENU_ID             INT PRIMARY KEY AUTO_INCREMENT,
    MENU_FECHA          DATE NOT NULL
);
CREATE TABLE IF NOT EXISTS COMIDA
(
    COMIDA_ID           INT PRIMARY KEY AUTO_INCREMENT,
    COMIDA_NOMBRE       VARCHAR(200) NOT NULL,
    COMIDA_DESCRIPCION  VARCHAR(500) NOT NULL,
    COMIDA_TIPO         INT NOT NULL,       -- 1: DESAYUNO .- 2: ALMUERZO .- 3: ONCE .- 4: CENA
    COMIDA_PRECIO       INT NOT NULL,
    COMIDA_MENU_ID      INT NOT NULL
);
CREATE TABLE IF NOT EXISTS RESERVA
(
    RESERVA_ID          INT PRIMARY KEY AUTO_INCREMENT,
    RESERVA_COMENSALES  INT NOT NULL,
    RESERVA_FECHA       DATE NOT NULL,
    RESERVA_HORA        DATETIME NOT NULL,
    RESERVA_CLIENTE_RUN VARCHAR(15) NOT NULL
);
CREATE TABLE IF NOT EXISTS COMIDA_RESERVA
(
    COMIDA_RESERVA_ID         INT PRIMARY KEY AUTO_INCREMENT,
    COMIDA_RESERVA_CANTIDAD   INT NOT NULL,
    COMIDA_RESERVA_RESERVA_ID INT NOT NULL,
    COMIDA_RESERVA_COMIDA_ID  INT NOT NULL
);
-- FIN SUBMODULO CLIENTE
--
-- SUBMODULO PEDIDO DE INSUMOS
CREATE TABLE IF NOT EXISTS PEDIDO
(
    PEDIDO_ID              INT PRIMARY KEY AUTO_INCREMENT,
    PEDIDO_SUBTOTAL        INT NOT NULL,
    PEDIDO_FUNCIONARIO_RUN VARCHAR(15) NOT NULL
);
CREATE TABLE IF NOT EXISTS INSUMO_PEDIDO
(
    INSUMO_PEDIDO_ID           INT PRIMARY KEY AUTO_INCREMENT,
    INSUMO_PEDIDO_CANTIDAD     INT NOT NULL,
    INSUMO_PEDIDO_PRECIO       INT NOT NULL,
    INSUMO_PEDIDO_PEDIDO_ID    INT NOT NULL,
    INSUMO_PEDIDO_STOCK_ID     INT NOT NULL
);
-- FIN SUBMODULO PEDIDO DE INSUMOS
--
CREATE TABLE IF NOT EXISTS STOCK
(
    STOCK_ID              INT PRIMARY KEY AUTO_INCREMENT,
    STOCK_CODE            INT NOT NULL,
    STOCK_NOMBRE          VARCHAR(60) NOT NULL,
    STOCK_CANT_DISPONIBLE INT NOT NULL,
    STOCK_COMIDA_ID       INT NOT NULL 
);


ALTER TABLE COMIDA ADD CONSTRAINT COMIDA_MENU_ID_FK FOREIGN KEY COMIDA (COMIDA_MENU_ID) REFERENCES MENU (MENU_ID);
ALTER TABLE RESERVA ADD CONSTRAINT RESERVA_CLIENTE_RUN_FK FOREIGN KEY RESERVA (RESERVA_CLIENTE_RUN) REFERENCES USUARIO (USUARIO_RUN);
ALTER TABLE COMIDA_RESERVA ADD CONSTRAINT COMIDA_RESERVA_RESERVA_ID_FK FOREIGN KEY COMIDA_RESERVA_RESERVA_ID REFERENCES RESERVA (RESERVA_ID);
ALTER TABLE COMIDA_RESERVA ADD CONSTRAINT COMIDA_RESERVA_COMIDA_ID_FK FOREIGN KEY COMIDA_RESERVA_COMIDA_ID REFERENCES COMIDA (COMIDA_ID);
ALTER TABLE PEDIDO ADD CONSTRAINT PEDIDO_FUNCIONARIO_ID_FK FOREIGN KEY PEDIDO (PEDIDO_FUNCIONARIO_ID) REFERENCES USUARIO (USUARIO_RUN);
ALTER TABLE INSUMO ADD CONSTRAINT INSUMO_PEDIDO_PEDIDO_ID_FK FOREIGN KEY INSUMO (INSUMO_PEDIDO_PEDIDO_ID) REFERENCES PEDIDO (PEDIDO_ID);
ALTER TABLE STOCK ADD CONSTRAINT STOCK_COMIDA_ID_FK FOREIGN KEY STOCK (STOCK_COMIDA_ID) REFERENCES COMIDA (COMIDA_ID); 