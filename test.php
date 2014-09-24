<?php
namespace Rating;


include('Rating.php');
$rating = new Rating(0, 0, .5, .5);

$results = $rating->getNewRatings();

echo "New rating for player A: " . $results['a'];
echo "New rating for player B: " . $results['b'];