var url = 'https://ron-swanson-quotes.herokuapp.com/v2/quotes';


var xhrbtn = document.querySelector("#xhr");
var fetchbtn = document.querySelector("#fetch");
var jquerybtn = document.querySelector("#jquery");
var axiosbtn = document.querySelector("#axios");
var display = document.querySelector("#quote");
// XHR
xhrbtn.addEventListener("click", function() {
    var XHR = new XMLHttpRequest();
    XHR.onreadystatechange = function() {
        if(XHR.readyState == 4 && XHR.status == 200){
            var quote = JSON.parse(XHR.responseText)[0];
            // console.log(quote);
            display.innerText = quote;
        }
    }
    XHR.open("GET", url);
    XHR.send();
});
// fetch
fetchbtn.addEventListener("click", function(){
    fetch(url)
    .then(function(req){
        req.json().then(function(data) {
            // console.log(data[0]);
            display.innerText = data[0];
          })
        
    })
    .catch(function(){
        alert("HIIIII")
    })
});
// jquery
$("#jquery").click(function(){
    $.getJSON(url)
    .done(function(data){
        // console.log(data[0]);
        $('#quote').text(data[0]);
    })
  });
  
//axios
axiosbtn.addEventListener("click", function(){
    axios.get(url)
    .then(function(res){
        // console.log(res.data[0])
        display.innerText = res.data[0];

    })
    .catch(function(){
        alert("err");
    })
});

