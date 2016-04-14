# FizzBuzz in PHP

## 1. Try writing FizzBuzz in PHP

Remember the rules:

> Write a script that, for the numbers 1 to 100, prints "Fizz" if the number is divisible by 3, "Buzz" if by 5, "FizzBuzz" if by both, and the number if none of the above.

Hint: It's literally exactly the same as in Javascript, except variable names have to begin with `$` and you don't use `var`, and you write `echo` instead of `console.log`.

## 2. Make the output go into a file

Hint:
```PHP
file_put_contents($filename, $content, FILE_APPEND);
```

Without FILE_APPEND, it just overwrites the file with that filename.

## 3. Instead of 100, GET the number

Hint: GET parameters come from the URL. If your URL is `foo.php?myname=john`, it creates a GET parameter called `myname` with the value of `john`.

Hint 2: All the GET parameters are in an array called `$_GET`. You retrieve values from an array just like you would in Javascript.
