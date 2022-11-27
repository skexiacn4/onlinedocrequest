function sendMail() {
  var params = {
    email: document.getElementById("email").value,
    phonenumber: document.getElementById("phonenumber").value,
    firstname: document.getElementById("firstname").value,
    middlename: document.getElementById("middlename").value,
    lastname: document.getElementById("lastname").value,
    course: document.getElementById("course").value,
    documents: document.getElementById("documents").value,
      message: document.getElementById("message").value,
  };

  const serviceID = "service_ptq311v";
  const templateID = "template_f1uy1gk";

    emailjs.send(serviceID, templateID, params)
    .then(res=>{
        document.getElementById("email").value = "";
        document.getElementById("phonenumber").value = "";
        document.getElementById("firstname").value = "";
        document.getElementById("middlename").value,
        document.getElementById("lastname").value,
        document.getElementById("course").value,
        document.getElementById("documents").value,
        document.getElementById("message").value,
        console.log(res);
        alert("Your request sent successfully!!")

    })
    .catch(err=>console.log(err));

}

