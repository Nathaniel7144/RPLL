package domain.transactions.entity;


/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:12 PM
 */
public class VendorTransaction extends Transaction {

	private int vendorId;

	public VendorTransaction(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	/**
	 * 
	 * @param vendorId
	 */
	public VendorTransaction(int vendorId){

	}

	public int getVendorId(){
		return 0;
	}
}//end VendorTransaction