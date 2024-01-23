<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Lists</title>
    <link rel="stylesheet" href="../../admin/style.css">
</head>
<body>
    <h1>Syllabus</h1>
    <label for="semester">Select Semester:</label>
    <select name="sems" id="semester" onclick="books()">
        <option selected disabled>Choose Semester:</option>
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
    <table class="First">
        <caption>Semester I</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS101</td> <td>Computer Fundamentals and Applications</td> <td>4</td> <td>4</td> <td>-</td> <td>4</td>
        </tr>
        <tr>
            <td>CASO102</td> <td>Society and Technology</td> <td>3</td> <td>3</td> <td>-</td> <td>-</td>
        </tr>
        <tr>
            <td>CAEN103</td> <td>English I</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CAMT104</td> <td>Mathematics I</td> <td>3</td> <td>3</td> <td>1</td> <td>1</td>
        </tr>
        <tr>
            <td>CACS105</td> <td>Digital Logic</td> <td>3</td> <td>3</td> <td>-</td> <td>2</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>16</td> <td>16</td> <td>2</td> <td>7</td>
        </tr>
    </table>

    <table class="Second">
        <caption>Semester II</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS151</td> <td>C Programming</td> <td>4</td> <td>4</td> <td>1</td> <td>3</td>
        </tr>
        <tr>
            <td>CAAC152</td> <td>Financial Accounting</td> <td>3</td> <td>3</td> <td>1</td> <td>1</td>
        </tr>
        <tr>
            <td>CAEN153</td> <td>English II</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CAMT154</td> <td>Mathematics II</td> <td>3</td> <td>3</td> <td>1</td> <td>1</td>
        </tr>
        <tr>
            <td>CACS155</td> <td>Microprocessor and Computer Architecture</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>16</td> <td>16</td> <td>5</td> <td>7</td>
        </tr>
    </table>

    <table class="Third">
        <caption>Semester III</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS201</td> <td>Data Structures and Algorithms</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CAST202</td> <td>Probability and Statistics</td> <td>3</td> <td>3</td> <td>1</td> <td>1</td>
        </tr>
        <tr>
            <td>CACS203</td> <td>System Analysis and Design</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CACS204</td> <td>OOP in Java</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td>CACS205</td> <td>Web Technology</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>15</td> <td>15</td> <td>3</td> <td>9</td>
        </tr>
    </table>

    <table class="Fourth">
        <caption>Semester IV</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS251</td> <td>Operating System</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td>CACS252</td> <td>Numerical Methods</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td>CACS253</td> <td>Software Engineering</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CACS254</td> <td>Scripting Language</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CACS255</td> <td>Database Management System</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td>CAP256</td> <td>Project I</td> <td>2</td> <td>-</td> <td>-</td> <td>4</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>17</td> <td>15</td> <td>4</td> <td>13</td>
        </tr>
    </table>
    
    <table class="Fifth">
        <caption>Semester V</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS301</td> <td>MIS and E-Business</td> <td>3</td> <td>3</td> <td>-</td> <td>2</td>
        </tr>
        <tr>
            <td>CACS302</td> <td>DotNet Technology</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CACS303</td> <td>Computer Networking</td> <td>3</td> <td>3</td> <td>-</td> <td>2</td>
        </tr>
        <tr>
            <td>CAMG304</td> <td>Introduction to Management</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CACS305</td> <td>Computer Graphics and Animation</td> <td>3</td> <td>3</td> <td>1</td> <td>2</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>15</td> <td>15</td> <td>2</td> <td>9</td>
        </tr>
    </table>

    <table class="Sixth">
        <caption>Semester VI</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS351</td> <td>Mobile Programming</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CACS352</td> <td>Distributed System</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CAEC353</td> <td>Applied Economics</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CACS354</td> <td>Advanced Java Programming</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CACS355</td> <td>Network Programming</td> <td>3</td> <td>3</td> <td>-</td> <td>2</td>
        </tr>
        <tr>
            <td>CAPJ356</td> <td>Project II</td> <td>2</td> <td>-</td> <td>-</td> <td>4</td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>17</td> <td>15</td> <td>2</td> <td>12</td>
        </tr>
    </table>

    <table class="Seventh">
        <caption>Semester VII</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CACS401</td> <td>Cyber Law and Professional Ethics</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CASO402</td> <td>Cloud Computing</td> <td>3</td> <td>3</td> <td>-</td> <td>3</td>
        </tr>
        <tr>
            <td>CAIN403</td> <td>Internship</td> <td>3</td> <td>-</td> <td>-</td> <td>-</td>
        </tr>
        <tr>
            <td></td> <td>Elective I</td> <td>3</td> <td>3</td> <td></td> <td></td>
        </tr>
        <tr>
            <td></td> <td>Elective II</td> <td>3</td> <td>3</td> <td></td> <td></td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>15</td> <td>12</td> <td>1</td> <td>3</td>
        </tr>
    </table>

    <table class="Seventh">
        <caption>List of Elective Subjects for BCA VII Semester</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Course Code</th> <th>Course Title</th>
        </tr>
        <tr>
            <td>CACS404</td> <td>Image Processing</td> <td>CACS408</td> <td>Advanced DotNet Technology</td>
        </tr>
        <tr>
            <td>CACS405</td> <td>Database Administration</td> <td>CACS409</td> <td>E-Governance</td>
        </tr>
        <tr>
            <td>CACS406</td> <td>Network Administration</td> <td>CACS410</td> <td>Artificial Intelligence</td>
        </tr>
    </table>

    <table class="Eight">
        <caption>Semester VIII</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Credit Hrs.</th> <th>Lecture Hrs.</th> <th>Tutorial Hrs.</th> <th>Lab Hrs.</th>
        </tr>
        <tr>
            <td>CAOR451</td> <td>Operations Research</td> <td>3</td> <td>3</td> <td>1</td> <td>-</td>
        </tr>
        <tr>
            <td>CAPJ452</td> <td>Project III</td> <td>6</td> <td>-</td> <td>-</td> <td>12</td>
        </tr>
        <tr>
            <td></td> <td>Elective III</td> <td>3</td> <td>3</td> <td></td> <td></td>
        </tr>
        <tr>
            <td></td> <td>Elective IV</td> <td>3</td> <td>3</td> <td></td> <td></td>
        </tr>
        <tr>
            <td colspan = "2">Total</td> <td>15</td> <td>9</td> <td>1</td> <td>12</td>
        </tr>
    </table>

    <table class="Eight">
        <caption>List of Elective Subjects for BCA VIII Semester</caption>
        <tr>
            <th>Course Code</th> <th>Course Title</th> <th>Course Code</th> <th>Course Title</th>
        </tr>
        <tr>
            <td>CACS453</td> <td>Database Programming</td> <td>CACS457</td> <td>Multimedia System</td>
        </tr>
        <tr>
            <td>CACS454</td> <td>Geographical Information System</td> <td>CACS458</td> <td>Knowledge Engineering</td>
        </tr>
        <tr>
            <td>CACS455</td> <td>Data Analysis and Visualization</td> <td>CACS459</td> <td>Information Security</td>
        </tr>
        <tr>
            <td>CACS456</td> <td>Machine Learning</td> <td>CACS460</td> <td>Internet of Things</td>
        </tr>
    </table>
    <script src="../../admin/script.js"></script>
</body>
</html>