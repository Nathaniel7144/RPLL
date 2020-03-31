package domain.entity;

import java.util.Date;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:08 PM
 */
public class Payment {

	private int id;
	private double payout;
	private double change;
	private Date time;
	private Date patientVisit;
	public PatientVisit m_PatientVisit;

	public Payment(){

	}

	public void finalize() throws Throwable {

	}
	/**
	 * 
	 * @param payout
	 * @param time
	 */
	public Payment(int payout, Date time){

	}

	/**
	 * 
	 * @param transactionId
	 */
	public void setTransactionId(int transactionId){

	}

	/**
	 * 
	 * @param change
	 */
	public void setChange(double change){

	}

	/**
	 * 
	 * @param payout
	 */
	public void setPayout(double payout){

	}

	/**
	 * 
	 * @param id
	 */
	public void setId(int id){

	}

	public int getId(){
		return 0;
	}

	public double getPayout(){
		return 0;
	}

	public double getChange(){
		return 0;
	}

	public Date getTime(){
		return null;
	}

	public Date getPatientVisit(){
		return null;
	}

	/**
	 * 
	 * @param visit
	 */
	public void setPatientVisit(Date visit){

	}
}//end Payment