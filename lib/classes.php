<?php
$json = include "get_json.php";



/**
* get data
*
* example
* --------
* $variable = new get_data();
* $variable -> debug_array();  // dataArray
* $variable -> debug_object(); // dataObject
* $variable -> return_array();  // dataArray
* $variable -> return_object(); // dataObject
*/
class get_data
{
	function debug_array()
	{
		echo "<pre>";
		var_dump(json_decode($GLOBALS['json'], true));
		echo "</pre>";
	}

	function debug_object()
	{
		echo "<pre>";
		var_dump(json_decode($GLOBALS['json']));
		echo "</pre>";
	}

	function return_array()
	{
		return json_decode($GLOBALS['json'], true);
	}

	function return_object()
	{
		return json_decode($GLOBALS['json']);
	}
} 


/**
* search data
*
* example
* --------
* $variable = new search_data();
* $variable -> s_query = ' SEARCH QUERY ';
* $variable -> s_where = ' SEARCH PLACE ';
* $variable -> search(); // array( [0] => array( 'name' => '', 'gakmei' => '', ............
* $variable -> place_list(); // array( 'date', 'name',  ............
*/
class search_data
{
	public $s_query;
	public $s_where;
	
	function search()
	{
		$array = array();

		$json = new get_data();
		$arr = $json -> return_array();

		foreach ($arr as $key => $value) {
			if(isset($value[$this -> s_where])) {
				if(stristr($value[$this -> s_where], $this -> s_query)) {
					$array[] = $value;
				}
			} else {
				return false;
			}
		}

		return $array;
	}
	
	function place_list()
	{
		$arr = array('date' , 'name' , 'gakumei' , 'betsumei' , 'bunrui' , 'num' , 'setsumei' , 'setsumei_d' , 'bunken' , 'bunken_2');
		return $arr;
	}
}


/**
* lists
*
* example
* --------
* $variable = new lists();
* $variable -> l_where = ' LIST PLACE ';
* $variable -> output(); // array( [0] => array( 0 => array( name => '' ......
*/
class lists
{
	public $l_where;
	
	function output()
	{
		$array = array();

		$json = new get_data();
		$arr = $json -> return_array();

		foreach ($arr as $key => $value) {
			if(isset($value[$this -> l_where])) {
				$array[] = $value[$this -> l_where];
			} else {
				return false;
			}
		}

		$array = array_unique( $array );

		asort($array);

		$array = array_values( $array );

		return $array;
	}

	function num()
	{
		$array = array();

		$json = new get_data();
		$arr = $json -> return_array();

		foreach ($arr as $key => $value) {
			if(isset($value[$this -> l_where])) {
				$array[] = $value[$this -> l_where];
			} else {
				return false;
			}
		}

		$array = array_unique( $array );

		asort($array);

		$array = array_values( $array );

		$array = count($array);

		return $array;
	}
}

/*echo "<pre>";
print_r($json);
echo "</pre>";*/