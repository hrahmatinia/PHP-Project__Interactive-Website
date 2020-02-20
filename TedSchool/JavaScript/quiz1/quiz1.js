
    $(document).ready(function()
    {
      $("#submit_btn").click(function()
      {
          $(".radoptions").show();
          $(".radoptions").attr("disabled",true);
          $("#submit_btn").attr("disabled",true);
      });
    });
    function displayAnswers()
    {
      
       
        document.getElementById("lablemessage").innerHTML="";
        var results=document.getElementsByTagName('input');
        
        for(i=0;i===results.length-1;i++)
        {
            if(results[i].type==="radio")
            {
               
                     if(results[i].checked)
                { 
                    document.getElementById("lablemessage").innerHTML 
                            +="Q"+results[i].name+")"+"Your Selected Answer Is : " + results[i].value + "<br/>";

                }       
               
            } 
            
        }
        
                            
    }


