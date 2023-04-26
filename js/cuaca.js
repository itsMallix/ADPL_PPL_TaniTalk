const city = document.getElementById('city');
const sendCity = document.getElementById('send');
const current = document.getElementById('currentWeather');
const forecast = document.getElementById('forecast');
const weatherContainer = document.querySelector('#weatherContainer');
const forecastContainer = document.querySelector('#forecastContainer');

current.addEventListener('click',weatherView);
forecast.addEventListener('click',forecastView);
sendCity.addEventListener('click',postCity);

function weatherView(){
    if(current.checked == true){
        if(city.value){
            weatherContainer.style.display = "block";
            current.checked = true;
        }
    }else{
        weatherContainer.style.display = "none";
        current.checked = false;

    }
}

function forecastView(){
    if(forecast.checked == true){
        if(city.value){
            forecastContainer.style.display = "block";
            current.checked = true;
        }
    }else{
        weatherContainer.style.display = "none";
        current.checked = false;
    }
}

function postCity(){
    if(city.value){
        weatherContainer.style.display = "block";
        current.checked = true;
    }else{
        weatherContainer.style.display = "none";
        current.checked = false;
    }
}