# 09/01/2023 - Menu du jour

## Javascript 101

### Back to the future !

JavaScript is a programming language that was created in 1995 by Netscape. It was designed to add interactivity to web pages, and it quickly became one of the most popular programming languages on the web.

In the late 1990s and early 2000s, JavaScript was primarily used for simple tasks such as form validation and image rollovers. However, as web browsers became more powerful, JavaScript was able to handle more complex tasks, such as creating animations and games.

In the mid-2000s, the emergence of web-based applications led to the development of libraries and frameworks such as jQuery and AngularJS, which made it easier for developers to build complex applications using JavaScript.

---

### Javascript WTF !

Today, JavaScript is a key component of the modern web. It is used to create interactive websites, build mobile apps, and create server-side applications. JavaScript can also be used with other technologies such as WebGL to create 3D graphics for web applications.

Overall, JavaScript plays a vital role in the web by enabling developers to create interactive and dynamic websites and applications.

---

### Javascript HowTo ?

Discuss the tools needed to write and run JavaScript code (e.g. a text editor and a web browser)
Variables and data types

---

### Programming building blocks

#### **variables**

A variable is a named container for storing data

Declaring variables in javascript is made through reserved keywords :

- var
- let
- const

> In JavaScript, var and let are two keywords that you can use to declare variables. They both serve the same purpose, but there are a few key differences between them.
>
> The main difference between var and let is their scoping rules. var variables are function-scoped, which means that they are visible throughout the entire function in which they are declared, as well as any functions that are nested within that function. let variables, on the other hand, are block-scoped, which means that they are only visible within the block in which they are declared.
>
> Here's an example that illustrates the difference between var and let scoping:

```js
function foo() {
  if (true) {
    var x = 5;
    console.log(x); // prints 5
  }
  console.log(x); // prints 5
}

function bar() {
  if (true) {
    let y = 5;
    console.log(y); // prints 5
  }
  console.log(y); // ReferenceError: y is not defined
}
```

> In the foo function, the var variable x is declared within an if block, but it is still visible outside of the block. In the bar function, the let variable y is declared within the if block, and it is not visible outside of the block.
>
> Another difference between var and let is that var variables are subject to hoisting, which means that they can be accessed before they are declared. let variables, on the other hand, are not subject to hoisting, and they cannot be accessed before they are declared.
> Here's an example that illustrates this difference:

```js
console.log(x); // undefined
var x = 5;

console.log(y); // ReferenceError: y is not defined
let y = 5;
```

> In the first example, the var variable x is accessed before it is declared, but it is not initialized. This is because var variables are automatically initialized to undefined when they are declared. In the second example, the let variable y is accessed before it is declared, and a ReferenceError is thrown.
>
> There are a few other minor differences between var and let, such as the fact that let variables cannot be re-declared within the same block, whereas var variables can. However, the main difference between the two is their scoping rules.
>
> In general, it is recommended to use let over var whenever possible, because let has more intuitive scoping rules and can help prevent accidental re-declarations and other types of bugs. However, var is still widely used, and you may encounter it in legacy code or in certain situations where let is not supported.

#### **data types**

In JavaScript, there are several data types that you can use to store values. Here is a list of the different data types in JavaScript, along with a description of each:

- **Number**: A number data type represents numeric values. In JavaScript, there is only one type of number, and it can be either an integer or a floating point value.

- **String**: A string data type represents a series of characters. Strings can be defined using single quotes (') or double quotes (").

- **Boolean**: A boolean data type represents a true or false value.

- **Null**: The null data type represents an intentional absence of a value.

- **Undefined**: The undefined data type represents an uninitialized value.

- **Object**: An object data type represents a collection of related data and functions.

- **Symbol**: A symbol data type is a unique and immutable identifier.

In addition to these basic data types, JavaScript also has a few special data types, such as **function** and **array**, which are actually objects that have additional features and capabilities.

It's important to understand the different data types in JavaScript, because different types of data require different operations and methods.

For example, you can't use arithmetic operators on strings, and you can't use string methods on numbers.

#### **Operators**

##### **Arithmetic operators**

- \+ : Addition
- \- : Subtraction
- \* : Multiplication
- \/ : Division
- \% : Modulus (remainder of division)
- \++ : Increment
- \-- : Decrement

> In JavaScript, the ++ operator is used to increment a value by 1.
>
> There are two forms of the ++ operator: pre-increment and post-increment.
> The pre-increment operator (++x) increments the value of x and then returns the new value. For example:

```js
let x = 5;
console.log(++x); // prints 6
console.log(x); // prints 6
```

> The post-increment operator (x++) returns the current value of x, and then increments the value of x.
>
> For example:

```js
let x = 5;
console.log(x++); // prints 5
console.log(x); // prints 6
```

> It's important to understand the difference between pre-increment and post-increment, because the order in which the value is incremented and the value is returned can affect the behavior of your program.
>
> For example:

```js
let x = 5;
let y = ++x;
console.log(y); // prints 6

let x = 5;
let y = x++;
console.log(y); // prints 5
```

> In the first example, the value of x is incremented before it is assigned to y, so y is equal to the incremented value of x. In the second example, the value of x is assigned to y before it is incremented, so y is equal to the original value of x.

##### **Assignment operators**

- \= : Simple assignment
- \+= : Addition assignment
- \-= : Subtraction assignment
- \*= : Multiplication assignment
- \/= : Division assignment
- \%= : Modulus assignment

##### **Comparison operators**

- == : Equal to
- != : Not equal to
- === : Strict equal to
- !== : Strict not equal to

- \> : Greater than
- \< : Less than
- \>= : Greater than or equal to
- \<= : Less than or equal to

##### **Logical operators**

- && : And
- || : Or
- ! : Not

##### **Other operators**

- typeof : Returns the type of a value
- instanceof : Returns true if an object is an instance of a specific constructor

The different types of operators in JavaScript allow you to perform various operations on values and control the flow of your code.

For example, you can use arithmetic operators to perform calculations, assignment operators to assign values to variables, and comparison operators to compare values and make decisions in your code.

### **Conditional statements**

In JavaScript, you can use conditional statements to execute different blocks of code based on whether a certain condition is true or false.

Here is a list of the different types of conditional statements in JavaScript :

- **if** statement: The if statement allows you to execute a block of code if a certain condition is true.

```js
if (condition) {
  // code to be executed if condition is true
}
```

- **if...else** statement: The if...else statement allows you to execute a block of code if a certain condition is true, and a different block of code if the condition is false.

```js
if (condition) {
  // code to be executed if condition is true
} else {
  // code to be executed if condition is false
}
```

- **if...else if...else** statement: The if...else if...else statement allows you to specify multiple conditions and execute different blocks of code depending on which condition is true.

```js
if (condition1) {
  // code to be executed if condition1 is true
} else if (condition2) {
  // code to be executed if condition1 is false and condition2 is true
} else {
  // code to be executed if condition1 and condition2 are false
}
```

- **switch** statement: The switch statement allows you to specify multiple conditions and execute different blocks of code depending on the value of a certain expression.

```js
switch (expression) {
  case value1:
    // code to be executed if expression === value1
    break;
  case value2:
    // code to be executed if expression === value2
    break;
  default:
  // code to be executed if expression does not match any case
}
```

- **forEach** method: The forEach method allows you to execute a block of code for each element in an array.

```js
array.forEach(function (element) {
  // code to be executed for each element
});
```

- **map** method: The map method allows you to create a new array by applying a function to each element in an array.

```js
const newArray = array.map(function (element) {
  // code to transform each element
  return transformedElement;
});
```

- **filter** method: The filter method allows you to create a new array with only the elements that meet a certain condition.

```js
const newArray = array.filter(function(element) {
  // code to determine if element should be included
  return true or false;
});
```

- **reduce** method: The reduce method allows you to reduce an array to a single value by applying a function to each element in the array.

```js
const result = array.reduce(function (accumulator, element) {
  // code to update accumulator with element
  return updatedAccumulator;
}, initialValue);
```

Conditional statements and array methods are useful for controlling the flow of your code and manipulating data. It's important to understand how to use them in order to write efficient and effective JavaScript programs

### **Loops**

In JavaScript, you can use loops to execute a block of code multiple times. Here is a list of the different types of loops in JavaScript :

- **while** loop: The while loop executes a block of code as long as a certain condition is true.

```js
while (condition) {
  // code to be executed as long as condition is true
}
```

- **do...while** loop: The do...while loop executes a block of code at least once, and then continues to execute it as long as a certain condition is true.

```js
do {
  // code to be executed at least once
} while (condition);
```

- **for** loop: The for loop allows you to specify a loop counter and execute a block of code for a specified number of iterations.

```js
for (initialization; condition; update) {
  // code to be executed as long as condition is true
}
```

- **for...in** loop: The for...in loop allows you to iterate over the properties of an object.

```js
for (property in object) {
  // code to be executed for each property
}
```

- **for...of** loop: The for...of loop allows you to iterate over the values of an iterable object, such as an array.

```js
for (value of iterable) {
  // code to be executed for each value
}
```

Loops are useful for repeating a block of code multiple times, and for iterating over the elements of an array or the properties of an object. It's important to understand how to use them in order to write efficient and effective JavaScript programs.

### **Functions**

In JavaScript, a function is a block of code that can be called by name.

Functions allow you to define a set of instructions and reuse them multiple times in your code.

Here is an example of a basic function in JavaScript:

```js
function greet(name) {
  console.log("Hello, " + name + "!");
}

greet("John"); // prints 'Hello, John!'
greet("Jane"); // prints 'Hello, Jane!'
```

In this example, the greet function takes one argument, name, and prints a greeting to the console.

The function is called with different values for name, resulting in different greetings being printed.

#### **Parameters**:

When you define a function, you can specify variables (called parameters) to receive the arguments passed to the function. In the example above, the `name` parameter is used to receive the name argument passed to the greet function.

#### **Arguments**:

When you call a function, you can pass values (called arguments) to the function as input. In the example above, the `name` argument is passed to the greet function when it is called.

##### **Optional arguments**:

In JavaScript, you can specify default values for function parameters, which makes them optional. If an optional parameter is not provided with an argument when the function is called, the default value is used instead.

Here is an example of a function with optional arguments:

```js
function greet(name, greeting = "Hello") {
  console.log(greeting + ", " + name + "!");
}

greet("John"); // prints 'Hello, John!'
greet("Jane", "Hi"); // prints 'Hi, Jane!'
```

In the example above, the greet function has a default value of 'Hello' for the `greeting` parameter, so it is optional. When the function is called without a `greeting` argument, the default value is used. However, if a `greeting` argument is provided, it is used instead of the default.

Functions are a key concept in programming, because they allow you to modularize your code and reuse it multiple times. They also make it easier to read and understand your code, because you can give descriptive names to your functions and use them to abstract away complex logic.

It's important to understand how to define and call functions in JavaScript, because they are a fundamental building block of the language. You will use functions extensively in your programs to organize and reuse your code.

### **Objects**

In JavaScript, an object is a data type that represents a collection of related data and functions.

An object can be thought of as a container for properties, where each property has a name and a value.

The value of a property can be a primitive data type (such as a number or a string), or it can be a more complex data type (such as a function or another object).

Here is an example of an object in JavaScript:

```js
const person = {
  name: "John",
  age: 30,
  greet: function () {
    console.log("Hello, my name is " + this.name);
  },
};
```

In this example, the person object has three properties: `name`, `age`, and `greet`. The `name` and `age` properties have primitive values (a string and a number, respectively), and the `greet` property has a function value.

You can access the properties of an object using **dot notation** or **bracket notation**:

```js
console.log(person.name); // prints 'John'
console.log(person["age"]); // prints 30
```

You can also add, modify, or delete properties of an object:

```js
person.location = "New York"; // add a new property
person.age = 31; // modify an existing property
delete person.greet; // delete a property
```

Objects are a powerful and flexible data type in JavaScript, because they allow you to group related data and functions together and treat them as a single entity.

You can use objects to represent real-world objects (such as a person or a car), or you can use them to create custom data structures to store and manipulate data in your programs.

It's important to understand how to create and manipulate objects in JavaScript, because they are a fundamental part of the language and are used extensively in modern web development.

### **Arrays**

In JavaScript, an array is a data type that represents a collection of values.

An array is an ordered list of values, and each value can be of any data type.

Here is an example of an array in JavaScript:

```js
const numbers = [1, 2, 3, 4, 5];
```

In this example, the numbers array has five elements: 1, 2, 3, 4, and 5.

The elements of an array are numbered, **starting from 0**, and you can access them using the square bracket notation:

```js
console.log(numbers[0]); // prints 1
console.log(numbers[1]); // prints 2
console.log(numbers[2]); // prints 3
```

You can also modify the elements of an array:

```js
numbers[2] = 100; // modify an element
numbers[5] = 6; // add a new element
numbers.length; // prints 6
```

Arrays are a useful data type in JavaScript, because they allow you to store and manipulate multiple values in a single place.

You can use arrays to store lists of data (such as a list of names or a list of numbers), or you can use them to store more complex data structures (such as a list of objects).

Here is an example of an array containing mixed values:

```js
const mixed = [1, "string", true, [2, 3], { key: "value" }];
```

In this example, the mixed array has five elements: a `number`, a `string`, a `boolean`, an `array`, and an `object`. The elements of the array can be accessed using the square bracket notation:

```js
console.log(mixed[0]); // prints 1
console.log(mixed[1]); // prints 'string'
console.log(mixed[2]); // prints true
console.log(mixed[3]); // prints [2, 3]
console.log(mixed[4]); // prints {key: 'value'}
```

You can also access the elements of the nested array and object using additional square bracket notation:

```js
console.log(mixed[3][0]); // prints 2
console.log(mixed[4].key); // prints 'value'
```

Arrays can contain elements of any data type, including primitives, arrays, and objects. This makes them a powerful and flexible data type in JavaScript, because they allow you to store and manipulate a wide range of data in a single place.

### **primitive values**

In JavaScript, primitive values are immutable, which means that they cannot be changed once they are created. This is in contrast to objects, which are mutable and can be modified after they are created.

Here are some examples to illustrate the immutability of primitive values:

```js
let str = "hello";
str[0] = "H"; // this has no effect, because strings are immutable
console.log(str); // prints 'hello', because the value of the string has not changed

let num = 42;
num++; // this has no effect, because numbers are immutable
console.log(num); // prints 42, because the value of the number has not changed

let bool = true;
bool = !bool; // this has no effect, because booleans are immutable
console.log(bool); // prints true, because the value of the boolean has not changed
```

As you can see in these examples, attempting to modify a primitive value has no effect, because the value itself cannot be changed.

Instead, you can create a new primitive value with a different value. For example:

```js
let str = "hello";
let newStr = "H" + str.slice(1); // create a new string with a modified value
console.log(newStr); // prints 'Hello'

let num = 42;
let newNum = num + 1; // create a new number with a modified value
console.log(newNum); // prints 43

let bool = true;
let newBool = !bool; // create a new boolean with a modified value
console.log(newBool); // prints false
```

In these examples, we create new primitive values with modified values, rather than trying to modify the original values directly. This is the only way to change the value of a primitive in JavaScript, because primitives are immutable.

## Exercises

Here are three beginner-friendly and fun exercises that you can use to practice manipulating variables in JavaScript:

- **Magic 8-ball** :

Create a program that simulates a magic 8-ball by randomly selecting one of several predefined responses and printing it to the console. To do this, you will need to create an array of responses, generate a random number, and use the random number to select a response from the array.

Here's an example of how the program should work:

```js
const responses = [
  "It is certain",
  "It is decidedly so",
  "Without a doubt",
  "Yes, definitely",
  "You may rely on it",
  "As I see it, yes",
  "Most likely",
  "Outlook good",
  "Yes",
  "Signs point to yes",
  "Reply hazy try again",
  "Ask again later",
  "Better not tell you now",
  "Cannot predict now",
  "Concentrate and ask again",
  "Don't count on it",
  "My reply is no",
  "My sources say no",
  "Outlook not so good",
  "Very doubtful",
];

let randomNumber = Math.floor(Math.random() * responses.length);
let response = responses[randomNumber];
console.log(response);
```

- **Rock, paper, scissors** :

Create a program that simulates a game of rock, paper, scissors. The program should randomly select one of three moves (rock, paper, scissors) for the computer and prompt the user to enter their move. The program should then determine the winner of the game according to the following rules:

Rock beats scissors

Scissors beats paper

Paper beats rock

If the user and the computer select the same move, the game is a tie.

Here's an example of how the program should work:

```js
const moves = ["rock", "paper", "scissors"];

let randomNumber = Math.floor(Math.random() * moves.length);
let computerMove = moves[randomNumber];

let userMove = prompt("Enter your move: rock, paper, or scissors");

if (computerMove === userMove) {
  console.log("It's a tie!");
} else if (computerMove === "rock" && userMove === "scissors") {
  console.log("Computer wins!");
} else if (computerMove === "scissors" && userMove === "paper") {
  console.log("Computer wins!");
} else if (computerMove === "paper" && userMove === "rock") {
  console.log("Computer wins!");
} else {
  console.log("You win!");
}
```

- **Guessing game** :

Create a program that generates a random number between 1 and 100 and prompts the user to guess the number.

The program should keep track of the number of guesses the user has made and print a message indicating whether the user has won or lost when the user makes their final guess.

If the user wins, the program should also print the number of guesses it took the user to win.

Here's an example of how the program should work:

```js
let randomNumber = Math.floor(Math.random() * 100) + 1;
let guesses = 0;
let guess;

while (guess !== randomNumber) {
    guess = prompt('Enter your guess:');
    guesses++;
    if (guess > randomNumber) {
        console.log('Your guess is too high');
    } else if (guess < randomNumber) {
        console.log('Your guess is too low');
    }
}

console.log('You win!');
console.log(It took you ${guesses} guesses to win);
```

- **Password generator**:

Create a program that generates a random password of at least 8 characters. The password should contain at least one uppercase letter, one lowercase letter, and one number.

Here's an example of how the program should work:

```js
function generatePassword() {
  // your code here
}

console.log(generatePassword()); // prints a random password
```

To solve this exercise, you will need to use the `Math.random()` function to generate random numbers for each character in the password. You will also need to use the `String.fromCharCode()` function to convert the random numbers to characters. Here's a hint:

```js
function generatePassword() {
  let password = "";
  let randomNumber;
  let uppercase = false;
  let lowercase = false;
  let number = false;

  while (!uppercase || !lowercase || !number || password.length < 8) {
    randomNumber = Math.floor(Math.random() * 123);
    if (randomNumber >= 48 && randomNumber <= 57) {
      password += String.fromCharCode(randomNumber);
      number = true;
    } else if (randomNumber >= 65 && randomNumber <= 90) {
      password += String.fromCharCode(randomNumber);
      uppercase = true;
    } else if (randomNumber >= 97 && randomNumber <= 122) {
      password += String.fromCharCode(randomNumber);
      lowercase = true;
    }
  }

  return password;
}
```

- **Word frequency counter**:

Create a program that prompts the user to enter a sentence and then counts the frequency of each word in the sentence. The program should print a list of each word and its frequency, sorted from most frequent to least frequent.

Here's an example of how the program should work:

```js
let sentence = prompt("Enter a sentence:");

let words = sentence.split(" ");
let wordCounts = {};

for (let word of words) {
  if (word in wordCounts) {
    wordCounts[word]++;
  } else {
    wordCounts[word] = 1;
  }
}

let sortedWords = Object.keys(wordCounts).sort(
  (a, b) => wordCounts[b] - wordCounts[a]
);

for (let word of sortedWords) {
  console.log(`${word}: ${wordCounts[word]}`);
}
```
