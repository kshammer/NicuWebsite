$(document).ready(function () {
    var rootRef = firebase.database().ref().child("patients");
    rootRef.on("child_added", snap => {

        var name = snap.child("HeartRate").val();

        $("#fireP").append("HeartRate " + name + "<br>");
    });
});
