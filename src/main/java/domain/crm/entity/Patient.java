package domain.crm.entity;

import java.util.Date;

import domain.hr.entity.Person;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:02:06 PM
 */
public class Patient extends Person {

	private int id;
	private Date registerDate;
	private String guardian;
	private String guardianPhone;
	private MedicalRecord m_MedicalRecord;
	public PatientVisit m_PatientVisit;

	public Patient(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	/**
	 * 
	 * @param id
	 */
	public void setId(int id){
		this.id = id;
	}

	public int getId(){
		return 0;
	}

	/**
	 * 
	 * @param reg
	 */
	public void setReg_Date(Date registerDate){
		this.registerDate = registerDate;
	}

	public Date getReg_Date(){
		return null;
	}

	/**
	 * 
	 * @param nama
	 */
	public void setPenanggungjawab(String guardian){
		this.guardian = guardian;
	}

	public String getPenanggungjawab(){
		return "";
	}

	/**
	 * 
	 * @param telp
	 */
	public void setNoTelp(String guardianPhone){
		this.guardianPhone = guardianPhone;
	}

	public String getNoTelp(){
		return "";
	}
}//end Patient