package domain;

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
	public MedicalRecord m_MedicalRecord;

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

	}

	public Date getEnd(){
		return null;
	}

	/**
	 * 
	 * @param time
	 */
	public void setEnd(Date time){

	}

	public int getPatientId(){
		return 0;
	}

	/**
	 * 
	 * @param id
	 */
	public void setPatientId(int id){

	}

	public int getPaymentId(){
		return 0;
	}

	/**
	 * 
	 * @param payment
	 */
	public void setPaymentId(int payment){

	}

	/**
	 * 
	 * @param treated
	 */
	public void setTreated(boolean treated){

	}

	public boolean getTreated(){
		return false;
	}
}//end PatientVisit