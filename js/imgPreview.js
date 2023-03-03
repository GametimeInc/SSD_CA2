function previewImage() {
    var image = document.getElementById("image").files;
    if(image.length > 0) {
        let fileReader = new FileReader();

        fileReader.onload = function (event) {
            document.getElementById("imagePreview").setAttribute("src",event.target.result);
        };

        fileReader.readAsDataURL(image[0])
    }
}