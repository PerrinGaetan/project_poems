// recupere la valeur du cookie theme pour obtenir la clé de l'objet poems :
function getPoemsKey(cookie){
    switch (cookie) {
        case "theme=love":
            return key = "love";
            break;
        case "theme=freedom":
            return key = "freedom";
            break;
        case "theme=peace":
            return key = "peace";
            break;
        case "theme=friendship":
            return key = "friendship";
            break;
        case "theme=dream":
            return key = "dream";
            break;
        case "theme=happiness":
            return key = "happiness";
            break;
    
        default: "";
            break;
    }
}

function chooseRandomPoem(){
    return Math.floor(Math.random()*6);
}

let keyTheme = getPoemsKey(document.cookie);
let index="";
const poems = document.querySelectorAll(".poems");
for(let poem of poems){
    if (index === ""){
        index = chooseRandomPoem();
        poem.innerHTML= POEMS[keyTheme][index];
    } else {
        while (chooseRandomPoem() === index){
            index = chooseRandomPoem();
        }
        poem.innerHTML= POEMS[keyTheme][chooseRandomPoem()];
    };
    
};

