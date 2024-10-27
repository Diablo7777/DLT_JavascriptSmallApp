// UI

const getacctitles = document.getElementsByClassName('acctitle');
const getacccontents = document.querySelectorAll('.acccontent');

// console.log(getacctitles); //HTMLCollection
// console.log(getacccontents);  // NODEList
// console.log(getacccontentss.length); // 4

// console.log(getacccontents[0]);
// console.log(getacccontents[3]);

for(let x = 0;x < getacctitles.length;x++){
    // console.log(x);

    getacctitles[x].addEventListener('click',function(){

        // console.log(x); //clicked element inx
        // console.log(getacctitles[x]);

        // console.log(e.target);
        // console.log(this);

        // e.target.classList.toggle('active');
        this.classList.toggle('active');

                                // acctitle  acccontent
        const getcontent = this.nextElementSibling;
        // console.log(getcontent);
        // console.log(getcontent.scrollHeight+"px");

        if(getcontent.style.height){
            getcontent.style.height = null; // beware can't set 0
        }else{
            getcontent.style.height = getcontent.scrollHeight+"px";
        }
    });

    if(getacctitles[x].classList.contains('active')){
        getacccontents[x].style.height = getacccontents[x].scrollHeight+"px";
    }
}




