let post = document.querySelector('.post')
let postHeight1 = post.offsetHeight;
let postHeight = postHeight1 /4;

function titleLine(param) {
    
    let titleHeight = param.firstElementChild.offsetHeight
    if (titleHeight > postHeight) {
        param.firstElementChild.nextElementSibling.style.cssText = "-webkit-line-clamp: 1; "
    }
}
