<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if a Number is Prime</title>
</head>
<body>
    <?
    $num = 49;
    $is_prime = true;

    if ($num <= 1) {
        $is_prime = false;
    } else {
        for ($i = 2; $i <= (int)sqrt($num); $i++) {
            if ($num % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($is_prime) {
        echo "$num is a prime number.";
    } else {
        echo "$num is not a prime number.";
    }
    ?>
</body>
</html>