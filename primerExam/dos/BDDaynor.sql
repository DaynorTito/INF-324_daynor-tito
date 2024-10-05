CREATE DATABASE BDDaynor;

CREATE TABLE persona (
    ci VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    paterno VARCHAR(100) NOT NULL,
    materno VARCHAR(100),
    direccion VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'duenio', 'funcionario') NOT NULL DEFAULT 'duenio',
);

CREATE TABLE catastro (
    id INT PRIMARY KEY,
    zona VARCHAR(100) NOT NULL,
    distrito VARCHAR(100),
    superficie DECIMAL(10, 2),
    xini DECIMAL(10, 6) NOT NULL,
    yini DECIMAL(10, 6) NOT NULL,
    xfin DECIMAL(10, 6) NOT NULL,
    yfin DECIMAL(10, 6) NOT NULL,
    ciDuenio VARCHAR(20) NOT NULL,
    FOREIGN KEY (ciDuenio) REFERENCES persona(ci)
);

CREATE TABLE IF NOT EXISTS distritos (
    nombre VARCHAR(255) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS zonas (
    nombre VARCHAR(255),
    distrito VARCHAR(255),
    FOREIGN KEY (distrito) REFERENCES distritos(nombre)
);

INSERT INTO distritos (nombre) VALUES
('Distrito 1'),
('Distrito 2'),
('Distrito 3'),
('Distrito 6'),
('Distrito 8'),
('Distrito 9');

INSERT INTO zonas (nombre, distrito) VALUES
('Villa Fatima', 'Distrito 1'),
('Villa Lobos', 'Distrito 1'),
('Villa Copacabana', 'Distrito 2'),
('Villa Dolores', 'Distrito 3'),
('Zona Norte', 'Distrito 3'),
('Zona Sur', 'Distrito 6'),
('Max Paredes', 'Distrito 6'),
('San Pedro', 'Distrito 8'),
('Chuquiaguillo', 'Distrito 2'),
('Villa El Carmen', 'Distrito 2'),
('Pampahasi', 'Distrito 3'),
('Sopocachi', 'Distrito 3'),
('Centro', 'Distrito 1'),
('Villa Copacabana', 'Distrito 2'),
('Zona Sur', 'Distrito 6'),
('San Roque', 'Distrito 9');

INSERT INTO persona (ci, nombre, paterno, materno, direccion, contrasena, rol) VALUES
('123456', 'Juan', 'Perez', 'Gomez', 'Calle 1', 'admin123', 'admin'),
('234567', 'Maria', 'Lopez', 'Fernandez', 'Calle 2', 'admin123', 'funcionario'),
('345678', 'Carlos', 'Martinez', 'Rodriguez', 'Calle 3', 'admin123', 'duenio'),
('98765432', 'Ana', 'Garcia', 'Torres', 'Calle 4', 'admin123', 'duenio'),
('34567890', 'Luis', 'Gonzalez', 'Mendez', 'Calle 5', 'admin123', 'duenio'),
('09876543', 'Laura', 'Ramos', 'Castro', 'Calle 6', 'admin123', 'duenio'),
('45678901', 'Pedro', 'Vargas', 'Pinto', 'Calle 7', 'admin123', 'duenio'),
('10987654', 'Sofia', 'Gutierrez', 'Salinas', 'Calle 8', 'admin123', 'duenio'),
('56789012', 'David', 'Romero', 'Ortiz', 'Calle 9', 'admin123', 'funcionario'),
('21098765', 'Elena', 'Silva', 'Morales', 'Calle 10', 'admin123', 'admin');

INSERT INTO catastro (id, zona, distrito, superficie, xini, yini, xfin, yfin, ciDuenio) VALUES
(100, 'Villa Fatima', 'Distrito 1', 120.50, -16.500000, -68.150000, -16.510000, -68.160000, '98765432'),
(200, 'Villa Lobos', 'Distrito 1', 95.30, -16.501000, -68.151000, -16.511000, -68.161000, '34567890'),
(300, 'Villa Copacabana', 'Distrito 2', 210.70, -16.502000, -68.152000, -16.512000, -68.162000, '45678901'),
(201, 'Villa Dolores', 'Distrito 3', 300.80, -16.503000, -68.153000, -16.513000, -68.163000, '98765432'),
(101, 'Zona Norte', 'Distrito 3', 50.20, -16.504000, -68.154000, -16.514000, -68.164000, '34567890'),
(202, 'Zona Sur', 'Distrito 6', 400.60, -16.505000, -68.155000, -16.515000, -68.165000, '09876543'),
(301, 'Max Paredes', 'Distrito 6', 180.45, -16.506000, -68.156000, -16.516000, -68.166000, '45678901'),
(102, 'San Pedro', 'Distrito 8', 60.90, -16.507000, -68.157000, -16.517000, -68.167000, '10987654'),
(302, 'Chuquiaguillo', 'Distrito 2', 150.30, -16.508000, -68.158000, -16.518000, -68.168000, '56789012'),
(203, 'Villa El Carmen', 'Distrito 2', 170.40, -16.509000, -68.159000, -16.519000, -68.169000, '21098765'),
(303, 'Pampahasi', 'Distrito 3', 260.50, -16.510000, -68.160000, -16.520000, -68.170000, '345678'),
(103, 'Sopocachi', 'Distrito 3', 90.60, -16.511000, -68.161000, -16.521000, -68.171000, '345678'),
(304, 'Centro', 'Distrito 1', 220.70, -16.512000, -68.162000, -16.522000, -68.172000, '345678'),
(305, 'Villa Copacabana', 'Distrito 2', 130.80, -16.513000, -68.163000, -16.523000, -68.173000, '98765432'),
(204, 'Zona Sur', 'Distrito 6', 300.90, -16.514000, -68.164000, -16.524000, -68.174000, '34567890'),
(205, 'Villa Lobos', 'Distrito 1', 350.20, -16.515000, -68.165000, -16.525000, -68.175000, '09876543'),
(206, 'San Pedro', 'Distrito 8', 180.35, -16.516000, -68.166000, -16.526000, -68.176000, '45678901'),
(207, 'Chuquiaguillo', 'Distrito 2', 290.45, -16.517000, -68.167000, -16.527000, -68.177000, '10987654'),
(104, 'San Roque', 'Distrito 9', 310.30, -16.518000, -68.168000, -16.528000, -68.178000, '56789012'),
(206, 'Max Paredes', 'Distrito 6', 110.40, -16.519000, -68.169000, -16.529000, -68.179000, '21098765');

SELECT * FROM (
    SELECT 
        p.nombre, 
        p.paterno,
        p.materno,
        COUNT(CASE WHEN c.id LIKE '1%' THEN 1 END) AS nivel_alto,
        COUNT(CASE WHEN c.id LIKE '2%' THEN 1 END) AS nivel_medio,
        COUNT(CASE WHEN c.id LIKE '3%' THEN 1 END) AS nivel_bajo
    FROM persona p
    LEFT JOIN catastro c ON p.ci = c.ciDuenio
    GROUP BY p.nombre, p.paterno, p.materno

    UNION ALL

    SELECT 
        'TOTAL' AS nombre,
        '' AS paterno,
        '' AS materno,
        SUM(nivel_alto) AS nivel_alto,
        SUM(nivel_medio) AS nivel_medio,
        SUM(nivel_bajo) AS nivel_bajo
    FROM (
        SELECT 
            COUNT(CASE WHEN c.id LIKE '1%' THEN 1 END) AS nivel_alto,
            COUNT(CASE WHEN c.id LIKE '2%' THEN 1 END) AS nivel_medio,
            COUNT(CASE WHEN c.id LIKE '3%' THEN 1 END) AS nivel_bajo
        FROM persona p
        LEFT JOIN catastro c ON p.ci = c.ciDuenio
        GROUP BY p.ci
    ) AS subtotales
) AS personas_impuestos;


SELECT 
    CASE 
        WHEN c.id LIKE '1%' THEN 'Alto'
        WHEN c.id LIKE '2%' THEN 'Medio'
        WHEN c.id LIKE '3%' THEN 'Bajo'
        ELSE 'No Clasificado'
    END AS Tipo_Impuesto,
    COUNT(DISTINCT p.ci) AS Total_Personas
FROM persona p
LEFT JOIN catastro c ON p.ci = c.ciDuenio
GROUP BY Tipo_Impuesto

UNION ALL

SELECT 
    'TOTAL' AS Tipo_Impuesto,
    COUNT(DISTINCT p.ci) AS Total_Personas
FROM persona p
LEFT JOIN catastro c ON p.ci = c.ciDuenio
WHERE c.id IS NOT NULL;


