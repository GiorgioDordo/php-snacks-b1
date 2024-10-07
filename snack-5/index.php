<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
function isPalindrome($word)
{
    $reversedWord = '';
    for ($i = strlen($word) - 1; $i >= 0; $i--) {
        $reversedWord .= $word[$i];
    }
    return $reversedWord;
}

print_r(isPalindrome("Marco"));
?>