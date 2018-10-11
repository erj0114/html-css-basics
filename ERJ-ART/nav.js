
let localurl = "http://192.168.0.103/html-css-basics/ERJ-ART/";
let produrl = "/";
let currenturl=produrl;
document.write("<base href='" + currenturl + "' />");



function ready(){
    let nav = document.getElementById("nav")
    getContent(currenturl+"nav.html", nav);

    let header = document.getElementById("header")
    if(header) {
        getContent(currenturl+"header.html", header);    
    }
    let footer = document.getElementById("footer")
    if(footer) {
        getContent(currenturl+"footer.html", footer);    
    }
}
document.addEventListener("DOMContentLoaded", ready)

function getContent(path,element) {
    fetch(path).then(function(resp){
        resp.text().then( (data) => {
            element.innerHTML = data;
        })
    })   
}

