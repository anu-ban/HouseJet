<?php

function removeFirstItem(array $a): array {
    array_shift($a); // Removes the first element from the array
    return $a;
}

function removeLastItem(array $a): array {
    array_pop($a); // Removes the last element from the array
    return $a;
}

function reverseArray(array $a): array {
    return array_reverse($a); // Reverses the array
}

function filterByType(array $a, string $type): array {
    return array_values(array_filter($a, function ($item) use ($type) {
        return $item['type'] === $type;
    }));
}

function oddNumberPairs(int $max) {
    $pairs = [];
    for ($i = 1; $i <= $max; $i += 2) {  
        for ($j = 1; $j <= $max; $j += 2) {
            $pairs[] = [$i, $j];
        }
    }
    return $pairs;
}

assert(removeFirstItem(['Atlanta', 'Metro', 'Area']) === ['Metro', 'Area']);
assert(removeLastItem(['Springfield', 'Ozark', 'Nixa', 'Branson']) === ['Springfield', 'Ozark', 'Nixa']);
assert(reverseArray(['Walnut', 'Jefferson', 'Elm']) === ['Elm', 'Jefferson', 'Walnut']);

$typesArray = [
    ['name' => 'Apple', 'type' => 'fruit'],
    ['name' => 'Dog', 'type' => 'animal'],
    ['name' => 'Corvette', 'type' => 'car'],
    ['name' => 'Pear', 'type' => 'fruit'],
    ['name' => 'Sloth', 'type' => 'animal']
];

assert(filterByType($typesArray, 'animal') === [['name' => 'Dog', 'type' => 'animal'], ['name' => 'Sloth', 'type' => 'animal']]);
assert(filterByType($typesArray, 'people') === []);

assert(oddNumberPairs(6) === [[1,1],[1,3],[1,5],[3,1],[3,3],[3,5],[5,1],[5,3],[5,5]]);