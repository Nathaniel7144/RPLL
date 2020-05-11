CREATE TABLE person (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50) NOT NULL,
   address VARCHAR(100) NOT NULL,
   gender INT NOT NULL,
   birthday DATE NOT NULL,
   bloodtype CHAR(2) NOT NULL,
   phone VARCHAR(15) NOT NULL,
   religion VARCHAR(20) NOT NULL,
   nik VARCHAR(16),
   PRIMARY KEY (id)
);

CREATE TABLE patient (
   id INT NOT NULL AUTO_INCREMENT,
   person_id INT NOT NULL,
   register DATETIME NOT NULL,
   guardian VARCHAR(50) NOT NULL,
   guardianphone VARCHAR(15) NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (person_id) REFERENCES person(id)
);

CREATE TABLE patientvisit(
   id INT NOT NULL,
	starttime DATETIME NOT NULL,
	endtime DATETIME NOT NULL,
	patient_id INT NOT NULL,
	istreated BOOLEAN NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (patient_id) REFERENCES patient (id)
);


CREATE TABLE employee(
   emp_id INT NOT NULL,
   email VARCHAR(200) NOT NULL,
   position VARCHAR(200) NOT NULL,
   pwd CHAR(8) NOT NULL,
   worksince DATETIME NOT NULL,
   person_id INT,
   PRIMARY KEY (emp_id),
   FOREIGN KEY (person_id) REFERENCES person (id)
);
CREATE TABLE physician(
   id INT NOT NULL,
   specialist VARCHAR(200) NOT NULL,
   emp_id INT,
   PRIMARY KEY (id),
   FOREIGN KEY (emp_id) REFERENCES employee(emp_id)
);
CREATE TABLE pharmacy(
   id INT NOT NULL,
   competency VARCHAR(200) NOT NULL,
   emp_id INT,
   PRIMARY KEY (id),
   FOREIGN KEY (emp_id) REFERENCES employee(emp_id)
);
CREATE TABLE nurse(
   id INT NOT NULL,
   tipe VARCHAR(200) NOT NULL,
   emp_id INT,
   PRIMARY KEY (id),
   FOREIGN KEY (emp_id) REFERENCES employee (emp_id)
);
CREATE TABLE nonmedical(
   id INT NOT NULL,
   dept VARCHAR(200) NOT NULL,
   emp_id INT,
   PRIMARY KEY (id),
   FOREIGN KEY (emp_id) REFERENCES employee (emp_id)
);
CREATE TABLE vendor(
   ven_id INT NOT NULL,
   name VARCHAR (200) NOT NULL,
   address VARCHAR (200) NOT NULL,
   PRIMARY KEY (ven_id)
);
CREATE TABLE transaksi(
   id INT NOT NULL,
   tanggal DATETIME,
   PRIMARY KEY(id)
);
CREATE TABLE ven_trans(
   id INT NOT NULL,
   ven_id INT,
   trans_id INT,
   PRIMARY KEY (id),
   FOREIGN KEY (ven_id) REFERENCES vendor (ven_id),
   FOREIGN KEY (trans_id) REFERENCES transaksi(id)
);
CREATE TABLE product(
   id INT NOT NULL,
   name VARCHAR(200) NOT NULL,
   stock INT NOT NULL,
   PRIMARY KEY(id)
);
CREATE TABLE prodtrans(
   id INT NOT NULL,
   prod_id INT NOT NULL,
   trans_id INT NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (prod_id) REFERENCES product (id),
   FOREIGN KEY (trans_id) REFERENCES transaksi(id)
);
CREATE TABLE payment(
   id INT NOT NULL,
   paychange DOUBLE NOT NULL,
   patient_vist DATETIME,
   payout DOUBLE NOT NULL,
   patient_id INT NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (patient_id) REFERENCES patientvisit(id)
);
CREATE TABLE medicalrecord (
	id INT NOT NULL,
	problem VARCHAR(100) NOT NULL,
	diagnosis VARCHAR(100) NULL,
	treatment VARCHAR(100) NULL,
	patient_id INT NOT NULL,
	physician_id INT NOT NULL,
	patvist_id INT NOT NULL,
	PRIMARY KEY (id, patient_id),
	FOREIGN KEY (patient_id) REFERENCES patient (id),
	FOREIGN KEY (physician_id) REFERENCES physician (id),
	FOREIGN KEY (patvist_id) REFERENCES patientvisit (id)
);

