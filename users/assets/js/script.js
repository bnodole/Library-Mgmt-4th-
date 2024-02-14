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
