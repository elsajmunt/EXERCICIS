-- 1. Añadir un nuevo empleado con DNI 12345678R que se llama Joan Soler Pineda y es Director general.
-- INSERT INTO empleados VALUES ('', '12345678R', 'Joan', 'Soler Pineda', 'Director general'); 

-- 2. Añadir el nuevo empleado al vuelo con identificador 12 ocupando el puesto de Piloto.
/* SELECT empleados.IdEmpleado, vuelo.IdVuelo, tripulacion.PuestoOcupado
FROM ((empleados
INNER JOIN vuelo ON empleados.IdEmpleado = vuelo.IdVuelo)
INNER JOIN tripulacion ON empleados.IdTripulacion = tripulacion.IdEmpleado); */

-- 3. Listado de vuelos con origen en Pemuco o San Pedro con fecha de salida posterior al 2017-12-01
-- SELECT Origen FROM vuelo WHERE Origen='Pemuco' OR 'San Pedro' AND Fecha > 2017-12-01; -- Falta Data..

--  4. Listado de aviones cuya autonomía es más grande que 4.
-- SELECT IdAvion, Matricula, AutonomiaVuelo FROM avion WHERE AutonomiaVuelo > 4; 

-- 5. Lista el nombre , apellidos, dni y puesto ocupado de la tripulación del vuelo con id 99
/* SELECT empleados.IdEmpleado, empleados.Nombre, empleados.Apellidos, tripulacion.PuestoOcupado, vuelo.IdAvion
FROM ((empleados
INNER JOIN tripulacion ON empleados.IdEmpleado = tripulacion.IdEmpleado)
INNER JOIN vuelo ON tripulacion.IdVuelo = vuelo.IdVuelo); 
WHERE IdVuelo FROM vuelo = '99'; */ 

-- 6. Lista el nombre, el apellido y el asiento de los pasajeros cuyo nombre comienza por H y viajaron en el vuelo con identificador 77
SELECT Nombre, Apellidos FROM pasajeros WHERE Nombre LIKE 'H%'; 

-- 7. Lista el nombre, apellidos y dni de los pasajeros de vuelos con origen Bellevue. Mostrad el resultado ordenado por apellido de la Z→A.
SELECT Nombre, Apellidos, DNI FROM pasajeros ORDER BY Nombre; 



