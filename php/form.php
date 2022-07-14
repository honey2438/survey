<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register Form Start</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" media="screen and (max-width:1110px)" href="../assets/navbar_phone.css">
    <link rel="stylesheet" href="../assets/footer.css">
    <link rel="stylesheet" media="screen and (max-width:1110px)" href="../assets/footer_phone.css">
    
    <script src="../js/form.js"></script>
</head>

<body>
    <?php include "../assets/header.php"; ?>
    <form class="report-form" id="main-form" action="/register" method="post">
        <div class="form-header">
            <h1>Fill Your Basic Details</h1>
        </div>


        <div class="form-body">
            <!-- Age -->
            <div class="group" id="group-age">
                <div class="form-group">
                    <label for="age" class="label-title">Age *</label>
                    <input type="text" id="age" class="form-input" placeholder="Enter your age" required="required" />

                </div>
            </div>
            <!-- gender -->
            <div class="group" id="group-gender">
                <div class="form-group">
                    <label for="gender" class="label-title">Gender *</label><br>
                    <select name="gender" id="gender">
                        <option value="Select Gender">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <!-- location -->
            <div class="group" id="group-location">
                <div class="form-group">
                    <label for="form-control" class="label-title">location *</label><br>
                    <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control"
                        required></select>
                    <select id="state" class="form-control" required></select>
                    <script language="javascript">print_state("sts");</script>
                </div>
            </div>
            <!-- profession -->
            <div class="group" id="group-profession">
                <div class="form-group">
                    <label for="profession" class="label-title">Profession *</label><br>
                    <select name="profession" id="profession">
                        <option value="Select Profession">Select Profession</option>
                        <option value="Bussiness">Bussiness</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Government-Employee">Government-Employee</option>
                        <option value="Private-Employee">Private-Employee</option>
                        <option value="Self-Employed">Self-Employed</option>
                        <option value="Student">Student</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <button class="btn" onclick="sub()">Start Survey</button>
            </div>
        </div>
    </form>

    <!-- footer -->
    <?php include "../assets/footer.php"; ?>
</body>



</html>