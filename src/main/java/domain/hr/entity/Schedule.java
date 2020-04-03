package domain.hr.entity;

import java.util.Date;

/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:26:17 PM
 */
public class Schedule {

	private String day;
	private Date start;
	private Date end;
	public Employee m_Employee;

	public Schedule(){

	}

	public void finalize() throws Throwable {

	}
	/**
	 * 
	 * @param day
	 */
	public void setDay(String day){
		this.day = day;
	}

	public String getDay(){
		return "";
	}

	/**
	 * 
	 * @param start
	 */
	public void setStart(Date start){
		this.start = start;
	}

	public Date getStart(){
		return null;
	}

	/**
	 * 
	 * @param end
	 */
	public void setEnd(Date end){
		this.end = end; 
	}

	public Date getEnd(){
		return null;
	}
}//end Schedule