// UI

const database = [
    {
        question:"Choose Traffic Light ?",
        a:"./img/traffic.jpg",
        b:"./img/mountain.jpg",
        c:"./img/ambulance.jpg",
        d:"./img/airport.jpg",
        correctanswer:"a"
    },
    {
        question:"Choose Mountain ?",
        a:"./img/ambulance.jpg",
        b:"./img/mountain.jpg",
        c:"./img/traffic.jpg",
        d:"./img/airport.jpg",
        correctanswer:"b"
    },
    {
        question:"Choose Ambulance Truck ?",
        a:"./img/ambulance.jpg",
        b:"./img/airport.jpg",
        c:"./img/traffic.jpg",
        d:"./img/mountain.jpg",
        correctanswer:"a"
    },
    {
        question:"Choose Airport ?",
        a:"./img/traffic.jpg",
        b:"./img/mountain.jpg",
        c:"./img/ambulance.jpg",
        d:"./img/airport.jpg",
        correctanswer:"d"
    }
]

const getcontainer = document.querySelector('.container');
const getquestion = document.querySelector(".question");
const getinput = document.querySelectorAll(".answer");

const geta_img = document.getElementById('a_img'),
      getb_img = document.getElementById('b_img'),
      getc_img = document.getElementById('c_img'),
      getd_img = document.getElementById('d_img');

const getbtn = document.querySelector('.btn');

let currentidx = 0;
let score = 0;


function startquestion (){

    const currentqes = database[currentidx];

    getquestion.textContent = currentqes.question;
    geta_img.src = currentqes.a;
    getb_img.src = currentqes.b;
    getc_img.src = currentqes.c;
    getd_img.src = currentqes.d;
}

startquestion();

function getsingleinput(){

    let answer = "c"

    return answer;
}

getbtn.addEventListener("click",function(){
    // console.log('i am working');

    const getanswer = getsingleinput();

    // removeselected();

    console.log(getanswer);

    if(getanswer){


        if(getanswer === database[currentidx].correctanswer){
            score++;
        }

        currentidx++;

        if(currentidx < database.length){
            startquestion();
        }else{
            // console.log(score);

            getcontainer.innerHTML = `
                <h3>Total Score : ${score*25}</h3>
                <h4>You answered correctly at ${score}/${database.length} question.</h4>
                <button typr="button" class="btn" onclick="window.location.reload();">Double Click to Reload</button>
            `;
        }
    }else{
        window.alert("Choice One Answer");
    }
});


// function removeselected(){
//     getinputs.forEach(function(getinput){
//         return getinput.checked = false;
//     });
// }



let clicktimes = 0;

function doubleclick(){


    if(clicktimes === 0){

        clicktimes = Date.now();
        console.log(clicktimes);
    }else{

        if((Date.now() - clicktimes) < 1000){
            window.location.reload();
            clicktimes = 0;
        }else{

            clicktimes = Date.now();
        }
    }
}