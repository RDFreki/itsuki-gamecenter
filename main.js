function myFunction(){
    var proceed = confirm( "Press 'OK' to reset the entered data.")
    if(proceed == true) {
        document.getElementById("form_input").reset()
        window.alert("All data has been succesfully reset.")
    } else{
        window.alert("Action Cancelled.")
    }
}
