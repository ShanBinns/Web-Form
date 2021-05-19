<style>
<?php include 'CSS/Feedback_Form.css'; ?>
</style>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Forms Validation Webpage</title>
      <script type="text/javascript" src="Feedback_Form.js"> </script>
  </head>
  <body>
      <table align="center">

          <tr>
              <td>
                  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <h1><strong>Send us your feedback</strong></h1>
                      <br><br>
                      <label for="area code"> <strong>Select a Product  </strong>  &#42;</label> <br>
                      <select id="products">
                          <option></option>
                          <option value="Mascara">Mascara</option>
                          <option value="Eyeshadows">Eyeshadows</option>
                          <option value="Eyeliner">Eyeliner</option>
                          <option value="Foundation">Foundation</option>
                          <option value="Lip Gloss">Lip Gloss</option>
                      </select>
                      <br><br>

                      <!--Span inline tag used to display error message to the right-->
                      <label for="age"> <strong>Your Age</strong> </label> <br>
                      <input type="text" id="age" onblur="ValidateAge()" placeholder="18-99" required>  <span id="agePrompt"></span>
                      <br><br>

                      <label for="name"> <strong>Your Name</strong> &#42; </label> <br>
                      <input type="text" id="yourname" class="textinfo" onblur="ifEmpty()" > <span id="namePrompt"></span>
                      <br><br>

                      <label for="email"> <strong>E-mail Address</strong>  </label> <br>
                      <input type="email" id="youremail" class="textinfo" placeholder="John@example.com">
                       <br><br>

                       <label for="phone"> <strong>Cell Phone Number </strong> </label> <br>
                      <input type="text" id="phone" class="textinfo" placeholder="xxx-xxx-xxxx" onblur="ValidatePhone()">
                      <span id="phonePrompt"></span>
                      <br><br>

                      <label for="area code"> <strong>AreCodea  </strong> </label> <br>
                      <input type="text" id="areacode" class="textinfo" onblur="ValidateCode()">
                      <span id="areacodePrompt"></span>
                      <br><br>

                      <label for="feedback"> <strong> feedback</strong> &#42; </label> <br>
                      <input type="text" id="yourfeedback" class="feedback" >  <br><br><br>

                      You can choose to attach a photo of yourself wearing our product <br><br>
                      <label for="attachment"> <strong>Attachment:</strong></label><br>
                      <input type="file" id="pdf" name="pdf" accept=".pdf, .doc",>

                      <br><br><br><br>
                      <button type="button" onclick="displaySummary()">Send Feedback</button>

                      <p id="Summary"></p>
                      <p> <em>This form belongs to a web based beauty supplier which allows customer to send feeback about products. The customer is to enter information about themselves, select the products to review and send a message to the company. Click the 'Send Feedback' button to see results.</em></p>
                  </form>
              </td>
          </tr>
      </table>
  </body>
</html>
