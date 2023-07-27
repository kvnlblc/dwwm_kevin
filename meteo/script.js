const apiKey = '9c0fc10b-83d8-4d12-bf51-11cf21c1fe10';


const apiUrl = `https://api.airvisual.com/v2/nearest_city?key=${apiKey}`;

const loader = document.getElementById('loader');
const weatherInfo = document.getElementById('weather-info');
const cityElement = document.getElementById('city');
const countryElement = document.getElementById('country');
const temperatureElement = document.getElementById('temperature');
const weatherIconElement = document.getElementById('weather-icon');
const errorMsgElement = document.getElementById('error-msg');

fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
      throw new Error('Erreur lors de la récupération des données.');
    }
    return response.json();
  })
  .then(data => {
    loader.style.display = 'none';
    weatherInfo.style.display = 'block';

    const city = data.data.city;
    const country = data.data.country;
    const temperature = data.data.current.weather.tp;
    const weatherIconSrc = data.data.current.weather.ic;

    cityElement.textContent = city;
    countryElement.textContent = country;
    temperatureElement.textContent = temperature;
    weatherIconElement.src = weatherIconSrc;
  })
  .catch(error => {
    loader.style.display = 'none';
    errorMsgElement.style.display = 'block';
    console.error(error);
  });
