function select_subjects() {
    const sems = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eight'];
    const subjects = {
        First: ['Computer Fundamentals', 'English I', 'Society and Technology', 'Mathematics I', 'Digital logic'],
        Second: ['subject1', 'subject2', 'subject3'],
        Third: ['subject1', 'subject2', 'subject3'],
        Fourth: ['subject1', 'subject2', 'subject3'],
        Fifth: ['subject1', 'subject2', 'subject3'],
        Sixth: ['subject1', 'subject2', 'subject3'],
        Seventh: ['subject1', 'subject2', 'subject3'],
        Eight: ['subject1', 'subject2', 'subject3']
    };

    let selected_sem = document.getElementById('semester').value;

    let select = document.getElementById('subject');
    select.innerHTML="<option selected disabled hidden>"+"Select subject"+"</option>";

    if (subjects[selected_sem]) {
        subjects[selected_sem].forEach(subject => {
            let option = document.createElement("option");
            option.value = subject;
            option.textContent = subject;
            select.appendChild(option);
        });
    }
}

// document.addEventListener("DOMContentLoaded", function() {
//     // Listen for change event on checkboxes
//     document.querySelectorAll('.boooks').forEach(function(checkbox) {
//         checkbox.addEventListener('change', function() {
//             // Check if checkbox is checked
//             if (this.checked) {
//                 // Get the value of the checked checkbox
//                 let bookName = this.value;
                
//                 // Create a new row and cell in the table body
//                 let tableBody = document.getElementById('bookTableBody');
//                 let newRow = tableBody.insertRow();
//                 let newCell = newRow.insertCell();
                
//                 // Set the text content of the cell to the checked book name
//                 newCell.textContent = bookName;
//             } else {
//                 // If checkbox is unchecked, remove the corresponding row from the table
//                 let row = this.parentNode.parentNode;
//                 row.parentNode.removeChild(row);
//             }
//         });
//     });
// });


