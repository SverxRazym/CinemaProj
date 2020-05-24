import * as Listner from './Listner.js';

window.onload = () => {
    let tempElem = $("#Container");
    for (let i = 0; i < 19; i++) {
        let temp = "Card" + i;
        tempElem.append(createCard(temp, "Lorem Ipsum", temp));
    }

    $("#btnToSignIn").click(function () {
        $('#modalSignIn').modal('hide');
    });
    $("#btnSignIn").click(Listner.signIn);
};

function createCard(title, description, idCard) {
    let element = "<div class=\"col-4 col-md-3 col-sm-3 Card-Custom\" id='" + idCard + "'\n" +
        "                    <div class=\"card\" id=\"Card\">\n" +
        "                        <img class=\"card-img-top\" src=\"image/roflanLico.png\" alt=\"Card image cap\">\n" +
        "                        <div class=\"card-body\">\n" +
        "                            <h5 class=\"card-title\">" + title + "</h5>\n" +
        "                            <p class=\"card-text\">" + description + "</p>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>";
    return element;
}