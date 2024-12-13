const snippet = document.querySelector("#snippet");
console.log(snippet);

const text = snippet.textContent;
const letters = text.split('');
const letterContainer = document.createElement('div');

letters.forEach((letter) => {
    const letterElement = document.createElement('span');
    letterElement.textContent = letter;
    letterElement.classList.add("text-violet-400");
    letterElement.classList.add("transition-all");
    letterElement.classList.add("duration-300");
    letterContainer.appendChild(letterElement);
});

snippet.innerHTML = '';
snippet.appendChild(letterContainer);

let currentIndex = 0;

window.addEventListener("keypress", (event) => {
    console.log(event.key);

    if (event.key === letters[currentIndex]) {
        const currentLetterElement = letterContainer.children[currentIndex];
        currentLetterElement.classList.add("text-white");
        currentIndex++;

        if (currentIndex === letters.length) {
            console.log("All letters typed!");
        }
    }
});

