<?php


/**
 * IPdo interface forces PDO classes to be represented as an interface instead
 *  of the PDO class Objects. These methods are taken straight from the PDO
 *  documentation here: http://www.php.net/manual/en/class.pdo.php. Static
 *  methods such as getAvailableDrivers may not be represented by this interface.
 * 
 * @extends IQueryable
 */
interface IPdo extends IQueryable
{
	
	/**
	 * Creates a PDO instance representing a connection to a database.
	 *
	 * @access public
	 * @param String $dsn
	 * @param String $username  (default: null)
	 * @param String $password  (default: null)
	 * @param Array $options (default: Array())
	 * @return PDO
	 */
	public function __construct( $dsn, $username = null, $password = null, array $options = Array() );
	
	
	/**
	 * Initiates a transaction.
	 * 
	 * @access public
	 * @return Boolean
	 */
	public function beginTransaction();
	
	
	/**
	 * Commits a transaction.
	 * 
	 * @access public
	 * @return Boolean
	 */
	public function commit();
	
	
	/**
	 * Fetch the SQLSTATE associated with the last operation on the database handle.
	 * 
	 * @access public
	 * @return mixed
	 */
	public function errorCode();
	
	
	/**
	 * Fetch extended error information associated with the last operation on the database handle.
	 * 
	 * @access public
	 * @return Array
	 */
	public function errorInfo();
	
	
	/**
	 * Execute an SQL statement and return the number of affected rows
	 * 
	 * @access public
	 * @param String $stmt
	 * @return Integer
	 */
	public function exec( $stmt );
	
	
	/**
	 * Retrieve a database connection attribute
	 * 
	 * @access public
	 * @param Integer $attr
	 * @return mixed
	 */
	public function getAttribute( $attr );
	
	
	/**
	 * Set an attribute
	 * 
	 * @access public
	 * @param Integer $attr
	 * @param mixed $value
	 * @return Boolean
	 */
	public function setAttribute( $attr, $value );
	
	
	/**
	 * Checks if inside a transaction.
	 * 
	 * @access public
	 * @return Boolean
	 */
	public function inTransaction();
	
	
	/**
	 * Returns the ID of the last inserted row or sequence value.
	 * 
	 * @access public
	 * @param String $name (default: null)
	 * @return String
	 */
	public function lastInsertId( $name = null );
	
	
	/**
	 * Prepares a statement for execution and returns a statement object.
	 * 
	 * @access public
	 * @param String $stmt
	 * @param Array $options (default: Array())
	 * @return IPdoStatement
	 */
	public function prepare( $stmt, array $options = Array() );
	
	
	/**
	 * Executes an SQL statement, returning a result set as a IPdoStatement object. Passing additional
	 *  arguments to this function will be treated as though you called IPdoStatement::setFetchMode()
	 *  on the resultant statement object.
	 * 
	 * @access public
	 * @param String $stmt
	 * @param Integer $mode (default: null)
	 * @param mixed $mix (default: null)
	 * @param Array $args (default: Array())
	 * @return void
	 */
	public function query( $stmt, $mode = null, $mix = null, array $args = Array() );
	
	
	/**
	 * Quotes a string for use in a query.
	 * 
	 * @access public
	 * @param String $str
	 * @param Integer $ptype (default: PDO::PARAM_STR)
	 * @return String
	 */
	public function quote( $str, $ptype = PDO::PARAM_STR );
	
	
	/**
	 * Rolls back a transaction
	 * 
	 * @access public
	 * @return Boolean
	 * @throws PDOException if no transactio is active
	 */
	public function rollBack();
	
}