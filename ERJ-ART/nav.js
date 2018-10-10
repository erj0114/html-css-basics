
let baseUrl = "http://localhost/html-css-basics/ERJ-ART/";
document.write("<base href='" + baseUrl + "' />");



function ready(){
    let nav = document.getElementById("nav")
    getContent(baseUrl+"nav.html", nav);

    let header = document.getElementById("header")
    if(header) {
        getContent(baseUrl+"header.html", header);    
    }
    let footer = document.getElementById("footer")
    if(footer) {
        getContent(baseUrl+"footer.html", footer);    
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

