
// interact with the button and disabled them after submission
$(document).ready(function ()
{
    $("#submit_btn").click(function ()
    {
        $(".radoptions").show();
        $(".radoptions").attr("disabled", true);
        $("#submit_btn").attr("disabled", true);
    });
});

//getting the user selection and print it out

function showAnswers()
{
    document.getElementById("message").innerHTML = "";
    var results = document.getElementsByTagName('input');

    for (i = 0; i <= results.length; i++)
    {
        if (results[i].type === "radio")
        {

            if (results[i].checked)
            {
                document.getElementById("message").innerHTML
                        += "Question" + results[i].name + ")" + "Your Have Selected  : " + results[i].id + "<br>";

            }

        }

    }


}


