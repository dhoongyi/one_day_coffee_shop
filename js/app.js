$(document).ready(function(){
    // console.log("Hello World");

      

});

// Start Feedback 
var getopen = document.querySelector(".fa-angle-up");
var getfeedback = document.getElementById("feedback-s");
console.log(getopen,getfeedback);

getopen.addEventListener("click",function(){
  // console.log("hey i am feedback");
  // getfeedback.toggleClass = "show";
  getfeedback.classList.toggle("show");

  if(getfeedback.classList.contains("show")){
    this.style.transform = "rotate(180deg)";
  }else{
    this.style.transform = "rotate(0)";
  }

});
// End Feedback 

// Start Menu Section
var getmenulinks = document.querySelectorAll(".menu-links");
var getimgs = document.querySelectorAll(".menu-images");
var getimgboxes = document.querySelectorAll(".img-boxes");
// console.log(getimgboxes);

for(var i = 0 ; i < getmenulinks.length ; i++){


    getmenulinks[i].addEventListener("click",function(e){


        var getcurrent = document.querySelector(".actives");
        // console.log(getcurrent);
        // console.log(e.target);
        getcurrent.classList.remove("actives");
        e.target.classList.add("actives");


        var getdata = e.target.getAttribute("data");
        console.log(getdata);
        // console.log(getimgs[i]);

        for(var x = 0; x < getimgboxes.length ; x++){
            if(getimgboxes[x].classList.contains(getdata)){
                // getimgboxes[x].classList.add("show");
                // console.log(getimgboxes[x]);
                getimgboxes[x].classList.add("show");
            }else{
                getimgboxes[x].classList.remove("show");
            }
        }
    });
}
// End Menu Section 

// Start Rate Us 
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Customer Location'],
          ['Pakokku',     11],
          ['Myaing',      2],
          ['Pauk',  2],
          ['Chauk', 2],
          ['Magway',    7]
        ]);

        var options = {
          title: 'Customer Rated Our Shop'
        };

        var chart = new google.visualization.PieChart(document.getElementById('rate-location'));

        chart.draw(data, options);
      }

      document.querySelector(".rate-btn").addEventListener("click",function(){
        // console.log("hey");
        document.querySelector(".modal").style.display = "block";
      });

      document.querySelector(".later-btn").addEventListener("click",function(){
        // console.log("hey");
        document.querySelector(".modal").style.display = "none";
      });

      var stars = document.querySelectorAll(".rating-stars");

      stars.forEach(function(star){
        star.addEventListener("click",function(e){
            e.target.classList.add("text-warning")
        });
      });
// End Rate Us

// Start Footer Section 

var year = new Date().getUTCFullYear();
document.getElementById("getyear").textContent = year;
// End Footer Section 

 