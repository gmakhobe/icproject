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
    icFETCH(`/CURRENCY_EXCHANGE`, {reqID: null}, csrf)
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
    icFETCH(`/subscribe/email/${email}`, {Email: email}, csrf)
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
    const name = document.getElementById("reg-name").value;
    const surname = document.getElementById("reg-surname").value;
    const email = document.getElementById("reg-email").value;
    const password = document.getElementById("reg-password").value;
    const confirmPassword = document.getElementById("reg-confirm-password").value;
    const csrf = document.getElementById("index-csrf").value;

    let counter = 0;

    if (!email || !password || !confirmPassword || !csrf || !name || !surname){
        alert("All fields required!");
        counter++;
    }

    if (name.length < 3 || surname.length < 3){
        alert("Name or Surname should be more than 2 charecters!");
        counter++;
    }

    if(password !== confirmPassword){
        alert("Password and confirm password do not match!");
        counter++;
    }

    if (counter != 0){
        document.getElementById("registerBTN").style.display = "inline";
        return ;
    }
    //Call custome Fetxh
    icFETCH(`/register/email/${email}/password/${password}/name/${name}/surname/${surname}`, {Email: email, Password: password}, csrf)
    .then(data => {
        const alertSuccessMSG = `<div class="alert alert-success"><strong>Success!</strong> Registration was successful. Please go to your emails to confirm your email address before logging in.
          </div>`;

        if (data.status) document.getElementById("reg-container").innerHTML = alertSuccessMSG;
        if (data.status == 0){
            document.getElementById("reg-container").innerHTML = alertSuccessMSG;
            document.getElementById("registerBTN").style.display = "inline";
            alert(alert(data.message));
        } 
    })
    .catch(error => {
        alert(`An error occured: Please try registering again with a different email address!`);
        document.getElementById("registerBTN").style.display = "inline";
    });
}

// End User Registration

// User Login
const AppLogin = () => {
    document.getElementById("loginBTN").style.display = "none";
    const email = document.getElementById("log-email").value;
    const password = document.getElementById("log-password").value;
    const csrf = document.getElementById("index-csrf").value;

    if (!email || !password || !csrf){
        alert("All fields required!");
        return ;
    }
    //Call custome Fetxh
    icFETCH(`/login/email/${email}/password/${password}`, {Email: email, Password: password}, csrf)
    .then(data => {
        const alertSuccessMSG = `<div class="alert alert-success"><strong>Success!</strong> Login success, you will be redirected to terminal.
          </div>`;

        if (data.status) {
            document.getElementById("reg-container").innerHTML = alertSuccessMSG;
            location.assign("/user/dashboard");
        }
        if (data.status == 0) alert(data.message);
    })
    .catch(error => alert(`An error occured: Email or Password is incorrect!`));
    document.getElementById("loginBTN").style.display = "block";
}
// End User Login
// News
// User Login
const AppNews = () => {
    const csrf = document.getElementById("index-csrf").value;

    //Call custome Fetxh
    icFETCH(`/news/frontpage`, {}, csrf)
    .then(data => {
        

        console.log(data)[0];

        
    })
    .catch(error => alert(`An error occured: Email or Password is incorrect!`));
    document.getElementById("loginBTN").style.display = "block";
}
// End News