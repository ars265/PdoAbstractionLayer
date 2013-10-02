<?php

abstract class PdoStatement implements IPdoStatement
{
	
	/**
	 * raw_stmt
	 * 
	 * @var PDOStatement
	 * @access private
	 */
	private var $raw_stmt;
	
	public function __construct( PDOStatment $stmt )
	{
		$raw_stmt = $stmt;
	}

	public function bindColumn( $column, &$param, $type = null, $maxlen = null, $driverdata = null )
	{
		var $margs = Array( $colu);
		
	
		return call_user_func_array( array($raw_stmt, "bindColumn"), array("three", "four"));
	
		if( !is_null( $driverdata ) ) {
			
		} else if( !is_null( $maxlen ) ) {
			
		} else if( !is_null( $maxlen ) ) {
			
		} else {
			
		}
	}
	
	public function bindParam( $param, &$var, $type = PDO::PARAM_STR, $length = 0, $options = Array() );
	
	public function bindValue( $parameter, $value, $type = PDO::PARAM_STR );
	
	public function closeCursor()
	{
		
	}
	
	public function columnCount();
	
	public function errorCode();
	
	public function errorInfo();
	
	public function execute( array $params = Array() );
	
	public function fetch( $style = PDO::ATTR_DEFAULT_FETCH_MODE, $orientation = PDO::FETCH_ORI_NEXT, $offset = 0 );

	public function fetchAll( $style = PDO::ATTR_DEFAULT_FETCH_MODE, $arg = null, array $args = Array() );
	
	public function fetchColumn( $col = 0 );
	
	public function fetchObject( $class = "stdClass", array $args = Array() );
	
	public function getAttribute( $attr );
	
	public function setAttribute( $attr, $value );
	
	public function nextRowset();
	
	public function rowCount();
	
	public function setFetchMode( $mode, $arg = null, array $args = Array() );
}