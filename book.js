var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function() {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}

function oneWay(){
    document.getElementById('roundWay-data').style.cssText = 'display:none;';
    document.getElementById('oneWay-data').style.cssText = 'display:grid;';
    document.getElementById('add-more').style.cssText = 'display:none;';
    document.getElementById('add-more-1').style.cssText = 'display:none;';
    document.getElementById('MultiWay-data').style.cssText = 'display:none;';
    document.getElementById('btn-add-delete').style.cssText = 'display:none;';
}
function RoundWay(){
    document.getElementById('oneWay-data').style.cssText = 'display:none;';
    document.getElementById('add-more').style.cssText = 'display:none;';
    document.getElementById('add-more-1').style.cssText = 'display:none;';
    document.getElementById('MultiWay-data').style.cssText = 'display:none;';
    document.getElementById('roundWay-data').style.cssText = 'display:grid;';
    document.getElementById('btn-add-delete').style.cssText = 'display:none;';
}

function addMore(){
    var count = 0;
var button = document.getElementById("add-btn");
var countDisplay = document.getElementById("count");
button.addEventListener("click", function() {
count++;
if(count==1){
  document.getElementById('delete-btn').style.cssText = 'display:block;';
  document.getElementById('add-more').style.cssText = 'display:grid;';
}
else if (count==2&&document.getElementById('add-more').style.display=='grid') {
  document.getElementById('add-more-1').style.cssText = 'display:grid;';
  document.getElementById('add-btn').style.cssText = 'display:none;';
}
else{
 
}
});
}
function deleteMore(){
  if(document.getElementById('add-more-1').style.display=='grid'){
      document.getElementById('add-more-1').style.cssText = 'display:none;';
      document.getElementById('add-btn').style.cssText = 'display:block;';
  }
  else if (document.getElementById('add-more').style.display=='grid'){
      document.getElementById('add-more').style.cssText = 'display:none;';
      document.getElementById('delete-btn').style.cssText = 'display:none;';
  }
}
// API endpoint URL
const apiUrl = 'https://priceline-com-provider.p.rapidapi.com/v1/flights/search';

// API key and host
const apiKey = 'c0ccc388a5mshf98e3ac3392c60bp1dffd2jsn3d265dcf488b';
const apiHost = 'priceline-com-provider.p.rapidapi.com';

// Function to construct API URL with query parameters
function buildUrl(params) {
  const queryParams = new URLSearchParams();
  Object.keys(params).forEach((key) => {
    queryParams.append(key, params[key]);
  });
  return `${apiUrl}?${queryParams.toString()}`;
}

// Function to make API request
async function fetchFlights(params) {
  try {
    const url = buildUrl(params);
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': apiKey,
        'X-RapidAPI-Host': apiHost,
      },
    };
    const response = await fetch(url, options);
    const result = await response.text();
    return result;
  } catch (error) {
    console.error(error);
    return null;
  }
}

// Example usage
const params = {
  itinerary_type: 'ONE_WAY',
  class_type: 'ECO',
  location_arrival: 'NYC',
  location_departure: 'LON',
  date_departure: '2024-10-02',
  sort_order: 'PRICE',
  date_departure_return: '2024-10-03',
  duration_max: 2051,
  number_of_stops: 1,
  number_of_passengers: 1,
  price_min: 100,
  price_max: 20000,
};

fetchFlights(params).then((result) => {
  console.log(result);
});

