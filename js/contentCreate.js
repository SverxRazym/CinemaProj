window.onload = function () {
    let tempElem = document.getElementById("Container");
    console.log(tempElem);
    for (let i = 0; i < 19; i++) {
        let temp = "Card" + i ;
        tempElem.innerHTML += createCard(temp,"Lorem Ipsum",temp);
    }
};

let btn=document.getElementById("btnToSignIn");
let btn1=document.getElementById("btnSignIn");
btn1.onclick = function () {
    console.log(1);
    console.log($("#formSignIn").serialize());
    /*promise = fetch("https://cinema/api/route.php", {
        method: "POST",
        body: $("#"+"formSign").serialize(),
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        }
    })
        .then(response => {
            if(response.ok){
                document.location.href = "index.php";
            } else{
                alert("Plz enter current data!");
            }
        });

     */
}
btn.onclick = function () {
    $('#modalSignIn').modal('hide');
}

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