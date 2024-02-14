<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Lists</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Syllabus</h1>
    <form method="POST" action="addform.php" name="list">
        <label for="semester">Select Semester:</label>
        <select name="sems" id="semester" onchange="books()">
            <option selected disabled hidden>Choose Semester:</option>
            <option value="First">I</option>
            <option value="Second">II</option>
            <option value="Third">III</option>
            <option value="Fourth">IV</option>
            <option value="Fifth">V</option>
            <option value="Sixth">VI</option>
            <option value="Seventh">VII</option>
            <option value="Eight">VIII</option>
        </select>
    <br>
    <div class="First">
        <h1>Semester I</h1>
        <label for="101">Computer Fundamentals</label>
        <button type="submit" name='adbook' value="Computer Fundamentals" id="101">Add book</button>
        <button type="submit" name='delbook' value="Computer Fundamentals" id="101">Delete book</button> <br><br>

        <label for="102">English I</label>
        <button type="submit" name='adbook' value="English I" id="102">Add book</button>
        <button type="submit" name='delbook' value="English I" id="102">Delete book</button> <br><br>

        <label for="103">Society and Technology </label>
        <button type="submit" name='adbook' value="Society and Technology" id="103">Add book</button>
        <button type="submit" name='delbook' value="Society and Technology" id="103">Delete book</button> <br><br>

        <label for="104">Mathematics I </label> 
        <button type="submit" name='adbook' value="Mathematics I" id="104">Add book</button>
        <button type="submit" name='delbook' value="Mathematics I" id="104">Delete book</button> <br><br>

        <label for="105">Digital Logic </label>
        <button type="submit" name='adbook' value="Digital Logic" id="105">Add book</button>
        <button type="submit" name='delbook' value="Digital Logic" id="105">Delete book</button>
    </div>

    <div class="Second">
        <h1>Semester II</h1>
        <label for="151">C Programming</label>
        <button type="submit" name='adbook' value="C Programming" id="151">Add book</button>
        <button type="submit" name='delbook' value="C Programming" id="151">Delete book</button> <br><br>

        <label for="152">Financial Accounting</label>
        <button type="submit" name='adbook' value="Financial Accounting" id="152">Add book</button>
        <button type="submit" name='delbook' value="Financial Accounting" id="152">Delete book</button> <br><br>

        <label for="153">English II</label>
        <button type="submit" name='adbook' value="English II" id="153">Add book</button>
        <button type="submit" name='delbook' value="English II" id="153">Delete book</button> <br><br>

        <label for="154">Mathematics II</label>
        <button type="submit" name='adbook' value="Mathematics II" id="154">Add book</button>
        <button type="submit" name='delbook' value="Mathematics II" id="154">Delete book</button> <br><br>

        <label for="155">Microprocessor and Computer Architecture</label>
        <button type="submit" name='adbook' value="Microprocessor and Computer Architecture" id="155">Add book</button>
        <button type="submit" name='delbook' value="Microprocessor and Computer Architecture" id="155">Delete book</button>
    </div>

    <div class="Third">
        <h1>Semester III</h1>
        <label for="201">Data Structures and Algorithms</label>
        <button type="submit" name='adbook' value="Data Structures and Algorithms" id="201">Add book</button>
        <button type="submit" name='delbook' value="Data Structures and Algorithms" id="201">Delete book</button> <br><br>

        <label for="202">Probability and Statistics</label>
        <button type="submit" name='adbook' value="Probability and Statistics" id="202">Add book</button>
        <button type="submit" name='delbook' value="Probability and Statistics" id="202">Delete book</button> <br><br>

        <label for="203">System Analysis and Design</label>
        <button type="submit" name='adbook' value="System Analysis and Design" id="203">Add book</button>
        <button type="submit" name='delbook' value="System Analysis and Design" id="203">Delete book</button> <br><br>

        <label for="204">OOP in Java</label>
        <button type="submit" name='adbook' value="OOP in Java" id="204">Add book</button>
        <button type="submit" name='delbook' value="OOP in Java" id="204">Delete book</button> <br><br>

        <label for="205">Web Technology</label>
        <button type="submit" name='adbook' value="Web Technology" id="205">Add book</button>
        <button type="submit" name='delbook' value="Web Technology" id="205">Delete book</button>
    </div>

    <div class="Fourth">
        <h1>Semester IV</h1>
        <label for="251">Operating System</label>
        <button type="submit" name='adbook' value="Operating System" id="251">Add book</button>
        <button type="submit" name='delbook' value="Operating System" id="251">Delete book</button> <br><br>

        <label for="252">Numerical Methods</label>
        <button type="submit" name='adbook' value="Numerical Methods" id="252">Add book</button>
        <button type="submit" name='delbook' value="Numerical Methods" id="252">Delete book</button> <br><br>

        <label for="253">Software Engineering</label>
        <button type="submit" name='adbook' value="Software Engineering" id="253">Add book</button>
        <button type="submit" name='delbook' value="Software Engineering" id="253">Delete book</button> <br><br>

        <label for="254">Scripting Language</label>
        <button type="submit" name='adbook' value="Scripting Language" id="254">Add book</button>
        <button type="submit" name='delbook' value="Scripting Language" id="254">Delete book</button> <br><br>

        <label for="255">Database Management System</label>
        <button type="submit" name='adbook' value="Database Management System" id="255">Add book</button>
        <button type="submit" name='delbook' value="Database Management System" id="255">Delete book</button>
    </div>
    
    <div class="Fifth">
        <h1>Semester V</h1>
        <label for="301">MIS and E-Business</label>
        <button type="submit" name='adbook' value="MIS and E-Business" id="301">Add book</button>
        <button type="submit" name='delbook' value="MIS and E-Business" id="301">Delete book</button> <br><br>

        <label for="302">DotNet Technology</label>
        <button type="submit" name='adbook' value="DotNet Technology" id="302">Add book</button>
        <button type="submit" name='delbook' value="DotNet Technology" id="302">Delete book</button> <br><br>

        <label for="303">Computer Networking</label>
        <button type="submit" name='adbook' value="Computer Networking" id="303">Add book</button>
        <button type="submit" name='delbook' value="Computer Networking" id="303">Delete book</button> <br><br>

        <label for="304">Introduction to Management</label>
        <button type="submit" name='adbook' value="Introduction to Management" id="304">Add book</button>
        <button type="submit" name='delbook' value="Introduction to Management" id="304">Delete book</button> <br><br>

        <label for="305">Computer Graphics and Animation</label>
        <button type="submit" name='adbook' value="Computer Graphics and Animation" id="305">Add book</button>
        <button type="submit" name='delbook' value="Computer Graphics and Animation" id="305">Delete book</button>
    </div>

    <div class="Sixth">
        <h1>Semester VI</h1>
        <label for="351">Mobile Programming</label>
        <button type="submit" name='adbook' value="Mobile Programming" id="351">Add book</button>
        <button type="submit" name='delbook' value="Mobile Programming" id="351">Delete book</button> <br><br>

        <label for="352">Distributed System</label>
        <button type="submit" name='adbook' value="Distributed System" id="352">Add book</button>
        <button type="submit" name='delbook' value="Distributed System" id="352">Delete book</button> <br><br>

        <label for="353">Applied Economics</label>
        <button type="submit" name='adbook' value="Applied Economics" id="353">Add book</button>
        <button type="submit" name='delbook' value="Applied Economics" id="353">Delete book</button> <br><br>

        <label for="354">Advanced Java Programming</label>
        <button type="submit" name='adbook' value="Advanced Java Programming" id="354">Add book</button>
        <button type="submit" name='delbook' value="Advanced Java Programming" id="354">Delete book</button> <br><br>

        <label for="355">Network Programming</label>
        <button type="submit" name='adbook' value="Network Programming" id="355">Add book</button>
        <button type="submit" name='delbook' value="Network Programming" id="355">Delete book</button>
    </div>

    <div class="Seventh">
        <h1>Semester VII</h1>
        <label for="401">Cyber Law and Professional Ethics</label>
        <button type="submit" name='adbook' value="Cyber Law and Professional Ethics" id="401">Add book</button>
        <button type="submit" name='delbook' value="Cyber Law and Professional Ethics" id="401">Delete book</button> <br><br>

        <label for="402">Cloud Computing</label>
        <button type="submit" name='adbook' value="Cloud Computing" id="402">Add book</button>
        <button type="submit" name='delbook' value="Cloud Computing" id="402">Delete book</button> <br><br>

        <label for="403">Internship</label>
        <button type="submit" name='adbook' value="Internship" id="403">Add book</button>
        <button type="submit" name='delbook' value="Internship" id="403">Delete book</button>
    </div>

    <div class="Seventh">
        <h1>List of Elective Subjects for BCA VII Semester</h1>
        <label for="404">Image Processing</label>
        <button type="submit" name='adbook' value="Image Processing" id="404">Add book</button>
        <button type="submit" name='delbook' value="Image Processing" id="404">Delete book</button> <br><br>

        <label for="405">Database Administration</label>
        <button type="submit" name='adbook' value="Database Administration" id="405">Add book</button>
        <button type="submit" name='delbook' value="Database Administration" id="405">Delete book</button> <br><br>

        <label for="406">Network Administration</label>
        <button type="submit" name='adbook' value="Network Administration" id="406">Add book</button>
        <button type="submit" name='delbook' value="Network Administration" id="406">Delete book</button> <br><br>

        <label for="408">Advanced DotNet Technology</label>
        <button type="submit" name='adbook' value="Advanced DotNet Technology" id="408">Add book</button>
        <button type="submit" name='delbook' value="Advanced DotNet Technology" id="408">Delete book</button> <br><br>

        <label for="409">E-Governance</label>
        <button type="submit" name='adbook' value="E-Governance" id="409">Add book</button>
        <button type="submit" name='delbook' value="E-Governance" id="409">Delete book</button> <br><br>

        <label for="410">Artificial Intelligence</label>
        <button type="submit" name='adbook' value="Artificial Intelligence" id="410">Add book</button>
        <button type="submit" name='delbook' value="Artificial Intelligence" id="410">Delete book</button>
    </div>

    <div class="Eight">
        <h1>Semester VIII</h1>
        <label for="451">Operations Research</label>
        <button type="submit" name='adbook' value="Operations Research" id="451">Add book</button>
        <button type="submit" name='delbook' value="Operations Research" id="451">Delete book</button>
    </div>

    <div class="Eight">
        <h1>List of Elective Subjects for BCA VIII Semester</h1>
        <label for="453">Database Programming</label>
        <button type="submit" name='adbook' value="Database Programming" id="453">Add book</button>
        <button type="submit" name='delbook' value="Database Programming" id="453">Delete book</button> <br><br>

        <label for="454">Geographical Information System</label>
        <button type="submit" name='adbook' value="Geographical Information System" id="454">Add book</button>
        <button type="submit" name='delbook' value="Geographical Information System" id="454">Delete book</button> <br><br>

        <label for="455">Data Analysis and Visualization</label>
        <button type="submit" name='adbook' value="Data Analysis and Visualization" id="455">Add book</button>
        <button type="submit" name='delbook' value="Data Analysis and Visualization" id="455">Delete book</button> <br><br>

        <label for="456">Machine Learning</label>
        <button type="submit" name='adbook' value="Machine Learning" id="456">Add book</button>
        <button type="submit" name='delbook' value="Machine Learning" id="456">Delete book</button> <br><br>

        <label for="457">Multimedia System</label>
        <button type="submit" name='adbook' value="Multimedia System" id="457">Add book</button>
        <button type="submit" name='delbook' value="Multimedia System" id="457">Delete book</button> <br><br>

        <label for="458">Knowledge Engineering</label>
        <button type="submit" name='adbook' value="Knowledge Engineering" id="458">Add book</button>
        <button type="submit" name='delbook' value="Knowledge Engineering" id="458">Delete book</button> <br><br>

        <label for="459">Information Security</label>
        <button type="submit" name='adbook' value="Information Security" id="459">Add book</button>
        <button type="submit" name='delbook' value="Information Security" id="459">Delete book</button> <br><br>

        <label for="460">Internet of Things</label>
        <button type="submit" name='adbook' value="Internet of Things" id="460">Add book</button>
        <button type="submit" name='delbook' value="Internet of Things" id="460">Delete book</button>
    </div>
    </form>
    <script src="script.js"></script>
</body>
</html>