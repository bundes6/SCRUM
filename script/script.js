function showItem(clicked_id) {
  var clicked_id;
  var element = document.getElementById("demo");
  var elementP = document.getElementById("productTxt");
  var elementP2 = document.getElementById("productTxt1");

  if (element.classList.contains("collapse")) {
    element.classList.toggle("collapse");
  }

  switch (clicked_id) {
    // ROW 1

    case "shop-btn1":
      document.getElementById("shopItemTop").src = "img/1.jpg";
      elementP.innerHTML = "Black n Blue";
      elementP2.innerHTML = "$13.24";

      break;

    case "shop-btn2":
      document.getElementById("shopItemTop").src = "img/2.jpg";
      elementP.innerHTML = "Yellow n Brown";
      elementP2.innerHTML = "$19.45";
      break;

    case "shop-btn3":
      document.getElementById("shopItemTop").src = "img/3.jpg";
      elementP.innerHTML = "Galaxy Yellow";
      elementP2.innerHTML = "$43.21";
      break;

    case "shop-btn4":
      document.getElementById("shopItemTop").src = "img/4.jpg";
      elementP.innerHTML = "Grey Nebula";
      elementP2.innerHTML = "$23.21";
      break;

    // ROW 2

    case "shop-btn5":
      document.getElementById("shopItemTop").src = "img/5.jpg";
      elementP.innerHTML = "Just Brown";
      elementP2.innerHTML = "$23.43";
      break;
    case "shop-btn6":
      document.getElementById("shopItemTop").src = "img/6.jpg";
      elementP.innerHTML = "Mahogany";
      elementP2.innerHTML = "$25.21";
      break;
    case "shop-btn7":
      document.getElementById("shopItemTop").src = "img/7.jpg";
      elementP.innerHTML = "Wambo";
      elementP2.innerHTML = "$21.34";
      break;
    case "shop-btn8":
      document.getElementById("shopItemTop").src = "img/8.jpg";
      elementP.innerHTML = "Black Holes";
      elementP2.innerHTML = "$43.12";
      break;

    // ROW 3

    case "shop-btn9":
      document.getElementById("shopItemTop").src = "img/9.jpg";
      elementP.innerHTML = "Sleeky";
      elementP2.innerHTML = "$32.52";
      break;

    case "shop-btn10":
      document.getElementById("shopItemTop").src = "img/10.jpg";
      elementP.innerHTML = "Lassi";
      elementP2.innerHTML = "$51.23";
      break;

    case "shop-btn11":
      document.getElementById("shopItemTop").src = "img/11.jpg";
      elementP.innerHTML = "Hako";
      elementP2.innerHTML = "$31.21";
      break;

    case "shop-btn12":
      document.getElementById("shopItemTop").src = "img/12.jpg";
      elementP.innerHTML = "Jansen";
      elementP2.innerHTML = "$19.08";
      break;

    // ROW 4

    case "shop-btn13":
      document.getElementById("shopItemTop").src = "img/13.jpg";
      elementP.innerHTML = "Swineflu";
      elementP2.innerHTML = "$21.50";
      break;

    case "shop-btn14":
      document.getElementById("shopItemTop").src = "img/14.jpg";
      elementP.innerHTML = "Ocean Stone";
      elementP2.innerHTML = "$23.39";
      break;

    case "shop-btn15":
      document.getElementById("shopItemTop").src = "img/15.jpg";
      elementP.innerHTML = "Ocean Stone v2";
      elementP2.innerHTML = "$29.00";
      break;

    case "shop-btn16":
      document.getElementById("shopItemTop").src = "img/16.jpg";
      elementP.innerHTML = "Gluticosa";
      elementP2.innerHTML = "$12.20";
      break;

    // ROW 5

    case "shop-btn17":
      document.getElementById("shopItemTop").src = "img/17.jpg";
      elementP.innerHTML = "Salix";
      elementP2.innerHTML = "$24.00";
      break;

    case "shop-btn18":
      document.getElementById("shopItemTop").src = "img/18.jpg";
      elementP.innerHTML = "Summer Breeze";
      elementP2.innerHTML = "$31.55";
      break;

    case "shop-btn19":
      document.getElementById("shopItemTop").src = "img/19.jpg";
      elementP.innerHTML = "Jehtoch";
      elementP2.innerHTML = "$26.99";
      break;

    case "shop-btn20":
      document.getElementById("shopItemTop").src = "img/20.jpg";
      elementP.innerHTML = "Quercus";
      elementP2.innerHTML = "$21.99";
      break;

    // ROW 6

    case "shop-btn21":
      document.getElementById("shopItemTop").src = "img/21.jpg";
      elementP.innerHTML = "Ginkgo";
      elementP2.innerHTML = "$31.99";
      break;

    case "shop-btn22":
      document.getElementById("shopItemTop").src = "img/22.jpg";
      elementP.innerHTML = "Black Switch";
      elementP2.innerHTML = "$32.25";
      break;

    case "shop-btn23":
      document.getElementById("shopItemTop").src = "img/23.jpg";
      elementP.innerHTML = "Sweet Nectar";
      elementP2.innerHTML = "$23.99";
      break;

    case "shop-btn24":
      document.getElementById("shopItemTop").src = "img/24.jpg";
      elementP.innerHTML = "Aesculus";
      elementP2.innerHTML = "$25.99";
      break;
  }
}

hideItem = () => {
  var element = document.getElementById("demo");

  element.classList.toggle("collapse");
};

disableBtn = () => {
  var element = Src;
  console.log(rat);
  element.disabled = true;
};
