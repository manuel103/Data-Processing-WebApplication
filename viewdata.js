
var tblUsers = document.getElementById('tbl_users_list');
var databaseRef = firebase.database().ref('users/');
var rowIndex = 1;

databaseRef.once('value', function (snapshot) {
    snapshot.forEach(function (childSnapshot) {
        var childKey = childSnapshot.key;
        var childData = childSnapshot.val();

        var row = tblUsers.insertRow(rowIndex);
        var cellId = row.insertCell(0);
        var cellName = row.insertCell(1);
        var cellCity = row.insertCell(2);
        var cellCounty = row.insertCell(3);
        var cellEmail = row.insertCell(4);
        var cellFname = row.insertCell(5);
        var cellLname = row.insertCell(6);
        var cellAdmin = row.insertCell(7);
        var cellHouses = row.insertCell(8);
        var cellZip = row.insertCell(9);
        var cellUname = row.insertCell(10);
        //var cellAddress = row.insertCell(2);
        cellId.appendChild(document.createTextNode(childKey));
        //cellName.appendChild(document.createTextNode(childData.user_name));
        cellName.appendChild(document.createTextNode(childData.address));
        cellCity.appendChild(document.createTextNode(childData.city));
        cellCounty.appendChild(document.createTextNode(childData.county));
        cellEmail.appendChild(document.createTextNode(childData.email));
        cellFname.appendChild(document.createTextNode(childData.fname));
        cellLname.appendChild(document.createTextNode(childData.lname));
        cellAdmin.appendChild(document.createTextNode(childData.national));
        cellHouses.appendChild(document.createTextNode(childData.number));
        cellZip.appendChild(document.createTextNode(childData.pcode));
        cellUname.appendChild(document.createTextNode(childData.username));

        rowIndex = rowIndex + 1;
    });
});

function save_user() {
    var user_name = document.getElementById('user_name').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;

    var uid = firebase.database().ref().child('users').push().key;

    var data = {
        user_id: uid,
        user_name: user_name
    }

    var updates = {};
    updates['/users/' + uid] = data;
    firebase.database().ref().update(updates);

    alert('The user is created successfully!');
    reload_page();
}

function update_user() {
    var user_name = document.getElementById('user_name').value;
    var user_id = document.getElementById('user_id').value;

    var data = {
        user_id: user_id,
        user_name: user_name
    }

    var updates = {};
    updates['/users/' + user_id] = data;
    firebase.database().ref().update(updates);

    alert('The user is updated successfully!');

    reload_page();
}

function delete_user() {
    var user_id = document.getElementById('user_id').value;

    firebase.database().ref().child('/users/' + user_id).remove();
    alert('The user is deleted successfully!');
    reload_page();
}

function reload_page() {
    window.location.reload();
}
