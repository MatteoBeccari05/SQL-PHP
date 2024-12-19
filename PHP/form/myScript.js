function myDisplay(something){
    document.getElementById("demo").innerHTML = something;

}

function myCalc(num1, num2, myCallBack)
{
    let sum = num1 + num2;
    myCallBack(sum);
}

myCalc(5,5, myDisplay);