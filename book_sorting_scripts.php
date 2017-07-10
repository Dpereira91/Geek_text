<script>

//Alphabaetical Sorting
var sortByAlph = function(){
  //get the corrent working tab
  var tabId = "#" + $(this).parent().parent().prop("id");
	//console.log(tabId);

  //get the button class to know if asscending of descending
  var className = $(this).attr('class').split(' ')[2];
  //console.log(className);
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
    
    //ascending order
    if (className == "ascAZ" || className == "asc-newest"){
      if (an > bn){
       return 1;
      } 
      if (an < bn){
       return -1;
      }
      return 0;   
      //console.log(an);
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
      //console.log(an);
    }

    
  });
  
  bookArray.detach().appendTo(parentContainer);
}


$(".ascAZ").click(sortByAlph);
$(".descZA").click(sortByAlph);
$(".asc-newest").click(sortByAlph);
$(".desc-oldest").click(sortByAlph);


</script>