const $titulo = document.getElementById("titulo");
const $descripcion= document.getElementById("descripcion");
const $registroForm = document.getElementById("report_form");
const $inputuser= document.getElementById("idusuario");

$registroForm.addEventListener("submit", (event) => {

    event.preventDefault();
    let lat=marker.getLngLat().lat + "";
    let lng=marker.getLngLat().lng + "";
  const data = new FormData();
  data.append("titulo", $titulo.value.trim());
  data.append("descripcion", $descripcion.value.trim());
  data.append("idusuario", $inputuser.value);
  data.append("lat", lat);
  data.append("lng", lng);
  axios({
    method: "POST",
    url: "/api/v1/reportes/registrar.php",
    data,
    headers: {
      "Content-Type": "multipart/form-data",
    },
  })
  .then((response) => {
    if (response.status === 200) {
      location.href = "/perfil.php";
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


