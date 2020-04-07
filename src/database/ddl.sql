CREATE TABLE person (
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(50) NOT NULL,
   address VARCHAR(100) NOT NULL,
   gender INT NOT NULL,
   birthday DATETIME NOT NULL,
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
	starttime DATETIME NOT NULL,
	endtime DATETIME NOT NULL,
	patient_id INT NOT NULL,
	istreated BOOLEAN NOT NULL,
	PRIMARY KEY (starttime, patient_id),
	FOREIGN KEY (patient_id) REFERENCES patient (id)
);

CREATE TABLE medicalrecord (
	id INT NOT NULL,
	problem VARCHAR(100) NOT NULL,
	diagnosis VARCHAR(100) NULL,
	treatment VARCHAR(100) NULL,
	patient_id INT NOT NULL,
	physician_id INT NOT NULL,
	patientvisit_time DATETIME NOT NULL,
	PRIMARY KEY (id, patient_id) NOT NULL,
	FOREIGN KEY (patient_id) REFERENCES patient (id),
	FOREIGN KEY (physician_id) REFERENCES physician (id),
	FOREIGN KEY patientvisit_time REFERENCES patientvisit (starttime)
);