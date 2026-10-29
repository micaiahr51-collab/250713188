function fn_ValForm() {
            var sMsg = "";
            var Omail = ^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$;

            if (document.getElementById("nama").value == "") {
                alert("Anda belum mengisikan nama");
            }
            if (document.getElementById("email").value == "") {
                alert("Anda belum mengisikan email");
            }
            if (document.getElementById("umur").value == "") {
                alert("Anda belum mengisikan umur");
            }
            
            if (sMsg != "") {
                alert("Peringatan:\n" + sMsg);
                return false;
            }else {
                return true;
            }

            if(!Omail = document.getElementById("email").value){
                alert("Email tidak valid");
            }

            return true;
        }