<style>
*,
::before,
::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-uploader {
    position: relative;
    width: 90%;
    max-width: 600px;
    height: 500px;
    border: 2px dashed #4169e1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
    cursor: pointer;
}

.cloud-icon {
    font-size: 5rem;
    color: #4169e1;
}

h2 {
    font-size: 2rem;
    font-weight: 400;
    margin-top: 1em;
}

p {
    margin: 0.75em 0;
    color: #696969;
}

.browse-link {
    border: none;
    background-color: transparent;
    font-size: 1.15rem;
    text-decoration: underline;
    cursor: pointer;
    color: #4169e1;
}

.image-preview {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #fff;
    display: none;
    padding: 1em;
}

.image-preview::before {
    content: "Click or Drag to add more images";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #696969;
    font-size: 1.05rem;
    opacity: 0;
}

.image-preview:hover::before {
    opacity: 1;
}

figure {
    width: 100px;
    height: 100px;
    margin: 1em;
    display: inline-block;
    animation: zoomIn 500ms ease-in 1;
    filter: drop-shadow(0 0 0.5em #e5e5e5);
}

figure::before {
    content: "x";
    position: absolute;
    width: 1.5em;
    height: 1.5em;
    background-color: rgb(229, 15, 15);
    color: #fff;
    display: grid;
    place-items: center;
    top: -0.75em;
    right: -0.75em;
    border-radius: 50%;
    font-weight: bold;
    transform: scale(0);
    transition: transform 250ms ease-in;
}

figure:hover::before {
    transform: scale(1);
}

figure.zoomOut {
    animation: zoomOut 500ms ease-in 1;
}

img {
    width: 100%;
    height: 100px;
    object-fit: cover;
    border-radius: 0.5em;
}

@keyframes zoomIn {
    0% {
        transform: scale(0);
    }

    100% {
        transform: scale(1);
    }
}

@keyframes zoomOut {
    0% {
        transform: scale(1);
    }

    100% {
        transform: scale(0);
    }
}
</style>


<div class="image-uploader" id="dragArea">
    <i class="fa-solid fa-cloud-arrow-up cloud-icon"></i>
    <h2>Drag &amp; Drop</h2>
    <p>
        your file here or
        <span class="browse-link">browse</span>
    </p>
    <input type="file" accept="image/*" multiple hidden />

    <div class="image-preview" id="imagePreview"></div>
</div>

<script>
const fileInput = document.querySelector("input");
const dragArea = document.getElementById("dragArea");
const imagePreview = document.getElementById("imagePreview");

dragArea.addEventListener("click", () => {
    fileInput.click();
});

function preventDefault(event) {
    event.preventDefault();
    event.stopPropagation();
}

dragArea.addEventListener("dragenter", preventDefault);
dragArea.addEventListener("dragleave", preventDefault);
dragArea.addEventListener("dragover", preventDefault);
dragArea.addEventListener("drop", preventDefault);

dragArea.addEventListener("drop", (event) => {
    let files = event.dataTransfer.files;
    checkFileType(files);
});

fileInput.addEventListener("change", () => {
    let files = fileInput.files;
    checkFileType(files);
});

function checkFileType(files) {
    let validTypes = ["image/jpeg", "image/png", "image/gif"];
    for (let i = 0; i < files.length; i++) {
        let fileType = files[i].type;

        if (validTypes.includes(fileType)) {
            displayImage(files[i]);
        }
    }
}

function displayImage(image) {
    imagePreview.style.display = "block";

    let figure = document.createElement("figure");
    let img = document.createElement("img");

    figure.append(img);
    imagePreview.append(figure);

    figure.addEventListener("click", removeImage);

    let fileReader = new FileReader();

    fileReader.onload = (event) => {
        img.src = event.target.result;
    };

    fileReader.readAsDataURL(image);
}

function removeImage(event) {
    event.stopPropagation();
    let deletedImage = event.currentTarget;
    deletedImage.classList.add("zoomOut");

    setTimeout(() => {
        imagePreview.removeChild(deletedImage);

        if (imagePreview.children.length == 0) {
            imagePreview.style.display = "none";
        }
    }, 450);
}
</script>