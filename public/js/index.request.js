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
//Display Null Exchange Rate
const showNullCurrencyQuotes = () => {
    let pairs = ["USDZAR", "GBPZAR", "EURZAR", "JPYZAR"];
    let quotesLayout = document.getElementById('quotes-sections');

    for(let i = 0; i < pairs.length; i++){

        quotesLayout.innerHTML += `
        <div class="quotes-text cards-service-quote-box">
            <div class="quote-name text-align-center">${pairs[i]}</div>
            <div class="text-align-center">Exchange Rate: <span class="quote-price">R0.00</span>
                <br>Bid/Ask Price: <span class="quote-price">R0.00/R0.00</span>
            </div>
            <div class="quote-date text-align-center">Time: 01 Jan 0000 00:00:00</div>
        </div>
        `;

    }
}
// Dhow valid exchange rate
const showCurrencyQuotes = (obj) => {
    let pairs = ["USDZAR", "GBPZAR", "EURZAR", "JPYZAR"];
    let quotesLayout = document.getElementById('quotes-sections');

    obj = JSON.parse(obj);

    //console.log(obj);

    for (const key in obj) {
        
        quotesLayout.innerHTML += `
        <div class="quotes-text cards-service-quote-box">
            <div class="quote-name text-align-center">${obj[key][0]["FromCurrencyCode"] + obj[key][0]["ToCurrencyCode"]}</div>
            <div class="text-align-center">Exchange Rate: <span class="quote-price">${obj[key][0]["ExchangeRate"]}</span>
                <br>Bid/Ask Price: <span class="quote-price">${obj[key][0]["BidRate"]} / ${obj[key][0]["AskRate"]} </span>
            </div>
            <div class="quote-date text-align-center">Time: ${obj[key][0]["CreatedDate"]}</div>
        </div>`;

    }
    
    //console.log(`${obj["GBPZAR"][0]["FromCurrencyCode"] + obj[["GBPZAR"]][0]["ToCurrencyCode"]}`);
}
// Onload get landing page currency prices
const loadQuotesFromServer = () => {
    const csrf = document.getElementById("index-csrf").value;

    //Get Quotes
    icFETCH(`http://127.0.0.1:8000/CURRENCY_EXCHANGE`, {reqID: null}, csrf)
    .then(data => {
        if (data.status == 1){
            showCurrencyQuotes(data.message)
        }
        if (data.status == 0){
            alert(`An error occured: Please try reloading the page!`);
            showNullCurrencyQuotes();
        } 
    })
    .catch(error => {
        alert(`An error occured: Please try reloading the page [Error Fetching Currency Quotes]=> ${error}!`);
        showNullCurrencyQuotes();
    });

}

// End Get Quotes from Server
// User Subscribe
const AppSubscribe = () => {
    document.getElementById("subscribeBTN").style.display = "none";
    const email = document.getElementById("s-email").value;
    const csrf = document.getElementById("index-csrf").value;

    if (!email){
        alert("Email is requred to subscribe.");
        return ;
    }

    //Call custome Fetxh
    icFETCH(`http://127.0.0.1:8000/subscribe/email/${email}`, {Email: email}, csrf)
    .then(data => {

        if (data.status){
            alert("Thanks for subscribing, you will receive our news updates and alerts regarding our products.");
        }
        if (data.status == 0){
            alert(alert(data.message));
        } 
    })
    .catch(error => {
        alert(`An error occured: Please try subscribing again with a different email address the current one is already subscribed!`);
    });
    document.getElementById("subscribeBTN").style.display = "block";
}

// End User Subscribe
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