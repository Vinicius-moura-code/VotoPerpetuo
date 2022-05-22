const express = require('express');
const cors = require('cors');

const app = express();

app.use(cors());
app.use(express.json());

const { getAll, newRegister } = require('./database/connection');
//CREATE
app.post('/createRegister', async function (req, res) {
  try {
    const { nome, latitude, longitude } = req.body;

    const result = await newRegister(
      nome,
      parseFloat(latitude),
      parseFloat(longitude)
    );
    res.json(result);
  } catch (err) {
    res.json(err);
  }
});

//READ
app.get('/getRegister', async function (req, res) {
  try {
    const result = await getAll();
    res.json(result);
  } catch (err) {
    res.json(err);
  }
});

app.listen(3000, function () {
  console.log('is running');
});
