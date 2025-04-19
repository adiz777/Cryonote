// Example: Add simple validation for the note input field
document.querySelector('form').addEventListener('submit', function(event) {
    var note = document.querySelector('textarea').value;
    if (note.trim() === "") {
        alert("Note cannot be empty!");
        event.preventDefault(); // Prevent form submission
    }
});
