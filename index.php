<?php 
 session_start();
 include "connection.php";
   ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online document request</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
        <link rel="stylesheet" href="style2.css"/>
        <script
         src="https://code.jquery.com/jquery-3.6.1.min.js"
         integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
        <script src="index.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <script src="SendMail.js" type="text/javascript"></script>
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("l-hFyeIwllZmlQaXp");
   })();
</script>
    </head>
	<body>
	<<header>
        <div> <img src="images/iccheadernew.png" class="logo"></div>
        <nav>
              <ul>
                        <li><a href="login.php" class="active">Logout</a></li>
                    </ul>
                </nav>
                <div class="navbar-toggle"><i class="fa-solid fa-bars"></i></div>
       </header>
       <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>


<h3>Document request form</h3>

   

          <div class="table_responsive">

          <table class="table">
     <thead>
		<h3>Documents</h3>
     	<tr>
     	 <th>Requested Documents</th>
     	 <th>Amount</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="Requested Documents">Certificate of Grades </td>
     	  	  <td data-label="amount">80</td>
     	  </tr>

     	  <tr>
            <td data-label="Requested Documents">Certificate of Registration </td>
     	  	  <td data-label="amount">80</td>
     	  	 
     	  </tr>

     	  <tr>
           <td data-label="Requested Documents">Certificate of Good Moral</td>
     	  	  <td data-label="amount">80</td>
     	  	
     	  </tr>

     	  <tr>
         <td data-label="Requested Documents">Form 137</td>
     	  	  <td data-label="amount">150</td>
     	  	
     	  </tr>
     </tbody>
   </table>

            <h2>Contact Info</h2>
            <div class="form-group">
              <h5 for="name">Email</h5>
              <input
                type="text"
                name="email"
                class="form-control"
                id="email"
                placeholder=""
              />
            </div>


            <div class="form-group">
              <h5 for="name">Phone number</h5>
              <input
                type="text"
                class="form-control"
                id="phonenumber"
                placeholder=""
              />
            </div>
        <h2>Student Information</h2>
            <div class="form-group">
                <h5 for="name">First Name</h5>
                <input
                  type="text"
                  class="form-control"
                  id="firstname"
                  placeholder=""
                />
              </div>

            <div class="form-group">
                <h5 for="name">Middle Name</h5>
                <input
                  type="text"
                  class="form-control"
                  id="middlename"
                  placeholder=""
                />
              </div>
            <div class="form-group">
              <h5 for="email">Last Name</h5>
              <input
                type="email"
                class="form-control"
                id="lastname"
                placeholder="Enter email"
              />
            </div>

            <div class="form-group">
                <h5 for="course">Course</h5>
                 <select name="course" id="course"
                 class="form-control"
                     placeholder="" required>
                    <option>Bachelor of Science in Computern Science</option>
                    <option>Bachelor of Science in Tourism Management</option>
                    <option>Bacehelor of Science in Hospitality Management</option>
                    <option>Bachelor of Elementart Education</option>
                    <option>Bachelor of Secondary Education</option>
                    <option>Bachelor of in Business Admistration</option>
                    <option>Bachelor of in Tourism Management</option>
                </select>
            
              </div>

            <p>   Please select document(s) to request by referring on the table above for the sections.<br> The request will be processed by section so kindly submit another application for documents with different section. And for multiple documents with the same section, specify in the OTHER REMARKS field below the details.</p>

                 <select name="document" id="documents"
                 class="form-control"
                     placeholder="Select Doc..." required>
                    <option>Select Doc...</option>
                    <option>Certificate of Grades </option>
                    <option>Certificate of Registration </option>
                    <option>Form 137 </option>
                    <option>Certificate of Good Moral</option>
                </select>
            
            



            <div class="form-group">
              <h5 for="message">Other Remarks</h5>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" onclick="sendMail()">Submit</button>
          </div>
        </div>
      </div>
</div>
    
	<br>
	Hello, 
</body>
</html>