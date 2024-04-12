const apikey="b99db76f697de08d633b8ae58021c269"
const apiurl="https://api.openweathermap.org/data/2.5/weather?&units=metric&q="


const searchbox = document.querySelector(".search input");
const searchbtn = document.querySelector(".search button");


async function checkweather(city){
    const respones = await fetch(apiurl + city + `&appid=${apikey}`);
    var data = await respones.json()

    window.location.href="savaData.php?city="+data.name+"&temp="+data.main.temp+"&weather="+data.weather[0].main

    
}

searchbox.addEventListener("keypress", function (e){
    if (e.key  == 'Enter') {
        checkweather(searchbox.value)
    }
})


searchbtn.addEventListener("click",()=>{
    checkweather(searchbox.value)
    })
    
// showWeather("southampton")