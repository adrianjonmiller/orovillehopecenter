<?php

class FMViewGenerete_csv_fmc {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  private $model;

  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct($model) {
    $this->model = $model;
  }
  
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function display() {
    $params = $this->model->get_data();
	$data = $params[0];
	$title = $params[1]; 
	$is_paypal_info = $params[2];
	
	function cleanData(&$str) {
      $str = preg_replace("/\t/", "\\t", $str);
      $str = preg_replace("/\r?\n/", "\\n", $str);
      if (strstr($str, '"'))
        $str = '"' . str_replace('"', '""', $str) . '"';
    }
    // File name for download.
    $filename = $title . "_" . date('Ymd') . ".csv";
    header('Content-Encoding: Windows-1252');
    header('Content-type: text/csv; charset=Windows-1252');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $flag = FALSE;
    foreach ($data as $row) {
      if (!$flag) {
        # display field/column names as first row
        echo "sep=,\r\n";
        echo '"' . implode('","', array_keys($row));
        if ($is_paypal_info) {
          echo '","Currency","Last modified","Status","Full Name","Fax","Mobile phone","Email","Phone","Address","Paypal info","IPN","Tax","Shipping';
        }  
        echo "\"\r\n";
        $flag = TRUE;
      }
      array_walk($row, 'cleanData');
      echo '"' . implode('","', array_values($row)) . "\"\r\n";
    }
    die('');
  }

  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}