package domain.crm.entity;

import java.util.Date;

/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:26:20 PM
 */
public class PatientVisit {

	private Date start;
	private Date end;
	private int patientId;
	private int paymentId;
	private boolean isTreated;
	public MedicalRecord medicalRecord;

	public PatientVisit(){

	}

	public void finalize() throws Throwable {

	}
	public Date getStart(){
		return null;
	}

	/**
	 * 
	 * @param time
	 */
	public void setStart(Date time){
		this.start = time;
	}

	public Date getEnd(){
		return null;
	}

	/**
	 * 
	 * @param time
	 */
	public void setEnd(Date time){
		this.end = time;
	}

	public int getPatientId(){
		return 0;
	}

	/**
	 * 
	 * @param id
	 */
	public void setPatientId(int id){
		this.patientId = id;
	}

	public int getPaymentId(){
		return 0;
	}

	/**
	 * 
	 * @param payment
	 */
	public void setPaymentId(int paymentId){
		this.paymentId = paymentId;
	}

	/**
	 * 
	 * @param treated
	 */
	public void setTreated(boolean isTreated){
		this.isTreated = isTreated;
	}

	public boolean getTreated(){
		return false;
	}
}//end PatientVisit