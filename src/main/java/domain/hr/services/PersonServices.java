package domain.hr.services;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import domain.hr.dao.PersonDAO;
import domain.hr.entity.Person;

public class PersonServices {

	@Autowired
	private PersonDAO dao;

	public List<Person> listAll() {
        return dao.findAll();
    }
     
    public void save(Person person) {
        dao.save(person);
    }
     
    public Person get(int id) {
        return dao.findById(id).get();
    }
     
    public void delete(int id) {
        dao.deleteById(id);
    }
	
}
