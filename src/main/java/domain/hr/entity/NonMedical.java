package domain.hr.entity;


/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:16:01 PM
 */
public class NonMedical extends Employee {

	private int dept;

	public NonMedical(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	public void setDept(int dept){
		this.dept = dept;
	}

	public String getDept(){
		return "";
	}
}//end NonMedical