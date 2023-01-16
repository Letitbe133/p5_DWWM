# 09/01/2023 - Menu du jour

# Javascript 101

## Back to the future !

JavaScript est un langage de programmation créé en 1995 par Netscape. Il a été conçu pour ajouter de l'interactivité aux pages Web, et est rapidement devenu l'un des langages de programmation les plus populaires sur le web.

À la fin des années 1990 et au début des années 2000, JavaScript a été principalement utilisé pour des tâches simples telles que par exemple la validation des formulaires. Cependant, avec la montée en puissance des navigateurs Web, JavaScript a pu gérer des tâches plus complexes, comme la création d'animations et de jeux.

Au milieu des années 2000, l'émergence d'applications Web a conduit au développement de librairies et de frameworks tels que jQuery et AngularJS, ce qui a permit le développement d' applications plus complexes.

---

## Javascript WTF !

Aujourd'hui, JavaScript est un élément clé du web moderne. Il est utilisé pour créer des sites interactifs et dynamiques, construire des applications mobiles et créer des applications côté serveur. Il peut également être utilisé avec d'autres technologies telles que WebGL pour créer des graphismes 3D pour les applications web.

---

## Javascript HowTo ?

Discuss the tools needed to write and run JavaScript code (e.g. a text editor and a web browser)
Variables and data types

---

## Programming building blocks

### **variables**

Une variable est un conteneur nommé permettant de stocker des données.

Pour déclarer des variables on utilise les mots-clés :

- var
- let
- const

> En JavaScript, var et let sont 2 mots-clés qui permettent de déclarer des variables. Ils ont le même objectif mais ont des comportements différents.
>
> La principale différence entre var et let est leur portée.
>
> les variables déclarées avec var ont une portée locale à la fonction dans laquelle elles ont été déclarées, ce qui signifie qu'elles sont visibles dans la fonction dans laquelle elles sont déclarées, mais aussi dans toutes les fonctions qui sont imbriquées dans cette fonction.
>
> les variables déclarées avec let par contre, ont une portée bloc, ce qui signifie qu'elles ne sont visibles que dans le bloc dans lequel elles sont déclarées.
>
> Voici un exemple qui illustre la différence entre var et let :

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

> Dans la fonction foo, la variable var x est déclarée à l'intérieur d'un bloc, mais est toujours visible à l'extérieur de ce bloc.
>
> Dans la fonction bar par contre, la variable let y est déclarée dans le bloc if, et elle n'est pas visible à l'extérieur du bloc.
>
> Une autre différence entre var et let est que les variables var sont sujettes au hoisting (remontée), ce qui signifie qu'elles peuvent être consultées avant qu'elles ne soient déclarées (elles auront alors pour valeur undefined).
>
> Les variables let, d'autre part, ne sont pas sujettes au hoisting, et ne peuvent pas être consultées avant leur déclaration.
>
> Voici un exemple qui illustre cette différence :

```js
console.log(x); // undefined
var x = 5;

console.log(y); // ReferenceError: y is not defined
let y = 5;
```

> Dans le premier exemple, la variable var x est accessible avant qu'elle ne soit déclarée, mais elle n'est pas initialisée. C'est parce que les variables var sont automatiquement initialisées à undefined lorsqu'elles sont déclarées.
>
> Dans le deuxième exemple, la variable let y est accédée avant qu'elle ne soit déclarée, et une erreur de type ReferenceError est lancée.
>
> Il y a quelques autres différences mineures entre var et let, comme le fait que les variables let ne peuvent pas être rédéclarées dans le même bloc, alors que les variables var peuvent l'être.
>
> D'une manière générale, déclarez vos variables avec let car les règles de portée peuvent aider à éviter les re-déclarations accidentelles et d'autres types de bugs.
>
> Notez cependant que var est toujours largement utilisé et que vous pouvez le rencontrer par exemple dans du code legacy.

#### **data types**

> En JavaScript, il existe plusieurs types de données que vous pouvez utiliser pour stocker des valeurs.
>
> Voici une liste des différents types de données :

- **Number**: Un type de données Number représente des valeurs numériques. En JavaScript, il n'y a qu'un seul type de nombre, et il peut être soit un entier, soitun décimal (float).

- **String**: Un type de données String représente une chaîne de caractères. Une chaîne de caractère peut être définie à l'aide de guillemets simples (') ou doubles ("). On peut aussi utiliser la notation (`) ou Template Literal qui permet d'interpoler des variables.

- **Boolean**: Un type de données booléen représente une valeur vraie ou fausse.

- **Null**: Le type de données null représente une absence intentionnelle de valeur.

- **Undefined**: Le type de données undefined représente une valeur non initialisée.

- **Object**: Un type de données Object représente une collection de données et de fonctions qui sont liées.

- **Symbol**: Un type de données de symbole est un identifiant unique et immuable.

En plus de ces types de base, JavaScript dispose également de quelques types de données particuliers, comme **fonction** et **array**, qui sont en fait des objets ayant des caractéristiques et des fonctionnalités supplémentaires.

Il est important de comprendre les différents types de données en JavaScript, car différents types de données nécessitent différentes opérations et méthodes.

Par exemple, vous ne pouvez pas utiliser les opérateurs arithmétiques sur les chaînes de caractères, et vous ne pouvez pas utiliser les méthodes de chaîne sur les nombres.

### **Arrays**

En JavaScript, un tableau est un type de données qui représente une liste ordonnée de valeurs de tous types.

Voici un exemple de tableau :

```js
const numbers = [1, 2, 3, 4, 5];
```

Dans cet exemple, le tableau de nombres comporte cinq éléments : 1, 2, 3, 4 et 5.

Les éléments d'un tableau sont numérotés, **à partir de 0**, et vous pouvez y accéder à l'aide de la notation crochet:

```js
console.log(numbers[0]); // prints 1
console.log(numbers[1]); // prints 2
console.log(numbers[2]); // prints 3
```

Vous pouvez aussi modifier les éléments d'un tableau:

```js
numbers[2] = 100; // modify an element
numbers[5] = 6; // add a new element
numbers.length; // prints 6
```

Vous pouvez utiliser des tableaux pour stocker des listes de données (comme une liste de noms ou une liste de nombres), ou vous pouvez les utiliser pour stocker des structures de données plus complexes (comme une liste d'objets).

Voici un exemple d'un tableau contenant des valeurs mixtes:

```js
const mixed = [1, "string", true, [2, 3], { key: "value" }];
```

Dans cet exemple, le tableau `mixed` contient 5 éléments: un `number`, une `string`, un `boolean`, un `array`, et un `object`. On peut accéder aux éléments du tableau en utilisant la notation crochet:

```js
console.log(mixed[0]); // prints 1
console.log(mixed[1]); // prints 'string'
console.log(mixed[2]); // prints true
console.log(mixed[3]); // prints [2, 3]
console.log(mixed[4]); // prints {key: 'value'}
```

On peut également accéder aux éléments d'un tableau imbriqué et d'un objet en utilisant la même notation combinée à la notation point:

```js
console.log(mixed[3][0]); // prints 2
console.log(mixed[4].key); // prints 'value'
```

Les tableaux peuvent contenir des éléments de tout type, y compris des primitives, des tableaux et des objets. Cela en fait un type de données puissant et flexible car ils permettent de stocker et de manipuler une large gamme de données en un seul endroit.

### **Objets**

En JavaScript, un objet est un type de données qui est une entité contenant un ensemble de variables (propriétés) et de fonctions (méthodes). Les objets peuvent interagir entre eux.

Un objet peut être considéré comme un conteneur pour les propriétés, où chaque propriété a un nom et une valeur.

La valeur d'une propriété peut être un type de données primitif (comme un nombre ou une chaîne de caractères), ou il peut être un type de données plus complexe (comme une fonction ou un autre objet).

Voici un exemple d'objet en JavaScript:

```js
const person = {
  name: "John",
  age: 30,
  greet: function () {
    console.log("Hello, my name is " + this.name);
  },
};
```

Dans cet exemple, l ' objet a trois propriétés: `name` , `age` et `greet` . Les propriétés `name` et `age` contiennent des valeurs primitives (une chaîne de caractères et un nombre, respectivement), et la propriété `greet` quand à elle contient une fonction.

Vous pouvez accéder aux propriétés d'un objet en utilisant la notation **point** ou la notation **crochet**:

```js
console.log(person.name); // prints 'John'
console.log(person["age"]); // prints 30
```

On peut aussi ajouter, modifier ou supprimer des propriétés d'un objet:

```js
person.location = "New York"; // add a new property
person.age = 31; // modify an existing property
delete person.greet; // delete a property
```

Les objets sont un type de données puissant et flexible en JavaScript. Ils vous permettent de regrouper des données et des fonctions liées et de les traiter en tant qu'entité unique.

Vous pouvez utiliser des objets pour représenter des objets du monde réel (comme une personne ou une voiture), ou vous pouvez les utiliser pour créer des structures de données personnalisées pour stocker et manipuler des données dans vos scripts.

### **les primitives**

En JavaScript, les valeurs primitives sont immuables, ce qui signifie qu'elles ne peuvent pas être changées une fois qu'elles sont créées. Cela contraste avec les objets et tableaux, qui sont mutables et peuvent être modifiés après leur création.

Il existe 7 types de primitives :

- string
- number
- bigint
- boolean
- undefined
- symbol
- null

Voici quelques exemples pour illustrer l'immutabilité des valeurs primitives:

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

Comme on peut le voir dans ces exemples, essayer de modifier une valeur primitive n'a aucun effet, parce que la valeur elle-même ne peut pas être changée.

On peut par contre créer une nouvelle valeur primitive avec une valeur différente.

Par exemple :

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

Dans ces exemples, on crée de nouvelles valeurs primitives avec des valeurs modifiées, plutôt que d'essayer de modifier directement les valeurs originales. C'est le seul moyen de changer la valeur d'une primitive en JavaScript car les primitives sont immuables.

Pour aller plus loin à propos de la notion de mutabilité : [mutability-and-immutability-in-javascript-explained-in-detail](https://hackernoon.com/mutability-and-immutability-in-javascript-explained-in-detail-x7q33ag)

#### **Les opérateurs**

##### **Arithmétiques**

- \+ : Addition
- \- : Subtraction
- \* : Multiplication
- \/ : Division
- \% : Modulo (reste de la division)
- \++ : Increment
- \-- : Decrement

> En JavaScript, l'opérateur ++ est utilisé pour augmenter une valeur de 1.
>
> Il existe deux formes de l'opérateur ++ : pré-incrément et post-incrément.
>
> L'opérateur pré-incrément (++x) augmente la valeur de x puis retourne la nouvelle valeur. Par exemple :

```js
let x = 5;
console.log(++x); // prints 6
console.log(x); // prints 6
```

> L'opérateur post-incrément (x++) retourne la valeur courante de x, puis augmente la valeur de x.
>
> Par exemple:

```js
let x = 5;
console.log(x++); // prints 5
console.log(x); // prints 6
```

> Il est important de comprendre la différence entre le pré-incrément et le post-incrément, car l'ordre dans lequel la valeur est incrémentée et retournée peut affecter le comportement de votre script.
>
> Par exemple:

```js
let x = 5;
let y = ++x;
console.log(y); // prints 6

let x = 5;
let y = x++;
console.log(y); // prints 5
```

> Dans le premier exemple, la valeur de x est incrémentée avant qu'elle soit assignée à y, donc y est égale à la valeur incrémentée de x.
>
> Dans le deuxième exemple par contre, la valeur de x est assignée à y avant qu'elle soit incrémentée, donc y est égale à la valeur initiale de x.

##### **Affectation**

- \= : Affectation simple
- \+= : Affectation d'addition
- \-= : Affectation de soustraction
- \*= : Affectation de multiplication
- \/= : Affectation de division
- \%= : Affectation de modulo

##### **Comparaison**

- == : Egal
- != : Non égal
- === : Strictement égal (identique en valeur ET en type)
- !== : Non strictement égal

- \> : Supérieur
- \< : Inférieur
- \>= : Supérieur ou égal
- \<= : Inférieur ou égal

##### **Logique**

- && : Et
- || : Ou
- ! : Non

##### **Autres**

- typeof : Retourne le type d'une valeur
- instanceof : Renvoie vrai si un objet est une instance d'un constructeur spécifique

Les différents types d'opérateurs en JavaScript vous permettent d'effectuer diverses opérations sur les valeurs et de contrôler le flux de votre code.

Par exemple, vous pouvez utiliser les opérateurs arithmétiques pour effectuer des calculs, les opérateurs d'affectation pour attribuer des valeurs aux variables, et les opérateurs de comparaison pour comparer les valeurs et prendre les décisions adaptées.

### **Expressions conditionnelles**

En JavaScript, vous pouvez utiliser des expressions conditionnelles pour exécuter différents blocs de code basés sur le fait qu'une condition est évaluée comme vraie ou fausse.

Voici une liste des différents types de déclarations conditionnelles en JavaScript :

- **if** L'instruction if vous permet d'exécuter un bloc de code si une certaine condition est vraie.

```js
if (condition) {
  // code to be executed if condition is true
}
```

- **if...else** : L'instruction if...else vous permet d'exécuter un bloc de code si une certaine condition est vraie, et un bloc différent si la condition est fausse.

```js
if (condition) {
  // code to be executed if condition is true
} else {
  // code to be executed if condition is false
}
```

- **if...else if...else** : L'instruction if...else if...else vous permet de spécifier plusieurs conditions et d'exécuter différents blocs de code selon quelle condition est vraie.

```js
if (condition1) {
  // code to be executed if condition1 is true
} else if (condition2) {
  // code to be executed if condition1 is false and condition2 is true
} else {
  // code to be executed if condition1 and condition2 are false
}
```

- **switch** : L'instruction switch vous permet de spécifier plusieurs conditions et d'exécuter différents blocs de code selon la valeur d'une certaine expression.

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

- **forEach** : La méthode forEach vous permet d'exécuter une fonction pour chaque élément dans un tableau.

```js
array.forEach(function (element) {
  // code to be executed for each element
});
```

- **map** : La méthode map vous permet de créer un nouveau tableau en exécutant une fonction pour chaque élément dans un tableau.

```js
const newArray = array.map(function (element) {
  // code to transform each element
  return transformedElement;
});
```

- **filter** : La méthode filter vous permet de créer un nouveau tableau contenant uniquement les éléments qui répondent à une certaine condition.

```js
const newArray = array.filter(function(element) {
  // code to determine if element should be included
  return true or false;
});
```

- **reduce** : La méthode reduce vous permet de réduire un tableau à une seule valeur en exécutant une fonction pour chaque élément du tableau.

```js
const result = array.reduce(function (accumulator, element) {
  // code to update accumulator with element
  return updatedAccumulator;
}, initialValue);
```

Les instructions conditionnelles et les méthodes de tableau sont utiles pour contrôler le flux de votre code et manipuler les données.

### **Boucles**

Les boucles sont utilisées pour exécuter un bloc de code à plusieurs reprises.

Voici une liste des différents types de boucles en JavaScript :

- **while** : La boucle while exécute un bloc de code tant qu'une certaine condition est vraie.

```js
while (condition) {
  // code to be executed as long as condition is true
}
```

- **do...while** : La boucle do...while exécute un bloc de code au moins une fois, puis continue à l'exécuter aussi longtemps qu'une certaine condition est vraie.

```js
do {
  // code to be executed at least once
} while (condition);
```

- **for** : La boucle for permet de spécifier un compteur de boucle et d'exécuter un bloc de code pour un nombre spécifié d'itérations.

```js
for (initialization; condition; update) {
  // code to be executed as long as condition is true
}
```

- **for...in** : La boucle for...in permet d'itérer sur les propriétés d'un objet.

```js
for (property in object) {
  // code to be executed for each property
}
```

- **for...of** : La boucle for...of permet d'itérer sur les valeurs d'un objet itérable, comme un tableau.

```js
for (value of iterable) {
  // code to be executed for each value
}
```

### **Fonctions**

En Javascript, une fonction est un bloc de code qui peut être nommé ou anonyme.

Les fonctions vous permettent de définir un ensemble d'instructions et de les réutiliser plusieurs fois dans votre code.

Voici un exemple d'une fonction de base en JavaScript:

```js
function greet(name) {
  console.log("Hello, " + name + "!");
}

greet("John"); // prints 'Hello, John!'
greet("Jane"); // prints 'Hello, Jane!'
```

Dans cet exemple, la fonction greet prend un argument, name et affiche un message de salutation dans la console.

La fonction est appelée avec des valeurs différentes (arguments) pour le nom, ce qui permet d'imprimer différents salutations.

#### **Paramètres**:

Quand on définit une fonction, on peut spécifier des variables (nommées paramètres) qui vont recevoir les arguments passés à la fonction. Dans l'exemple ci-dessus, le paramètre `name` est utilisé pour recevoir le nom transmis à la fonction greet.

#### **Arguments**:

Lorsque vous appelez une fonction, vous pouvez passer des valeurs (appelés arguments) à la fonction comme entrée. Dans l'exemple ci-dessus, l'argument `John` ou `Jane` est passé à la fonction greet quand elle est appelée.

##### **Arguments optionnels**:

Il est possible de spécifier des valeurs par défaut pour les arguments d'une fonction, ce qui les rend facultatifs. Si un paramètre optionnel n'est pas fourni avec un argument lorsque la fonction est appelée, la valeur par défaut est utilisée à la place.

Voici un exemple de fonction avec des arguments optionnels:

```js
function greet(name, greeting = "Hello") {
  console.log(greeting + ", " + name + "!");
}

greet("John"); // prints 'Hello, John!'
greet("Jane", "Hi"); // prints 'Hi, Jane!'
```

Dans l'exemple ci-dessus, la fonction greet a une valeur par défaut de 'Hello' pour le paramètre `greeting`, donc il est optionnel. Lorsque la fonction est appelée sans l'argument `greeting`, la valeur par défaut est utilisée. Toutefois, si un argument `greeting` est fourni, il est utilisé plutôt que celui par défaut.

Les fonctions sont un concept clé dans la programmation, car elles vous permettent de modéliser votre code et de le réutiliser plusieurs fois. Elles facilitent également la lecture et la compréhension du code si vous les nommez de manière explicite.

## Exercices

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
