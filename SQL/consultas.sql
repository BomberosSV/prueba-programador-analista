SELECT 
CONCAT(c.FirstName , " " , c.LastName) AS "Cliente", 
c.Country AS "País", 
i.Total AS "Monto Gastado"
FROM customer c
INNER JOIN invoice i ON i.CustomerId = c.CustomerId
ORDER BY i.Total DESC;

SELECT g.Name AS "Género", 
COUNT(t.TrackId) AS Total 
FROM  genre g
INNER JOIN track t ON t.GenreId = g.GenreId
GROUP BY g.GenreId;

SELECT 
CONCAT(c.FirstName, " ", c.LastName) AS "Cliente",
c.Company AS "Empresa", 
c.Country AS "País"  
FROM customer AS c
WHERE c.Country <> "USA"
ORDER BY c.Country;