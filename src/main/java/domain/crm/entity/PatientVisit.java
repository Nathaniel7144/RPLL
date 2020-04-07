package domain.crm.entity;

import java.util.Date;

/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:26:20 PM
 */
public class PatientVisit {

	private Date starttime;
	private Date endtime;
	private int patientId;
	private boolean isTreated;

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
		this.starttime = time;
	}

	public Date getEnd(){
		return null;
	}

	/**
	 * 
	 * @param time
	 */
	public void setEnd(Date time){
		this.endtime = time;
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