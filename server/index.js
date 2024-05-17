import express, { json } from "express";
import { config } from "serpapi";
import { API_KEY } from "./constants.js";
import cors from "cors";
import { fetchFlightData } from "./flights.js";

config.api_key = API_KEY;

const app = express();

app.use(cors({origin: '*'}));
app.use(json());

const PORT = process.env.PORT || 3000;


app.listen(PORT, () => {
console.log(`Server listening on port ${PORT}\n-------------------------`);
});

app.post('/flights', async (req, res) => {
  const { departureId, arrivalId, outboundDate, returnDate, currency, type } = req.body;
  try {
    const result = await fetchFlightData(departureId, arrivalId, outboundDate, returnDate, currency, type);
    return res.json(result).end();
  } catch (error) {
    return res.status(500).json({error}).end();
  }
});
