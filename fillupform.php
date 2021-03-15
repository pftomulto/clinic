<?php
    $title = "Information Form";
    require_once "lib/template/head.php";
?>
<div id="form_app" style="width:1000px;margin:auto">
    <form class="ui form">
        <h4 class="ui dividing header">Patient Information</h4>
        <div class="field">
            <label>Fullname</label>
            <div class="four fields">
                <div class="field">
                    <input type="text" v-model="lastname" placeholder="Last Name">
                </div>
                <div class="field">
                    <input type="text" v-model="middlename" placeholder="Middle Name">
                </div>
                <div class="field">
                    <input type="text" v-model="firstname" placeholder="First Name">
                </div>
                <div class="field">
                    <input type="text" v-model="nameExtension" placeholder="Name Extension">
                </div>
            </div>
        </div>
        <div class="field">
            <label>Address</label>
            <input type="text"  v-model="address">
        </div>
        <div class="four fields">
            <div class="field">
                <label>Birthdate</label>
                <input type="text" v-model="birthdate">
            </div>
            <div class="field">
                <label>Height</label>
                <input type="text" v-model="height">
            </div>
            <div class="field">
                <label>Weight</label>
                <input type="text" v-model="weight">
            </div>
            <div class="field">
                <label>Patient</label>
                <select class="ui selection dropdown" v-model="type">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>
        </div>
        <div class="field" v-if="type=='student'">
            <label>Course</label>
            <input type="text" v-model="Course">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" v-model="email">
        </div>
    </form>
</div>
    <script src="lib/umbra/fillupform/config.js"></script>

<?php
 require_once "lib/template/foot.php";
 ?>
