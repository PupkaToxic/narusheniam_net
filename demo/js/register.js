let FIO_style = document.querySelector('.FIO');
let tel_style = document.querySelector('.tel');
let email_style = document.querySelector('.email');
let login_style = document.querySelector('.login');
let password_style = document.querySelector('.password');

function CheckForm() {

    let error;
    let isFIOcorrectFilled = true;
    let isTelcorrectFilled = true;
    let isEmailcorrectFilled = true;
    let isLogincorrectFilled = true;
    let isPasswordcorrectFilled = true;

    function CheckFIO() {
        let FIO = document.getElementById('FIO').value;
        console.log(FIO);

        if (FIO == "") {
            isFIOcorrectFilled = false;
        } else {
            FIO_style.style.border = "2px solid green"
        }

        return isFIOcorrectFilled;
    }

    function CheckTel() {
        let tel = document.getElementById('tel').value;
        console.log(tel);

        if (tel == "") {
            isTelcorrectFilled = false;
        } else {
            tel_style.style.border = "2px solid green"
        }

        return isTelcorrectFilled;
    }

    function CheckEmail() {
        let email = document.getElementById('email').value;
        console.log(email);

        if (email == "") {
            isEmailcorrectFilled = false;
        } else {
            email_style.style.border = "2px solid green"
        }

        return isEmailcorrectFilled;
    }


    function CheckLogin() {
        let login = document.getElementById('login').value;
        console.log(login);

        if (login == "") {
            isLogincorrectFilled = false;
        } else {
            login_style.style.border = "2px solid green"
        }

        return isLogincorrectFilled;
    }


    function CheckPassword() {
        let password = document.getElementById('password').value;
        console.log(password);

        if (password == "") {
            isPasswordcorrectFilled = false;
        } else {
            password_style.style.border = "2px solid green"
        }

        return isPasswordcorrectFilled;
    }
    return false;
}