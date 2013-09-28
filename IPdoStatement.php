<?php


/**
 * The IPdoStatement interface represents a PDOStatement as an interface and used
 *  by the IPdo interface and implementations to better represent the objects.
 *  Static and debug functions of PDOStatemnt may not be represented such as
 *  debugDumpParams. Experimental function getColumnMeta is not represented.
 */
interface IPdoStatement
{
	
	/**
	 * Creates a new instance of an IPdoStatement from a PDOStatement Object.
	 * 
	 * @access public
	 * @param PDOStatment $stmt
	 * @return void
	 */
	 
	 
	public function __construct( PDOStatment $stmt );
	/**
	 * Bind a column to a PHP variable.
	 * 
	 * @access public
	 * @param mixed $column
	 * @param mixed &$param
	 * @param Integer $type (default: null)
	 * @param Integer $maxlen (default: null)
	 * @param mixed $driverdata (default: null)
	 * @return Boolean
	 */
	public function bindColumn( $column, &$param, $type = null, $maxlen = null, $driverdata = null );
	
	
	/**
	 * Binds a parameter to the specified variable name,
	 * 
	 * @access public
	 * @param mixed $param
	 * @param mixed &$var
	 * @param Integer $type (default: PDO::PARAM_STR)
	 * @param Integer $length (default: 0)
	 * @param mixed $options (default: Array())
	 * @return Boolean
	 */
	public function bindParam( $param, &$var, $type = PDO::PARAM_STR, $length = 0, $options = Array() );
	
	
	/**
	 * Binds a value to a parameter.
	 * 
	 * @access public
	 * @param mixed $parameter
	 * @param mixed $value
	 * @param Integer $type (default: PDO::PARAM_STR)
	 * @return Boolean
	 */
	public function bindValue( $parameter, $value, $type = PDO::PARAM_STR );
	
	
	/**
	 * Closes the cursor, enabling the statement to be executed again.
	 * 
	 * @access public
	 * @return Boolean
	 */
	public function closeCursor();
	
	
	/**
	 * Returns the number of columns in the result set.
	 * 
	 * @access public
	 * @return Integer
	 */
	public function columnCount();
	
	
	/**
	 * Fetch the SQLSTATE associated with the last operation on the statement handle.
	 * 
	 * @access public
	 * @return String
	 */
	public function errorCode();
	
	
	/**
	 * Fetch extended error information associated with the last operation on the statement handle.
	 * 
	 * @access public
	 * @return Array
	 */
	public function errorInfo();
	
	
	/**
	 * Executes a prepared statement.
	 * 
	 * @access public
	 * @param array $params (default: Array())
	 * @return Boolean
	 */
	public function execute( array $params = Array() );
	
	
	/**
	 * Fetches the next row from a result set.
	 * 
	 * @access public
	 * @param Integer $style (default: PDO::ATTR_DEFAULT_FETCH_MODE)
	 * @param Integer $orientation (default: PDO::FETCH_ORI_NEXT)
	 * @param Integer $offset (default: 0)
	 * @return mixed
	 */
	public function fetch( $style = PDO::ATTR_DEFAULT_FETCH_MODE, $orientation = PDO::FETCH_ORI_NEXT, $offset = 0 );


	/**
	 * Returns an array containing all of the result set rows.
	 * 
	 * @access public
	 * @param Integer $style (default: PDO::ATTR_DEFAULT_FETCH_MODE)
	 * @param mixed $arg (default: null)
	 * @param Array $args (default: Array())
	 * @return Array
	 */
	public function fetchAll( $style = PDO::ATTR_DEFAULT_FETCH_MODE, $arg = null, array $args = Array() );
	
	
	/**
	 * Returns a single column from the next row of a result set.
	 * 
	 * @access public
	 * @param Integer $col (default: 0)
	 * @return String
	 */
	public function fetchColumn( $col = 0 );
	
	
	/**
	 * Fetches the next row and returns it as an object.
	 * 
	 * @access public
	 * @param String $class (default: "stdClass")
	 * @param Array $args (default: Array())
	 * @return mixed
	 */
	public function fetchObject( $class = "stdClass", array $args = Array() );
	
	
	/**
	 * Retrieve a statement attribute.
	 * 
	 * @access public
	 * @param Integer $attr
	 * @return mixed
	 */
	public function getAttribute( $attr );
	
	
	/**
	 * Set a statement attribute.
	 * 
	 * @access public
	 * @param Integer $attr
	 * @param mixed $value
	 * @return Boolean
	 */
	public function setAttribute( $attr, $value );
	
	
	/**
	 * Advances to the next rowset in a multi-rowset statement handle.
	 * 
	 * @access public
	 * @return Boolean
	 */
	public function nextRowset();
	
	
	/**
	 * Returns the number of rows affected by the last SQL statement.
	 * 
	 * @access public
	 * @return Integer
	 */
	public function rowCount();
	
	
	/**
	 * Set the default fetch mode for this statement.
	 * 
	 * @access public
	 * @param Integer $mode
	 * @param mixed $arg (default: null)
	 * @param Array $args (default: Array())
	 * @return Boolean
	 */
	public function setFetchMode( $mode, $arg = null, array $args = Array() );
}