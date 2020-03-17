package model;

import java.util.Date;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:06 PM
 */
public class MedicalRecord {

	private int no;
	private String problem;
	private String diagnosis;
	private String treatment;
	private Date Date;
	private int patientId;
	private int physicianId;
	private Date patientVisit;

	public MedicalRecord(){

	}

	public void finalize() throws Throwable {

	}
	/**
	 * 
	 * @param complaint
	 * @param time
	 * @param patientId
	 */
	public MedicalRecord(String complaint, Date time, int patientId){

	}

	public int getPatientId(){
		return 0;
	}

	/**
	 * 
	 * @param complaint
	 */
	public void setComplaint(String complaint){

	}

	/**
	 * 
	 * @param diagnosis
	 */
	public void setDiagnosis(String diagnosis){

	}

	/**
	 * 
	 * @param id
	 */
	public void setPhysicianId(int id){

	}

	/**
	 * 
	 * @param treatment
	 */
	public void setTreatment(String treatment){

	}

	public String getProblem(){
		return "";
	}

	public String getDiagnosis(){
		return "";
	}

	public int getNo(){
		return 0;
	}

	public int getPhysicianId(){
		return 0;
	}

	public String getTreatment(){
		return "";
	}

	public Date getDate(){
		return null;
	}

	/**
	 * 
	 * @param id
	 */
	public void setId(int id){

	}

	public Date getVisit(){
		return null;
	}

	/**
	 * 
	 * @param visit
	 */
	public void setVisit(Date visit){

	}
}//end MedicalRecord