<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): JoForce.com
 *************************************************************************************/

class Invoice_SaveAjax_Action extends Inventory_SaveAjax_Action {

	public function process(Vtiger_Request $request) {
		$recordId = $request->get('record');

		if ($recordId && $_REQUEST['action'] == 'SaveAjax') {
			// While saving Invoice record Line items quantities should not get updated
			// This is a dependency on the older code, where in Invoice save_module we decide wheather to update or not.
			$_REQUEST['action'] = 'InvoiceAjax';
		}

		return parent::process($request);
	}
}
