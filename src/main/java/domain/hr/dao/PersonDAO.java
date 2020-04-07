package domain.hr.dao;

import domain.hr.entity.Person;
import org.springframework.data.jpa.repository.JpaRepository;

public interface PersonDAO extends JpaRepository<Person, Integer>{

}
