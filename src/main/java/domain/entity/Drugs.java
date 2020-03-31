package domain.entity;


/**
 * @author Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:18 PM
 */
public class Drugs extends Product {

	private int dose;
	private String unit;

	public Drugs(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	/**
	 * 
	 * @param dose
	 * @param unit
	 */
	public Drugs(int dose, int unit){

	}

	/**
	 * 
	 * @param dose
	 */
	public void setDose(int dose){

	}

	public int getDose(){
		return 0;
	}

	/**
	 * 
	 * @param unit
	 */
	public void setUnit(String unit){

	}

	public String getUnit(){
		return "";
	}
}//end Drugs