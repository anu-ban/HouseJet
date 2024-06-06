<?php

interface Magical {
    public function __construct(string $trick, int $difficulty);
    public function getData() : array;
}

class ItsMagic implements Magical {
    public string $trick;
    public int $difficulty;

    public function __construct(string $trick, int $difficulty) {
        $this->trick = $trick;
        $this->difficulty = $difficulty;
    }

    public function getData(): array {
        return [
            'trick' => $this->trick,
            'difficulty' => $this->difficulty
        ];
    }

    // Magic method to control how the object is converted to a string
    public function __toString(): string {
        return "{$this->trick} is a magic trick with a difficulty of {$this->difficulty}";
    }
}
$rabbitTrick = new ItsMagic('Rabbit out of hat', 5);
assert($rabbitTrick->trick === 'Rabbit out of hat');
assert($rabbitTrick->difficulty === 5);
assert($rabbitTrick->getData() === ['trick' => 'Rabbit out of hat', 'difficulty' => 5]);
assert((string)$rabbitTrick === 'Rabbit out of hat is a magic trick with a difficulty of 5');

$cardTrick = new ItsMagic('Is this your card', 1);
assert($cardTrick->trick === 'Is this your card');
assert($cardTrick->difficulty === 1);
assert($cardTrick->getData() === ['trick' => 'Is this your card', 'difficulty' => 1]);
$cardTrick->difficulty = 7;
assert($cardTrick->difficulty === 7);
assert($cardTrick->getData() === ['trick' => 'Is this your card', 'difficulty' => 7]);
assert((string)$cardTrick === 'Is this your card is a magic trick with a difficulty of 7');
