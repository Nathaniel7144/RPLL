package domain;

import java.util.Date;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:12:39 PM
 */
public abstract class Employee extends Person {

	private Date workSince;
	private int emp_id;
	private String position;
	private Schedule listSchedule;
	private String email;
	private String pwd;

	public Employee(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	/**
	 * 
	 * @param workSince
	 * @param retireAt
	 */
	public Employee(Date workSince, Date retireAt){

	}

	/**
	 * 
	 * @param email
	 * @param pwd
	 */
	public Employee(String email, String pwd){

	}

	/**
	 * 
	 * @param workSince
	 */
	public void setWorkSince(Date workSince){

	}

	public Date getWorkSInce(){
		return null;
	}

	public Date getRetireAt(){
		return null;
	}

	public int getId(){
		return 0;
	}

	public String getPosition(){
		return "";
	}

	/**
	 * 
	 * @param id
	 */
	public void setId(int id){

	}

	/**
	 * 
	 * @param position
	 */
	public void setPosition(String position){

	}

	/**
	 * 
	 * @param schedule
	 */
	public int addSchedule(Schedule schedule){
		return 0;
	}
}//end Employee