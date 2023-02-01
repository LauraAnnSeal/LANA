const fileInput = document.querySelector('input.wpcf7-file');
const fileButton = document.querySelector('.file-button');

fileInput.addEventListener("change", ()=>{
        let inputImage = document.querySelector("input[type=file]").files[0];

        fileButton.innerText = inputImage.name;
    })