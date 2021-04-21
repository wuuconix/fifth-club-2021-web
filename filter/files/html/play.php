<?php
    require_once ('config.php');
    class Secret
    {
        public $flag = '';
        function __construct($flag)
        { 
            $this->flag = $flag; 
        }
        function __wakeup()
        {
            $this->flag = "hacker!";
        }
        function __destruct()
        {
            if ($this->flag == '114514')
            {
                global $FLAG;
                echo $FLAG;
            }
            else
                echo $this->flag;
        }
    }
    $s = unserialize($_GET['code']);    
?>