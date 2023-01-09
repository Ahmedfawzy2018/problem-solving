<?php

function validateTrust($trust, $people)
{
    return (1 > $people || $people > 1000) || (count($trust) > 104);
}

function validateTrustPair($trustPair)
{
    return ($trustPair[0] === $trustPair[1]) ||
        count($trustPair) > 2 ||
        (1 > $trustPair[0] || $trustPair[0] > 1000) ||
        (1 > $trustPair[1] || $trustPair[1] > 1000);
}

function findJudge($trust, $people)
{
    if (validateTrust($trust, $people)) 
    	return -1;

    $judge = -1;
    foreach ( $trust as $trustPair) {
        
        if (validateTrustPair($trustPair)) 
        	return -1;

        if ($trustPair[0] === $judge) {
            $judge = -1;
            break;
        }

        $judge = $trustPair[1];
    }

    return $judge;
}

echo findJudge([[1,2]], 2) . PHP_EOL;
echo findJudge([[1,3],[2,3]], 3) . PHP_EOL;
echo findJudge([[1,3],[2,3],[3,1]], 3) . PHP_EOL;

