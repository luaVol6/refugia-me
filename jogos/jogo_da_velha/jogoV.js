var PLAYER_TIME;
var scoreboard = [0,0,0]
var IA = false;
var playsPossible;
var marks;
var btnIA = document.getElementById("buttonIA");
var restartBtn = document.getElementById('button');
const casas = document.querySelectorAll('.casa');
var statusGame = document.getElementById("resultado");
const WINS_POSSIBLE = [
[1,2,3],
[4,5,6],
[7,8,9],
[1,5,9],
[3,5,7],
[1,4,7],
[2,5,8],
[3,6,9]
];
function init(){
    btnRestart()
    PLAYER_TIME = 'X';
    marks = [];
    playsPossible = WINS_POSSIBLE
    casas.forEach((item, index) => {
        item.addEventListener('click', marcar)  
    })
    btnIA.addEventListener("click", activeIA);
}
function updateScore(){
    let score = document.querySelector('.scoreboard').querySelectorAll('div')
    score.forEach((element, index)=>{
        element.innerHTML = scoreboard[index];
    })   
}
function activeIA(){
    IA = !IA;
    IA ? btnIA.innerHTML = "Contra a Máquina" : btnIA.innerHTML = "Contra um amigo";   
}
function btnRestart(hide = false){
    if(hide) return restartBtn.style="display:inline-block;";
   // restartBtn.style="display:none;"
    restartBtn.addEventListener('click', restartGame, {once:true});
}
function changePlayer(){
    PLAYER_TIME === 'X' ? PLAYER_TIME = 'O' : PLAYER_TIME = 'X';
}
function validPlay(local){
    return (local.innerHTML == '')
}
function cellElement(id){
    if(casas[id-1].innerHTML != "") return casas[id-1].innerHTML
}
function setCellElement(id){
    casas[id-1].click()   
}
function endGame(){
    casas.forEach((item, index)=>{
       item.removeEventListener("click", marcar)
    })
}
const marcar = (e)=>{
    if(validPlay(e.target)) { 

        e.target.innerHTML = PLAYER_TIME
        marks.push(e.target.innerHTML)

        if(isWinner()){
            statusGame.innerHTML = `'${PLAYER_TIME}' Foi o vencedor`
            switch(PLAYER_TIME){
                case 'X':
                    scoreboard[0]++;
                break;
                case 'O':
                    scoreboard[1]++;
                break;
            }
            updateScore()
            endGame();
            btnRestart(true)

        } else{

            if(isDraw()){
                scoreboard[2]++;
                updateScore()
                statusGame.innerHTML = "Empatou!";
                btnRestart(true)
            }else{
                changePlayer();
                if(PLAYER_TIME == "O" && IA) IAcheck();
            }
        }
        } else { 
        alert("Jogada Inválida!")
    }
}
function isDraw(){
    return (marks.length == 9);
}
function isWinner(){
    return WINS_POSSIBLE.some((combination)=>{
        return combination.every((id)=>{
            return (cellElement(id) == PLAYER_TIME)
        })
    })
}
const restartGame = (e)=> {
    init();
    casas.forEach((casa)=>{
        casa.innerHTML = "";
    })
    statusGame.innerHTML = "Jogo da Velha"
}
function IAmark(combination){
    let id=0;
    combination.some((element)=>{
        if(cellElement(element) == undefined) id = element       
    })
    setCellElement(id)
}
function IAcheck(){
    let aX = [];
    let aO = [];
    let init = [];
    let win = [];
    let risk = [];
    let trywin = [];
    WINS_POSSIBLE.forEach((combination)=>{
        let X=0;
        let O=0;
        combination.forEach((elements)=>{
            
            if(cellElement(elements) == 'X') X++;
            if(cellElement(elements) == 'O') O++;
        })
        aX.push(X);
        aO.push(O);
    })
    aO.forEach((element, index)=>{
        switch(element){
            case 0:
                if(aX[index] == 2){
                    risk.push(WINS_POSSIBLE[index])
                } else if(aX[index] == 1){
                    init.push(WINS_POSSIBLE[index])
                }
            break;
            case 1:
                if(aX[index] == 0) trywin.push(WINS_POSSIBLE[index])
                else if(aX[index] == 1) init.push(WINS_POSSIBLE[index])
            break;   
            case 2:
                if(aX[index] == 0){
                    win.push(WINS_POSSIBLE[index])
                }
            break;
        }  
    })
    if(win.length > 0) {
        return IAcheckInit(win)
    }else if(risk.length > 0) {
        return IAcheckInit(risk)
    }else if(trywin.length > 0) {
        return IAcheckInit(trywin)
    }else if(init.length > 0) IAcheckInit(init)   
}
function IAcheckInit(init){
    let numbers = []
    init.forEach((element)=>{ element.forEach((num, i)=>{
    if(cellElement(num) == undefined) {
        numbers.push(num)
    }
    });  
})
IArandomPlay(numbers)
}
function IArandomPlay(combination){
    let idPlay = []
    idPlay.push(combination[Math.floor(Math.random() * combination.length)])
    IAmark(idPlay)
}
activeIA();
updateScore()
init();