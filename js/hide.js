document.addEventListener("contextmenu", (event) => event.preventDefault());
document.addEventListener("keydown", (event) => {
    if (event.ctrlKey && (event.key === "u" || event.key === "U" || event.key === "s" || event.key === "S")) {
        event.preventDefault();
    }
    if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I")) {
        event.preventDefault();
    }
});