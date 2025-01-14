<?php

// Lab 1, part 1

/**
 * Remove invalid shows from the assoc. array that is passed as a parameter, 
 * and return an array which contains only valid entries.
 * 
 * Hint: look into https://www.php.net/manual/en/function.unset.php
 * 
 * @param array $shows: an associative array of shows in a format following: 
 *              ['name' => '<date string>', ...]
 * @return array: an associative array containing shows that don't have 
 *                empty strings or null values for their names and dates
 */
function filterInvalidShows(array $shows): array
{
    $filteredShows = [];

    foreach ($shows as $name => $dates)
    {
        if (!empty($name) && !empty($dates))
        {
            $filteredShows[$name] = $dates;
        }
    }
    return $filteredShows;
}

/**
 * Prints the show data in a "name: <aired dates>" format.
 * 
 * @param array $shows: the shows to print
 * @return void
 */
function displayShowInfo(array $shows): void 
{
    echo "<h1>Shows</h1>";
    echo "<ul>";

    foreach ($shows as $name => $dates)
    {
        echo "<li><strong>$name</strong>: $dates</li>";
    }
}

// An associative array of show names and associated dates when the shows aired
$shows = [
    // Add some more shows you like to the array
    'Lincoln Lawyer'       => 'May 13, 2022',
    '3 Body Problem'       => 'March 21, 2024',
    'Gossip Girl'          => 'December 17, 2012',
    'Severance'            => 'February 18, 2022',
    'Curb Your Enthusiasm' => 'October 15th, 2000 - Current',
    'Invalid data1'        => '',
    'Invalid data2'        => null,
    null                   => 'December 17, 1999 - Current',
    ''                     => 'December 30, 1999 - Current',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 1</title>
</head>

<body>

    <?php 
    // Here, you should call your functions in order to filter and then output the show info.
    $filteredShows = filterInvalidShows($shows);
    displayShowInfo($filteredShows);
    ?>

</body>

</html>
