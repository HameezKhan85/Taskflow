<?php
/**
 * Library for Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 8, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Datatable 1.11.3
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 * 
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */

namespace App\Libraries;

class Datatableslib {
	/**
	 * $model_name = CI model name
	 */
	private $model_name = '';

	/**
	 * $userModel = object to database table
	 */
	private $userModel = '';

	/**
	 * __construct(@parameter)
	 * @parameter = model_name
	 */
	function __construct($model_name = '')
	{
		$this->model_name = $model_name;

		// Create new model object (Access to database)
		$this->userModel = new $this->model_name();
	}

	/**
	 * Datatables call this method to manipulate table
	 * When making a request to the server using server-side processing, 
	 * DataTables will send the following data in order to let the server know what data is required:
	 * Data sent by Datatables will catch by post method bellow
	 * Detail parameter sent you can find in https://datatables.net/manual/server-side
	 */

	public function post()
	{
		/**
		 * Draw counter. This is used by DataTables to ensure that the Ajax returns from server-side processing requests 
		 * are drawn in sequence by DataTables (Ajax requests are asynchronous and thus can return out of sequence). 
		 * This is used as part of the draw return parameter
		 */
		$param['draw'] = isset($_REQUEST['draw']) ? $_REQUEST['draw'] : '';

		/**
		 * Paging first record indicator. This is the start point in the current data set 
		 * (0 index based - i.e. 0 is the first record).
		 */
		$start = isset($_REQUEST['start']) ? $_REQUEST['start'] : '';
		/**
		 * Number of records that the table can display in the current draw. It is expected that the number of 
		 * records returned will be equal to this number, unless the server has fewer records to return. 
		 * Note that this can be -1 to indicate that all records should be returned
		 */
		$length = isset($_REQUEST['length']) ? $_REQUEST['length'] : '';
		/**
		 * Global search value. To be applied to all columns which have searchable as true.
		 */
		$search_value = isset($_REQUEST['search']['value']) ? $_REQUEST['search']['value'] : '';

		/**
		 * Get data from database with search 
		 */
		$data = $this->userModel->search($search_value, $start, $length);


		$total_count = $this->userModel->search($search_value);

		$json_data = array(
			'draw'  => intval($param['draw']),
			'recordsTotal'  => count($total_count),
			'recordsFiltered'   => count($total_count),
			'data'  => $data
		);

		echo json_encode($json_data);

	}

}

/**
 * End of file Datatableslib.php
 * Location: app/Libraries/Datatableslib.php
 * https://github.com/wiendy/trackdt
 */