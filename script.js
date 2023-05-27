var map;
var geocoder;
async function initMap() {
  var rns = {lat:12.902351, lng:77.518605};
  const { Map } = await google.maps.importLibrary("maps");
   map = new Map(document.getElementById("map"), {
    zoom: 15,
    center : rns,
  });
  var cdata = JSON.parse(document.getElementById('data').innerHTML);
  console.log(cdata);
  geocoder = new google.maps.Geocoder();
  codeAddress(cdata);
  var allData = JSON.parse(document.getElementById('allData').innerHTML);
  showJobs(allData);
}

function showJobs(allData){
  Array.prototype.forEach.call(allData, function(data){
    var contentString = ' ' + '<h1 style="font-weight:bold;">'+data.name + '</h1>' +'<br>' + '<p style="font-size:1rem;">' + data.info + '</p>' +'<br>' + '<a href="'+data.site+'" style="font-weight: bold;text-decoration: underline;">'+"Website"+'</a>';
    var infoWind = new google.maps.InfoWindow({
      content: contentString,
    });
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(data.lat, data.lng),
    map: map
  });

  marker.addListener('click', function(){
    // infoWind.setContent(content);
    infoWind.open(map, marker);
  })
})
}

function codeAddress(cdata) {
  Array.prototype.forEach.call(cdata, function(data){
    var address = data.name + ' ' + data.address;
     geocoder.geocode( { 'address': address}, function(results, status) {
       if (status == 'OK') {
         map.setCenter(results[0].geometry.location);
        //  console.log(results[0].geometry.location);
        // alert(map.getCenter().lat())
         var points = {};
         points.id = data.id;
         points.lat = map.getCenter().lat();
         points.lng = map.getCenter().lng();
         updateLatLngJobs(points);
       } else {
        if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
          nextAddress--;
          delay++;
        } else {
          var reason="Code "+status;
          var msg = 'address="' + search + '" error=' +reason+ '(delay='+delay+'ms)<br>';
          document.getElementById("messages").innerHTML += msg;
        }   
       }
     });
 });
}
function updateLatLngJobs(points){
  $.ajax({
    url:"action.php",
    method: "post",
    data: points,
    success: function(res){
      console.log(res);
    }
  })
  // console.log(points)
}
initMap();