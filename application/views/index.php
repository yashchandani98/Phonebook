<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" />
<style>
.third-wrap{
    margin-right: 13px !important;
}
</style>
</head>
<body>
<div class="s01">
<form action="javascript:void(0)" method="post" id="searchContact">
<fieldset>
<legend>Explore Phonebook</legend>
</fieldset>
<div class="inner-form">
<div class="input-field first-wrap" id="search-section">
<input id="search" type="text" placeholder="Name goes here..." required/>
</div>
<div class="input-field third-wrap">
<button class="btn-search" type="button" onclick="window.location.replace('<?=base_url()?>Admin/Login')">Login</button>
</div>
<div class="input-field third-wrap">
<button class="btn-search" type="button" onclick="window.location.replace('<?=base_url()?>Register')">Register</button>
</div>
<div class="input-field third-wrap">
<button class="btn-search" type="submit">Search</button>
</div>
</div>
</form>
</div>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#searchContact").on('submit',function(e){
        var name=$("#search").val();
        window.location.replace("<?=base_url()?>searchRecord?name="+name);
    });
$(document).ready(function(){
    $.getJSON("<?=base_url()?>getAllRecords",function(data){
        //alert(data[0]['Name']);
        //autocomplete($("#search"), data);
    });
});
function autocomplete(inp, arr) {
  var currentFocus;
  $(inp).on("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      a.setAttribute("class", "input-field");
      a.setAttribute("class", "first-wrap");
      //a.setAttribute("align", "center");
      $("#search-section").append(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i]['Name'].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i]['Name'].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i]['Name'].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i]['Name'] + "'>";
          //alert(arr[i]['Name']);
          b.setAttribute("onclick",'window.location("<?=base_url()?>search?search="'+arr[i]['Name']+')')
          $(b).on("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              window.location.replace("<?=base_url()?>search?search="+this.getElementsByTagName("input")[0].value);
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  $(inp).on("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { 
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
</script>