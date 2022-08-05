const botao = document.getElementsByClassName('botao');
const resposta = document.getElementById('resposta');

const display = (s) => (resposta.innerText = s);

let locais = [
  'Bomba Burguer Canoas',
  'Bomba Burguer Sapucaia',
  'Bah Restaurante',
  'Coco Bambu',
  'Outback',
  'Jardim do lago',
  'Tomattis',
  'Italianissimo',
  'Manos',
  'Miski',
];

const delayLoop = (fn, delay) => {
  return (locais, i) => {
    setTimeout(() => {
      display(locais);
    }, i * 1000);
  };
};

function gerarlocal() {
  let x = Math.floor(Math.random() * locais.length) + 1;
  if (x === locais.length) x -= 1;
  let nums = ['🎵🎵🎵', '🎵🎵', '🎵'];
  nums.push(locais[x]);
  nums.forEach(delayLoop(display, 1000));
}
