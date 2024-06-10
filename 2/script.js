// Function to generate a random color in hexadecimal format
function getRandomColor() {
    // Generate a random number between 0 and 16777215 (0xFFFFFF)
    const randomColor = Math.floor(Math.random() * 16777215);
    // Convert the number to a hexadecimal string and pad with leading zeros if necessary
    const hexColor = '#' + randomColor.toString(16).padStart(6, '0');
    return hexColor;
}

// Function to change the background color when the button is clicked
function changeBackgroundColor() {
    const newColor = getRandomColor();
    document.body.style.backgroundColor = newColor;
}

// Add an event listener to the button to trigger the color change
const colorButton = document.getElementById('colorButton');
colorButton.addEventListener('click', changeBackgroundColor);
