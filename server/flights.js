import { getJson } from "serpapi"
import { API_KEY } from "./constants.js";

export const fetchFlightData = async (departureId, arrivalId, outboundDate, returnDate, currency, type) => {
    const res = await getJson({
      engine: 'google_flights',
      departure_id: departureId,
      arrival_id: arrivalId,
      outbound_date: outboundDate,
      return_date: returnDate,
      currency: currency,
      hl: 'en',
      api_key: API_KEY,
      type: type || 2
    }) 
    
    return res;
}
