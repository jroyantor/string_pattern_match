## Search substring occurences in a string

This solution uses the brute force or naive search approach where every characters are checked for a match.

Steps:


1. There will be two loops: the outer loop will range slide from 0 to [n - m], and the inner loop will range from 0 to < m. Here m is the pattern length and n is the string length.
     
2. If a match is found while searching, it will continue to search for a match moving index to index. 

3. If the pattern is matched in the current traverse, then the counter is incremented. Then traversing continues in the next window.

As, it checks for every possible characters in the pattern, the time complexity is O(m*n)