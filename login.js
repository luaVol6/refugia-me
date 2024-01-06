const formLog   = document.getElementById('formLogin');
const spansLog  = document.querySelectorAll('.spanRequiredLog');
const camposLog = document.querySelectorAll('.inputsRequiredLog');
const emailRegexLog = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var validoLog = false;
const btnLog = document.getElementById('btn-login');

function erroLog(index){
    camposLog[index].style.borderBottom = '2px solid red';
    spansLog[index].style.display= 'block';
    validoLog = false;
}

function removeErroLog(index){
    camposLog[index].style.border = '';
    spansLog[index].style.display= 'none';
}

function validarEmailLog(){
    if(!emailRegexLog.test(camposLog[0].value)){
        erroLog(0);
    }else{
        removeErroLog(0);
    }
}
function validarSenhaLog(){
    if(camposLog[1].value.length<8 || camposLog[1].value.length>20){
        erroLog(1);
    }else{
        validoLog = true;
        btnLog.disabled = !validoLog;        
        removeErroLog(1);
    }
}