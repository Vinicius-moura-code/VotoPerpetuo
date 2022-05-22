let form = document.getElementById('form');

function requireValue(a, b, c) {
  let validate = true;
  if (a.trim() === '') validate = false;
  if (b.trim() === '') validate = false;
  if (c.trim() === '') validate = false;
  return validate;
}

form.addEventListener('submit', (event) => {
  let nome = document.getElementById('nome').value;
  let latitude = document.getElementById('latitude').value;
  let longitude = document.getElementById('longitude').value;
  let valid = requireValue(nome, latitude, longitude);
  if (!valid) {
    event.preventDefault();
  } else {
    let bodyFormData = JSON.stringify({
      nome: nome,
      latitude: latitude,
      longitude: longitude,
    });
    newRegister(bodyFormData);
  }
});

const newRegister = (data) => {
  console.log(data)
  var config = {
    method: 'post',
    url: 'http://localhost:3000/createRegister',
    headers: {
      'Content-Type': 'application/json',
    },
    data: data,
  };
  axios(config)
    .then(function (response) {
      alert(`Status: ${response.status} Inserido com sucesso!`);
      window.location.replace("/");
    })
    .catch(function (error) {
      alert(error);
    });
};
