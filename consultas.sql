SELECT id FROM turnos WHERE id NOT IN ( SELECT turno FROM reservas WHERE id_pista = '1' AND fecha = '2023-03-19' );
