PHP coding kata
========

Minesweeper
-----------------------------------

#### Problem Description

Have you ever played Minesweeper? It's a cute little game which comes within a certain Operating System whose name we can't really remember. Well, the goal of the game is to find all the mines within an MxN field. To help you, the game shows a number in a square which tells you how many mines there are adjacent to that square. For instance, take the following 4x4 field with 2 mines (which are represented by an * character):

```
*...
....
.*..
....
```

The same field including the hint numbers described above would look like this:

```
*100
2210
1*10
1110
```

**You should write a program that takes input as follows:**

The input will consist of an arbitrary number of fields. The first line of each field contains two integers n and m (0 < n,m <= 100) which stands for the number of lines and columns of the field respectively. The next n lines contains exactly m characters and represent the field. Each safe square is represented by an "." character (without the quotes) and each mine square is represented by an "*" character (also without the quotes). The first field line where n = m = 0 represents the end of input and should not be processed.

**Your program should produce output as follows:**

For each field, you must print the following message in a line alone:

Field #x:

Where x stands for the number of the field (starting from 1). The next n lines should contain the field with the "." characters replaced by the number of adjacent mines to that square. There must be an empty line between field outputs.

#### Clues

As you may have already noticed, each square may have at most 8 adjacent squares.

#### Suggested Test Cases

This is the acceptance test input:

```
4 4
*...
....
.*..
....
3 5
**...
.....
.*...
0 0
```

and output:

```
Field #1:
*100
2210
1*10
1110

Field #2:
**100
33200
1*100
```

[Original description here](http://codingdojo.org/cgi-bin/index.pl?KataMinesweeper)

What is a kata?
-----------------------------------

*Code Kata* is a term coined by Dave Thomas, co-author of the book
The Pragmatic Programmer, in a bow to the Japanese concept of kata
in the martial arts. A code kata is an exercise in programming which
helps a programmer hone their skills through practice and repetition.
As of October 2011, Dave Thomas has published 21 different katas.

When you do programming katas, you use TDD. That's why I have included
PHPUnit, Mockery, PHPSpec and Prophecy as composer dependencies. Choose
the testing framework you feel more comfortable (or play with both).

-----------------------------------

Skeleton by [@carlosbuenosvinos](https://github.com/carlosbuenosvinos/php-kata)
