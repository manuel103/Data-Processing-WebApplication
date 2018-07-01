// firebase.auth().onAuthStateChanged(function(user){
//   if(user){

//     document.getElementById("user-div").style.display="block";
//     document.getElementById("login-div").style.display="none";

//   }else{
//     document.getElementById("user-div").style.display="none";
//     document.getElementById("login-div").style.display="block";

//   }
// });


// function validateLogin(){
//   // var user=document.loginSheet.user.value;
//   // var pass=document.loginSheet.pass.value;

//   // if (user==null || user==""){ 
//   //   alert("Username is required"); 
//   //   return false;
//   // }else if(pass==null || pass==""){ 
//   //   alert("Password is required"); 
//   //   return false; 
//   // }


//   var email=document.getElementById("email").value;
//   var pass=document.getElementById("password").value;

//   firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error))

//   var errorCode=error.code;
//   var errorMessage=error.message;

//   window.alert("login");
// };

//     document.querySelector('.signIn').addEventListener('click', function(e) {
//       e.preventDefault();
//       e.stopPropagation();
//       var email = document.querySelector('#email').value;
//       var password = document.querySelector('#password').value
//       var credential = firebase.auth.EmailAuthProvider.credential(email, password);
//       var auth = firebase.auth();
//       var currentUser = auth.currentUser;
//       });

// var ref = new Firebase("https://plandr-01.firebaseio.com");
// var authClient = new FirebaseAuthClient(ref, function(error, user) {
//   if (error) {
//     alert(error);
//     return;
//   }
//   if (user) {
//     // User is already logged in.
//     doLogin(user);
//   } else {
//     // User is logged out.
//     showLoginBox();
//   }
// });

// function showLoginBox() {
//   // Do whatever DOM operations you need to show the login/registration box.
//   $(".signIn").on("click", function() {
//     authClient.login("password", {
//       email: $("#email").val(),
//       password: $("#password").val(),
//       rememberMe: $("#rememberCheckbox").val()
//     });
//   });
// }

// firebase.auth().signInWithEmailAndPassword(email, password)
//  .catch(function(err) {
//    // Handle errors
//  });

// /*$(".signIn").click(function() {
//   window.location.href='DataCollectorNav.html';
// });*/

firebase.auth().onAuthStateChanged(function(user) {
  
  if (user) {
    // User is signed in.

    // document.getElementById("user_div").style.display = "block";
    // document.getElementById("login_div").style.display = "none";

    var user = firebase.auth().currentUser;

    

    

    if(user != null){

      //var email_id = user.email;
      //document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

    }

  } else {
    // No user is signed in.
    console.log("No users are available");

    // document.getElementById("user_div").style.display = "none";
    // document.getElementById("login_div").style.display = "block";

  }
});



function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;
  
  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {

    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });window.location = 'DataCollector/DataCollectorNav.html';
}

function logout(){
  firebase.auth().signOut();
}


