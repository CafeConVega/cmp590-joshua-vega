console.log("n1 = " + max(200, 4) + " n2 = " + maxOfThree(10, 2990, 30) + " n3 = " + vowelCheck("y") + " n4 = " + translate("joshua") + " n5 multiply = " + multiply(1,2,3,4) + " n5 sum = " + sum(1,2,3,4,5));


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
    for (i = 1; i <= arguments.length-1; i = i+2) {
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