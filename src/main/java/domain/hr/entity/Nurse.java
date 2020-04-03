package domain.hr.entity;


/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:15:59 PM
 */
public class Nurse extends Employee {

	private String type;

	public Nurse(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	public String getType(){
		return "";
	}

	public void setType(String type){
		this.type = type;
	}
}//end Nurse