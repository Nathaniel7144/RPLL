package domain.crm.dao;

import org.springframework.data.jpa.repository.JpaRepository;

import domain.crm.entity.Patient;
import domain.hr.entity.Person; 

public interface PatientDAO extends JpaRepository<Patient, Integer>{
	
}
