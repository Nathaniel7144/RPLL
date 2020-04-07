package domain.crm.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import domain.crm.dao.PatientDAO;
import domain.crm.entity.Patient;

public class PatientServices {

	@Autowired
	private PatientDAO dao;
	
	public List<Patient> listAll() {
        return dao.findAll();
    }
     
    public void save(Patient patient) {
        dao.save(patient);
    }
     
    public Patient get(int id) {
        return dao.findById(id).get();
    }
     
    public void delete(int id) {
        dao.deleteById(id);
    }
	
}
