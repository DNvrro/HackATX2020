const request = {
    location: new google.maps.LatLng(51.5287352, -0.3817841),
    radius: 5000,
    type: ['restaurant']
};

const results = [];
const places = new google.maps.Map(document.getElementById('places'), {
    center: {lat: 51.5287352, lng: -0.3817841},
    zoom: 10
});

const service = new google.maps.places.PlacesService(places);

service.nearbySearch(request, callback);