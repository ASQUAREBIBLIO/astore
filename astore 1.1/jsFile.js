// form validation
// function validateForm() {
//     let f = document.forms["myForm"]["email"].value;
//     if (f == "") {
//       alert("Email must be filled out.");
//       return false;
//     }
//   }


const textInput = document.getElementById("email");
const saveButton = document.getElementById("saveButton");

saveButton.addEventListener("click", function() {
  const text = textInput.value;
  const blob = new Blob([text], {type: "text/plain"});
  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.href = url;
  link.download = "subscribers.txt";
  
});