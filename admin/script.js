//Show semester table
function books() {
    var semester = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eight"];
    var sem = document.getElementById('semester').value;

    // Loop through all semesters and set display property based on the selected semester
    for (var i = 0; i < semester.length; i++) {
        var element = document.getElementById(semester[i]);
        
        if (sem === semester[i]) {
            // Show the selected semester table
            element.style.display = "block";
        } else {
            // Hide other tables
            element.style.display = "none";
        }
    }
}