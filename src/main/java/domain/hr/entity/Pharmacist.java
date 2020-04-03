package domain.hr.entity;


/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:16:02 PM
 */
public class Pharmacist extends Employee {

	private String competency;

	public Pharmacist(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	public String getCompetency(){
		return "";
	}

	/**
	 * 
	 * @param certificate
	 */
	public void setCompetency(String competency){
		this.competency = competency;
	}
}//end Pharmacy