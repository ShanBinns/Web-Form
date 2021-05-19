//Testing validity of phone number
function ValidatePhone(){
    var phoneNumber = document.getElementById("phone").value;
    var Valid = /^\d{3}-\d{3}-\d{4}$/;      //Regex - Values should 3 numbers, a hyphen, 3 numbers, then hyphen, then 4 numbers

    if (Valid.test(phoneNumber))
    {
        document.getElementById("phonePrompt").style.color = "Green";  //Adding color to the prompt
        document.getElementById("phonePrompt").innerHTML = "Input is valid";

    }
        else
        {
            document.getElementById("phonePrompt").style.color = "Red";
            document.getElementById("phonePrompt").innerHTML = "Invalid  format";

        }

}

function ValidateAge(){
    var AgeValue = document.getElementById("age").value;
    var Valid = /^(1[89]|[2-9]\d)$/;        //Regex for ages 18 to 99

    if (Valid.test(AgeValue))                  //Testing if value entered for variable code matches the patter of valid
    {
        document.getElementById("agePrompt").style.color = "Green";
        document.getElementById("agePrompt").innerHTML = "Input is valid";
    }

    else
    {
        document.getElementById("agePrompt").style.color = "Red";
        document.getElementById("agePrompt").innerHTML = "You must be between ages 18 and 99"
    }

}

function ifEmpty()
{
    var name = document.getElementById("yourname").value;

    if (yourname.value.length == 0)
      {
        document.getElementById("namePrompt").style.color = "Red";
        document.getElementById("namePrompt").innerHTML= "Please enter your name";

      }
      else
    {
        document.getElementById("namePrompt").style.color = "Green";
        document.getElementById("namePrompt").innerHTML= "Input is valid";
    }
}




function displaySummary(){
    var age = document.getElementById("age").value;
    var name = document.getElementById("yourname").value;
    var email = document.getElementById("youremail").value;
    var phone = document.getElementById("phone").value;
    var feedback = document.getElementById("yourfeedback").value;

    document.getElementById("Summary").innerHTML = "<h3>Your Information:</h3>";
    document.getElementById("Summary").innerHTML += "<p> Hi " + name + ". You are " + age + " years old. Thank you for contacting us! </br>We will get back to you at " + phone + " or " + email  + "</br>Your message: " + feedback + " </br> Thank you </br></p>";
}




//Function to test area code
function ValidateCode(){
    var Code = document.getElementById("areacode").value;
    var Valid = /^[A-Za-z]{4}$/;           //Values should be A-Z, upper or lower case, there should be 4 letters entered

    if (Valid.test(Code))                  //Testing if value entered for variable code matches the patter of valid
    {
        document.getElementById("areacodePrompt").style.color = "Green";
        document.getElementById("areacodePrompt").innerHTML = "Input is valid";
    }

    else
    {
        document.getElementById("areacodePrompt").style.color = "Red";
        document.getElementById("areacodePrompt").innerHTML = "Invalid. Please enter a 4 letter area code"
    }

}
