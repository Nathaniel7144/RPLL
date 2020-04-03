package domain.transactions.entity;

import domain.crm.entity.MedicalRecord;

/**
 * @author Jessica, Michael
 * @version 1.0
 * @created 17-Mar-2020 9:26:10 PM
 */
public class ApothecaryTransaction extends Transaction {

	private int medicalRecId;
	private int paymentId;
	public MedicalRecord m_MedicalRecord;
	
	public ApothecaryTransaction(){

	}

	public void finalize() throws Throwable {
		super.finalize();
	}
	/**
	 * 
	 * @param paymentId
	 */
	public ApothecaryTransaction(int paymentId){

	}

	public int getPaymentId(){
		return 0;
	}

	/**
	 * 
	 * @param paymentId
	 */
	public void setPaymentId(int paymentId){
		this.paymentId = paymentId;
	}
	
	public int getMedRecId(){
		return 0;
	}

	/**
	 * 
	 * @param medrecId
	 */
	public void setMedRecId(int medicalrecId){
		this.medicalRecId = medicalRecId;
	}
}//end ApothecaryTransaction