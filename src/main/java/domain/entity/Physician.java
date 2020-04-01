package domain.entity;


/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:15:57 PM
 */
public class Physician extends Employee {

	private String specialist;



	public void finalize() throws Throwable {
		super.finalize();
	}
	public Physician(){

	}

	/**
	 * 
	 * @param specialist
	 */
	public void setSpecialist(String specialist){
		this.specialist = specialist;
	}

	public String getSpecialist(){
		return "";
	}
}//end Physician