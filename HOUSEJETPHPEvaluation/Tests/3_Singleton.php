<?php
// Finish the code to instantiate the Singleton class as a singleton
// You can do anything you need to to make the class work as a singleton (add methods, properties, etc...)
// The only requirement is the class use the TestSingleton interface. Bonus if you prevent instantiating
// the class using new Singleton() when outside the class

// Interface for test Singleton, don't alter the interface
interface TestSingleton {
    public static function getInstance();
    public function setValue($v);
    public function getValue();
}

class Singleton implements TestSingleton {
    private static $instance = null; // Store the single instance
    private $value; // The value held by the Singleton

    // Constructor is PUBLIC but with internal check
    public function __construct() {
        // Check if the object is being instantiated from within the class.
        $backtrace = debug_backtrace();
        if (isset($backtrace[1]) && $backtrace[1]['function'] !== 'getInstance') {
            throw new \Exception("Cannot instantiate Singleton directly.");
        }
    }

    // Clone is disallowed for singletons
    private function __clone() {}

    // The main way to get the Singleton instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setValue($v) {
        $this->value = $v;
    }

    public function getValue() {
        return $this->value;
    }

    // Final method to prevent overriding __wakeup()
    final public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}

$randValue1 = rand(1000,9999);
$randValue2 = rand(0,999);
$firstInstance = Singleton::getInstance();
$firstInstance->setValue($randValue1);

$secondInstance = Singleton::getInstance();
assert($firstInstance->getValue() === $secondInstance->getValue());

$secondInstance->setValue($randValue2);
assert($firstInstance->getValue() === $secondInstance->getValue());


