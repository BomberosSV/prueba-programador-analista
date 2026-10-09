USE chinook_autoincrement;

SELECT CONCAT(c.FirstName," ",c.LastName) AS "Nombre Completo", c.Country AS "Pais", i.Total FROM customer AS c
INNER JOIN invoice AS i ON i.CustomerId = c.CustomerId
ORDER BY i.Total DESC;

SELECT g.Name AS "Genero", COUNT(t.TrackId) AS Total FROM  genre AS g
INNER JOIN track AS t ON t.GenreId = g.GenreId
GROUP BY g.GenreId;

SELECT c.FirstName, c.LastName, c.Company, c.Country  FROM  customer AS c
WHERE c.Country != "USA"
ORDER BY c.Country;

