form_app = new Vue({
    el:"#form_app",
    data:{
        firstname:""
        ,middlename:""
        ,lastname:""
        ,nameExtension:""
        ,birthdate:""
        ,height:""
        ,weight:""
        ,type:""
        ,address:""
        ,email:""
        ,course:""
    }
    ,method:{
        saveInformation:function(){
            var fd = new FormData();
                fd.append('firstname',this.firstname);
                fd.append('middlename',this.middlename);
                fd.append('lastname',this.lastname);
                fd.append('nameExtension',this.nameExtension);
                fd.append('birthdate',this.birthdate);
                fd.append('height',this.height)
                fd.append('wieght',this.wieght);
                fd.append('type',this.type);
                fd.append('address',this.address);
                fd.append('email',this.email);
                fd.append('course',this.course);
            var xml = new XMLHttpRequest();
                xml.onload = function(){
                    console.log(xml.responseText);
                }
                xml.open('POST','lib/umbra/fillupform/config.php',false);
                xml.send(fd);

            }        
    }
});