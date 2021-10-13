const like = document.querySelector("#likeIt");
const numberOfLike = document.getElementById("evaluated");
let rate = 0;
let numberOfClick = 0;
like.addEventListener('click', rated);
function rated(Event){
    Event.preventDefault();
    if (Event){
        if( 0 === numberOfClick){
            rate++;
            numberOfClick++
        } else {
            rate--;
            numberOfClick--;
        }
        numberOfLike.textContent=rate;
        console.log(rate)
    }
}