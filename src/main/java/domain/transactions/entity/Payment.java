package domain.transactions.entity;

import java.util.Date;

import domain.crm.entity.PatientVisit;

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
	public  PatientVisit m_PatientVisit;

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
	 * @param change
	 */
	public void setChange(double change){
		this.change = change;
	}

	/**
	 * 
	 * @param payout
	 */
	public void setPayout(double payout){
		this.payout = payout;
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
	public void setPatientVisit(Date patientVisit){
		this.patientVisit = patientVisit;
	}
}//end Payment