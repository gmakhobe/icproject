//Called to display Alerts
const AlertCenterCall = (param) => {
    let url = '/alert/messagecenter';
    if (param){
        url = "/alert/alertcenter";
    }

    fetch(url, {
        method: "get",
        headers: {
            'X-CSRF-TOKEN': "dasdsafc"
        }
    })
        .then(res => {
            if (res.status == 200)
                return res.text();
            else
                swal("Alert Center", "Could not load alerts!");
        })
        .then(text => {
            //Get results and convert them to an object
            const res = JSON.parse(text);
            if (param) {

                console.log("Called");

                let AlertCenterDes = document.getElementById("AlertCenter");
                let AlertCenterCountDes = document.getElementById("AlertCenterCount");
                //if ststus is true print success and locate to a different page else print error
                if (res.Count == 0 || res.Count == "0") {

                    AlertCenterCountDes.innerHTML = `<i class="fas fa-bell fa-fw"></i>`;

                    return;

                } else {

                    AlertCenterDes.innerHTML = "";
                    AlertCenterCountDes.innerHTML = `<i class="fas fa-bell fa-fw"></i>
        <span id="AlertCenterBell" class="badge badge-danger badge-counter">${res.Count}</span>`;

                    let AlertCenter = CleanResponse(res.Message);
                    AlertCenter = ConvertToArray(AlertCenter, '|');
                    AlertCenter = ConvertArrayToArrayObject(AlertCenter);

                    //Loop
                    for (let index = 0; index < AlertCenter.length; index++) {

                        AlertCenterDes.innerHTML += `
                <a class="d-flex align-items-center dropdown-item" href="#">
                <div class="mr-3">
                    <div class="bg-primary icon-circle">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <span class="small text-gray-500">${AlertCenter[index].Time}</span>
                    <p>${AlertCenter[index].Message}</p>
                </div>
            </a>`;

                    }

                }

            } else {

                let MessageCenterDes = document.getElementById("MessageCenter");
                let MessageCenterCountDes = document.getElementById("MessageCenterCount");
                //if ststus is true print success and locate to a different page else print error
                if (res.Count == 0 || res.Count == "0") {

                    MessageCenterCountDes.innerHTML = `<i class="fas fa-envelope fa-fw"></i>`;

                    return;

                } else {

                    MessageCenterDes.innerHTML = "";
                    MessageCenterCountDes.innerHTML = `<i class="fas fa-envelope fa-fw"></i>
        <span id="AlertCenterBell" class="badge badge-danger badge-counter">${res.Count}</span>`;

                    let AlertCenter = CleanResponse(res.Message);
                    AlertCenter = ConvertToArray(AlertCenter, '|');
                    AlertCenter = ConvertArrayToArrayObject(AlertCenter);

                    //Loop
                    for (let index = 0; index < AlertCenter.length; index++) {

                        MessageCenterDes.innerHTML += `
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img style='width:30px' class="rounded-circle" src="${AlertCenter[index].Profile}">
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">
                                        <span>New message.
                                        </span>
                                    </div>
                                    <p class="small text-gray-500 mb-0">${AlertCenter[index].Name} - ${AlertCenter[index].Time}</p>
                                </div>
                            </a>
                        `;

                    }

                }

            }


        })
        .catch(res => {
            //Print any error related to sending request
            swal("Alert Center", `1Failed to send a request for Alert Center -> ${res}`);
        });
}