const botao = document.getElementsByClassName("botao");
let locais = ['Bomba Burguer Canoas', 'Bomba Burguer Sapucaia', 'Bah Restaurante', 'Coco Bambu', 'Outback',
              'Jardim do lago', 'Tomattis', 'Italianissimo', 'Manos', 'Miski'];


function gerarlocal() {
    let x = (Math.random() * locais.length);
    alert(locais[x]);
}