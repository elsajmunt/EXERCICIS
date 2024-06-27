-- 1. Llista els codis d'oficina dels empleats. (cada codi d'oficina només pot aparèixer una vegada)
-- SELECT DISTINCT oficina FROM empleats WHERE oficina IS NOT NULL; 
-- 2. Llista el nom dels empleats de l’oficina 12 que tinguin més de 30 anys
-- SELECT nom, oficina, edat FROM empleats WHERE oficina='12' AND edat >'30';
-- 3. Llista els empleats  (numemp, nom) que tinguin vendes que superen el seu salari .
-- SELECT numemp, nom FROM empleats WHERE vendes > salari;
-- 4. Llista els empleats (numemp, nom) contractats amb data anterior a l’1 de gener de 1988.
-- SELECT numemp, nom, contracte FROM empleats WHERE contracte < '1988-01-01'; 
-- 5. Fes el mateix que en la consulta 4 però utilitzant l’any. 
-- SELECT numemp, nom, contracte FROM empleats WHERE year(contracte) < 1988; 
-- 6. Llista les oficines que tenen unes vendes per sota del 80% del seu objectiu. 
-- SELECT oficina, vendes, objectiu FROM oficines WHERE vendes < objectiu; -- Falta 80%





