-- Tabla state (estado)
CREATE TABLE state (
    id_state INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

-- Tabla municipal (municipios)
CREATE TABLE municipal (
    id_municipal INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_state INT UNSIGNED NOT NULL,
    name VARCHAR(50) NOT NULL,
    zip_code INT NOT NULL,
    FOREIGN KEY (id_state) REFERENCES state(id_state)
);

-- Tabla address (direcciones)
CREATE TABLE address (
    id_address INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_municipal INT UNSIGNED,
    name VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_municipal) REFERENCES municipal(id_municipal)
);

-- Tabla people (personas)
CREATE TABLE people (
    id_person INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_state INT UNSIGNED NOT NULL,
    id_municipal INT UNSIGNED NOT NULL,
    id_address INT UNSIGNED NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name_paternal VARCHAR(50) NOT NULL,
    last_name_maternal VARCHAR(50) NOT NULL,
    phone_number VARCHAR(10) NOT NULL,
    date_born DATE NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATE NOT NULL,
    FOREIGN KEY (id_state) REFERENCES state (id_state),
    FOREIGN KEY (id_municipal) REFERENCES municipal(id_municipal),
    FOREIGN KEY (id_address) REFERENCES address(id_address)
);

-- Tabla suppliers (proveedores)
CREATE TABLE suppliers (
    id_supplier INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(50) NOT NULL,
    supplier_name VARCHAR(50) NOT NULL,
    products VARCHAR(300) NOT NULL,
    status TINYINT NOT NULL,
    observations TEXT NOT NULL,
    created_at DATE NOT NULL,
    id_person INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_person) REFERENCES people(id_person)
);

-- Tabla jobs (trabajos)
CREATE TABLE jobs (
    id_job INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    salary FLOAT NOT NULL,
    working_hours INT NOT NULL
);

-- Tabla status_job (estado del empleo)
CREATE TABLE status_job (
    id_status_job INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL
);

-- Tabla employees (empleados)
CREATE TABLE employees (
    id_employee INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_status_job INT UNSIGNED NOT NULL,
    id_job INT UNSIGNED NOT NULL,
    hiring_at DATE NOT NULL,
    dismissed_at DATE NOT NULL,
    id_person INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_status_job) REFERENCES status_job(id_status_job),
    FOREIGN KEY (id_job) REFERENCES jobs(id_job),
    FOREIGN KEY (id_person) REFERENCES people(id_person)
);

-- Tabla customers (clientes)
CREATE TABLE customers (
    id_customer INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    chest_circumference DECIMAL(6,2) NOT NULL,
    waist_circumference DECIMAL(6,2) NOT NULL,
    hip_circumference DECIMAL(6,2) NOT NULL,
    inner_leg_length DECIMAL(6,2) NOT NULL,
    outer_leg_length DECIMAL(6,2) NOT NULL,
    sleeve_length DECIMAL(6,2) NOT NULL,
    shoulder_width DECIMAL(6,2) NOT NULL,
    neck_circumference DECIMAL(6,2) NOT NULL,
    front_torso_length DECIMAL(6,2) NOT NULL,
    back_torso_length DECIMAL(6,2) NOT NULL,
    created_at DATE NOT NULL,
    id_person INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_person) REFERENCES people(id_person)
);

-- Tabla materials (materiales)
CREATE TABLE materials (
    id_material INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(15) NOT NULL,
    stock INT NOT NULL
);

-- Tabla supply (suministros)
CREATE TABLE supply (
    id_supply INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_material INT UNSIGNED NOT NULL,
    id_supplier INT UNSIGNED NOT NULL,
    price DECIMAL(10,2) UNSIGNED NOT NULL,
    quantity TINYINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_material) REFERENCES materials(id_material),
    FOREIGN KEY (id_supplier) REFERENCES suppliers(id_supplier)
);
-- _______________________________________________________________
-- Tabla services (servicios)
CREATE TABLE services (
    id_service BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_customer INT UNSIGNED NOT NULL,
    cost DECIMAL(10,2) NOT NULL,
    extra_cost DECIMAL(10,2) NULL,
    received_at DATE NOT NULL,
    received_by INT NOT NULL,
    delivery_at DATE NULL,
    delivery_by INT NULL,
    observations TEXT NULL,
    FOREIGN KEY (id_customer) REFERENCES customers(id_customer),
    FOREIGN KEY (received_by) REFERENCES employees(id_employee),
    FOREIGN KEY (delivery_by) REFERENCES employees(id_employee)
);

-- Tabla required (materiales requeridos para cada servicio)
CREATE TABLE required (
    id_service BIGINT UNSIGNED NOT NULL,
    id_material INT UNSIGNED NOT NULL,
    quantity TINYINT NOT NULL,
    PRIMARY KEY (id_service, id_material),
    FOREIGN KEY (id_service) REFERENCES services(id_service),
    FOREIGN KEY (id_material) REFERENCES materials(id_material)
);

-- Crear la tabla user_types (tipos de usuario)
CREATE TABLE user_types (
    id_type INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

-- Crear la tabla users
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_employee INT,  -- Clave foránea que referencia a la tabla employees
    created_at DATE NOT NULL,
    id_type INT,  -- Clave foránea que referencia a la tabla user_types
    FOREIGN KEY (id_employee) REFERENCES employees(id_employee),
    FOREIGN KEY (id_type) REFERENCES user_types(id_type)
);
