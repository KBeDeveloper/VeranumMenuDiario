INSERT INTO 
    `comida`(`COMIDA_ID`, `COMIDA_NOMBRE`, `COMIDA_DESCRIPCION`, `COMIDA_TIPO`, `COMIDA_PRECIO`) 
VALUES 
    (9,"Desayuno Americano","Rico desayuno con tostadas y bacon",1,5000),
    (10,"Desayuno Continental","Desayuno saludable para compartir con tu pareja",1,4000),
    (11,"Lasagna","Deliciosa Lasagna de carne para disfrutar en familia", 2,8000),
    (12,"Betabeles y Verduras Asadas al horno con quinua", "Menu Vegetariano para disfrutar en un dia soleado",2,7000),
    (13,"Once Simple","Merienda Simple",3,2000),
    (14,"Once Grande","Merienda Grande",3,4000),
    (15,"Salmon a la Griega","Menu optimo para compartir con su pareja",4,10006),
    (16,"Suprema grillada","Deliciosa Cena para terminar el dia con broche de oro",4,15000);

INSERT INTO `stock`(`STOCK_NOMBRE`, `STOCK_CANT_DISPONIBLE`) 
VALUES 
("Huevo",10000),
("Bacon",10000),
("Pan",10000),
("Cereal",10000),
("Pasta",10000),
("Carne",20000),
("Cebolla",5000),
("Tomate",9000),
("Te",3000),
("Jamon",5940),
("Waffles",5000),
("Salmon",3500),
("Arroz",5000),
("Sopa",4000),
("Ajo",10000),
("Betabeles",10000);

INSERT INTO `insumo_comida`(`INSUMO_COMIDA_COMIDA_ID`, `INSUMO_COMIDA_STOCK_ID`) 
VALUES (9,1),(9,2),(10,3),(10,4),(11,5),(11,6),(12,7),
       (12,8),(13,9),(13,10),(14,11),(14,12),(15,13),
       (15,14),(16,15),(16,16);