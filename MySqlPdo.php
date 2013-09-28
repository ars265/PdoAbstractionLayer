<?php


/**
 * The MySqlPdo class is created to create an abstract interface version of the PDO
 *  specifically for MySQL.
 * 
 * @extends PDO
 * @implements IPdo
 */
class MySqlPdo extends PDO implements IPdo
{

	/**
	 * All PDO::MYSQL_ATTR_* are directly mapped to the MySqlPdo implementation
	 */
	const USE_BUFFERED_QUERY		= PDO::MYSQL_ATTR_USE_BUFFERED_QUERY;
	
	const LOCAL_INFILE				= PDO::MYSQL_ATTR_LOCAL_INFILE;
	
	const INIT_COMMAND				= PDO::MYSQL_ATTR_INIT_COMMAND;
	
	const READ_DEFAULT_FILE			= PDO::MYSQL_ATTR_READ_DEFAULT_FILE;
	
	const READ_DEFAULT_GROUP		= PDO::MYSQL_ATTR_READ_DEFAULT_GROUP;
	
	const MAX_BUFFER_SIZE			= PDO::MYSQL_ATTR_MAX_BUFFER_SIZE;
	
	const DIRECT_QUERY				= PDO::MYSQL_ATTR_DIRECT_QUERY;
	
	const FOUND_ROWS				= PDO::MYSQL_ATTR_FOUND_ROWS;
	
	const IGNORE_SPACE				= PDO::MYSQL_ATTR_IGNORE_SPACE;
	
	const COMPRESS					= PDO::MYSQL_ATTR_COMPRESS;
	
	const SSL_CA					= PDO::MYSQL_ATTR_SSL_CA;
	
	const SSL_CAPATH				= PDO::MYSQL_ATTR_SSL_CAPATH;
	
	const SSL_CERT					= PDO::MYSQL_ATTR_SSL_CERT;
	
	const SSL_CIPHER				= PDO::MYSQL_ATTR_SSL_CIPHER;
	
	const SSL_KEY					= PDO::MYSQL_ATTR_SSL_KEY;
}