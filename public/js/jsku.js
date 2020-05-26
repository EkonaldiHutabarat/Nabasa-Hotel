document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
    document.getElementById("file-id").files[0].name; 
};