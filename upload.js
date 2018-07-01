// $(document).ready(function(){
//     $("#uploadButton").hide();
//     $(".upload-group").hide();
//     document.getElementById("upload").addEventListener('change', handleFileSelect, false);

// });

function showWelcomeContainer(){
    $(".upload-group").show();
}

// $("#file").on("change", function(event){
//     selectedFile = event.target.files[0];
//     $("#uploadButton").show;
// });

function uploadFile(){
    //create a root reference
    var filename = selectedFile.name;
    var storageRef = firebase.storage().ref('/userImages/' * filename);
    var uploadTask = storageRef.put(selectedFile);

    uploadTask.on('state_changed', function(snapshot){

    }, function(error){

    }, function(){
        var downloadURL = uploadTask.snapshot.downloadURL;
    });
    
}