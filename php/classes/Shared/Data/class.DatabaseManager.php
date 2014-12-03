<?php
/**
 * This class is used for establishing a database connection and executing queries
 */

class DatabaseManager
{

    private $connection;
    private $databaseConfig;

    private function __construct()
    {
        $this->init();
    }

    /**
     * Function for creating only 1 instance and return that each time its called (singleton)
     * @return DatabaseManager
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new DatabaseManager();
        }
        return $instance;
    }

    /**
     * Setup the database connection using the config file
     */
    private function init()
    {
        $this->databaseConfig = new DatabaseConfig();
        $dbDetails = $this->databaseConfig->getDbDetails();
        $this->connection = mysqli_connect(
            $dbDetails['address'],
            $dbDetails['username'],
            $dbDetails['password'],
            $dbDetails['database']
        );
        if (mysqli_connect_errno()) {
            Throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
        }
    }

    /**
     * Execute a specified query
     * @param $query the query to be executed
     * @param bool $params a list of parameters for prepared statements
     * @return array|null returns the result of the query in the form of an array
     * @throws Exception will be thrown if the statement could not be executed
     */
    public function executeQuery($query, $params = false)
    {
        $statement = $this->connection->prepare($query);
        if (isset($statement) && $statement) {
            if ($params) {
                $params = array_merge(array(str_repeat('s', count($params))), array_values($params));
                $refs = array();
                foreach ($params as $key => $value) {
                    $refs[$key] = & $params[$key];
                }
                call_user_func_array(array(&$statement, 'bind_param'), $params);
            }
            //$this->printDebugInfo($query, $params);
            $statement->execute();

            // Check if mysqlnd drivers are installed
            if(function_exists('mysqli_fetch_all')) {

                // Get results from statement through the (easy) mysqli way
                $result = $statement->get_result();
                if ($result) {
                    while ($returnValue = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $results[] = $returnValue;
                    }
                }
            }
            else {

                // Get results from statement through the (hard) way, by binding variables to each field
                $results = $this->getResultFromArray($statement);
            }

            // Return results
            if (isset($results)) {
                return $results;
            } else {
                return false;
            }
        }
        else {
            $this->printDebugInfo($query, $params);
            throw new Exception('Unable to execute query: "' . $query . '", please review');
        }
    }

    /**
     * Alternative (and outdated) way of getting results from a mysqli statement
     * @param $statement the statement which results will be extracted from
     * @return array the results of the query related to the statement
     */
    private function getResultFromArray($statement) {

        // Convert results into array
        $statement->store_result();
        $results = array();
        $allResults = array();
        $params = array();
        $meta = $statement->result_metadata();
        if ($meta)
        {
            // Get all fieldnames
            while ($field = $meta->fetch_field())
            {
                $allResults[$field->name] = null;
                $params[] = &$allResults[$field->name];
            }

            // Bind fieldnames to statement
            call_user_func_array(array($statement, 'bind_result'), $params);
        }

        // Create a copy function
        $copy = create_function('$a', 'return $a;');

        // Copy results into results
        while ($statement->fetch())
        {
            $results[] = array_map($copy, $allResults);
        }

        $statement->free_result();

        return $results;
    }

    private function printDebugInfo($query, $params) {
        echo 'Query: ';
        var_dump($query);
        echo 'Parameters: ';
        var_dump($params);
    }

} 