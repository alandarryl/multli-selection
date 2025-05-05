document.addEventListener("DOMContentLoaded", function () {
    const buttonMore = document.getElementById("button-more");
    const dynamicInputs = document.getElementById("dynamic-inputs");
    let inputCount = 1;
    let maxInputs = 5;

buttonMore.addEventListener("click", function () {
    if (inputCount < maxInputs){
        const newInput = document.createElement("input");
        newInput.type = "text";
        newInput.name = "input" + inputCount;
        newInput.id = "input" + inputCount;
        newInput.className = "dynamic-input";
        newInput.placeholder = "Input " + inputCount;
        dynamicInputs.appendChild(newInput);
        inputCount++;

        if (inputCount === maxInputs) {
            buttonMore.style.display = "none"; // Hide the button when max inputs are reached
        }
        }
    }
);




});