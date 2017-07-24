<script>

//Alphabaetical Sorting
var sortFunction = function(){

  //get the corrent working tab
  var tabId = "#" + $(this).parent().parent().prop("id");

  //get the button class to know if asscending of descending
  var classNameSort = $(this).attr('class').split(' ')[2];
  //console.log(classNameSort);
  var className = $(this).attr('class').split(' ')[3];
  //console.log(className);


  if (classNameSort == "alpha"){
    if (className == "descZA"){
      className = "ascAZ";
      $(this).addClass("ascAZ");
      $(this).removeClass("descZA");
    } else if (className == "ascAZ"){
       className = "descZA";
      $(this).addClass("descZA");
      $(this).removeClass("ascAZ");
    }
  }


  if (classNameSort == "date"){
    if (className == "desc-oldest"){
      className = "asc-newest";
      $(this).addClass("asc-newest");
      $(this).removeClass("desc-oldest");
    } else if (className == "asc-newest"){
       className = "desc-oldest";
      $(this).addClass("desc-oldest");
      $(this).removeClass("asc-newest");
    }
  }

  if (classNameSort == "price"){
    if (className == "desc-price"){
      className = "asc-price";
      $(this).addClass("asc-price");
      $(this).removeClass("desc-price");
    } else if (className == "asc-price"){
       className = "desc-price";
      $(this).addClass("desc-price");
      $(this).removeClass("asc-price");
    }
  }


  var parentContainer = $(tabId);	
  var bookArray = $(tabId).find('.ai');  
  
  //sorting
  bookArray.sort( function (a, b){

    if (className == "asc-newest" || className == "desc-oldest"){
      var an = a.getElementsByTagName("input")[0].value;
      var bn = b.getElementsByTagName("input")[0].value;
    }

    else if (className == "ascAZ" || className == "descZA"){
      var an = a.getElementsByTagName("figcaption")[0].textContent;
      var bn = b.getElementsByTagName("figcaption")[0].textContent;
    }  

    else if (className == "asc-price" || className == "desc-price"){
      var an = a.getElementsByTagName("figcaption")[1].textContent.replace('$', '');
      var bn = b.getElementsByTagName("figcaption")[1].textContent.replace('$', '');
      console.log("An is " + an + " Bn is " + bn);
    }
    
    //ascending order
    if (className == "ascAZ" || className == "asc-newest"){
      if (an > bn){
       return 1;
      } 
      if (an < bn){
       return -1;
      }
      return 0;   
    }

    //descending order
    else if (className == "descZA" || className == "desc-oldest"){
      if (an > bn){
       return -1;
      } 
      if (an < bn){
       return 1;
      }
      return 0;   
    }

        //price sorting
    if (className == "asc-price"){
      return (an - bn);
    }
    else if (className == "desc-price"){
      return (bn - an);
    }

    
  });
  
  bookArray.detach().appendTo(parentContainer);
}


$(".alpha").click(sortFunction);
$(".date").click(sortFunction);
$(".price").click(sortFunction);


</script>