function confirmDelete() {
    if (confirm("Are you sure you want to delete this record?")) {
        document.getElementById("delete-form").submit();
    } else {
        return false;
    }
}
