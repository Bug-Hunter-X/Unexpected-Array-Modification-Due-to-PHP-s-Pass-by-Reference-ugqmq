# PHP Pass-by-Reference Bug

This repository demonstrates a common, yet often overlooked, issue in PHP: the implicit pass-by-reference behavior of arrays.  This can lead to unexpected side effects when modifying arrays within functions.

The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version demonstrating how to avoid this issue.  Understanding pass-by-reference is crucial for writing robust and predictable PHP code.  Pay close attention to how function parameters are handled, especially when working with mutable data structures like arrays.