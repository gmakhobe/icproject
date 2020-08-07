//Custom Fetch Request
const icFETCH = (url, datar, csrf) => {
    return (new Promise((resolve, reject) => {

        //Fetch Api to send a request
        fetch(url, {
            method: 'get',
            headers: {
                'X-CSRF-TOKEN': csrf
            }
        })
        .then(res => {
            if (res.status == 200)
                return res.text();
            else
                reject("An error occured please try again [Recieved Status != 200]!");
        })
        .then(text => {
            //Get results and convert them to an object
            const res = JSON.parse(text);
            //if ststus is true print success and locate to a different page else print error
            resolve(res);
        })
        .catch(res => {
            //Print any error related to sending request
            reject(`icFETCH Catch -> ${res}`);
        });
    }));
}
// User Registration

const AppRegister = () => {
    document.getElementById("registerBTN").style.display = "none";
    const email = document.getElementById("reg-email").value;
    const password = document.getElementById("reg-password").value;
    const confirmPassword = document.getElementById("reg-confirm-password").value;
    const csrf = document.getElementById("index-csrf").value;

    if (!email || !password || !confirmPassword || !csrf){
        alert("All fields required!");
        return ;
    }

    if(password !== confirmPassword){
        alert("Password and confirm password do not match!");
        return ;
    }
    //Call custome Fetxh
    icFETCH(`http://127.0.0.1:8000/register/email/${email}/password/${password}`, {Email: email, Password: password}, csrf)
    .then(data => {
        const alertSuccessMSG = `<div class="alert alert-success"><strong>Success!</strong> Registration was successful you may now login.
          </div>`;

        if (data.status) document.getElementById("reg-container").innerHTML = alertSuccessMSG;
        if (data.status == 0){
            document.getElementById("reg-container").innerHTML = alertSuccessMSG;
            document.getElementById("registerBTN").style.display = "block";
            alert(alert(data.message));
        } 
    })
    .catch(error => {
        alert(`An error occured: Please try registering again with a different email address!`);
        document.getElementById("registerBTN").style.display = "block";
    });
}

// End User Registration

// User Login
const AppLogin = () => {
    document.getElementById("loginBTN").style.display = "none";
    const email = document.getElementById("log-email").value;
    const password = document.getElementById("log-password").value;
    let rememberMe = document.getElementById("log-rememver-me").value;
    const csrf = document.getElementById("index-csrf").value;

    if (!email || !password || !csrf){
        alert("All fields required!");
        return ;
    }
    //Call custome Fetxh
    icFETCH(`http://127.0.0.1:8000/login/email/${email}/password/${password}`, {Email: email, Password: password}, csrf)
    .then(data => {
        const alertSuccessMSG = `<div class="alert alert-success"><strong>Success!</strong> Login success, you will be redirected to terminal.
          </div>`;

        if (data.status) {
            document.getElementById("reg-container").innerHTML = alertSuccessMSG;
            location.assign("http://127.0.0.1:8000/terminal");
        }
        if (data.status == 0) alert(data.message);
    })
    .catch(error => alert(`An error occured: Email or Password is incorrect!`));
    document.getElementById("loginBTN").style.display = "block";
}
// End User Login