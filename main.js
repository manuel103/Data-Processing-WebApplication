
var config = {
  apiKey: "AIzaSyAPGKQJCpLiSXz5jRyOmTam8bl5kiid1cg",
    authDomain: "plandr-01.firebaseapp.com",
    databaseURL: "https://plandr-01.firebaseio.com",
    projectId: "plandr-01",
    storageBucket: "",
    messagingSenderId: "466634078055"
};
firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('users');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var national = getInputVal('national');
  var username = getInputVal('username');
  var email = getInputVal('email');
  var fname = getInputVal('fname');
  var lname = getInputVal('lname');
  var address = getInputVal('address');
  var city = getInputVal('city');
  var county = getInputVal('county');
  var pcode = getInputVal('pcode');
  var number = getInputVal('number');
  var password = getInputVal('password');
  var message = getInputVal('message');
  

  // Save message
  saveMessage(national, username, email, fname, lname, address, city, county, pcode, number,password, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(national, username, email, fname, lname, address, city, county, pcode, number,password, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    national: national,
    username:username,
    email:email,
    fname:fname,
    lname:lname,
    address:address,
    city:city,
    county:county,
    pcode:pcode,
    number:number,
    message:message,
    DefaultPassword:password
  });
}
