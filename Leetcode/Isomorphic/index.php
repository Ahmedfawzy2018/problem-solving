<?php

/**
 * Given two strings s and t, determine if they are isomorphic.

Two strings s and t are isomorphic if the characters in s can be replaced to get t.

All occurrences of a character must be replaced with another character while preserving the order of characters. No two characters may map to the same character, but a character may map to itself.

 

Example 1:

Input: s = "egg", t = "add"
Output: true
Example 2:

Input: s = "foo", t = "bar"
Output: false
Example 3:

Input: s = "paper", t = "title"
Output: true
 

Constraints:

1 <= s.length <= 5 * 104
t.length == s.length
s and t consist of any valid ascii character.
*/


function isomorphic($str1, $str2)
{
	if( (strlen($str1) != strlen($str2)) || ($str1 == null && $str2 == null)  )
		return false;

	$marked = [] ;
	$mapped = [] ;

	for($i = 0; $i < strlen($str1); $i++) {

		$c1 = $str1[$i];
		$c2 = $str2[$i];

		if( (array_key_exists($c1, $marked) && $marked[$c1] != $c2) || (array_key_exists($c2, $mapped) && $mapped[$c2] != $c1)) {
			return false;
			break;
		}

		$marked[$c1] = $c2;
		$mapped[$c2] = $c1;
	}
	return true;
}

echo isomorphic('egg', 'add') ;