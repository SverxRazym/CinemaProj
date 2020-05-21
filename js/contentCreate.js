window.onload = function () {
    let tempElem = document.getElementById("Container");
    console.log(tempElem);
    for (let i = 0; i < 19; i++) {
        let temp = "Card" + i ;
        tempElem.innerHTML += createCard(temp,"Lorem Ipsum",temp);
    }
};


function createCard(title,description,idCard){
    let element = "<div class=\"col-md-3 Card-Custom\" id='" + idCard + "'\n" +
        "                    <div class=\"card\" id=\"Card\">\n" +
        "                        <img class=\"card-img-top\"  width=\"100\" src=\"image/roflanLico.png\" alt=\"Card image cap\">\n" +
        "                        <div class=\"card-body\">\n" +
        "                            <h5 class=\"card-title\">"+ title +"</h5>\n" +
        "                            <p class=\"card-text\">" + description + "</p>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>";
    return element;
}