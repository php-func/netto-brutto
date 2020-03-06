# netto-brutto
netto-brutto conversion with TAX, based on PHP, implementation with Dependency Inversion

### PL
konwertowanie pomiedzy podatkami, walutami,
obliczanie, przeliczanie wysokosci podatkow i wynagrodzen


    $salary = new


## Architecture


## Unit

phpfunc library



## Collection based on iterator

https://www.php.net/manual/en/class.iterator.php



## Collection with generic

PHP RFC: Generic Types and Functions

https://wiki.php.net/rfc/generics

 The following demonstrates the proposed syntax for a generic class:


        class Entry<KeyType, ValueType>
        {
            protected $key;
            protected $value;

            public function __construct(KeyType $key, ValueType $value)
            {
                $this->key   = $key;
                $this->value = $value;
            }

            public function getKey(): KeyType
            {
                return $this->key;
            }

            public function getValue(): ValueType
            {
                return $this->value;
            }
        }

Note the use of type parameters in the class declaration Entry<KeyType, ValueType> where two type aliases are defined.

Also note the use of type aliases used for type-hinting the constructor arguments, and the return-types of the getKey() and getValue() methods - the run-time type-checks performed will vary with the actual type-arguments.


An instance of a generic class can be constructed using explicit type arguments:

    $entry = new Entry<int,string>(1, 'test');


The type arguments, in this example, may also be inferred from the given arguments, rather than explicitly given:

    $entry = new Entry(1, 'test');