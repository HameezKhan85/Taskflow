<?php
/**
 * Library for Editor Datatables
 * Created by   : Wiendy Kusuma
 * Link         : https://github.com/wiendy/trackdt
 *
 * Library Name : TrackDT
 * Created Date : Dec 1, 2021
 * Email        : wiendy@opsi.biz
 * Tested       : Editor Datatable 1.9.4, 1.9.6
 *              : Codigniter 4.1.5
 *              : PHP 7.3.33
 *
 * If you feel happy with this Library you can donate via paypal wiendy@opsi.biz, thank you
 */


namespace App\Libraries;

class Editorlib {
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

		// Include library from Editor Datatable
		require $_SERVER['DOCUMENT_ROOT'].'/../app/ThirdParty/editor/lib/DataTables.php';

		// Create new model object (Access to database)
		$this->userModel = new $this->model_name();

		// Connect to database from default configuration Editor datatables $db
		$this->userModel->init($db);

    }

	/**
	 * Editor datatables call this method to manipulate table
	 */
    public function post($post)
    {
		// Method post run the action CRUD
		$this->userModel->post($post);
    }

}

/**
 * End of file Editorlib.php
 * Location: app/Libraries/Editorlib.php
 * https://github.com/wiendy/trackdt
 */
