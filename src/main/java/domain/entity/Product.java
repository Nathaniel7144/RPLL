package domain.entity;

import org.assertj.core.internal.bytebuddy.description.NamedElement;

/**
 * @author Michael, Jessica
 * @version 1.0
 * @created 17-Mar-2020 9:26:15 PM
 */
public class Product {

	private int id;
	private String name;
	private int stock;
	public Transaction m_Transaction;

	public Product(){

	}

	public void finalize() throws Throwable {

	}
	/**
	 * 
	 * @param id
	 */
	public void setId(int id){
		This.id = id;
	}

	public int getId(){
		return 0;
	}

	/**
	 * 
	 * @param name
	 */
	public void setName(String name){
		this.name = name;
	}

	public String getName(){
		return "";
	}

	/**
	 * 
	 * @param stock
	 */
	public void setStock(int stock){
		this.stock = stock;
	}

	public int getStock(){
		return 0;
	}
}//end Product