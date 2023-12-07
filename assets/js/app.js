//Listener to form button and send messege to WhatsApp
document.getElementById("send").addEventListener("click", function (event) {
  event.preventDefault();

  //get input data
  const name = document.querySelector("#fname");
  const email = document.querySelector("#fmail");
  const message = document.querySelector("#fmessage");
  const textH1 = document.querySelector("#title").innerText;
  const valorSpan = document.querySelector("#price").innerText;

  //format text to send with WhatsApp
  let textToSend = `${textH1}\n${valorSpan}\nNome: ${name.value}\nE-mail:${email.value}\n${message.value}`;
  textToSend = encodeURIComponent(textToSend);

  //Set your WhatsApp number
  const PHONE_NUMBER = 5531992343947;

  //Join text with WhatsApp API
  let url = `https://api.whatsapp.com/send?phone=${PHONE_NUMBER}&text=%20${textToSend}`;

  //Open WhatsApp App
  window.open(url, "-blank");

  //Clear input data
  name.value = "";
  email.value = "";
  message.value = "";
});
