const btn = document.querySelector('.btn');
// const inn = document.querySelector('.in1');
const unn = document.getElementsByName('.in2');

var Valid = [false,false,false,false,false];

function regi(){
    if(unn !== ""){
        Valid[0] = true;
        final_validity();
    }
}
 

function onRadioChange1() {
    var radio1 = document.querySelector('input[name="president"]:checked').value;
    if(radio1 !== ""){
        Valid[1] = true;
        final_validity();
    }
}
function onRadioChange2() {
    var radio2 = document.querySelector('input[name="treasurer"]:checked').value;
    if(radio2 !== ""){
        Valid[2] = true;
        final_validity();
    }
}
function onRadioChange3() {
    var radio3 = document.querySelector('input[name="vp"]:checked').value;
    if(radio3 !== ""){
        Valid[3] = true;
        final_validity();
    }
}
function onRadioChange4() {
    var radio4 = document.querySelector('input[name="secretary"]:checked').value;
    if(radio4 !== ""){
        Valid[4] = true;
        final_validity();
    }
}
 
function final_validity(){
    if(Valid[0] === true && Valid[1] === true && Valid[2] === true && Valid[3] === true
        && Valid[4] === true)
    {           
                btn.disabled = false;
    }
}

