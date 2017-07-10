<script>

//Alphabaetical Sorting
var getParentId = function(){
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
    var an = a.getElementsByTagName("figcaption")[0].textContent;
    //console.log(an);
    var bn = b.getElementsByTagName("figcaption")[0].textContent;
    
    //ascending order
    if (className == "ascAZ"){
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
    else if (className == "descZA"){
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

$(".ascAZ").click(getParentId);
$(".descZA").click(getParentId);


</script>