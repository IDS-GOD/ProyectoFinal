
document.addEventListener("DOMContentLoaded", () => {
    mapboxgl.accessToken = 'pk.eyJ1Ijoib3NpZXJyYTE5IiwiYSI6ImNreDAxdzV1NzA1MW8ycnBhaHFnaDdweG4ifQ.0DRvsj3CH5HpObiD7QpGSQ';
    const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-110.32107573883633, 24.107302393510377],
    zoom: 13,
    });

    const marker = new mapboxgl.Marker({
        draggable: true,
      })
        .setLngLat([-110.32107573883633, 24.107302393510377])
        .addTo(map);


        const $markerPosition = document.getElementById("currentPosition");

        const updateLabel = () => {
          const pos = marker.getLngLat();
          $markerPosition.innerText = `[Latitud: ${pos.lat}, Longitud: ${pos.lng}]`;
        };
      
        updateLabel();
      
        marker.on("dragend", updateLabel);
      
        map.on("click", (event) => {
          marker.setLngLat([event.lngLat.lng, event.lngLat.lat]);
          updateLabel();
        });
}); 