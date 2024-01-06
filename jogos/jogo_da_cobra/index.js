const canvas=document.getElementById('game');
const ctx=canvas.getContext('2d');

class snakePart{
constructor(x, y){
    this.x=x;
    this.y=y;
}

}

let speed=7;
let tileCount=20; 

let tileSize=canvas.clientWidth/tileCount-2;
let headX=10;
let headY=10;


const snakeParts=[];
let tailLength=2;


let xvelocity=0;
let yvelocity=0;

//draw apple
let appleX=2;
let appleY=2;

//scores
let score=0;


function drawGame(){
    changeSnakePosition();

    let result=isGameOver();
    if(result){
        return;
    }
    clearScreen();
    drawSnake();
    drawApple();
  
    checkCollision()
    drawScore();
    setTimeout(drawGame, 1000/speed);
}
//Game Over function
function isGameOver(){
    let gameOver=false; 
    
    if(yvelocity===0 && xvelocity===0){
        return false;
    }
    if(headX<0){
        gameOver=true;
    }
    else if(headX===tileCount){
        gameOver=true;
    }
    else if(headY<0){
        gameOver=true;
    }
    else if(headY===tileCount){
        gameOver=true;
    }



     for(let i=0; i<snakeParts.length;i++){
         let part=snakeParts[i];
         if(part.x===headX && part.y===headY){
             gameOver=true;
             break; 
         }
     }
    

    //display text Game Over
    if(gameOver){
     ctx.fillStyle="white";
     ctx.font="40px verdana";
     ctx.fillText("Fim de Jogo! ", canvas.clientWidth/6.5, canvas.clientHeight/2.4);//position our text in center
    }

    return gameOver;// this will stop execution of drawgame method
}
function drawScore(){
    ctx.fillStyle="white"
    ctx.font="10px verdena"
    ctx.fillText("Score: " +score, canvas.clientWidth/1.4, canvas.clientHeight/28.5);
    }
    
function clearScreen(){
    ctx.fillStyle= '#0e012c'
    ctx.fillRect(0,0,canvas.clientWidth,canvas.clientHeight)
     }
     
 function drawSnake(){
    ctx.fillStyle="green";
    for(let i=0;i<snakeParts.length;i++){
    let part=snakeParts[i]
    ctx.fillRect(part.x *tileCount, part.y *tileCount, tileSize,tileSize)
}
    snakeParts.push(new snakePart(headX,headY));
    if(snakeParts.length>tailLength){
    snakeParts.shift();
}
    ctx.fillStyle="#046404";
    ctx.fillRect(headX* tileCount,headY* tileCount, tileSize,tileSize)
 }

 function changeSnakePosition(){
     headX=headX + xvelocity;
     headY=headY + yvelocity;
 }

 function drawApple(){
     ctx.fillStyle="red";
     ctx.fillRect(appleX*tileCount, appleY*tileCount, tileSize, tileSize)
 }
 // check for collision and change apple position
 function checkCollision(){
     if(appleX==headX && appleY==headY){
         appleX=Math.floor(Math.random()*tileCount);
         appleY=Math.floor(Math.random()*tileCount);
         tailLength++;
         score++; //increase our score value

     }
 }
 //add event listener to our body
 document.body.addEventListener('keydown', keyDown);

 function keyDown(){
    //up
    if(event.keyCode==87 || event.keyCode==38){
    if(yvelocity==1)
    return;
    yvelocity=-1;
    xvelocity=0;
 }
 
 //down
    if(event.keyCode==83 || event.keyCode==40){
    if(yvelocity==-1)
    return;
    yvelocity=1;
    xvelocity=0;
 } 
 //left
    if(event.keyCode==65 || event.keyCode==37){
     if(xvelocity==1)
     return;
     yvelocity=0;
     xvelocity=-1;
 }
 //right
    if(event.keyCode==68 || event.keyCode==39){
    if(xvelocity==-1)
    return;
    yvelocity=0;
    xvelocity=1;
 }
}

function reiniciar()
{
    location.reload();
}

function Menu()
    {
    window.location.replace("file:///D:/3EtimDS2023_TCC_Dev/refugia-me/games.html");
    } 
    
 drawGame(); 