console.log("n1 = " + max(200, 4) + " n2 = " + maxOfThree(10, 2990, 30) + " n3 = " + vowelCheck("y") + " n4 = " + translate("joshua") + " n5 multiply = " + multiply(1, 2, 3, 4) + " n5 sum = " + sum(1, 2, 3, 4) + " n6 = " + reverse("joshua") + " n7 = " + randMax100() + " n8 = " + findLongestWord("cat", "cats", "catss", "catsssss", "catsssssssssssssssss") + " n9 = " + findLongWords(5, "cat", "cats", "catss", "catsssss", "catsssssssssssssssss", "tttttttttt"));


//n1
function max(a, b) {
    return Math.max(a, b);
}

//n2
function maxOfThree(a, b, c) {
    return Math.max(a, b, c);
}

//n3
function vowelCheck(a) {
    switch (a) {
    case "a":
        return true;
        break;
    case "e":
        return true;
        break;
    case "i":
        return true;
        break;
    case "o":
        return true;
        break;
    case "u":
        return true;
        break;
    case "y":
        return true;
        break;
    default:
        return false;
    }
}

//n4
function translate(abc) {
    var strng = abc;
    var array = strng.split('');
    var firstLetter = array.shift();
    array.push(firstLetter);
    return array.join("");
    //array shift array push
}

//n5
function multiply() {
    var multiply;
    var total = 1;
    for (i = 1; i <= arguments.length - 1; i = i + 2) {
        multiply = arguments[i - 1] * arguments[i];
        total = total * multiply;
    }
    return total;
}

function sum() {
    var sum = 0;
    for (i = 0; i < arguments.length; i++) {
        sum += arguments[i];
    }
    return sum;
}

//n6
function reverse(abc) {
    var strng = abc;
    var array = strng.split('');
    array = array.reverse();
    return array.join("");
}

//n7
function randMax100() {
    return Math.max(Math.floor(Math.random() * 100), Math.floor(Math.random() * 100), Math.floor(Math.random() * 100));
}

//n8
function findLongestWord() {
    var strng = [];
    var length = [];
    for (i = 0; i < arguments.length; i++) {
        strng[i] = arguments[i];
        length[i] = strng[i].length;
    }
    return Math.max.apply(Math, length);
}

//n9
function findLongWords(i) {
    var array = [];
    for (j = 1; j < arguments.length; j++) {
            array[j - 1] = arguments[j];
    }
     for (jj = 0; jj < array.length; jj++) {
      if (array[jj].length <= arguments[0]) {
            array.splice(jj, 1);
          jj--;
        }
     } 
    return array;
}