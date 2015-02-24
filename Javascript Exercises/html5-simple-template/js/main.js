console.log("n1 = " + max(200, 4) + " n2 = " + maxOfThree(10, 2990, 30) + " n3 = " + vowelCheck("y"));


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
function translate(a) {
    var strng = a;
    var array = strng.split('');
    return array.shift();
    //array shift array push
}