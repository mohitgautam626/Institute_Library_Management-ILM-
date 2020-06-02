
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyARhTw65R4uZzk2KOzOF8KhCXAr6_9pYW8",
    authDomain: "nssnitjsr-3fd61.firebaseapp.com",
    databaseURL: "https://nssnitjsr-3fd61.firebaseio.com/",
    projectId: "nssnitjsr-3fd61",
    storageBucket: "nssnitjsr-3fd61.appspot.com",
    messagingSenderId: "535015158824",
    appId: "1:535015158824:web:a6941438d7de794e46b11d",
    measurementId: "G-DM902X771F"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

var database = firebase.database();

var certiref = firebase.database().ref('certificates');
//Listen for form Submit

document.getElementById("contactForm").addEventListener("submit", submitForm);
function submitForm(e){
    e.preventDefault();
    //Get Values
    var certno = getInputVal('textinput0');
    var name = getInputVal('textinput1');
    var regno = getInputVal('textinput2');
    var op = getInputVal('selectbasic');
    var branch="";
    if(op=='1') branch = "Civil Engineering";
    else if(op=='2') branch = "Computer Science Engineering";
    else if(op=='3') branch = "Electronics and Communication Engineering";
    else if(op=='4') branch = "Electrical Engineering";
    else if(op=='5') branch = "Mechanical Engineering";
    else if(op=='6') branch = "Metallurgy and Material Science Engineering";
    else if(op=='7') branch = "Production Engineering";
    else if(op=='8') branch = "Master of Computer Applications";
    else if(op=='9') branch = "M.Sc.";
    var email = getInputVal('textinput3');
    var contact = getInputVal('textinput4');
    
    saveMessage(certno,name,regno,branch,email,contact);
}

//Function for Input ID

function getInputVal(id){
    return document.getElementById(id).value;
    
}

//Function to Save Message to Firebase

function saveMessage(certno,name,regno,branch,email,contact){
    
   var newcertiRef = certiref.child(regno);
    newcertiRef.set({
        certno : certno,
        name : name,
        regno : regno,
        branch : branch,
        email : email,
        contact : contact
        
    })
    
    //show alert
    document.querySelector('.alert').style.display='block';
//    
//    //hide alert after 3s
    setTimeout(function(){
        document.querySelector('.alert').style.display='none';
        document.getElementById("contactForm").reset();
    
    },3000);
    
}
//auth state

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    
    document.querySelector('.logoutview').style.display='none';
    document.querySelector('.loginview').style.display='block';
    var user = firebase.auth().currentUser;

      if (user) {
            var username = user.email;
            document.getElementById("user_para").innerHTML = "Welcome User : "+username;
            
      } else {
  // No user is signed in.
      }
  } else {
    document.querySelector('.loginview').style.display='none';
    document.querySelector('.logoutview').style.display='block';
    
      
    
  }
});

//login

function login(){
    
    var userid = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    firebase.auth().signInWithEmailAndPassword(userid, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  window.alert("Error : "+errorMessage);
  // ...
});
    
}

//logout

function logout(){
    firebase.auth().signOut().then(function() {
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});
}