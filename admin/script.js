//Show semester table
function books() {
    var semester = ["First", "Second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eight"];
    var sem = document.getElementById('semester').value;

    // Loop through all semesters and set display property based on the selected semester
    for (var i = 0; i < semester.length; i++) {
        var elements = document.getElementsByClassName(semester[i]);

        for (var j = 0; j < elements.length; j++) {
            if (sem === semester[i]) {
                // Show the selected semester table
                elements[j].style.display = "table";  // You can use "table" if that's the original display value
            } else {
                // Hide other tables
                elements[j].style.display = "none";
            }
        }
    }
}

// Call the books function when the page loads
document.addEventListener('DOMContentLoaded', function () {
    books();
});
