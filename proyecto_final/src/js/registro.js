const $nombre = document.getElementById("nombre");
const $apellido1= document.getElementById("apellido1");
const $email = document.getElementById("email");
const $password = document.getElementById("password");
const $registroForm = document.getElementById("singupForm");
$registroForm.addEventListener("submit", (event) => {
    event.preventDefault();
  const data = new FormData();
  data.append("nombre", $nombre.value);
  data.append("apellido1", $apellido1.value);
  data.append("email", $email.value);
  data.append("password", $password.value);

  axios({
    method: "POST",
    url: "/api/v1/user/registro.php",
    data,
    headers: {
      "Content-Type": "multipart/form-data",
    },
  })
  .then((response) => {
    if (response.status === 200) {
      location.href = "/loginp.php";
    } else {
      alert(response.data.message);
    }
  })
  .catch((error) => {
    if (error.response) {
      console.log(error.response);
      alert(error.response.data.message);
    }
  });

});
