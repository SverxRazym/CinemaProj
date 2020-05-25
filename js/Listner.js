export function signIn() {
    $("#invalidSignIn").hide();
    if (!$("#LoginSignIn").val().length || !$("#LoginSignIn").val().length) {
        erPrint("Заполните поля логина и пароля")
    } else {
        let promise;
        promise = fetch("http://exploer.beget.tech/CinemaProj/Api/SignIn.php",
            {
                method: "POST",
                body: $("#formSignIn").serialize(),
                headers: {
                    "Content-type": "application/x-www-form-urlencoded;" +
                        " charset=UTF-8"
                }
            })
            .then(response => {
                if (response.ok) {

                        response.json().then(data => {
                        document.cookie = `user=${data["log"]}; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT`;
                        $("#modalSignIn").modal('hide');

                    })
                } else {
                    erPrint("Введен не правильный логин или пароль");
                }
            });

    }
}

export function signUp() {

}

export function exit() {
    let promise = fetch("http://exploer.beget.tech/CinemaProj/Api/ExitForm.php", {
        method: "POST",
        headers: {
            "Content-type": "application/x-www-form-urlencoded;" +
                " charset=UTF-8"
        }
    }).then(req =>{
        if(req.ok()){
            delete_cookie("user");
            window.location.reload();
        }
    })
}

function erPrint(text) {
    $("#invalidSignIn").show();
    $("#invalidSignIn").text(text);
}

function delete_cookie(cookie_name) {
    var cookie_date = new Date();  // Текущая дата и время
    cookie_date.setTime(cookie_date.getTime() - 1);
    document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}