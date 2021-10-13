let poemInCookie = document.cookie;
const POEM_SOLO = document.getElementById("poem");
console.log(poemInCookie);

function getPoemsKey(cookie){
    let cookies = cookie.split("text=");
    POEM_SOLO.textContent(cookies[1])
    console.log(cookies)
}

getPoemsKey(poemInCookie)