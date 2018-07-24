--
-- Bases de données :  `users & articles`
--

-- --------------------------------------------------------------------
SELECT u.*, a.*  FROM user u, articles a  WHERE a.id=10 AND a.id = c.id
