const city = document.getElementById('city');
const sendCity = document.getElementById('send');
const current = document.getElementById('currentWeather');
const forecast = document.getElementById('forecast');
const weatherContainer = document.querySelector('#weatherContainer');

sendCity.addEventListener('click',weatherView);

function weatherView(){
    if(current.checked == true){
        if(city.value){
            weatherContainer.classList.remove("display");
        }
    }else{
        weatherContainer.classList.add("display");
    }
}