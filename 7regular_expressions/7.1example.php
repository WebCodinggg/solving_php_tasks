<?php
error_reporting(-1);
$regexp = "/c[a-z]t/ui";
$lines = [
    'orange cat',
    'orange mole',
    'whale and cat'
];

foreach ($lines as  $line) {
    echo "String: $line\n";

    $match = [];
    if (preg_match($regexp, $line, $match)) {
        echo "+ the word found '{$match[0]}'\n";
    } else {
        echo "- the word not found\n";
    }
}
