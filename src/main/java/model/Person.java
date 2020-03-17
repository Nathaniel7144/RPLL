package model;

import java.util.Date;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 8:48:02 PM
 */
public abstract class Person {

	private String name;
	private String address;
	/**
	 * 0 - Male
	 * 1 - Female
	 */
	private int gender;
	private Date birthday;
	private int id;
	private char bloodType;
	private String phone;
	private String religion;
	private String NIK;

	public Person(){

	}

	public void finalize() throws Throwable {

	}
	/**
	 * 
	 * @param name
	 * @param address
	 * @param birthday
	 * @param gender
	 */
	public Person(String name, String address, Date birthday, int gender){

	}

	/**
	 * 
	 * @param name
	 */
	public void setName(String name){

	}

	/**
	 * 
	 * @param address
	 */
	public void setAddress(String address){

	}

	/**
	 * 
	 * @param birthday
	 */
	public void setBirthday(Date birthday){

	}

	/**
	 * 
	 * @param gender
	 */
	public void setGender(int gender){

	}

	public String getName(){
		return "";
	}

	public String getAddress(){
		return "";
	}

	public int getGender(){
		return 0;
	}

	public Date getBirthday(){
		return null;
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

	/**
	 * 
	 * @param type
	 */
	public void setBloodType(char type){

	}

	public char getBloodType(){
		return 0;
	}

	/**
	 * 
	 * @param number
	 */
	public void setPhone(String number){

	}

	public String getPhone(){
		return "";
	}

	/**
	 * 
	 * @param religion
	 */
	public void setReligion(String religion){

	}

	public String getReligion(){
		return "";
	}

	/**
	 * 
	 * @param nik
	 */
	public void setNIK(String nik){

	}

	public String getNIK(){
		return "";
	}
}//end Person