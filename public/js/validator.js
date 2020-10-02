//Convvert response string to array
const CleanResponse = (param) => {
    //Remove unwanted chars
    param = param.replace(/\[/g, '');
    param = param.replace(/]/g, '');
    param = param.replace(/\\/g, '');
    param = param.replace(/},/g, '}|');
    param = param.replace(/} ,/g, '}|');
    param = param.replace(/"/g, "'");

    return (param);
}
//Convert response string to array
const ConvertToArray = (param, delimeter) => {
    param.split(delimeter);
    return param.split(delimeter);
}
//Convert response array to array with objects
const ConvertArrayToArrayObject = (param) => {
    let newArr = [];
    let str = "";

    for(let index = 0; index < param.length; index++){
        str = JSON.parse(CleanResponse(param[index]).replace(/'/g, '"'));
        //console.log(str);
        newArr.push(str);
    }
    return (newArr);
}