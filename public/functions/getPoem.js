let poemsByTheme = document.getElementsByClassName("poems");
for (let poem of poemsByTheme){
    poem.addEventListener("click", catchPoem);
}

function catchPoem(Event){
    let poemText = this.textContent;
    let cookie = document.cookie=`text=${poemText}; path=/; samesite=Lax`;
    document.location.href=`poem.php`;
}