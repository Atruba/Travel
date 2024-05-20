/* Airport JSON list */
const airportSearch = [
  {
    location: "AbuDhabi (AUH)",
    keyword: ["AbuDhabi", "AUH", "AbuDhabi (AUH)"],
    airportCode: "AUH",
  },
  {
    location: "Tokyo (HND)",
    keyword: ["Tokyo", "HND", "Tokyo (HND)"],
    airportCode: "HND",
  },
  {
    location: "Tbilisi (TBS)",
    keyword: ["Tbilisi", "TBS", "Tbilisi (TBS)"],
    airportCode: "TBS",
  },
  {
    location: "Sydney (SYD)",
    keyword: ["Sydney", "SYD", "Sydney (SYD)"],
    airportCode: "SYD",
  },
  {
    location: "Istanbul (SAW)",
    keyword: ["Istanbul", "Tur", "SAW", "Istanbul (SAW)"],
    airportCode: "SAW",
  },
  {
    location: "London (LGW)",
    keyword: ["London", "LGW", "London (LGW)"],
    airportCode: "LGW",
  },
];

/* Airlines Array list */
const airlines = ["AirArabia", "Etihad", "Pegasus", "Wizz Air", "Qatar Airways", "Emirates"];

const fetchFlightData = async (data) => {
  const departureId = document.querySelector("#from").value;
  const arrivalId = document.querySelector("#to").value;
  const departureDate = document.querySelector("#departureDate").value;
  const returnDate = document.querySelector("#returnDate").value;

  console.log(departureDate, returnDate);

  try {
    const result = await fetch(`http://localhost:3000/flights`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        departureId: departureId || "TBS",
        arrivalId: arrivalId || "SAW",
        outboundDate: departureDate || "2024-10-02",
        returnDate: returnDate || null,
        currency: "AED",
      }),
    });
    const data = await result.json();
    console.log(data);
    const bestFlights = data.best_flights;
    const bestFlightsList = document.getElementById('bestFlightsList');
    bestFlightsList.innerHTML = '';

    if (bestFlights.length > 0) {
      bestFlightsList.innerHTML = '<h2>Best Flights</h2>';
      bestFlights.forEach(flight => {
          const flightItem = document.createElement('div');
          flightItem.className = 'flight-item';

          let flightDetails = `
              <h3>Price</h3>
              <p>$${flight.price}</p>
              <h3>Travel Details</h3>
              <p>Airline: ${flight.airline || 'Not available'}</p>
              <p>Layovers: ${flight.layovers && flight.layovers.length > 0 ? flight.layovers.join(', ') : 'Direct'}</p>
              <p>Total Duration: ${Math.floor(flight.totalDuration / 60)}h ${flight.totalDuration % 60}m</p>
              <a href="" class="bookTicBtn">Book Now</a>
          `;

          flightItem.innerHTML = flightDetails;
          bestFlightsList.appendChild(flightItem);
      });
  } else {
      bestFlightsList.innerHTML = '<p>No best flights found.</p>';
  }
  } catch (error) {
    console.error(error);
  }
};
