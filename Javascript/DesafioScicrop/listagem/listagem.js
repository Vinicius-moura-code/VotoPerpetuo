//lati  //long  //zoom


const map = L.map('map', { center: [-29.5, 145], zoom: 2.5 });

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

// Envia uma requisição post

const url = 'http://localhost:3000';

function getAllPoints() {
  
  axios
    .get(url.concat('/getRegister'))
    .then((res) => {
      let ret = res.data;
      ret.forEach((item) => {
        console.log(item);
        L.marker([item.latitude, item.longitude]).bindPopup(item.nome).addTo(map);
      });
    })
    .catch((error) => console.log(error));
  
}
getAllPoints()

