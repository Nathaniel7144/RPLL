package domain;


/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:09 PM
 */
public abstract class Transaction {

	private int id;
	private Product product;

	public Transaction(){

	}

	public void finalize() throws Throwable {

	}
	public void viewProducts(){

	}

	/**
	 * 
	 * @param product
	 */
	public void addProduct(Product product){

	}
}//end Transaction