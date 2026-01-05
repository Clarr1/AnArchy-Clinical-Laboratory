document.addEventListener('DOMContentLoaded', () => {
    window.update_status = function(id) {
        const status = document.getElementById('statusSelect').value;

        fetch('/AnArchyClinical-Laboratory/admin/appointment-details', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `update=1&appointment_id=${id}&appointment_status=${status}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert("Status updated successfully");
            } else {
                alert("Update failed");
            }
        })
        .catch(err => console.error(err));
    };
});
