
class cons
{
    constructor(left, right)
    {
        this.left = left;
        this.right = right;
    }
}

function car(consVar)
{
    return consVar.left;
}


function cdr(consVar)
{
    return consVar.right;
}

let thing = new cons(3,4);
console.log("car", car(thing));
console.log("cdr", cdr(thing));