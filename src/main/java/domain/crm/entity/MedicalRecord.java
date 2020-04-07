package domain.crm.entity;

import java.util.Date;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:06 PM
 */
public class MedicalRecord {

	private int id;
	private String problem;
	private String diagnosis;
	private String treatment;
	private int patientId;
	private int physicianId;
	private Date patientVisitTime;

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


	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getProblem() {
		return problem;
	}

	public void setProblem(String problem) {
		this.problem = problem;
	}

	public String getDiagnosis() {
		return diagnosis;
	}

	public void setDiagnosis(String diagnosis) {
		this.diagnosis = diagnosis;
	}

	public String getTreatment() {
		return treatment;
	}

	public void setTreatment(String treatment) {
		this.treatment = treatment;
	}

	public int getPatientId() {
		return patientId;
	}

	public void setPatientId(int patientId) {
		this.patientId = patientId;
	}

	public int getPhysicianId() {
		return physicianId;
	}

	public void setPhysicianId(int physicianId) {
		this.physicianId = physicianId;
	}

	public Date getPatientVisitTime() {
		return patientVisitTime;
	}

	public void setPatientVisitTime(Date patientVisitTime) {
		this.patientVisitTime = patientVisitTime;
	}
}//end MedicalRecord