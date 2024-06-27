-- exercici_UF2C1P5 --
-- 1. Obtenir els codis dels productes que tenen existències iguals a zero o que apareguin en comandes de l’any 90. 
-- SELECT codprod, existencies FROM productes WHERE existencies=0; -- 1er-Productes
-- SELECT * FROM comanda WHERE year(data)=1990; -- 2on-Comanda
/* SELECT productes.codprod, existencies, data FROM productes
INNER JOIN linia_comanda ON productes.codprod = linia_comanda.codprod
INNER JOIN comanda ON comanda.numcomanda = linia_comanda.numcomanda
WHERE  productes.existencies=0 OR YEAR(comanda.data)=1990; */ 

-- 2. Obtenir una llista dels empleats amb les dades de la seva oficina (ciutat, regió). Volem que si un empleat no està assignat a cap oficina apareguin les dades de la seva oficina a nuls.
SELECT numemp, nom FROM empleats;  -- 1. Taula Empleats 
SELECT empleats.numemp, nom FROM empleats
INNER JOIN empleats ON oficines.oficina;  -- PENDENT ACABAR!!! <<<

