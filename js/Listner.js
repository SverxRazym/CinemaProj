export function signIn() {
    $("#invalidSignIn").hide();
    if (!$("#LoginSignIn").val().length || !$("#LoginSignIn").val().length) {
         erPrint("Заполните поля логина и пароля")
    } else {

        let promise;
        promise = fetch("https://CinemaGit/CinemaProj/Api/SignIn.php", {
            method: "POST",
            body: $("#formSignIn").serialize(),
            headers: {
                "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
            }
        })
            .then(response => {
               if (response.ok) {

                   response.json().then(data=>{
                       document.cookie = `user=${data["log"]}; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT`;
                       // console.log(document.cookie);

                   })
               }
               else {
                   erPrint("Введен не правильный логин или пароль")
               }
            });

    }
}

function erPrint(text) {
    $("#invalidSignIn").show();
    $("#invalidSignIn").text(text);
}

export function createCookie(cName,cValue){
    var d = new Date();
    d.setTime(d.getTime() + (3600 * 1000 * 1000 * 1000));
    var expires = d.toUTCString();
    document.cookie = `${cName}=${cValue}; expires=${expires}; path=/`;
}